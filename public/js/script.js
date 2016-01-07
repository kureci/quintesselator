(function($) {
	$('.calcButton').on('click', function() {
		var $display = $('#calculatorDisplay');

		if ($display.hasClass('evaluated')) {
			if ($(this).hasClass('number') || $display.hasClass('error')) {
				$display.val('');
				$display.removeClass('error');
			}
			$display.removeClass('evaluated');
		}

		$display.val($display.val() + $(this).val());
		$display.scrollTop($display.get(0).scrollHeight);
	});

	$('.operationButton').on('click', function() {
		var $display = $('#calculatorDisplay');
		var operation = $(this).val();

		var output;
		switch(operation) {
			case "←":
				output = $display.val().slice(0, -1);
				break;
			case "C": 
				output = '';
				break;
			case "AC":
				output = allClear($display);
				break;
			case "=":
				output = calculate($display);
				break;
		}

		$display.val(output);
		$display.scrollTop($display.get(0).scrollHeight);
	});


	function calculate($display) {
		var output;
		var $log = $('#historyLog');

		try {
			output = eval($display.val());
			// no need to add to log if just pressing equals w/o calculation
			if ($display.val() != output) {
				$log.html($log.html() + $display.val()+'='+output + '<br/>');
			}
		} catch (e) {
			output = 'ERROR';
			$display.addClass('error');
		}
		$display.addClass('evaluated');
		return output;
	}

	function allClear($display) {
		$('#historyLog').html('');

		return '';
	}
})(jQuery);