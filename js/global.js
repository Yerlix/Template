require.config({
	baseUrl : '/wp-content/themes/THEME/js',
	paths: {
		jquery: "../bower_components/jquery/dist/jquery.min",
		"domReady": "../bower_components/domready/ready.min"
	},
	shim: {
	}
});

// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

require(['jquery'], function($) {
	// "use strict";

	var theme = {
		init: function() {
			$('.no-js').removeClass('no-js');
		}
	};

	// Trigger actions when DOM is ready
	require(['domReady'], function (domReady) {
	  domReady(function () {
			$(theme.init);
	  });
	});
});