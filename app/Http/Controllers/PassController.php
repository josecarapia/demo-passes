<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Pass;
use App\Student;
use App\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        $school_id = $request->input('school_id');
        $student = Student::find($school_id);
        $destinations = Destination::all();

if (isset($student) && $student->passes()->whereNull('in_time')->count() > 0) {
$currently_out = true;
} else {
$currently_out = false;
}

        // return currently out passes
        $passesWithoutTime2 = $user->passes()->whereNull('in_time')->orderBy('out_time', 'desc')->get();
        // prettify time
        foreach($passesWithoutTime2 as $pass)
        {
            $out_time = Carbon::createFromFormat('Y-m-d H:i:s', $pass->out_time);
            $pass->out_time = $out_time->format('g:i A');;
        }

        // return currently out passes
        // CHECK FOR TODAY ONLY
        $passesWithTime2 = $user->passes()->whereNotNull('in_time')->orderBy('out_time', 'desc')->limit(5)->get();
        
        // duration
        foreach($passesWithTime2 as $pass)
        {
            $time1 = $pass->out_time;
            $time2 = $pass->in_time;
            $diff = strtotime($time2) - strtotime($time1);
            $min = floor($diff / 60);
            $sec = $diff % 60;
            
            $pass->diff = $min . ' min ' . $sec . ' sec';
        }



        return view('passes.index', compact('passesWithoutTime2', 'passesWithTime2', 'student', 'user', 'pass_count', 'destinations', 'passesWithoutTime2', 'passesWithTime2', 'currently_out'));
    }

    public function store(Request $request)
    {
        $school_id = $request->school_id;
        $student_id = Student::find($school_id)->id;
        
        $user_id = $request->user_id;
        $user = Auth::user();
        $destination_id = $request->destination;

        $current_time = Carbon::now('America/Chicago');


        // get student's last pass
        $last_pass = $user->passes()->whereNull('in_time')->orderBy('out_time', 'desc')->first();
        
        // Update last unfinished pass if there is one
        if (isset($last_pass)) {
            if($last_pass->destination_id == 1) {
                $last_pass->rr_count = Student::find($school_id)->passes()->where('user_id', $user_id)->max('rr_count') + 1;
            }
            $last_pass->in_time = Carbon::now();
            $last_pass->save();
        } else {

            // For new tardies
            $pass = Pass::create([
                'student_id' => $student_id,
                'user_id' => $user_id,
                'destination_id' => $destination_id,
                'out_time' => $current_time
            ]);
        }
        
        return redirect('passes');
    }
}
