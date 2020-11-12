@extends('layouts.app')
@section('content') 

<script>
function Cal() {
	
	var prices = document.getElementsByName('price[]');
	
	var total=0;
	
	var cboxes = document.getElementsByName('item[]');    
	var len = cboxes.length;	    
	for (var i=0; i<len; i++) {        
		if(cboxes[i].checked){	//calculate if checked		
			subtotal=parseFloat(prices[i].value)+parseFloat(total);	}					
	}
	
	
	total=subtotal+total;
	
	document.getElementById('amount').value=total.toFixed(2);
    
}
</script>


<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">

        <form  method="post" action="{{ route('create.order') }}" >
			{{ csrf_field() }}

            <table class="table table-hover bg-light text-dark">
                <thead align="center">
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th >Price</th>
                        <th> Estimated shipping</th>
                        <th>Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

                @foreach($carts as $cart)
                    <tr>
                    <td><input type="checkbox" name="item[]" value="{{$cart->cid}}" onchange="Cal()" /></td>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ asset('images/') }}/{{$cart->image}}" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$cart->name}}</h4>
                                <h5 class="media-heading"> by Nentendo</h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="text" class="form-control" id="qty" value="{{$cart->qty}}">
                        </td>
                        @php
							$subtotal = ($cart->qty*$cart->price)+5;
						@endphp
                        <td class="col-sm-1 col-md-1 text-center"><strong>RM{{$cart->price}}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>RM 5 </strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>RM{{$subtotal}}</strong></td>
                        <input type="hidden" value="{{$subtotal}}" name="price[]" id="price[]"/>

                        <td class="col-sm-1 col-md-1">
                        <a href="{{ route('delete.cart', ['id' => $cart->cid]) }}" 
                   class="btn btn-danger" onclick="return confirm('Confirm Delete?')">Remove</a>
                            
                       </td>
                    </tr>

                    @endforeach
                   
                  
                    
                    <tr>
                        <td>   </td>
                        
                        <td><strong>Estimated shipping</strong> </td>
                        <td class="text-right"><strong>RM 5 per one product</strong></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>   </td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Subtotal</h3></td>
                        <td><h6>RM<input type="text" name="amount" id="amount" value=""></h6></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="/products" class="btn btn-warning">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </a></td>
                        <td>
                        <input class="btn btn-success" type="submit" name="checkout" value="Checkout">
                        </td>
                    </tr>

                    </form>	
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection