@extends('backend.layout.template')

@section('content')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
			
		</div>
		<div class="box-content">

			<form action="{{ route('category.store') }}" method="POST" class="form-horizontal">
				@csrf
			  <fieldset>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Category Name</label>
				  <div class="controls">
					<input type="text" name="cat_name" class="span6 typeahead" id="typeahead" required="required" data-provide="typeahead" data-items="4">
				  </div>
				</div>

				         
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Category Description</label>
				  <div class="controls">
					<textarea name="cat_desc" class="cleditor" id="textarea2" rows="3"></textarea>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="typeahead">Category Status</label>
				  <div class="controls">
					<select name="status" id="">
						<option value="">Please Select The Status</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
					</select>
				  </div>
				</div>

				<div class="form-actions">
				  <input type="submit" name="save" class="btn btn-primary" value="Add New Category">
				  <button type="reset" class="btn btn-danger">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection