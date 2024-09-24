<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap-datetimepicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}"> </head>
<body>
	@include('components.navbar')
		@include('components.sidebar')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">edit Book</h3> 
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
						<form action="{{route('books.update',$data->id)}}" method="POST" enctype="multipart/form-data">
							@csrf
                            @method('PUT')
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>titre</label>
										<input class="form-control" type="text" name="titre"  value="{{$data->titre}}"> 
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>auteur</label>
										<input class="form-control" type="text" name="auteur"  value="{{$data->auteur}}"> 
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>editeur</label>
										<input class="form-control" type="text" value="{{$data->editeur}}" name="editeur"> 
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>date_edition</label>
										<div class="cal-icon">
											<input type="date" class="form-control" name="date_edition" value="{{$data->date_edition}}">
									    </div>
									</div>								
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>nbre_exemplaires</label>
										<input class="form-control" type="number" name="nbre_exemplaires" value="{{$data->nbre_exemplaires}}"> 
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>category</label>
										<select class="form-control" id="sel1" name="categorie_id" required>
											<option value="{{$data->categorie_id}}">{{$data->categorie->titre}}</option>
											@foreach ($category as $item)
											 <option value="{{$item->id}}">{{$item->titre}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>image</label>
										<div class="custom-file mb-3">
											<input type="file" class="custom-file-input" id="customFile" name="image" value="{{$data->image}}">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>description</label>
										<textarea class="form-control" rows="5" id="comment" name="description" value="">{{$data->description}}</textarea>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary buttonedit ml-2">Save</button>
				            <button type="button" class="btn btn-primary buttonedit">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset('admin/assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/moment.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/select2.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/raphael/raphael.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/script.js')}}"></script>
	<script>
	$(function(){
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script>
</body>

</html>