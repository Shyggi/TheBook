@extends('title')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('content')
<div class="main">
	<img class="d-inline-block align-top pad" src="{{url('images/logotype.png')}}" />
    <hr>
	<h3>Enter your login credentials</h3>
	<form action="">
		<label for="first">	Username: </label>
		<input type="text" id="first" name="first" placeholder="Enter your Username" required>

		<label for="password"> Password: </label>
		<input type="password" id="password" name="password" placeholder="Enter your Password" required>

		<div class="wrap">
			<button type="submit" onclick="solve()">Submit</button>
		</div>
	</form>
	<p>Not registered? 
		<a href="#"> Create an account </a>
	</p>
</div>

@endsection
