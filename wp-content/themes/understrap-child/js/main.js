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

	$('.question-row input[type=radio]').on('click', function() {
		var nextcount = $(this).data('nextcount');
		if(nextcount !== 'q-last') {
			$('.question-row').removeClass('active-question');
			$('#' + nextcount).addClass('active-question');
		} else {
			$('.question-row').removeClass('active-question');
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
		}
	});

	$('.reset-quiz').on('click', function() {
		$('input[type=radio]').prop('checked', false);
		$('#q-1').addClass('active-question');
		$('.checklist-quiz').show();
		$('.checklist-result').hide();
		$('.high-risk').hide();
		$('.low-risk').hide();
	});
});