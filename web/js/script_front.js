$(document).ready(function(){

	// FILTRES

	// trigger du click lors l'activation de la touche entrée
	$('.search-input').keydown(function(event){    
	    if(event.keyCode==13){
	       $('.btn-search').trigger('click');
	    }
	});
	// ajout des filtres par hashtag au click de la recherche
	$('.btn-search').click(function(){ 
		var search_value= $(".search-input").val();
		var key_word = search_value.split(" ");
		for (i=0;i<key_word.length;i++){
			$('.results').append('<span class="hashtag"> #'+key_word[i]+'</span>');
		}
		$('.search-input').val("");
		
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


	// CONTENT 
	// construction des carrés et affichage dans le content
	function showData(){
		var objet_photo = [];
	}

	$('.popup').click(function(){ $('.popup').addClass('hidden');});

	// HEADER 
	//  creation event au click du btn enter 
	$('.btn-contest').click(function(){
		document.location.href="http://localhost/fbappgpe3/web/app_dev.php/participate";
	});

	// fonction qui ecrit le titre de la page en fonction du dernier concours
	function titlePage(){
		$('.title-page').html('<h2 class="text-center">'+objet_concours[last_concours]+'</h2>');
	}

	//GALERY
	$('.gallery-img').Am2_SimpleSlider();

	$('#div_facebook').hide(); 
	$('#form_hebergement').change(function(){
	    if($('#form_hebergement').val() == 'facebook') {
	        $('#div_facebook').show();
	        $('#div_local').hide();
	    } else {
	        $('#div_facebook').hide();
	        $('#div_local').show();
	    } 
	});


});