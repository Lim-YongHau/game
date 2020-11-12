@extends('layouts.master')

@section('title')
Admin Order Detail
@endsection

@section('content') 

<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h4 class="card-title">Admin Order Detail</h4>
                <div class="">
                @if (session('status'))
                   <div class ="alert alert-success" role="alert">
                 {{ session('status') }}
                    </div>
               @endif

             </div>
              </div>

			<div class="card-body">
                <div class="table-responsive">

		<table class="table table-hover"  method="post" action="" >
			{{ csrf_field() }}
			<thead class="text-primary font-weight-bold" style="background-color: rgba(0,0,255,.1)">
				
		            <th>Order ID</th>
		            <th>Username</th>
					<th>Address</th>
					<th>Image</th>
					<th>Product Price (unit)</th>
		            <th>Quantity</th>
		            <th>Total Amount</th>
                    <th>Status</th>
					<th>Action</th>
		       
		    </thead>
		        <tbody>	
				
                @foreach($adminorders ?? '' as $adminorder)
		            <tr>
		                <td>{{$adminorder->OrderID}}</td>
						<td><h6>{{$adminorder->name}}</h6>  <em class="text-muted">{{$adminorder->phone}}</em></td>
						<td>{{$adminorder->address}}</td>
						
                        <td><img src="{{ asset('images/') }}/{{$adminorder->image}}" alt="" width="60"></td>

		                <td ><h6>{{$adminorder->productName}}</h6> RM{{$adminorder->price}}</td>
		                <td>{{$adminorder->CartQuantity}}</td>
                        <td>{{$adminorder->amount}}</td>
					    <td>
		                    {{ $adminorder->paymentStatus }}
		                </td>

						<td>
						<a href="{{ route('edit.order', ['id' => $adminorder->OrderID]) }} " class="btn btn-success">Edit</a>
						|<a href="{{ route('delete.order', ['id' => $adminorder->OrderID]) }}" 
                           class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
						
		                </td>
					
		            </tr> 
                @endforeach
				 
				
		
				
		        </tbody>
			
		    </table>
		
		

	</div>
    </div>
@endsection