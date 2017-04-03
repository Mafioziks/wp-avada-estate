var region = jQuery('#region select');

region.on('change', function () {
	if (jQuery(this).val() == 'Riga') {
		jQuery('#residental').css({'display': 'block'});
	} else {
		jQuery('#residental').css({'display': 'none'});
		jQuery('#residental select')[0].selectedIndex = 0;
	}
});