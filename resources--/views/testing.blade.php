@extends('Frontend/App/layout')
@section('user_layout')

<div style="margin-top:100px"></div>
	@foreach($data as $values)
		<p>{{$values->course_name}}</p>
	@endforeach

@endsection