<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#"><img src="{{ URL::asset('images/logo.png') }}" alt="bootstrapwizard logo" /></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="top-nav">
		  <ul class="nav navbar-nav navbar-right">
		  	
		  	{{-- If is the welcome page --}}
			@if( Request::path() == "/" )

				<li class="page-scroll"><a href="#slider">Home</a></li>
				<li class="page-scroll"><a href="#icon-box">Icons</a></li>
				<li class="page-scroll"><a href="#ayuda">Ayuda</a></li>
				<li class="page-scroll"><a href="#showcase">Showcase</a></li>
				<li class="page-scroll"><a href="#grid">Grid</a></li>					
				<li class="page-scroll"><a href="#team">Team</a></li>
				<li class="page-scroll"><a href="#pricing">Pricing</a></li>
				<li class="page-scroll"><a href="#contact">Contact</a></li>
			
			{{-- If different path --}}
			@else
				<li><a href="{{ URL::route('main', '#slider') }}">Home</a></li>
				<li><a href="{{ URL::route('main', '#icon-box') }}">Icons</a></li>
				<li><a href="{{ URL::route('main', '#ayuda') }}">Ayuda</a></li>
				<li><a href="{{ URL::route('main', '#showcase') }}">Showcase</a></li>
				<li><a href="{{ URL::route('main', '#grid') }}">Grid</a></li>					
				<li><a href="{{ URL::route('main', '#team') }}">Team</a></li>
				<li><a href="{{ URL::route('main', '#pricing') }}">Pricing</a></li>
				<li><a href="{{ URL::route('main', '#contact') }}">Contact</a></li>

			@endif

			{{-- Ends if different path --}}

			@if(Auth::user())

				<li class="dropdown">
					<a href="components.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Profile</a></li>
						<li><a href="#">Messages</a></li>		
						<li><a href="{{ URL::to('auth/logout') }}">Cerrar Sesión</a></li>				
					</ul>
				</li>
			@else
				<li class="page-scroll"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
			@endif

		  </ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<!-- ./navigation -->