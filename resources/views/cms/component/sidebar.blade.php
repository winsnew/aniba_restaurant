  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
      </ul>
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">

              <a class="nav-link" id="logout" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-sign-out-alt"></i>
              </a>
          </li>
      </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image pt-3">
              <img src="{{asset('images/aniba.png')}}" class="brand-image vertical-center" style="width: 3.1rem;">
          </div>
          <div class="info pt-3">
              <span class="brand-text text-white">Dashboard</span>
          </div>
      </div>
      <div class="sidebar">
          <nav class="mt-2 pb-5">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-header">MENU</li>
                  <li class="nav-item">
                      <a href="{{ '/admin/home' }}" class="nav-link {{ Request::segment(2) === 'home'? 'active': '' }}">
                          <i class="fas fa-home nav-icon"></i>
                          <p>Home</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{url('admin/our-story')}}" class="nav-link {{ Request::segment(2) === 'our-story'? 'active': '' }}">
                          <i class="fas fa-newspaper nav-icon"></i>
                          <p>Our Story</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{url('admin/our-chefs')}}" class="nav-link {{ Request::segment(2) === 'our-chefs'? 'active': '' }}">
                          <i class="fas fa-users nav-icon"></i>
                          <p>Our Chefs</p>
                      </a>
                  </li>
                  <!-- <li class="nav-item">
                      <a href="{{url('admin/reservations')}}" class="nav-link {{ Request::segment(2) === 'reservations'? 'active': '' }}">
                          <i class="far fa-calendar nav-icon"></i>
                          <p>Reservation</p>
                      </a>
                  </li> -->
                  <li class="nav-item">
                      <a href="{{url('admin/our-teams')}}" class="nav-link {{ Request::segment(2) === 'our-teams'? 'active': '' }}">
                          <i class="fas fa-users nav-icon"></i>
                          <p>Our Teams</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{url('admin/our-bar')}}" class="nav-link {{ Request::segment(2) === 'our-bar'? 'active': '' }}">
                          <i class="fas fa-glass-martini nav-icon"></i>
                          <p>Our Bar</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{url('admin/operation-hours')}}" class="nav-link {{ Request::segment(2) === 'operation-hours'? 'active': '' }}">
                          <i class="far fa-clock nav-icon"></i>
                          <p>Operation Hours</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{url('admin/private-events')}}" class="nav-link {{ Request::segment(2) === 'private-events'? 'active': '' }}">
                          <i class="far fa-calendar nav-icon"></i>
                          <p>Private Events</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{url('admin/contact-us')}}" class="nav-link {{ Request::segment(2) === 'contact-us'? 'active': '' }}">
                          <i class="far fa-address-book nav-icon"></i>
                          <p>Contact Us</p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/reservation')}}" class="nav-link {{ Request::segment(2) === 'reservation'? 'active': '' }}">
                        <i class="far fa-address-book nav-icon"></i>
                        <p>Reservation</p>
                    </a>
                </li>
                  <li class="nav-item">
                      <a href="{{url('admin/press')}}" class="nav-link {{ Request::segment(2) === 'press'? 'active': '' }}">
                          <i class="fas fa-newspaper nav-icon"></i>
                          <p>Press</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{url('admin/category')}}" class="nav-link {{ Request::segment(2) === 'gallery'? 'active': '' }}">
                          <i class="fas fa-newspaper nav-icon"></i>
                          <p>Gallery</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{url('admin/popup')}}" class="nav-link {{ Request::segment(2) === 'popup'? 'active': '' }}">
                        <i class="fas fa-comment-alt nav-icon"></i>
                        <p>Pop up</p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/navbar')}}" class="nav-link {{ Request::segment(2) === 'navbar'? 'active': '' }}">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Navbar Menu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/metadata')}}" class="nav-link {{ Request::segment(2) === 'metadata'? 'active': '' }}">
                        <i class="fas fa-info nav-icon"></i>
                        <p>Metadata</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/user')}}" class="nav-link {{ Request::segment(2) === 'user'? 'active': '' }}">
                        <i class="fas fa-user nav-icon"></i>
                        <p>User</p>
                    </a>
                </li>
                  {{-- <li class="nav-item">
                    <a href="{{url('admin/properties')}}" class="nav-link {{ Request::segment(2) === 'properties' ? 'active' : null }}">
                  <i class="fas fa-house-user"></i>
                  <p>
                      Properties
                  </p>
                  </a>
                  </li> --}}
              </ul>
          </nav>
      </div>
  </aside>