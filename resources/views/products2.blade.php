@extends('layouts.app')

@section('content')

<div class="container">   
    <div class="row">
    @foreach($products as $product)   
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                    <img class="pic-1" style="width:auto ,hight:auto,panding:15px" src="{{ asset('images/') }}/{{$product->image}}" >
                   
                        
                    </a>
                    <ul class="social">
                        <li><a href="{{ route('product.detail', ['id' => $product->id]) }}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                       
                        <li><a href="{{ route('product.detail', ['id' => $product->id]) }}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">{{$product->ProductCategoryID}}</span>
                    <span class="product-discount-label">20%</span>
                </div>
               
                <div class="product-content">
                    <h3 class="title">{{$product->name}}</a></h3>
                    <div class="price">RM {{$product->price}} 
                        <span>$20.00</span>
                    </div>
                    
                    <a class="add-to-cart" href="{{ route('product.detail', ['id' => $product->id]) }}">+ Add To Cart</a>
                    
                    
                </div>
            </div>
        </div> 
        @endforeach 
        </div> 
                           
           
          
		</div>
        <div class="text-center">
			{{ $products->links() }}
        </div> 
@endsection                