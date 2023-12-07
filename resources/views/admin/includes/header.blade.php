<nav class="navbar header-navbar pcoded-header">
   <div class="navbar-wrapper">
      <div class="navbar-logo">
         <a class="mobile-menu" id="mobile-collapse" href="#!">
            <i class="fa fa-bars text-dark" aria-hidden="true"></i>
         </a>
         <a href="index.php">
            <img class="img-fluid" style="max-width: 187px;" src="{{ asset('assets/images/chintamanilogo.png')}}" alt="Theme-Logo" />
         </a>
         <a class="mobile-options">
            <i class="feather icon-more-horizontal"></i>
         </a>
      </div>
      <div class="navbar-container">
         <ul class="nav-left">
            <li class="header-search">
               <div class="main-search morphsearch-search">
                  <div class="input-group">
                     <span class="input-group-addon search-close"><i class="fa fa-times-circle-o"></i></span>
                     <input type="text" class="form-control">
                     <span class="input-group-addon search-btn"><i class="fa fa-search"></i></span>
                  </div>
               </div>
            </li>
            <li>
               <a href="#!" onclick="javascript:toggleFullScreen()">
                  <i class="fa fa-window-maximize"></i>
               </a>
            </li>
         </ul>
         <ul class="nav-right">
            <li> <a href="#!"> <img class="smallApi" src="{{ asset('assets/images/Whatsapp-Logo.gif')}}"> </a> </li>
            <li class="header-notification">
               <div class="dropdown-primary dropdown">
                  <div class="dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-bell-o"></i>
                     <span class="badge bg-c-pink">5</span>
                  </div>
                  <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                     <li>
                        <h6>Notifications1</h6>
                        <label class="label label-danger">New</label>
                     </li>
                     <li>
                        <div class="media">
                           <img class="d-flex align-self-center img-radius" src="{{ asset('assets/files/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                           <div class="media-body">
                              <h5 class="notification-user">John Doe</h5>
                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                 elit.
                              </p>
                              <span class="notification-time">30 minutes ago</span>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="media">
                           <img class="d-flex align-self-center img-radius" src="{{ asset('assets/files/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                           <div class="media-body">
                              <h5 class="notification-user">Joseph William</h5>
                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                 elit.
                              </p>
                              <span class="notification-time">30 minutes ago</span>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="media">
                           <img class="d-flex align-self-center img-radius" src="{{ asset('assets/files/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                           <div class="media-body">
                              <h5 class="notification-user">Sara Soudein</h5>
                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                 elit.
                              </p>
                              <span class="notification-time">30 minutes ago</span>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </li>
            <li class="header-notification">
               <div class="dropdown-primary dropdown">
                  <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-commenting-o"></i>
                     <span class="badge bg-c-green">3</span>
                  </div>
               </div>
            </li>
            <li class="user-profile header-notification">
               <div class="dropdown-primary dropdown">
                  <div class="dropdown-toggle" data-toggle="dropdown">
                     <img src="{{ asset('assets/images/users.jpg')}}" class="img-radius" alt="User-Profile-Image">
                     <span>{{ Auth::user()->name }}</span>
                     <i class="fa fa-chevron-down"></i>
                  </div>
                  <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                     <li>
                        <a href="#!">
                           <i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile
                        </a>
                     </li>
                     @guest
                     @else
                     <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           <i class="fa fa-user-circle-o" aria-hidden="true"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                     </li>
                     @endguest
                  </ul>
               </div>
            </li>
         </ul>
      </div>
   </div>
</nav>