jQuery(document).ready(function() {
  jQuery('.x-navbar').addClass("startHead");
});



jQuery(function() {
    var header = jQuery(".startHead");
    jQuery(window).scroll(function() {    
        var scroll = jQuery(window).scrollTop();
    	console.log('headerFunction');
        if (scroll >= 500) {
            header.removeClass('startHead').addClass("darkHeader");
        } else {
            header.removeClass("darkHeader").addClass('startHead');
        }
    });
});