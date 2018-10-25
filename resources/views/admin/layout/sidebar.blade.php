<aside class="main-sidebar">
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>
          @if (Auth::user())
            {{ Auth::user()->full_name }}
          @endif
        </p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">News</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-th-list"></i>
          <span>Categories</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> List Categories</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Add Category</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-list-alt"></i>
          <span>News</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> List News</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Add News</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-user"></i>
          <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> List Users</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Add User</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>
