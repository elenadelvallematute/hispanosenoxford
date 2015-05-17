<!DOCTYPE html>
<html lang="en">

	{{-- Includes the metas, css and js files --}}
	@include('base.head')

	<body class="bg-slider" data-spy="scroll" ng-app="app">

		{{-- Navigation --}}
		@section('navigation')
			@include('base.navigation')
		@show

		@yield('content')

        @include('base.footer')

        @section('scripts')
        	@include('base.scripts')
        @show

	</body>

</html>