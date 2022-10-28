 $(document).ready(function(){


 	var val1 = 0;

 	$('.navbar-trigger').children("img").click(function(){

 		if(val1==0){
 			$(this).attr("src","images/cross.png");
 		$('.navbar-custom').slideToggle();

 		val1 = 1;
 	
 	}
 	else {
 		$('.navbar-custom').slideToggle();
 		$(this).attr("src","images/hamburger.png");
 		val1 = 0;

 	}
 	})
 })



 $('.scroll-link').on('click', function(event) {
  var target = $(this.getAttribute('href'));
  if (target.length) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 1000);
  }
});



 $(window).scroll(function() {
var $height1 = $(window).scrollTop();
if($height1 > 10) {
 $('body').addClass("header-fixed");

} else {
 $('body').removeClass("header-fixed");
}
});