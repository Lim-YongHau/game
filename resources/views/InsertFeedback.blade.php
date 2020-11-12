@extends('layouts.app')  
@section('content')

<script src="{{ asset('js/feedback.js') }}" defer></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div style="text-align:center"> 
<form class="subform"  method="post" action="{{ route('addFeedback.store') }}" enctype="multipart/form-data">
{{ csrf_field() }} 
   <h1>Insert Feedback</h1>

   <div class="form-group" id="rating-ability-wrapper">
	    <label class="control-label" for="rating">
	    <span class="field-label-header">How about the website services ?</span><br>
	    <span class="field-label-info"></span>
	    <input type="hidden" id="selected_rating1" name="feedback1" value="" required="required">
	    </label>
	    <h2 class="bold rating-header" style="">
	    <span class="selected-rating1">0</span><small> / 5</small>
	    </h2>
	    <button type="button" class="btnrating1 btn btn-default btn-lg" data-attr="1" id="rating-star1-1">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating1 btn btn-default btn-lg" data-attr="2"  id="rating-star1-2">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating1 btn btn-default btn-lg" data-attr="3"  id="rating-star1-3">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating1 btn btn-default btn-lg" data-attr="4" id="rating-star1-4">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating1 btn btn-default btn-lg" data-attr="5"  id="rating-star1-5">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	</div>

	<div class="form-group" id="rating-ability-wrapper">
	    <label class="control-label" for="rating">
	    <span class="field-label-header">How about the delivery services ?</span><br>
	    <span class="field-label-info"></span>
	    <input type="hidden" id="selected_rating2" name="feedback2" value="" required="required">
	    </label>
	    <h2 class="bold rating-header" style="">
	    <span class="selected-rating2">0</span><small> / 5</small>
	    </h2>
	    <button type="button" class="btnrating2 btn btn-default btn-lg" data-attr="1"  id="rating-star2-1">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating2 btn btn-default btn-lg" data-attr="2"  id="rating-star2-2">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating2 btn btn-default btn-lg" data-attr="3"  id="rating-star2-3">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating2 btn btn-default btn-lg" data-attr="4"  id="rating-star2-4">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating2 btn btn-default btn-lg" data-attr="5"  id="rating-star2-5">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	</div>

	<div class="form-group" id="rating-ability-wrapper">
	    <label class="control-label" for="rating">
	    <span class="field-label-header">How about the product quality?</span><br>
	    <span class="field-label-info"></span>
	    <input type="hidden" id="selected_rating3" name="feedback3" value=""  required="required">
	    </label>
	    <h2 class="bold rating-header" style="">
	    <span class="selected-rating3">0</span><small> / 5</small>
	    </h2>
	    <button type="button" class="btnrating3 btn btn-default btn-lg" data-attr="1"  id="rating-star3-1">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating3 btn btn-default btn-lg" data-attr="2"  id="rating-star3-2">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating3 btn btn-default btn-lg" data-attr="3"  id="rating-star3-3">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating3 btn btn-default btn-lg" data-attr="4"  id="rating-star3-4">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating3 btn btn-default btn-lg" data-attr="5"  id="rating-star3-5">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	</div>
	
	
	<p>
	<span class="field-label-header">Extra Feedback ? *</span><br>
	    
		<textarea type="text" id="feedback" name="feedback" rows="3" cols="40" value="" required="required"></textarea>
		
		
        
		
	</p>
	

	<p>
		<input type="submit" name="insert" value="Insert">
	</p>
</form>
</div>
@endsection