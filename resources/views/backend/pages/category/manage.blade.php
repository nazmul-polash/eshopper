@extends('backend.layout.template')

@section('content')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Manage All Category</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			
				<table class="table table-striped table-bordered" id="table_id">
				  <thead class="t_head">
					  <tr>
						  <th>Serial</th>
						  <th>Category Name</th>
						  <th>Category Description</th>
						  <th>Category Status</th>
						  <th>Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  	@php $i=1; @endphp
				  	@foreach($categorys as $category)
					<tr>
						<td>{{ $i }}</td>
						<td class="center">{{ $category->cat_name }}</td>
						<td class="center">{{ $category->cat_desc }}</td>

						<td class="center">
							@if($category->status==1)
								<span class="badge badge-success">Active</span>
							@elseif($category->status==2)
								<span class="badge badge-important">Inactive</span>
							@endif
						</td>

						<td class="center">
							<a class="label label-success" href="#">
								<i class="halflings-icon white zoom-in"></i>  
							</a>
							<a class="label label-info" href="{{ route('category.edit', $category->id) }}">
								<i class="halflings-icon white edit"></i>  
							</a>
							<a href="#" class="btn-setting label label-important"><i class="halflings-icon white trash"></i></a>
						</td>
						
					</tr>
					@php $i++; @endphp
					@endforeach
					
				  </tbody>
			  	</table>
		  	

		</div>
	</div>
</div>

	<!-- Modal -->
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Are You Sure <strong class="delete"> Delete </strong>This Category??</p>
		</div>
		<div class="modal-footer">
			<a href="{{ route('category.destroy', $category->id) }}" class="btn btn-danger">Confirm</a>
			<a href="#" class="btn btn-success" data-dismiss="modal">Close</a>
		</div>
	</div>
	<!-- Model end -->


@endsection