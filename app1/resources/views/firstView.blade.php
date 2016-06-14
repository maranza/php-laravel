@extends('master')

	@section('main_content')
		@foreach($customers as $customer)
		 	
		 	<p>{{$customer -> name}}</p>

		@endforeach
	@stop