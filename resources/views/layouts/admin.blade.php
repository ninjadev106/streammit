<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="csrf-token" content="{{csrf_token()}}">
   <title>Onyx Streaming Dashboard</title>
   <!-- Favicon -->
   <link rel="stylesheet" href="{{ asset('backend/images/favicon.ico') }}">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
   <!--datatable CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap4.min.css') }}">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/typography.css') }}">
   <!-- Flat Pickr CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/flatpickr.min.css') }}">
   <!-- Select2 CSS -->
   <!-- <link rel="stylesheet" href="{{ asset('backend/css/select2.min.css') }}"> -->
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css"> -->
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">
</head>
<body>
   <!-- loader Start -->
   <!-- <div id="loading">
      <div id="loading-center">
      </div>
   </div> -->
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar-->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="{{ route('admin.dashboard') }}" class="header-logo">
               <img src="{{ asset('backend/images/logo.png') }}" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">Onyx</span>
               </div>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">   
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="<?= ($menu_name == 'index') ? 'active active-menu' : '' ?>"><a href="{{ route('admin.dashboard') }}" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li>
                  
                  <li class="<?= ($menu_name == 'comment') ? 'active active-menu' : '' ?>"><a href="{{ route('admin.comment.index') }}" class="iq-waves-effect"><i class="las la-comments"></i><span>Comment</span></a></li>
                  <li class="<?= ($menu_name == 'user') ? 'active active-menu' : '' ?>"><a href="{{ route('admin.user.index') }}" class="iq-waves-effect"><i class="las la-user-friends"></i><span>User</span></a></li>
                  <li class="<?= ($menu_name == 'category') ? 'active' : ''?>">
                     <a href="#category" class="iq-waves-effect <?= ($menu_name == 'category') ? '' : 'collasped' ?>" data-toggle="collapse" aria-expanded="<?= ($menu_name == 'category') ? 'true' : 'false' ?>"><i class="las la-list-ul"></i><span>Category</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="category" class="iq-submenu collapse <?= ($menu_name == 'category') ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?= ($sub_menu_name == 'add-category') ? 'active' : '' ?>"><a href="{{ route('admin.category.create') }}"><i class="las la-user-plus"></i>Add Category</a></li>
                        <li class="<?= ($sub_menu_name == 'category-list') ? 'active' : '' ?>"><a href="{{ route('admin.category.index') }}"><i class="las la-eye"></i>Category List</a></li>
                     </ul>
                  </li>
                  <li class="<?= ($menu_name == 'movie') ? 'active' : ''?>">
                     <a href="#movie" class="iq-waves-effect <?= ($menu_name == 'movie') ? '' : 'collasped' ?>" data-toggle="collapse" aria-expanded="<?= ($menu_name == 'movie') ? 'true' : 'false' ?>"><i class="las la-film"></i><span>Movie</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="movie" class="iq-submenu collapse <?= ($menu_name == 'movie') ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?= ($sub_menu_name == 'add-movie') ? 'active' : '' ?>"><a href="{{ route('admin.movie.create') }}"><i class="las la-user-plus"></i>Add Movie</a></li>
                        <li class="<?= ($sub_menu_name == 'movie-list') ? 'active' : '' ?>"><a href="{{ route('admin.movie.index') }}"><i class="las la-eye"></i>Movie List</a></li>
                     </ul>
                  </li>
                  <li class="<?= ($menu_name == 'show') ? 'active' : ''?>">
                     <a href="#show" class="iq-waves-effect <?= ($menu_name == 'show') ? '' : 'collasped' ?>" data-toggle="collapse" aria-expanded="<?= ($menu_name == 'show') ? 'true' : 'false' ?>"><i
                        class="las la-film"></i><span>Show</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i>
                     </a>
                     <ul id="show" class="iq-submenu collapse <?= ($menu_name == 'show') ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?= ($sub_menu_name == 'add-show') ? 'active' : '' ?>"><a href="{{ route('admin.show.create') }}"><i class="las la-user-plus"></i>Add Show</a></li>
                        <li class="<?= ($sub_menu_name == 'show-list') ? 'active' : '' ?>"><a href="{{ route('admin.show.index') }}"><i class="las la-eye"></i>Show List</a></li>
                     </ul>
                  </li>
                  <li class="<?= ($menu_name == 'episode') ? 'active' : ''?>">
                     <a href="#episode" class="iq-waves-effect <?= ($menu_name == 'episode') ? '' : 'collasped' ?>" data-toggle="collapse" aria-expanded="<?= ($menu_name == 'episode') ? 'true' : 'false' ?>"><i
                        class="las la-film"></i><span>Episode</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i>
                     </a>
                     <ul id="episode" class="iq-submenu collapse <?= ($menu_name == 'episode') ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?= ($sub_menu_name == 'add-episode') ? 'active' : '' ?>"><a href="{{ route('admin.episode.create') }}"><i class="las la-user-plus"></i>Add Episode</a></li>
                        <li class="<?= ($sub_menu_name == 'episode-list') ? 'active' : '' ?>"><a href="{{ route('admin.episode.index') }}"><i class="las la-eye"></i>Episode List</a></li>
                     </ul>
                  </li>
                  <!-- <li class="<?= ($menu_name == 'pricing') ? 'active active-menu' : '' ?>"><a href="{{ route('admin.pricing') }}" class="iq-waves-effect"><i class="ri-price-tag-line"></i><span>Pricing</span></a></li> -->
                  <li class="<?= ($menu_name == 'f-content') ? 'active' : ''?>">
                     <a href="#f-content" class="iq-waves-effect <?= ($menu_name == 'f-content') ? '' : 'collasped' ?>" data-toggle="collapse" aria-expanded="<?= ($menu_name == 'f-content') ? 'true' : 'false' ?>"><i
                        class="las la-film"></i><span>Front Content</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i>
                     </a>
                     <ul id="f-content" class="iq-submenu collapse <?= ($menu_name == 'f-content') ? 'show' : '' ?>" data-parent="#iq-sidebar-toggle">
                     <li class="<?= ($sub_menu_name == 'main-carousel') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'main-carousel') }}"><i class="las la-film"></i>Home Carousel</a></li>
                        <li class="<?= ($sub_menu_name == 'favorite') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'favorite') }}"><i class="las la-film"></i>Favorite</a></li>
                        <li class="<?= ($sub_menu_name == 'upcoming') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'upcoming') }}"><i class="las la-film"></i>Upcoming movies</a></li>
                        <li class="<?= ($sub_menu_name == 'topten') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'topten') }}"><i class="las la-film"></i>Top 10</a></li>
                        <li class="<?= ($sub_menu_name == 'suggest') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'suggest') }}"><i class="las la-film"></i>Suggested</a></li>
                        <li class="<?= ($sub_menu_name == 'new-release') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'new-release') }}"><i class="las la-film"></i>New releases</a></li>
                        <li class="<?= ($sub_menu_name == 'trending') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'trending') }}"><i class="las la-film"></i>Trending</a></li>
                        <li class="<?= ($sub_menu_name == 'recent-add') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'recent-add') }}"><i class="las la-film"></i>Recently added</a></li>
                        <li class="<?= ($sub_menu_name == 'watch-again') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'watch-again') }}"><i class="las la-film"></i>Watch it again</a></li>
                        <li class="<?= ($sub_menu_name == 'onyx-origin') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'onyx-origin') }}"><i class="las la-film"></i>Oynx originals</a></li>
                        <li class="<?= ($sub_menu_name == 'movie-carousel') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'movie-carousel') }}"><i class="las la-film"></i>Movie Carousel</a></li>
                        <li class="<?= ($sub_menu_name == 'movie-section1') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'movie-section1') }}"><i class="las la-film"></i>Hollywood Blockbusters</a></li>
                        <li class="<?= ($sub_menu_name == 'movie-section2') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'movie-section2') }}"><i class="las la-film"></i>Best Movies</a></li>
                        <li class="<?= ($sub_menu_name == 'movie-section3') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'movie-section3') }}"><i class="las la-film"></i>Onyx Recommendations</a></li>
                        <li class="<?= ($sub_menu_name == 'show-carousel') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'show-carousel') }}"><i class="las la-film"></i>Show Carousel</a></li>
                        <li class="<?= ($sub_menu_name == 'show-section1') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'show-section1') }}"><i class="las la-film"></i>Popular Shows</a></li>
                        <li class="<?= ($sub_menu_name == 'show-section2') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'show-section2') }}"><i class="las la-film"></i>Best Tv Shows</a></li>
                        <li class="<?= ($sub_menu_name == 'show-section3') ? 'active' : '' ?>"><a href="{{ route('admin.f-content.index', 'show-section3') }}"><i class="las la-film"></i>Onyx Recommendations</a></li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-menu-bt d-flex align-items-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="{{ route('admin.dashboard') }}" class="header-logo">
                        <img src="{{ asset('backend/images/logo.png') }}" class="img-fluid rounded-normal" alt="">
                        <div class="logo-title">
                           <span class="text-primary text-uppercase">Onyx</span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="iq-search-bar ml-auto">
                  <form action="#" class="searchbox">
                     <input type="text" class="text search-input" placeholder="Search Here...">
                     <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                  </form>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navbar-list">
                     <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-search-line"></i>
                        </a>
                        <form action="#" class="search-box p-0">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                     </li>
                     <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-notification-2-line"></i>
                           <span class="bg-primary dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="{{ asset('backend/images/user/01.jpg') }}" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Emma Watson Barry</h6>
                                          <small class="float-right font-size-12">Just Now</small>
                                          <p class="mb-0">95 MB</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="{{ asset('backend/images/user/02.jpg') }}" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New customer is join</h6>
                                          <small class="float-right font-size-12">5 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="{{ asset('backend/images/user/03.jpg') }}" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Two customer is left</h6>
                                          <small class="float-right font-size-12">2 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card" >
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="{{ asset('backend/images/user/04.jpg') }}" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New Mail from Fenny</h6>
                                          <small class="float-right font-size-12">3 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                        <!-- <li class="nav-item nav-icon dropdown">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                              <i class="ri-mail-line"></i>
                              <span class="bg-primary dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset('backend/images/user/01.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Barry Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset('backend/images/user/02.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset('backend/images/user/03.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset('backend/images/user/04.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset('backend/images/user/05.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li> -->
                     <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="{{ asset('/'.auth()->user()->profile->image) }}" class="img-fluid rounded-circle mr-3" alt="user">
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">  
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello {{ auth()->user()->name }}</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="{{ route('admin.profile.index') }}" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="{{ route('admin.profile.edit') }}" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="{{ route('admin.account.setting') }}" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}" role="button" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sign Out
                                        <i class="ri-login-box-line ml-2"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
        @yield('content')
      </div>
   </div>
   <!-- Wrapper END -->
   <!-- Footer -->
   <footer class="iq-footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <!-- <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
               </ul> -->
            </div>
            <div class="col-lg-6 text-right">
               Copyright 2020 <a href="#">Onyx</a> All Rights Reserved.
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer END -->
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- <script src="{{ asset('backend/js/jquery.min.js') }}"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="http://malsup.github.com/jquery.form.js"></script>
   <script src="{{ asset('backend/js/popper.min.js') }}"></script>
   <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>
   <!-- Appear JavaScript -->
   <script src="{{ asset('backend/js/jquery.appear.js') }}"></script>
   <!-- Countdown JavaScript -->
   <script src="{{ asset('backend/js/countdown.min.js') }}"></script>
   <!-- Select2 JavaScript -->
   <script src="{{ asset('backend/js/select2.min.js') }}"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> -->
   <!-- Counterup JavaScript -->
   <script src="{{ asset('backend/js/waypoints.min.js') }}"></script>
   <script src="{{ asset('backend/js/jquery.counterup.min.js') }}"></script>
   <!-- Wow JavaScript -->
   <script src="{{ asset('backend/js/wow.min.js') }}"></script>
   <!-- Slick JavaScript -->
   <script src="{{ asset('backend/js/slick.min.js') }}"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
   <!-- Flat Pickr JavaScript -->
   <script src="{{ asset('backend/js/flatpickr.min.js') }}"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="{{ asset('backend/js/jquery.magnific-popup.min.js') }}"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="{{ asset('backend/js/smooth-scrollbar.js') }}"></script>
   <!-- apex Custom JavaScript -->
   <script src="{{ asset('backend/js/apexcharts.js') }}"></script>
   <!-- Chart Custom JavaScript -->
   <script src="{{ asset('backend/js/chart-custom.js') }}"></script>
   <!-- Custom JavaScript -->
   <script src="{{ asset('backend/js/custom.js') }}"></script>

   @yield('script')
</body>
</html>