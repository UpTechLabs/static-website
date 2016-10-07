<?php
$filenames = array(
	'overview',
	'call-to-action',
	'our-story',
	'our-values',
	'our-team',
	'cta-bemoreawesome',
);

foreach ( $filenames as $filename ) {
	include( $filename . '.php' );
}