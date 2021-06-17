@extends('layouts.app')

@section('content')
	<div style="padding: 10px">
{{--			{{ $name }} home Page--}}
			<pre>
				{{ $user->email }}
				{{ $user->first_name }}
				{{ $user->last_name }}
				{{ $user->username }}
			</pre>
	</div>
@endsection