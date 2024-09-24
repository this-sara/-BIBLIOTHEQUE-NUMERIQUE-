<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>biblio Dashboard Template</title>
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/feathericon.min.css')}}">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}"> 
</head>

<body>
	@include('components.navbar')
		@include('components.sidebar')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							
							<h3 class="page-title mt-5">Add Category</h3> </div>
							
					</div>
				</div>
				<div class="div_center">
					<div>
						@if (session()->has('message'))
							<x-alert type="success">
							<li>{{session()->get('message')}}</li> 
							</x-alert>
						@endif
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form method="POST" action="{{route('categories.store')}}" >
                            @csrf
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Name</label>
										<input class="form-control" type="text" name="titre" value="" required>
										
                                    </div>
								</div>
								<button type="submit" class="btn btn-primary buttonedit ml-2 mt-4">Add Category</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{asset('admin/assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/raphael/raphael.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/morris/morris.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/chart.morris.js')}}"></script>
	<script src="{{asset('admin/assets/js/script.js')}}"></script>
</body>

</html>