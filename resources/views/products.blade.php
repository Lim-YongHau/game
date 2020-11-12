@extends('layouts.app')

@section('content')
		<div class="row">
          @foreach($products as $product)    
                        <div class="col-sm-4"> 
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="p-3 mb-2 bg-danger text-white">{{$product->name}}</h5>
                                    <a href="{{ route('product.detail', ['id' => $product->id]) }}"><img src="{{ asset('images/') }}/{{$product->image}}" alt="" class="img-fluid"></a>
                                    <div class="card-heading"><h4>RM {{$product->price}} <span class="badge badge-pill badge-warning">{{$product->ProductCategoryID}}</span></h4></div>
                                    
                                   
                                    <button style="float:right" class="btn btn-danger btn-xs">Add to Cart</button>
                                </div>
                            </div>
                
                        </div>
                      
           @endforeach  
          
		</div>
        <div class="text-center">
			{{ $products->links() }}
        </div> 
@endsection                