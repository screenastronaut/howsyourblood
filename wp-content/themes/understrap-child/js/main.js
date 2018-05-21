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
});