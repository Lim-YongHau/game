@extends('layouts.master')
@section('title')
Insert Product
@endsection
@section('content')

<div class="row">
    <div class="col-md-10" style="text-align:center">
	<div class="card">
	<h4 class="card-title">Insert Product</h4>
<div class="card-body">


<form class="subform"  method="post" action="{{ route('addProduct.store') }}" enctype="multipart/form-data">
{{ csrf_field() }} 

		<div class="form-group">
		<label for="name" class="label"><h5>Title</h5></label>
		<input type="text" name="title" id="title">
		</div>
	
	
		<div class="form-group">
		<label for="ProductCategory_id" class="label"><h5>Product Category ID</h5></label>
		<input type="radio"  name="ProductCategory_id" id="ProductCategory_id" type="text" value="Normal">Normal
		<input type="radio"  name="ProductCategory_id" id="ProductCategory_id" type="text" value="Discount">Discount
		<input type="radio"  name="ProductCategory_id" id="ProductCategory_id" type="text" value="Hot">Hot 
		</div>

		<div class="form-group">
		<label for="category_id" class="label"><h5>Category ID</h5></label>
		<input type="radio"  name="category_id" id="category_id" type="text" value="Game">Game
		<input type="radio"  name="category_id" id="category_id" type="text" value="Equipment">Equipment
		<input type="radio"  name="category_id" id="category_id" type="text" value="Doll">Doll 
		<input type="radio"  name="category_id" id="category_id" type="text" value="Surrounding">Surrounding 
	</div>

	<div class="form-group">
		<label for="Quantity" class="label"><h5>Quantity</h5></label>
		<input name="Quantity" id="Quantity" type="text" />
		</div>
		<div class="form-group">
		<label for="price" class="label"><h5>Price</h5></label>
		<input name="price" id="price" type="text" />
	</div>
	<div class="form-group">
		<label for="Description" class="label"><h5>Description</h5></label>
		<textarea name="Description" id="Description"></textarea>
	</div>
	<p>
		Select image to upload:
		<input type="file" name="product-image" id="fileToUpload">
	</p>
	<p>
		<input type="submit" name="insert" value="Insert">
	</p>
</form>
</div>

</div>
</div>
</div>
@endsection