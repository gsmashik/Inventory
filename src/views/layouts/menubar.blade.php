<nav class="navbar navbar-expand-xl navbar-dark bg-primary text-light">
	<a href="#" class="navbar-brand"><i class="fa fa-cube"></i>EASY<b>ERP</b></a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<!-- <form class="navbar-form form-inline">
			<div class="input-group search-box">
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="fa fa-search"></i></span>
			</div>
		</form> -->

        <div class="navbar-nav ml-auto nav-item dropdown">
            <a href="{{route('find')}}" class="nav-item nav-link active"> <i class="fa  fa-binoculars"></i><span>Find</span> </a>
            <a href="" class="nav-item nav-link active"> <i class="fa fa-floppy-o" aria-hidden="true"></i><span>Save</span> </a>


            <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle " aria-expanded="false" ><i class="fa fa-gears"></i><span>Modules</span></a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
            </div>
        </div>
		<div class="navbar-nav ml-auto">
			<a href="#" class="nav-item nav-link active"><i class="fa fa-home"></i><span>Home</span></a>


 <!-- Authentication Links -->
 @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								<img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar"> 
									{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
									<a href="#" class="dropdown-item"><i class="fa fa-user"></i> Profile</a>
					<a href="#" class="dropdown-item"><i class="fa fa-calendar"></i> Calendar</a>
					<a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


  
		</div>
	</div>
</nav>
