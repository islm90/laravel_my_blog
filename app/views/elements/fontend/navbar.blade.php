<!-- =========================Nav Bar======================= -->
  <div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tarikul's Profile</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><i class="fa fa-home fa-2x"></i>
</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
<!--             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
              <li>{{ HTML::link('login', 'Login') }}</li>
              <li>{{ HTML::link('register', 'Register') }}</li>        
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">{{ Auth::user()->name }} </a></li>
                  <li><a href="#">{{ Auth::user()->email }} </a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Change Passowrd</a></li>
                  <li class="divider"></li>
                  <li>{{ HTML::link('logout', 'Logout') }}</li>
                </ul>
              </li>
            @endif
        </ul>


        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- =========================/Nav Bar======================= -->