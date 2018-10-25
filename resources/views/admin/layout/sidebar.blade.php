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

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">News Management</li>
      <li class="active treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-circle-o"></i> Dashboard</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:void(0)">
          <i class="glyphicon glyphicon-th-list"></i>
          <span>Categories</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.categories.index') }}"><i class="fa fa-circle-o"></i> List Categories</a></li>
          <li><a href="{{ route('admin.categories.create') }}"><i class="fa fa-circle-o"></i> Add Category</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:void(0)">
          <i class="glyphicon glyphicon-list-alt"></i>
          <span>News</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.news.index') }}"><i class="fa fa-circle-o"></i> List News</a></li>
          <li><a href="{{ route('admin.news.create') }}"><i class="fa fa-circle-o"></i> Add News</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:void(0)">
          <i class="glyphicon glyphicon-user"></i>
          <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-circle-o"></i> List Users</a></li>
          <li><a href="{{ route('admin.users.create') }}"><i class="fa fa-circle-o"></i> Add User</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>
