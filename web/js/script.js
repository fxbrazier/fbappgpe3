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

    /* color theme handler */
    $("#form_second_color_theme").spectrum({
        color: "#f00"
    });

    /* color theme handler */
    $("#form_first_color_theme").spectrum({
        color: "#f00"
    });

    /* Picture grid */
    /*var m = new Masonry($('.grid').get()[0], {
        itemSelector: ".thumbnail"
    });*/
});