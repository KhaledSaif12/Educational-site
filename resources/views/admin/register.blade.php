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

		<!-- Bootstrap Css -->
		<link href="{{asset('admin/assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- Dashboard css -->
		<link href="{{asset('admin/assets/css/style-rtl.css')}}" rel="stylesheet" />
		<link href="{{asset('admin/assets/css/admin-custom.css')}}" rel="stylesheet" />

		<!-- c3.js')}} Charts Plugin -->
		<link href="{{asset('admin/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

		<!---Font icons-->
		<link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- Switcher css -->
		<link  href="{{asset('admin/assets/switcher/css/switcher-rtl.css')}}" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

		<!-- Color Skin css -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('admin/assets/color-skins/color6.css')}}" />

	</head>

	<body class="construction-image">



		<!--Loader-->
		<div id="global-loader">
			<img src="{{asset('admin/assets/images/loader.svg')}}" class="loader-img" alt="">
		</div>
		<!--/Loader-->

		<!--Page-->
		<div class="page page-h">
			<div class="page-content z-documentation-10">
				<div class="container">
                    <form method="POST" action="{{route('save_user_old')}}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
                                <div class="card mb-xl-0">
                                    <div class="card-header">
                                        <h3 class="card-title">يسجل</h3>
										@if($errors->any())
											<div class=" alert alert-danger">
												@foreach ($errors->all() as $error)
												<p>
													{{$error}}
												</p>
													
												@endforeach

											</div>
										@endif
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label text-dark">أسم المسنخدم</label>
                                            <input type="text" name="user_name" class="form-control" placeholder="أسم المسنخدم">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-dark">عنوان البريد الإلكتروني</label>
                                            <input type="email" name="user_email" class="form-control" placeholder="عنوان البريد الإلكتروني">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-dark">كلمة المرور	</label>
                                            <input type="password" name="user_pass" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور">
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label text-dark">توافق على<a href="terms.html">الشروط والسياسة</a></span>
                                            </label>
                                        </div>
                                        <div class="form-footer mt-2">
                                            <input type="submit" class="btn btn-primary btn-block" value="Create New Account">
                                        </div>
                                        <div class="text-center  mt-3 text-dark">
											هل لديك حساب بالفعل؟<a href="{{route('login')}}">تسجيل الدخول</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>

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

		<!-- Custom scroll bar Js-->
		<script src="{{asset('admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<!-- Fullside-menu Js-->
		<script src="{{asset('admin/assets/plugins/sidemenu/sidemenu.js')}}"></script>

		<!--Counters -->
		<script src="{{asset('admin/assets/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/counters/waypoints.min.js')}}"></script>


		<!-- Custom Js-->
		<script src="{{asset('admin/assets/js/admin-custom.js')}}"></script>

	</body>
</html>