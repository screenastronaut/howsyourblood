jQuery(document).ready(function($) {
	$('#fullpage').fullpage({
		navigation: true,
		responsiveWidth: 767,
		scrollOverflow: true,
	});

	$('.faq-question').on('click', function() {
		$('.faq-answer').hide();
		$('.faq-question li').removeClass('hover');
		$(this).find('.faq-answer').show();
		$(this).find('li').addClass('hover');
	});

	$('.location-state').change(function() {
		var state = $(this).val();
		if(state === 'all') {
			$('.location-row').show();
		} else {
			$('.location-row').hide();
			$('.location-row[data-state="' + state + '"]').show();
		}
	});
});