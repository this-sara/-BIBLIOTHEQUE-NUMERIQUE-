<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables/datatables.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}"> </head>
	

<body>
	@include('components.navbar')
		@include('components.sidebar')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">All Rooms</h4> <a href="add-room.html" class="btn btn-primary float-right veiwbutton">Add Room</a> </div>
								@if (session()->has('message'))
                        <x-alert type="success">
                            <li>{{session()->get('message')}}</li> 
                        </x-alert>
                        @endif
						</div>
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
												<th>titre</th>
                                                <th>image</th>
												<th>Auteur</th>
                                                <th>nbre_exemplaires</th>
                                                <th>date edition</th>
												<th>editeur</th>
												<th>description</th>
												<th>categorie_id</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($livres as $livre)
											<tr>
												<td>{{$livre->titre}}</td>
												<td>
													<h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('storage/'.$livre->image)}}" alt="User Image"></a>
                                                    <a href="profile.html">image</a>
                                                    </h2>
                                                </td>
													<td>{{$livre->auteur}}</td>
													<td>{{$livre->nbre_exemplaires}}</td>
													<td>{{$livre->date_edition}}</td>
													<td>{{$livre->editeur}}</td>
													<td>{{$livre->description}}</td>
													{{-- <td>{{$livre->categorie->titre}}</td> --}}
                                                			
                                                <td> 
                                                    <form action="{{route('books.destroy',$livre->id)}}" method="POST" >
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="actions"> <button class="btn btn-sm bg-danger-light mr-2" >Delete</button></div>
                                                    </form> 
                                                </td>

                                                <td>
													<form action="{{route('books.edit',$livre->id)}}" method="GET">
														@csrf
														<div class="actions"> <button class="btn btn-sm bg-success-light mr-2" >modifier</button></div>
													</form>
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
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
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
	<script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/script.js')}}"></script>
</body>

</html>