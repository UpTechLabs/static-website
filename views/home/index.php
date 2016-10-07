<?php

$filenames = array(
	'overview',
	'about-us',
	'what',
	'cta-bemoreawesome',
);

foreach ( $filenames as $filename ) {
	include( $filename . '.php' );
}