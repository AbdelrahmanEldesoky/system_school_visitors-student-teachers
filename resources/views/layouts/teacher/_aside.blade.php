
    <section class="main-sidebar sidebar-dark-primary elevation-4">


            <!-- Brand Logo -->
            <a href="{{route('teacher.index')}}" class="brand-link">
              <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Teacher School</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->


              <!-- SidebarSearch Form -->
          

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->

                  <li class="nav-item">
                    <a href="{{route('teacher.schedule.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        جدول المدرسة
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('teacher.class.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                      درجات الطلاب , الواجب
                      </p>
                    </a>
                  </li>
                
                  
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->


    </section>



