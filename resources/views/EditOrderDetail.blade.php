@extends('layouts.master')

@section('title')
Edit-Order Detail | Game Time
@endsection

@section('content')


<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="card">
<div class="card-header">
<h1>Edit Order Detail</h1>
</div>
     <div class="card-body">
     <div class="row">
     <div class="col-md-6">
    <form action="{{ route('update.order') }}" method="POST">
    {{ csrf_field() }} 
    @foreach($my_orders as $my_order)
    <div class="form-group">
    <label >Order ID</label>
    <input type="text"  id="id"  name="id" class="form-control" value="{{ $my_order->id }}" >
  </div>

  <div class="form-group">
    <label >Username</label>
    <input type="text"  id="name"  name="name" class="form-control" value="{{ $my_order->userID }}" >
    </div>

    <div class="form-group">
    <label >Total Amount</label>
    <input type="text"  id="Amount"  name="Amount" class="form-control" value="{{ $my_order->amount }}" >
    </div>

  <div class="form-group">
    <label >Payment State</label>
    <select name="paymentStatus" value="{{ $my_order->paymentStatus }}" class="form-control">
    <option value="panding">panding</option>
    <option value="process">process</option>
    <option value="delivery">delivery</option>
    <option value="arrived">arrived</option>
    <option value="cancel">cancel order</option>
    </select>
  </div>
  <button type="submit" class="btn btn-success">Update</button>
  <a href="/AdminOrderDetail" class="btn btn-danger">Cancel</a>
    </form>
     </div>
     </div>
     </div>
   </div>
  </div>
 </div>
</div>
@endforeach
@endsection

@section('scripts')
@endsection