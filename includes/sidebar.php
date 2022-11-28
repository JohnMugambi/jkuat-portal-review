<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo base_url ?>admin" class="brand-link text-sm">
        <img src="<?php echo base_url ?>assets/images/jkuat-logo.png" alt="JKUAT Logo" class="brand-image  elevation-3" style="opacity: .8;display : block;width: 5srem;height: 5rem;max-height: unset">
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <!-- <img src="<?php echo "image" ?>" class="img-circle elevation-2" alt="User Image" style="height: 2rem;object-fit: cover"> -->
                  </div>
                  <div class="info">
                  </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2" style="margin-top:5vh !important;">
                   <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Home
                        </p>
                      </a>
                    </li> 
                    <li class="nav-header">Contents</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=news-events" class="nav-link nav-about">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                          News & Events
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=reporting" class="nav-link nav-services">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                          Reporting
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=fees" class="nav-link nav-clients">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                          Fees
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=units" class="nav-link nav-testimonials">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                          Units
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=exams" class="nav-link nav-contact">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                          Examinations
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=hostel-booking" class="nav-link nav-inquiries">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>
                          Hostel Booking
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=messages" class="nav-link nav-inquiries">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                          Messages
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=repository" class="nav-link nav-inquiries">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                          Repository
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=evaluation" class="nav-link nav-inquiries">
                        <i class="nav-icon fas fa-microscope"></i>
                        <p>
                          Evaluation
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=clearance" class="nav-link nav-inquiries">
                        <i class="nav-icon fa fa-soap"></i>
                        <p>
                          Clearance
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>student/?page=timetable" class="nav-link nav-inquiries">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Timetable
                        </p>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      page = page.split('/');
      page = page[0];
      if(s!='')
        page = page+'_'+s;

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
     
    })
  </script>
     