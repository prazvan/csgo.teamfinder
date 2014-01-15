<nav class="navbar navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">CS:GO Team Finder <sup class="alpha">Alpha</sup></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li {{(Request::is('/') ? 'class="active"' : '')}}><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span></a></li>
      <li {{(Request::is('posts') ? 'class="active"' : '')}}><a href="{{ action('PostController@index') }}">Browse Players</a></li>
      <!--<li><a href="#">Find Team</a></li>-->
      <li {{(Request::is('about') ? 'class="active"' : '')}}><a href="{{ url('/about/') }}">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @if (!Auth::check())
        <li><a href="{{ action('UserController@login') }}"><img src="http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_small.png" /></a></li>
      @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ action('UserController@show', [Auth::user()->id]) }}">Profile</a>
            </li>
            <li>
              <a href="{{ action('UserController@edit', [Auth::user()->id]) }}">Edit Profile</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ action('UserController@logout') }}">Logout</a>
            </li>
          </ul>
        </li>
      @endif
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
