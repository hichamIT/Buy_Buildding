<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Menu Principal</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel/sitesetting')}}"><i class="fa fa-circle-o"></i> Site Setting </a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Other Setting</a></li>
        </ul>
    </li>


    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="{{url('adminpanel/users')}}"><i class="fa fa-circle-o"></i>User list</a></li>
            <li><a href="{{url('adminpanel/users/create')}}"><i class="fa fa-circle-o"></i> Add User</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Buildings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="{{url('adminpanel/bu')}}"><i class="fa fa-circle-o"></i>Buildings List</a></li>
            <li><a href="{{url('adminpanel/bu/create')}}"><i class="fa fa-circle-o"></i> Add Building</a></li>
        </ul>
    </li>
</ul>