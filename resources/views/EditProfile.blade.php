@extends('layouts.app')

@section('title')
Edit-Profile | Game Time
@endsection

@section('content')

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="card">
<div class="card-header">
<h1>Edit User Profile</h1>
</div>
     <div class="card-body">
     <div class="row">
     <div class="col-md-6">
    <form action="/profile-update/{{ $users->id }}" method="POST">
    {{ csrf_field() }} 
    {{ method_field('PUT') }} 

    <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" value="{{ $users->name }}" name="username">
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" value="{{ $users->email }}" name="email">
  </div>

  <div class="form-group">
    <label >Phone</label>
    <input type="text" class="form-control" value="{{ $users->phone }}" name="phone">
  </div>

  <div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control" value="{{ $users->address }}" name="address">
  </div>
  
  <button type="submit" class="btn btn-success">Update</button>
  <a href="/UserProfile" class="btn btn-danger">cancel</a>
    </form>
     </div>
     </div>
     </div>
   </div>
  </div>
 </div>
</div>

@endsection

@section('scripts')
@endsection