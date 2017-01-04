$(document).ready(function(){


	$('.search-input').keydown(function(event){    
	    if(event.keyCode==13){
	       $('#btn-search').trigger('click');
	    }
	});

	$('.btn-search').click(function(){ 
	var search_value= $(".search-input").val();
	$('.results').append('<span class="hashtag"> #'+search_value+'</span>');
	});

	$('.filter_like').on('click', function(){
		filter("like");
	});

	$('.filter_date').on('click', function(){
		filter('date');
	});
	
	$('.filter_myphoto').on('click', function(){
		filter('myphoto');
	});

	function filter(data){
		alert(data);
	}



});