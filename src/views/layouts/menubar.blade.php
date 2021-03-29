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





            <div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action" aria-expanded="false"><img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar"> Olee Ahmmed <b class="caret"></b></a>
				<div class="dropdown-menu">
					<a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
					<a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a>
					<a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
					<div class="divider dropdown-divider"></div>
					<a href="#" class="dropdown-item"><i class="material-icons"></i> Logout</a>
				</div>
			</div>
		</div>
	</div>
</nav>
