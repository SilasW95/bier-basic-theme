


jQuery(document).ready(function($) {

    /* Site nav opener 
    -------------------------------------------*/
    jQuery('.navOpener').click(function() {
        if ( jQuery( "#wrapper" ).is( ".open" ) ){
            jQuery(this).addClass('.sideCloser'); 
            jQuery('#wrapper').removeClass('open');
        }
        else{
            jQuery('#wrapper').addClass('open'); 
            jQuery(this).removeClass('.sideCloser'); 
        }
        
        
        //jQuery('#overlay').fadeIn(300);
    });
    jQuery('#overlay').click(function() {
        jQuery('#wrapper').removeClass('open');
        //jQuery(this).fadeOut(300);
        
    });
     jQuery('.sideCloser').click(function() {
        jQuery('#wrapper').removeClass('open');
        //jQuery('#overlay').fadeOut(300);
    }); 
    jQuery('#sideNav').click(function() {
        jQuery('#wrapper').removeClass('open');
        //jQuery('#overlay').fadeOut(300);
    }); 
   jQuery(document).keyup(function(e) {
     if (e.keyCode == 27) { // escape key maps to keycode `27`
        jQuery('#wrapper').removeClass('open');
    }
   });
    jQuery('#sideMenu a').click(function() {
        jQuery('#wrapper').removeClass('open');
        //jQuery('#overlay').fadeOut(300);
    });



});



// <script type="text/javascript">
// 	jQuery("[data-fancybox]").fancybox({
// 	});
// </script>
// <script>
//     if(typeof(Swiper) != "undefined" && Swiper !== null) {
//         if(jQuery(window).width() >= 1100){ 
//             var mySwiper = new Swiper('.swiper-container', {
//                 speed: 400,
//                 spaceBetween: 0,
//                 slidesPerView: 4,
//                 pagination: '.swiper-pagination',
//                 paginationClickable: true
//             });   
//         }

//         else{
//             var mySwiper = new Swiper('.swiper-container', {
//                 speed: 400,
//                 spaceBetween: 0,
//                 slidesPerView: 4,
//                 pagination: '.swiper-pagination',
//                 paginationClickable: true
//             });   
//         }
//         mySwiper;
//     }
// </script>