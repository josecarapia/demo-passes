<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'school_id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'school_id',
        'first_name',
        'last_name',
        'grade'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function passes()
    {
        return $this->hasMany(Pass::class, 'student_id', 'id');
    }

    public function tardies()
    {
        return $this->hasMany(Tardy::class, 'student_id', 'id');
    }
}
