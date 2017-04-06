setOnChange('#region', '#residental', 'Rīga');
setOnChange('#estate_type', '#estate_serie', 'Dzīvoklis');

function setOnChange(source, target, showFor) {
	var s = jQuery(source).children('select');

	s.on('change', function () {
		if (jQuery(this).val() == showFor) {
			jQuery(target).css({'display': 'block'});
		} else {
			jQuery(target).css({'display': 'none'});
			jQuery(target).children('select')[0].selectedIndex = 0;
		}
	});
}