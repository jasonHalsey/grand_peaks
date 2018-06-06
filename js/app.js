jQuery(document).ready(function() {
	 phone_swap();
});

jQuery( window ).resize(function() {
	phone_swap();
});

function phone_swap(){
	if (Modernizr.mq('only screen and (max-width: 769px)')) {
		jQuery('.last_menu_contact').replaceWith('<li id="menu-item-101" class="contact-btn fa fa-lg fa-phone last_menu_contact menu-item menu-item-type-custom menu-item-object-custom menu-item-101"><a href="tel:1-562-867-5309"><span>Contact</span></a></li>');
	}
}