 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Zakat Fitrah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Amilin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('zakat.dashboard')}}" class="nav-link {{request()->is('/') ? 'active' : ' '}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{route('zakat.harga')}}" class="nav-link {{request()->is('harga') ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Harga Zakat Fitrah
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{request()->is('muzaqi') ? 'active' : ''}} {{request()->is('amilin') ? 'active' : ''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Zakat Fitrah
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('muzaqi.index')}}" class="nav-link {{request()->is('muzaqi') ? 'active' : ''}}">
                  <i class="far fa-user nav-icon"></i>
                  <p>Data Muzaqi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#"  class="nav-link {{request()->is('amilin') ? 'active' : ''}}">
                  <i class="fa fa-user-secret nav-icon"></i>
                  <p>Data Amilin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mustahiq.index')}}" class="nav-link {{request()->is('amilin') ? 'active' : ''}}">
                  <i class="fa fa-user nav-icon text-success"></i>
                  <p>Data Mustahiq</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('pembagian')}}" class="nav-link {{request()->is('amilin') ? 'active' : ''}}">
                  <i class="fa fa-user nav-icon text-success"></i>
                  <p>Data Pembagian Zakat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header"><hr></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <P>HIDAYAH INSANI</P>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->