<!DOCTYPE html>
<html lang="en">

	{{-- Includes the metas, css and js files --}}
	@section('head')
		@include('base.head')
	@show

	<body class="bg-slider" data-spy="scroll" ng-app="app">

		{{-- Include here a preload code if case --}}
		@yield('preloader')
		
		<!-- pattern -->
		<div id="bg_pattern"></div>
		<!-- ./pattern -->

		{{-- Navigation --}}
		@section('navigation')
			@include('base.navigation')
		@show

		
		{{-- Page content --}}
		@yield('content')


		{{-- Include here all the modals that should be available in all the views --}}
		@section('modals')
			@include('modals.login')
		@show


		{{-- Footer content --}}
        @include('base.footer')


        {{-- Scripts --}}
        @section('scripts')
        	@include('base.scripts')
        @show

	</body>

</html>