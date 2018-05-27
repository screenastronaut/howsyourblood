jQuery(document).ready(function($) {
	$('#fullpage').fullpage({
		navigation: true,
		responsiveWidth: 960,
		scrollOverflow: true,
	});

	$('.faq-question').on('click', function() {
		if($(this).find('li').hasClass('hover')) {
			$('.faq-answer').hide();
			$('.faq-question li').removeClass('hover');
		} else {
			$('.faq-answer').hide();
			$('.faq-question li').removeClass('hover');
			$(this).find('.faq-answer').show();
			$(this).find('li').addClass('hover');
		}
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

	$('#checklist-submit').on('click', function() {
		if($('fieldset:not(:has(:radio:checked))').length) {
			alert('Please answer all questions on the checklist.');
		} else {
			var yescount = $('.yes-check:radio:checked').length;
			if(yescount > 2) {
				$('.checklist-quiz').hide();
				$('.checklist-result').show();
				$('.high-risk').show();
			} else {
				$('.checklist-quiz').hide();
				$('.checklist-result').show();
				$('.low-risk').show();
			}
			$('html, body').animate({scrollTop:0}, 'fast');
		}
	});
});