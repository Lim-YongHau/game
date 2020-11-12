jQuery(document).ready(function($){
	    
	$(".btnrating1").on('click',(function(e) {
	
	var previous_value = $("#selected_rating1").val();
	
	var selected_value = $(this).attr("data-attr");
	$("#selected_rating1").val(selected_value);
	
	$(".selected-rating1").empty();
	$(".selected-rating1").html(selected_value);
	
	for (i = 1; i <= selected_value; ++i) {
	$("#rating-star1-"+i).toggleClass('btn-warning');
	$("#rating-star1-"+i).toggleClass('btn-default');
	}
	
	for (ix = 1; ix <= previous_value; ++ix) {
	$("#rating-star1-"+ix).toggleClass('btn-warning');
	$("#rating-star1-"+ix).toggleClass('btn-default');
	}
	
	}));
		
});

jQuery(document).ready(function($){
	    
	$(".btnrating2").on('click',(function(e) {
	
	var previous_value = $("#selected_rating2").val();
	
	var selected_value = $(this).attr("data-attr");
	$("#selected_rating2").val(selected_value);
	
	$(".selected-rating2").empty();
	$(".selected-rating2").html(selected_value);
	
	for (i = 1; i <= selected_value; ++i) {
	$("#rating-star2-"+i).toggleClass('btn-warning');
	$("#rating-star2-"+i).toggleClass('btn-default');
	}
	
	for (ix = 1; ix <= previous_value; ++ix) {
	$("#rating-star2-"+ix).toggleClass('btn-warning');
	$("#rating-star2-"+ix).toggleClass('btn-default');
	}
	
	}));
		
});

jQuery(document).ready(function($){
	    
	$(".btnrating3").on('click',(function(e) {
	
	var previous_value = $("#selected_rating3").val();
	
	var selected_value = $(this).attr("data-attr");
	$("#selected_rating3").val(selected_value);
	
	$(".selected-rating3").empty();
	$(".selected-rating3").html(selected_value);
	
	for (i = 1; i <= selected_value; ++i) {
	$("#rating-star3-"+i).toggleClass('btn-warning');
	$("#rating-star3-"+i).toggleClass('btn-default');
	}
	
	for (ix = 1; ix <= previous_value; ++ix) {
	$("#rating-star3-"+ix).toggleClass('btn-warning');
	$("#rating-star3-"+ix).toggleClass('btn-default');
	}
	
	}));
		
});

