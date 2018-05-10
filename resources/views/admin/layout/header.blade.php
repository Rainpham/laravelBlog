<header class="main-header">
<!-- Logo -->
  <a href="{!!url('admin')!!}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>{!!Auth::check()?Auth::user()->username: redirect('login')!!}</b></span>
  </a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="{!! url('getLogout') !!}" class="logo">Logout</a>
        </li>
      </ul>
    </div>
</nav>
</header>
