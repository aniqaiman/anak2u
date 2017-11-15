<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          {{ HTML::image('img/kinder.jpg', 'User Image',  array('class' => 'img-circle')) }}
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in s
      idebar.less -->
      <ul class="sidebar-menu " data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
          <a href="{{route('dashboard')}}">
            <i class="fa fa-file-text"></i> <span class="text-info">Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('students')}}">
            <i class="fa fa-file-text"></i> <span class="text-info">Student Management</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span class="text-info">Classroom</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="text-info" href="{{route('classroom')}}"><i class="fa fa-level-down"></i>Classroom Management</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="{{route('teachers')}}">
            <i class="fa fa-file-text"></i> <span class="text-info">Teacher Management</span>
          </a>
        </li> 
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>