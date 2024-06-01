<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
  <div class="h-100" data-simplebar>


      <!--- Sidemenu -->
      <div id="sidebar-menu">
          <ul id="side-menu">
              <li>
                  <a href="{{ route('dashboard') }}">
                      <i data-feather="home"></i>
                      <span> Dashboard </span>
                  </a>
              </li>

              <li>
                  <a href="#sidebarEcommerce" data-toggle="collapse">
                      <i data-feather="users"></i>
                      <span> Categories </span>
                      <span class="menu-arrow"></span>
                  </a>
                  <div class="collapse" id="sidebarEcommerce">
                      <ul class="nav-second-level">
                          <li>
                              <a href="{{ route('categories.add') }}"><i data-feather="plus" class="pr-0 mr-1"></i>Add
                                  Add</a>
                          </li>
                          <li>
                              <a href="{{ route('categories') }}"><i data-feather="list" class="pr-0 mr-1"></i>Manage
                                  Manage</a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li>
                  <a href="#sidebarCrm" data-toggle="collapse">
                      <i data-feather="edit"></i>
                      <span> Blog </span>
                      <span class="menu-arrow"></span>
                  </a>
                  <div class="collapse" id="sidebarCrm">
                      <ul class="nav-second-level">
                          <li>
                              <a href="{{route('blogs.add')}}"><i data-feather="plus" class="pr-0 mr-1"></i>Add new Blog</a>
                          </li>
                          <li>
                              <a href="{{route('blogs')}}"><i data-feather="list" class="pr-0 mr-1"></i>Manage all Blogs</a>
                          </li>
                          
                      </ul>
                  </div>
              </li>
              <li>
                <a href="#">
                    <i class="fa fa-comment"></i>
                    <span> Blog Comments </span>
                </a>
            </li>
          </ul>
      </div>
      <!-- End Sidebar -->

      <div class="clearfix"></div>
  </div>
  <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->