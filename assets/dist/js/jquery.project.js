/**
 * Smooth Scroll JavaScript
 *
 * @package     SmoothScroll
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://UpTechLabs.io
 * @license     GNU GPL 2.0+
 */
;(function ( $, window, document, undefined ) {
	'use strict'

	var $body;

	function init() {
		$body = $( 'html, body' );

		$( 'a[href^="#"]' ).on( 'click', function( event ) {
			event.preventDefault();

			smoothScrollHandler( this.hash, event );
		});
	}

	function smoothScrollHandler( target, event ) {
		var $target = $( target );

		if ( typeof $target == "undefined" || ! $target.length ) {
			return false;
		}

		$body.stop().animate({
			'scrollTop': $target.offset().top
		}, 2000, 'swing' );
	}

	$( document ).ready( function () {
		init();
	} );

}( jQuery, window, document ));
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImpxdWVyeS5zbW9vdGgtc2Nyb2xsLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoianF1ZXJ5LnByb2plY3QuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIFNtb290aCBTY3JvbGwgSmF2YVNjcmlwdFxuICpcbiAqIEBwYWNrYWdlICAgICBTbW9vdGhTY3JvbGxcbiAqIEBzaW5jZSAgICAgICAxLjAuMFxuICogQGF1dGhvciAgICAgIGhlbGxvZnJvbVRvbnlhXG4gKiBAbGluayAgICAgICAgaHR0cHM6Ly9VcFRlY2hMYWJzLmlvXG4gKiBAbGljZW5zZSAgICAgR05VIEdQTCAyLjArXG4gKi9cbjsoZnVuY3Rpb24gKCAkLCB3aW5kb3csIGRvY3VtZW50LCB1bmRlZmluZWQgKSB7XG5cdCd1c2Ugc3RyaWN0J1xuXG5cdHZhciAkYm9keTtcblxuXHRmdW5jdGlvbiBpbml0KCkge1xuXHRcdCRib2R5ID0gJCggJ2h0bWwsIGJvZHknICk7XG5cblx0XHQkKCAnYVtocmVmXj1cIiNcIl0nICkub24oICdjbGljaycsIGZ1bmN0aW9uKCBldmVudCApIHtcblx0XHRcdGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG5cblx0XHRcdHNtb290aFNjcm9sbEhhbmRsZXIoIHRoaXMuaGFzaCwgZXZlbnQgKTtcblx0XHR9KTtcblx0fVxuXG5cdGZ1bmN0aW9uIHNtb290aFNjcm9sbEhhbmRsZXIoIHRhcmdldCwgZXZlbnQgKSB7XG5cdFx0dmFyICR0YXJnZXQgPSAkKCB0YXJnZXQgKTtcblxuXHRcdGlmICggdHlwZW9mICR0YXJnZXQgPT0gXCJ1bmRlZmluZWRcIiB8fCAhICR0YXJnZXQubGVuZ3RoICkge1xuXHRcdFx0cmV0dXJuIGZhbHNlO1xuXHRcdH1cblxuXHRcdCRib2R5LnN0b3AoKS5hbmltYXRlKHtcblx0XHRcdCdzY3JvbGxUb3AnOiAkdGFyZ2V0Lm9mZnNldCgpLnRvcFxuXHRcdH0sIDIwMDAsICdzd2luZycgKTtcblx0fVxuXG5cdCQoIGRvY3VtZW50ICkucmVhZHkoIGZ1bmN0aW9uICgpIHtcblx0XHRpbml0KCk7XG5cdH0gKTtcblxufSggalF1ZXJ5LCB3aW5kb3csIGRvY3VtZW50ICkpOyJdLCJzb3VyY2VSb290IjoiL3NvdXJjZS8ifQ==
