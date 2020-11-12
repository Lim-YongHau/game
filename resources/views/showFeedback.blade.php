@extends('layouts.master')  

@section('title')
View Feedback
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h4 class="card-title">View Feedback
				<a href="/insertFeedback" class="btn btn-primary float-right">Add</a>
				</h4>
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
		    <table class="col-md-12">
			<thead class="text-primary" >
		        <tr class="thead-dark">
		            <th>User</th>
					<th>Website Services</th>
					<th>Delivery Services</th>
					<th>Product Quality</th>
                    <th>Extra Feedback *</th>
					<th>Action</th>
		            
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($feedbacks as $feedback)
		            <tr>
		                <td>{{$feedback->name}}</td>
						<td>{{$feedback->feedback1}} star</td>
						<td>{{$feedback->feedback2}} star</td>
						<td>{{$feedback->feedback3}} star</td>
		                <td>{{$feedback->feedback}}</td>

						<td> <a href="{{ route('delete.feedback', ['id' => $feedback->id]) }}" 
 class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a></td>
            
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
		
			

	</div>
    </div>
@endsection