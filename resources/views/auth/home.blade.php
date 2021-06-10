@extends('layouts.app')

@section('content')
	<div style="padding: 10px">
		<p>
			{{ $name }} home Page
			{{ env('APP_NAME') }}
		</p>
	</div>
@endsection