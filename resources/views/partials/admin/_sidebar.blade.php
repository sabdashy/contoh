      @php
      $menu = [
        'Home' => '/admin',
        'User' => '/admin/users',
        'Jenis Menu' => '/admin/type',
        'Data Menu' => '/admin/menu',
        'Data Pesanan' => '/admin/pesanan',
        'NF Vegetarian' => '/'
      ];

      $icons = [
        'Home' => 'home',
        'User' => 'user',
        'Jenis Menu' => 'user',
        'Data Menu' => 'user',
        'Data Pesanan' => 'user',
        'NF Vegetarian' => 'shopping-bag'
      ];
      @endphp

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
          <img src="{{ asset('template') }}/assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">NF VEGETARIAN</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('template') }}/assets/admin/dist/img/foto (1).png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Sabda Shyamangun</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            @foreach ($menu as $key => $value)
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="{{ $value }}" class="nav-link">
                    <i class="fas fa-fw fa-{{ $icons[$key] }}"></i>
                    <p>
                      {{ $key }}
                    </p>
                  </a>
                </li>
              </ul>
            @endforeach
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>