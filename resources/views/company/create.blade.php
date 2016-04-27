@extends('layouts.principal')

@section('content')
	{!!Form::open(['route'=>'company.store', 'method'=>'POST'])!!}
			@include('company.forms.cmp')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop