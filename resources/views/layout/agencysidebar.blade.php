<!-- Page Sidebar Start-->
<div class="sidebar-wrapper">
    <div>
      <div class="logo-wrapper">
        <a href="{{ url('agency/dashboard') }}">
          <img class="img-fluid for-light" src="{{ asset('images/logo.png') }}" alt="">
          <img class="img-fluid for-dark" src="{{ asset('images/logo.png') }}" alt="">
        </a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="index-2.html"><img class="img-fluid" src="{{ asset('images/logo/logo-icon.png') }}" alt=""></a></div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn">
              <a href="{{ url('agency/dashboard') }}">
                <img class="img-fluid" src="{{ asset('images/logo/logo-icon.png') }}" alt="">
              </a>
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            
            
            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/agency/dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span>Dashboard</span></a></li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/agency/search')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span>Search & Matchmaking</span></a></li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('/agency/dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span>Manage Billing</span></a></li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ url('agency/list-brands')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span>Manage Brands</span></a></li>
            
            

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg><span >Manage Favourites</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ url('agency/view-favourites')}}">View Favourites</a></li>
                <li><a href="{{ url('agency/remove-favourites')}}">Remove Favourites</a></li>
              </ul>
            </li>
  
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg><span>Manage Campaign</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ url('agency/create-campaign')}}">Create Campaign</a></li>
                <li><a href="{{ url('agency/view-campaign')}}">View Campaign</a></li>
              </ul>
            </li>
  
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg><span>Manage Chat</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ url('agency/chat')}}">Chat</a></li>
                <li><a href="{{ url('agency/chat-history')}}">Chat History</a></li>
              </ul>
            </li>
            
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
    </div>
  </div>
  <!-- Page Sidebar Ends-->