
<nav class="navbar navbar-default" >
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            @if(Auth::guest())
                <a class="navbar-brand" href="{{ url('/') }}">Where's My Tradie</a>
            @else
                <a class="navbar-brand" href="/home">Where's My Tradie</a>
            @endif
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
            <ul class="nav navbar-nav">
                

                @if (Auth::guest())
                    <li><a href="/about">About</a></li>
                    <li><a href="/advertisement">Ads</a></li>
                @else
                    @if (Auth::user()->account == '0')
                        <li><a href="/home">Home</a></li> 
                        <li><a href="/about">About</a></li>
                        <li><a href='/advertisement'>Ads</a></li>  
                        <li><a href="/about">Find My Tradie</a></li>
                    @elseif (Auth::user()->account == '1')
                        <li><a href="/home">Home</a></li>  
                        <li><a href="/about">About</a></li> 
                        <li><a href="/advertisement/create">Create Ad</a></li>   
                                           
                    @endif                 
                @endif
                
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>          
                @else
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-log-out"></span> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    
                        <li>
                         <a href=""><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a>
                        </li>

                @endif
            </ul>
        </div>
    </div>
</nav>