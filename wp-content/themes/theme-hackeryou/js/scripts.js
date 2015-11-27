$(function(){

	// nav slide function

	$('.fa-bars').on('click', function(){
		$('nav').slideDown(200);
	});

	$('.fa-times').on('click', function(){
		$('nav').slideUp(200);
	});

	//end of nav slide function


      //start of hidden box

      $('.hidden').addClass('hidePopup');


      $('.thumbnail a').on('click', function(e){
            e.preventDefault();
            var popupClassName = $(this).attr('data-popup')
            $('.'+popupClassName).removeClass('hidePopup');
      });

      $('.close').on('click', function(){
            // $('.hidden').hide();
            $('.hidden').addClass('hidePopup');
      })

      //end of hidden box

});