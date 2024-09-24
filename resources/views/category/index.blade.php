<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>biblio Dashboard Template</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="admin/assets/css/feathericon.min.css">
	<link rel="stylesheet" href="admin/assets/plugins/datatables/datatables.min.css">
	<link rel="stylesheet" href="admin/assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="admin/assets/css/style.css"> </head>
<body>
	@include('components.navbar')
		@include('components.sidebar')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">All category</h4> <a href="add-staff.html" class="btn btn-primary float-right veiwbutton">Add Staff</a> </div>
						</div>
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
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Name</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($categories as $category)
											<tr>
												<td>
													<h2 class="table-avatar">
                                                    <a href="profile.html">{{$category->titre}}</a>
                                                    </h2>
                                                </td>
												<td> 
												<form action="{{route('categories.destroy',$category->id)}}" method="POST" >
													@method('DELETE')
													@csrf
													<div class="actions"> <button class="btn btn-sm bg-danger-light mr-2" >Delete</button></div>
												</form>
													
												</td>
												{{-- <td>
													
													<form action="{{route('edit',$category->id)}}" method="GET">
														@csrf
														<div class="actions"> <button class="btn btn-sm bg-success-light mr-2" >modifier</button></div>
														
													</form>
												</td> --}}
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-staff.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="admin/assets/js/jquery-3.5.1.min.js"></script>
	<script src="admin/assets/js/popper.min.js"></script>
	<script src="admin/assets/js/bootstrap.min.js"></script>
	<script src="admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="admin/assets/plugins/raphael/raphael.min.js"></script>
	<script src="admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="admin/assets/plugins/datatables/datatables.min.js"></script>
	<script src="admin/assets/js/script.js"></script>
</body>

</html>