<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>bibliotheque Dashboard </title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css')}}">

<link rel="stylesheet" href="{{asset('admin/assets/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/plugins/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
<link rel="stylesheet" href="../../../ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="admin/assets/img/hotel_logo.png" width="50" height="70" alt="logo">
<span class="logoclass">HOTEL</span>
</a>
<a href="index.html" class="logo logo-small">
<img src="admin/assets/img/hotel_logo.png" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>

<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown noti-dropdown">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="admin/assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Carlson Tech</span> has
approved <span class="noti-title">your estimate</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span>
</p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="admin/assets/img/profiles/avatar-11.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">International Software
Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span>
</p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="admin/assets/img/profiles/avatar-17.jpg">
 </span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">John Hendry</span> sent
a cancellation request <span class="noti-title">Apple iPhone
XR</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span>
</p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="admin/assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Mercury Software
Inc</span> added a new product <span class="noti-title">Apple
MacBook Pro</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span>
</p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="admin/assets/img/profiles/avatar-01.jpg" width="31" alt="Soeng Souy"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="admin/assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Soeng Souy</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Account Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li>
<a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
</li>
<li class="list-divider"></li>
<li class="submenu">
<a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="all-booking.html"> All Booking </a></li>
<li><a href="edit-booking.html"> Edit Booking </a></li>
<li><a href="add-booking.html"> Add Booking </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="all-customer.html"> All customers </a></li>
<li><a href="edit-customer.html"> Edit Customer </a></li>
<li><a href="add-customer.html"> Add Customer </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="all-rooms.html">All Rooms </a></li>
<li><a href="edit-room.html"> Edit Rooms </a></li>
<li><a href="add-room.html"> Add Rooms </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="all-staff.html">All Staff </a></li>
<li><a href="edit-staff.html"> Edit Staff </a></li>
<li><a href="add-staff.html"> Add Staff </a></li>


</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-share-alt"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="">Level 1 </a></li>
<li><a href="">Level 2 </a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<section class="container mt-5">
<h1 class="my-4 mt-5 text-center text-lg-left image_title">Image Gallery</h1>
<div class="row gallery">
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a href="assets/img/product/product-01.jpg">
<figure><img class="img-fluid img-thumbnail" src="admin/assets/img/product/product-01.jpg" alt="Random Image"></figure>
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a href="assets/img/product/product-02.jpg">
<figure><img class="img-fluid img-thumbnail" src="admin/assets/img/product/product-02.jpg" alt="Random Image"></figure>
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a href="assets/img/product/product-03.jpg">
<figure><img class="img-fluid img-thumbnail" src="admin/assets/img/product/product-03.jpg" alt="Random Image"></figure>
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a href="assets/img/product/product-04.jpg">
<figure><img class="img-fluid img-thumbnail" src="admin/assets/img/product/product-04.jpg" alt="Random Image"></figure>
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a href="assets/img/product/product-05.jpg">
<figure><img class="img-fluid img-thumbnail" src="admin/assets/img/product/product-05.jpg" alt="Random Image"></figure>
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a href="assets/img/product/product-06.jpg">
<figure><img class="img-fluid img-thumbnail" src="admin/assets/img/product/product-06.jpg" alt="Random Image"></figure>
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a href="assets/img/product/product-07.jpg">
<figure><img class="img-fluid img-thumbnail" src="admin/assets/img/product/product-07.jpg" alt="Random Image"></figure>
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a href="assets/img/product/product-08.jpg">
<figure><img class="admin/img-fluid img-thumbnail" src="admin/assets/img/product/product-08.jpg" alt="Random Image"></figure>
</a>
</div>
</div>
</section>
{{-- <div class="form-group row">
	<label class="col-form-label col-md-2">File Input</label>
	<div class="col-md-10">
	  <input class="form-control" type="file">
	</div>
</div> --}}
<form action=""  enctype="multipart/form-data">
	
	<div class="form-group mb-0 row">
		<label class="col-form-label col-md-2">Add image</label>
		<div class="col-md-10">
			<div class="input-group">
				<input class="form-control" type="file" name="image">
				<div class="input-group-append">
				<button class="btn btn-primary" type="submit">Add</button>
				</div>
			</div>
	    </div>
    </div>
</form>
 
</div>
</div>

</div>


<script src="{{asset('admin/assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/moment.min.js')}}"></script>
<script src="{{asset('admin/assets/js/select2.min.js')}}"></script>

<script src="{{asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="../../../ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script src="{{asset('admin/assets/js/script.js')}}"></script>
<script>
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'

			});
		});
		$(document).ready(function () {
			$(".gallery").magnificPopup({
				delegate: "a",
				type: "image",
				tLoading: "Loading image #%curr%...",
				mainClass: "mfp-img-mobile",
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
				}
			});
		});

	</script>
</body>
</html>