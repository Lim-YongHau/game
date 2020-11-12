@extends('layouts.master')
@section('title')
Edit Product
@endsection
@section('content')


<div class="row">
    <div class="col-md-10" style="text-align:center">
	<div class="card">
	<h4 class="card-title">Edit Product</h4>
<div class="card-body">

<form class="subform"  method="post" action="{{ route('update.product') }}" enctype="multipart/form-data">
{{ csrf_field() }} 
@foreach($products as $product)


<div class="form-group">
		<h6><label for="ID" class="label text-info ">Product ID</label>
		<input type="text" name="ID" id="ID" value="{{$product->id}}" readonly>
		</h6>
	</div>
	<div class="form-group">
	<h6><label for="name" class="label text-info">Title</label>
		<input type="text" name="title" id="title" value="{{$product->name}}"> 
		</h6>
	</div>
	
	<h6><div class="form-group text-info" align="center" >Product Category ID
		<select  name="ProductCategory_id" id="ProductCategory_id" class="form-control"style="width:300px ">
			<option value="Game" >Game</option>
            <option value="Equipment">Equipment</option>
            <option value="Doll">Doll</option>	
			<option value="Surrounding">Surrounding</option>
			</select> 
			
	</div>
	</h6>
	<h6><div class="form-group text-info" align="center" >Category ID
			<select  name="category_id" id= "category_id" class="form-control"  style="width:300px;">
			<option value="Normal">Normal</option>
            <option value="Discount">Discount</option>
            <option value="Hot">Hot</option>	
			</select> 
			
	</div>
	</h6>


	
	<div class="form-group">
	<h6><label for="Quantity" class="label text-info">Quantity</label>
		<input name="Quantity" id="Quantity" type="text" value="{{$product->quantity}}" />
		</h6>
	</div>
	<div class="form-group">
	<h6>	<label for="price" class="label text-info">Price</label>
		<input name="price" id="price" type="text" value="{{$product->price}}" />
		</h6>
	</div>
	<div class="form-group">
	<h6><label for="Description" class="label text-info">Description</label>
		<textarea name="Description" id="Description">{{$product->description}}</textarea>
		</h6>
	</div>
	<div class="form-group text-info">
		Select image to upload:
		<input type="file" name="product-image" id="fileToUpload">
		
	</div>
	<p>
		<input type="submit" name="edit" value="Edit">
	</p>
    @endforeach
</form>
</div>

@endsection