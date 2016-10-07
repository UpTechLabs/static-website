<?php

$filenames = array(
	'overview',
	'about-education',
	'know-the-code',
	'know-the-business',
	'cta-bemoreawesome',
);

foreach ( $filenames as $filename ) {
	include( $filename . '.php' );
}