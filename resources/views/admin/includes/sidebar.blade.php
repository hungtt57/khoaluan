      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="index.html">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-list-ul"></i>
                          <span>User</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{asset('/admin/user/create')}}">New User</a></li>
                          <li><a  href="{{asset('/admin/user/list')}}">List User</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-list-ul"></i>
                          <span>Category</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{asset('/admin/category/create')}}">New Category</a></li>
                          <li><a  href="{{asset('/admin/category/list')}}">List Categories</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-list-ul"></i>
                          <span>Website</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('website_create') }}">New Website</a></li>
                          <li><a  href="{{ route('website_list')}}">List Website</a></li>
                      </ul>
                  </li>

                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>