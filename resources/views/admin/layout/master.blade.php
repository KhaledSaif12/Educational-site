<!doctype html>
<html lang="en" dir="rtl">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Eudica - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html rtl, html dir rtl, rtl website template, bootstrap 4 rtl template, rtl bootstrap template, admin panel template rtl, admin panel rtl, html5 rtl, academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website"/>

		<!-- Favicon -->
		<link rel="icon" href="{{asset('admin/assets/images/brand/favicon.ico')}}" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/images/brand/favicon.ico')}}" />

		<!-- Title -->
		<title>Eudica - Online Education & Learning Courses HTML CSS Responsive Template</title>

		<!-- Bootstrap css -->
		<link href="{{asset('admin/assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="{{asset('admin/assets/plugins/sidemenu/sidemenu-rtl.css')}}" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="{{asset('admin/assets/css/style-rtl.css')}}" rel="stylesheet" />
		<link href="{{asset('admin/assets/css/admin-custom.css')}}" rel="stylesheet" />

		<!-- c3.js')}} Charts Plugin -->
		<link href="{{asset('admin/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="{{asset('admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

		<!---Font icons-->
		<link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- Switcher css -->
		<link  href="{{asset('admin/assets/switcher/css/switcher-rtl.css')}}" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

		<!-- Color Skin css -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('admin/assets/color-skins/color6.css')}}" />

	</head>

	<body class="app sidebar-mini">



		<!--Loader-->
		<div id="global-loader">
			<img src="{{asset('admin/assets/images/loader.svg')}}" class="loader-img" alt="">
		</div>
		<!--/Loader-->

		<!--Page-->
		<div class="page">
			<div class="page-main h-100">

				<!--App-Header-->
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img src="{{asset('admin/assets/images/brand/logo.png')}}" class="header-brand-img" alt="Lmslist logo">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="header-navicon">
								<a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
									<i class="fa fa-search"></i>
								</a>
							</div>
							<div class="header-navsearch">
								<a href="#" class=" "></a>
								<form class="form-inline mr-auto">
									<div class="nav-search">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" >
										<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</div>
							<div class="d-flex order-lg-2 mr-auto">
								<div class="dropdown d-none d-md-flex" >
									<a  class="nav-link icon full-screen-link">
										<i class="fe fe-maximize-2"  id="fullscreen-button"></i>
									</a>
								</div>
								<div class="dropdown d-none d-md-flex country-selector">
									<a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">
										<img src="{{asset('admin/assets/images/flags/us_flag.jpg')}}" alt="img" class="avatar avatar-xs ml-1 align-self-center">
										<div>
											<strong class="text-dark">English</strong>
										</div>
									</a>
									<div class="language-width dropdown-menu dropdown-menu-left dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{asset('admin/assets/images/flags/french_flag.jpg')}}"  alt="flag-img" class="avatar  ml-3 align-self-center" >
											<div>
												<strong>French</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{asset('admin/assets/images/flags/germany_flag.jpg')}}"  alt="flag-img" class="avatar  ml-3 align-self-center" >
											<div>
												<strong>Germany</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{asset('admin/assets/images/flags/italy_flag.jpg')}}"  alt="flag-img" class="avatar  ml-3 align-self-center" >
											<div>
												<strong>Italy</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{asset('admin/assets/images/flags/russia_flag.jpg')}}"  alt="flag-img" class="avatar  ml-3 align-self-center" >
											<div>
												<strong>Russia</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{asset('admin/assets/images/flags/spain_flag.jpg')}}"  alt="flag-img" class="avatar  ml-3 align-self-center" >
											<div>
												<strong>Spain</strong>
											</div>
										</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-bell-o"></i>
										<span class=" nav-unread badge badge-danger  badge-pill">4</span>
									</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
										<a href="#" class="dropdown-item text-center">You have 4 notification</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-envelope-o"></i>
											</div>
											<div>
												<strong>2 new Messages</strong>
												<div class="small text-muted">17:50 Pm</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-calendar"></i>
											</div>
											<div>
												<strong> 1 Event Soon</strong>
												<div class="small text-muted">19-10-2019</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-comment-o"></i>
											</div>
											<div>
												<strong> 3 new Comments</strong>
												<div class="small text-muted">05:34 Am</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-exclamation-triangle"></i>
											</div>
											<div>
												<strong> Application Error</strong>
												<div class="small text-muted">13:45 Pm</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">See all Notification</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-envelope-o"></i>
										<span class=" nav-unread badge badge-warning  badge-pill">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{asset('admin/assets/images/users/male/41.jpg')}}" alt="avatar-img" class="avatar brround ml-3 align-self-center">
											<div>
												<strong>Blake</strong> I've finished it! See you so.......
												<div class="small text-muted">30 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{asset('admin/assets/images/users/female/1.jpg')}}" alt="avatar-img" class="avatar brround ml-3 align-self-center">
											<div>
												<strong>Caroline</strong> Just see the my Admin....
												<div class="small text-muted">12 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{asset('admin/assets/images/users/male/18.jpg')}}" alt="avatar-img" class="avatar brround ml-3 align-self-center">
											<div>
												<strong>Jonathan</strong> Hi! I'am singer......
												<div class="small text-muted">1 hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{asset('admin/assets/images/users/female/18.jpg')}}" alt="avatar-img" class="avatar brround ml-3 align-self-center">
											<div>
												<strong>Emily</strong> Just a reminder you have.....
												<div class="small text-muted">45 mins ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Messages</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-grid"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow  app-selector">
										<ul class="drop-icon-wrap">
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-speech text-dark"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-map text-dark"></i>
													<span class="block">map</span>
												</a>
											</li>

											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-bubbles text-dark"></i>
													<span class="block">Messages</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-user-follow text-dark"></i>
													<span class="block">Followers</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-picture text-dark"></i>
													<span class="block">Photos</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-settings text-dark"></i>
													<span class="block">Settings</span>
												</a>
											</li>
										</ul>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all</a>
									</div>
								</div>
								<div class="dropdown ">
									<a href="#" class="nav-link pl-0 leading-none user-img" data-toggle="dropdown">
										<img src="{{asset('admin/assets/images/users/male/25.jpg')}}" alt="profile-img" class="avatar avatar-md brround">
									</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow ">
										<a class="dropdown-item" href="profile.html">
											<i class="dropdown-icon icon icon-user"></i> My Profile
										</a>
										<a class="dropdown-item" href="emailservices.html">
											<i class="dropdown-icon icon icon-speech"></i> Inbox
										</a>
										<a class="dropdown-item" href="editprofile.html">
											<i class="dropdown-icon  icon icon-settings"></i> Account Settings
										</a>
										<a class="dropdown-item" href="{{route('logout')}}">
											<i class="dropdown-icon icon icon-power"></i> Log out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/App-Header-->

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="{{asset('admin/assets/images/users/male/25.jpg')}}" alt="user-img" class="avatar avatar-lg brround">
								<a href="editprofile.html" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info">
								<h2>Rubin Carmody</h2>
								<span>Web Designer</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">أدراة الدورات</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="{{route('addcate')}}">دورة جديدة</a></li>
								<li><a class="slide-item" href="{{route('all_category')}}">قائمة الدورات</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">محتويات الدورات</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="{{route('add_articles')}}">محتوى جديدة</a></li>
								<li><a class="slide-item" href="{{route('list_article')}}">قائمة محتويات الدورات</a></li>
							</ul>
						</li>
						
						
						
			
						
						
						
					</ul>
				</aside>
				<!-- /Sidebar menu-->

				<!--App-Content-->
				<div class="app-content my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Dashboard 1</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 1</li>
							</ol>
						</div>

						
						<!-- New Category -->
                          @yield('content')
					
			
					
					
					</div>
				</div>
			</div>

			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2019 <a href="#">Eudica</a>. Designed by <a href="#">Spruko</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!--/Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-long-arrow-up"></i></a>

		<!-- JQuery js-->
		<script src="{{asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>

		<!-- Bootstrap js -->
		<script src="{{asset('admin/assets/plugins/bootstrap-4.3.1/js/popper.min.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>

		<!--JQuery Sparkline Js-->
		<script src="{{asset('admin/assets/js/jquery.sparkline.min.js')}}"></script>

		<!-- Circle Progress Js-->
		<script src="{{asset('admin/assets/js/circle-progress.min.js')}}"></script>

		<!-- Star Rating Js-->
		<script src="{{asset('admin/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- Fullside-menu Js-->
		<script src="{{asset('admin/assets/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- Custom scroll bar Js-->
		<script src="{{asset('admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<!--Counters -->
		<script src="{{asset('admin/assets/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/counters/waypoints.min.js')}}"></script>

		<!-- CHARTJS CHART -->
		<script src="{{asset('admin/assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/chart/utils.js')}}"></script>

		<!-- ECharts Plugin -->
		<script src="{{asset('admin/assets/plugins/echarts/echarts.js')}}"></script>
		<script src="{{asset('admin/assets/js/index1.js')}}"></script>


		<!-- Custom Js-->
		<script src="{{asset('admin/assets/js/admin-custom.js')}}"></script>

	</body>
</html>