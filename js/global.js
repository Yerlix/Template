require.config({
	baseUrl: "/wp-content/themes/DEMO/js",
	paths: {
		jquery: "//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min"
	},
	shim: {
		// "vendor/Picker/jquery.fs.picker": ["jquery"],
		"vendor/domready/ready.min": ["jquery"]
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

// require(['jquery', 'vendor/Picker/jquery.fs.picker'], 
(function($) {
	"use strict";

	var DEMO = {
		init: function() {
			DEMO.focusInput();
			DEMO.dressPickers();
		},

		focusInput: function() {
			$('input[type="text"], input[type="tel"], input[type="email"], textarea').on('focus', function() {
		    $(this).closest('.form-item').addClass('focus');
		  }).on('blur', function() {
		    $(this).closest('.form-item').removeClass('focus');
		  });
		},

		dressPickers: function() {
			$("input[type=radio], input[type=checkbox]").picker();
		}
	};

	// Trigger actions when DOM is ready
	require(['vendor/domready/ready.min'], function (domReady) {
	  domReady(function () {
		$(DEMO.init);
	  });
	});
});