<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="{{{ URL::to('/') }}}">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Blogs <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Cagegories</a></li>
        <li><a href="#">Contact</a></li>
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>