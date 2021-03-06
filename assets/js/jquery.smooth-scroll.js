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