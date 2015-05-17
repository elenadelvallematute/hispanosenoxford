@extends('base.master')



@section('preload')
	<div class="preloader">
		<div class="loader-item">
			<img src="images/loading.gif" alt="loader">
		</div>
	</div>
@stop

@section('content')
	@include('main.slider')
@stop



