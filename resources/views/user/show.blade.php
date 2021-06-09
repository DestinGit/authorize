@extends('layouts.app')

@section('content')
	<div style="padding: 10px">
		<h1>Welcome {{ $name }}</h1>
		<small>(Your id is {{ $id }})</small>
	</div>
@endsection