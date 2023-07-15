
    <section class="main-sidebar sidebar-dark-primary elevation-4">


            <!-- Brand Logo -->
            <a href="{{route('dashboard.')}}" class="brand-link">
              <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Admin School</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="{{route('dashboard.')}}" class="d-block">Super Admin</a>
                </div>
              </div>

              <!-- SidebarSearch Form -->


              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->


                  <li class="nav-item">
                    <a href="{{route('dashboard.teacher.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        المدرسيين
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('dashboard.student.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        الطلاب
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('dashboard.parent.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                       والد / والدة الطالب
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('dashboard.school.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>السنه الدراسية</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('dashboard.class.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>الفصول</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('dashboard.material.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>المواد الدراسية</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('dashboard.schedule.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        جدول المدرسة
                      </p>
                    </a>
                  </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-pager"></i>
                      <p>
                         الوظائف
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('dashboard.job.index')}}" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          <p>منتظرة لم يتم الرد</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.job.status',1)}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>مقبولة</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.job.status',2)}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>مرفوضة</p>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-pager"></i>
                      <p>
                        صفحات المدرسة
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('dashboard.activity.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>الانشطة</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.news.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>الاخبار</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.about.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>معلومات عنا</p>
                        </a>
                      </li>
                    </ul>
                  </li>




                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->


    </section>



