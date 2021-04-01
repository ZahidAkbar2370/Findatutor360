@extends('student/layout')
@section('student_content')

	<h1>Student Panel</h1>
	<form method="post" action="logout">
        @csrf
            <input type="submit" value="Logout">
    </form>

@endsection