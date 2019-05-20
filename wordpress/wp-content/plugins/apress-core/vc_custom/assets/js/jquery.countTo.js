(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
	
		return $(this).each(function () {
				// set options for current element
				var settings = $.extend({}, $.fn.countTo.defaults, {
						from:            $(this).data('from'),
						to:              $(this).data('to'),
						speed:           $(this).data('speed'),
						refreshInterval: $(this).data('refresh-interval'),
						decimals:        $(this).data('decimals'),
						separator: 		 $(this).data('separator'),
				}, options);
	
				// how many times to update the value, and how much to increment the value on each update
				var loops = Math.ceil(settings.speed / settings.refreshInterval),
						increment = (settings.to - settings.from) / loops;
						
						
	
				// references & variables that will change with each update
				var self = this,
						$self = $(this),
						loopCount = 0,
						value = settings.from,
						data = $self.data('countTo') || {};
	
				$self.data('countTo', data);
	
				// if an existing interval can be found, clear it first
				if (data.interval) {
						clearInterval(data.interval);
				}
				data.interval = setInterval(updateTimer, settings.refreshInterval);
	
				// initialize the element with the starting value
				render(value);
	
				function updateTimer() {
						value += increment;
						loopCount++;
	
						render(value);
	
						if (typeof(settings.onUpdate) == 'function') {
								settings.onUpdate.call(self, value);
						}
	
						if (loopCount >= loops) {
								// remove the interval
								$self.removeData('countTo');
								clearInterval(data.interval);
								value = settings.to;
	
								if (typeof(settings.onComplete) == 'function') {
										settings.onComplete.call(self, value);
								}
						}
				}
	
				function render(value) {
						var formattedValue = settings.formatter.call(self, value, settings);
						$self.text(formattedValue);
				}
		});
	};

        $.fn.countTo.defaults = {
                from: 0,               // the number the element should start at
                to: 0,                 // the number the element should end at
                speed: 1000,           // how long it should take to count between the target numbers
                refreshInterval: 100,  // how often the element should be updated
                decimals: 0,           // the number of decimal places to show
                formatter: formatter,  // handler for formatting the value before rendering
				separator: ',',
                onUpdate: null,        // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
        };
		
		function addCommas(settings,nStr){				
				nStr += '';
				x = nStr.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + settings.separator + '$2');
				}
				return x1 + x2;
		}
        function formatter(value, settings) {
                return addCommas(settings,value.toFixed(settings.decimals));
        }
}(jQuery));