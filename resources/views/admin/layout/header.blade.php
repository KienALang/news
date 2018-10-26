<header class="main-header" style="position: fixed; top: 0px; width: 100%;">
    <a href="javascript:void(0)" class="logo">
      <span class="logo-mini"><b>N</b>M</span>
      <span class="logo-lg"><b>News Management</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
              @if (Auth::user())
                {{ Auth::user()->full_name }}
              @endif
            </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  @if (Auth::user())
                    {{ Auth::user()->full_name }}
                  @endif
                  <small>Member since Nov. 2018</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="@if (Auth::user())
                  {{ route('admin.users.edit', Auth::user()->id) }}
                  @endif " class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="@if (Auth::user())
                  {{ route('admin.logout') }}
                  @endif
                  " class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
