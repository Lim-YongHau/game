@extends('layouts.master')

@section('title')
Register Roles 
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h4 class="card-title">Registered Roles
                <a href="/register" class="btn btn-primary float-right">Add</a>
                </h4>
                <div class="">
              

             </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="text-primary font-weight-bold" style="background-color: rgba(0,0,255,.1)">
                    <th> ID</th>
                       <th> Name</th>
                       <th> Phone</th>
                       <th> Email </th>
                       <th> User Type </th>
                       <th> Address </th>
                       <th> EDIT </th>
                       <th> DELETE </th>
                    </thead>

                    @foreach($users as $row)
                    <tbody>
                      <tr>
                      <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->email }}</td>
                        <td>-{{ $row->usertype }}</td>
                        <td>{{ $row->address }}</td>
                        
                        <td>
                            <a href="{{ route('edit.register', ['id' => $row->id]) }} " class="btn btn-success">Edit</a>
                        </td>
                        <td>
                        <form action="{{ route('delete.register', ['id' => $row->id]) }}" method="post">
                        {{ csrf_field() }} 
                        {{ method_field('DELETE') }} 
                        <button type="submit" class="btn btn-danger deleteBTN">DELETE</button>
                        </form>
                          
                        </td>
                      </tr>

                      @endforeach
                    
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
          
 </div>

@endsection

@section('scripts')


@endsection

