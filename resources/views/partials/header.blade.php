<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('product.index')}}">Home</a>
			<a class="navbar-brand" href="{{route('search')}}">Search</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
			
                <li><a href="{{route('product.shoppingCart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
				<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalqty:' '}}</span>
				</a></li>
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management <span class="caret"></span></a>
                    <ul class="dropdown-menu">
					
						@if(Auth::check())
						    <li>{{Auth::user()->email }}</li>	
							<li><a href="{{route('user.profile')}}"> User Profile</a></li>	
							<li><a href="{{route('admin')}}"> Admin AssignRoles</a></li>
							<li><a href="{{route('staff')}}"> Staff AddTicket</a></li>							
							<li><a href="{{route('staffcancelticket2')}}"> Staff Cancel TicketRequested</a></li>	
							<li><a href="{{route('staffcancelticket')}}"> Staff Cancel TicketAll</a></li>	
								<li><a href="{{route('stafforder')}}"> Staff Order Stock Control</a></li>	
								<li><a href="{{route('staffstok')}}"> Staff Stock Control</a></li>	
							<li><a href="{{route('user.logout')}}">Logout</a></li>
						@else
						   
							 <li><a href="{{route('user.signup')}}"> Sign up</a></li>
							<li><a href="{{route('user.signin')}}"> Sign in</a></li>
						@endif	
                       
                       
                        
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>