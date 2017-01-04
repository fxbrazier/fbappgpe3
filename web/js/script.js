$(function(){
    
   /* $('a').onhover(''){
    	$('this').find('hover-box').
    }*/

    $('.btn-danger').click( function(e){

		var r = confirm("Are you sure ?");
		if (r == false) {
			e.preventDefault();
		}
    });

    /*var m = new Masonry($('.grid').get()[0], {
        itemSelector: ".thumbnail"
    });*/
});