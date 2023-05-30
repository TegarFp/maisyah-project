<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
  <li class="nav-item menu-open">
    <a href="{{ url('dashboard')}}" class="nav-link {{ (request()->segment('1') =='' || request()->segment('1') =='dashboard') ? 'active' : '' }}">
      <i class="nav-icon fas fa-box"></i>
      <p>
        Dashboard
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
  </li>


  <li class="nav-item menu-open">
    <a href="{{ url('lowongans')}}" class="nav-link {{ (request()->segment('1') =='lowongans') ? 'active' : '' }} ">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Lowongan
      </p>
    </a>
  </li>
</ul>
