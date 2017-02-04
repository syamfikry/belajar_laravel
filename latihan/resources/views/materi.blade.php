@extends('master')

@section('konten')

ini materi

	@if(count($data))
		<ul>
		@foreach($data as $materi)
			<li>{{ $materi }}</li>
		@endforeach
		</ul>
	@endif

@stop