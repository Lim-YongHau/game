@extends('layouts.master')

@section('title')
Products List
@endsection

@section('content') 

<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h4 class="card-title">Products List
              
			   <a href="/insertProduct" class="btn btn-primary float-right">Add</a>
			 
			   </h4>
              </div>
            <div class="card-body">
                <div class="table-responsive">
		    <table class="col-md-12">
			<thead class="text-primary" >
		        
		            <th >ID</th>
                    <th>Image</th>
		            <th>Name</th>
					<th>Product Category</th>
                    <th>Category</th>
		            <th>Quantity</th>
		            <th>Price</th>
                    <th>Action</th>
		       
		    </thead>
		        <tbody>	
                @foreach($products as $product)
		            <tr>
		                <td>{{$product->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$product->image}}" alt="" width="100"></td>
		                <td style="max-width:300px">
		                    <h6>{{$product->name}}</h6>
		                    <em class="text-muted">	
                            {{$product->description}}	                       
		                    </em>
		                </td>
						<td>{{$product->ProductCategoryID}}</td>
						<td>{{$product->categoryID}}</td>
						 
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
		                <td>
		                    <a href="{{ route('edit.product', ['id' => $product->id]) }}" class="btn btn-warning"><i class="fas fa-edit">Edit</i></a> | 
		                    <a href="{{ route('delete.product', ['id' => $product->id]) }}" 
 class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		                </td>
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
		
		<div class="text-center">
			{{ $products->links() }}
        </div>

	</div>
	</div>
	</div>
	</div>
	</div>
   
@endsection

@section('scripts')


@endsection