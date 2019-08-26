<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="user-scalable=0">
	<title>Hallway Pass</title>
	<script type="text/javascript" src="{{ asset('js/numpad.js') }}"></script>
	<link href="{{ asset('css/pass_style.css') }}" rel="stylesheet">
</head>

<body bgcolor="f1f1f1">

	<div id="profile">
		<p>
			<b align="left">Hall Pass - </b>
			<b align="right">{{ $user->last_name }}</b>
			<b id="logout"><a href="logout">Log Out</a></b>
		</p>
	</div>

	<div id="container">
		<div class="promobox">
			<div style="text-align:center";>
				<!--	<img src="assets/images/trans_psja_logo_stack.png" width="50%"> -->
				<h1>Enter ID</h1>
				<form method="POST" action="/passes">
					<div class="main_panel">
						<input class="text_box" type="text" id="number"  name="school_id" autofocus>
						<br /><br />
						<center>
							<div><input class="number_button" value="1" readonly="readonly" onclick="number_write(1);"></div>
							<div><input class="number_button" value="2" readonly="readonly" onclick="number_write(2);"></div>
							<div><input class="number_button" value="3" readonly="readonly" onclick="number_write(3);"></div>
							<div><input class="number_button" value="4" readonly="readonly" onclick="number_write(4);"></div>
							<div><input class="number_button" value="5" readonly="readonly" onclick="number_write(5);"></div>
							<div><input class="number_button" value="6" readonly="readonly" onclick="number_write(6);"></div>
							<div><input class="number_button" value="7" readonly="readonly" onclick="number_write(7);"></div>
							<div><input class="number_button" value="8" readonly="readonly" onclick="number_write(8);"></div>
							<div><input class="number_button" value="9" readonly="readonly" onclick="number_write(9);"></div>
							<div><input class="number_button" value="Clr" readonly="readonly" onclick="number_clear();"</div>
							<div><input class="number_button" value="0" readonly="readonly" onclick="number_write(0);"</div>
							<div id="app">
							<button class="number_button" type="submit">OK</button>
							{{ csrf_field() }}
						</center>
					</div>        
				</form>

			</div>

		</div>

		<div> <!--Div 1-->

			<div style="text-align:center";> <!--Div 2-->











@if ($student != '' && !$currently_out)
	<i>
		<h1>
		<small>{{ $student->school_id }}</small>
		{{ $student->first_name }} {{ $student->last_name }}
		</h1>
	</i>
	

	<div class="fade-in three"; style="text-align:center";> <!--Div 3-->

		<form action="passes/store" id="choose_destination" method="POST">
			{{ csrf_field() }}
			<input type="hidden" name="school_id" value="{{ $student->school_id }}">
			<input type="hidden" name="user_id" value="{{ $user->id }}">
			@foreach($destinations as $destination)
				<button type="submit" class="button" name="destination" value="{{ $destination->id }}">{{ $destination->name }}</button>
			@endforeach
		</form>
	</div> <!--end Div 3-->

<!-- To prevent from submitting twice. -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
var $choose_destination = $("#choose_destination");
$choose_destination.submit(function(){
    $choose_destination.submit(function(){
        return false;
    });
});
</script>
@elseif ($student != '' && $currently_out)
		<form action="passes/store" id="choose_destination" method="POST">
			{{ csrf_field() }}

			<input type="hidden" name="school_id" value="{{ $student->school_id }}">
			<input type="hidden" name="user_id" value="{{ $user->id }}">
<button type="submit" class="button" name="destination"">Sign Back In</button>
</form>
<!-- To prevent from submitting twice. -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
var $choose_destination = $("#choose_destination");
$choose_destination.submit(function(){
    $choose_destination.submit(function(){
        return false;
    });
});
</script>

@endif





				




						<i><h1 style='color:Red'></h1></i>

						<h1>Currently Out</h1>
						<table class="table">  
						<tr>
							<th>ID#</th>
							<th>Name</th>
							<th>From</th>
							<th>Time</th>
							<!-- <th>Time 2</th> -->
						</tr> 
						@foreach($passesWithoutTime2 as $pass)
						<tr>
							<td>{{ $pass->student->school_id }}</td>
							<td>{{ $pass->student->first_name }} {{ $pass->student->last_name}}</td>
							<td>{{ $pass->destination->name }}</td>
							<td>{{ $pass->out_time }}</td>
							<!-- <td>{{ $pass->time2 }}</td> -->
						</tr>
						@endforeach


					</div> <!--end Div 2-->	
				</div>
			</div>
		</div>                
	</div>

</div> <!--end Div 1-->

<!--2nd Table -->

<div> <!--Div 1-->

	<div style="text-align:center";> <!--Div 2-->


			<table class="table">  


			</br>
			<h1>Student Record</h1>
			<tr>
				<th>ID#</th>
				<th>Name</th>
				<th>From</th>
				<th>Duration</th>
			</tr> 
			@foreach($passesWithTime2 as $pass)
			<tr>
				<td>{{ $pass->student->school_id }}</td>
				<td>{{ $pass->student->first_name }} {{ $pass->student->last_name}}</td>
				<td>{{ $pass->destination->name }} @if($pass->rr_count > 0)({{ $pass->rr_count }})@endif</td>
				<td>{{ $pass->diff }}</td>
			</tr>
			@endforeach
		</div> <!--end Div 2-->	
	</div>
</div>
</div>                
</div>

</div> <!--end Div 1-->

<!-- <script src="{{ asset('js/app.js') }}"></script> -->

</body>
</html>