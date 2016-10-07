<?php

$filenames = array(
	'overview',
	'about-products',
	'impressux',
	'genesisfactory',
	'dummycontent',
	'cta-bemoreawesome',
);

foreach ( $filenames as $filename ) {
	include( $filename . '.php' );
}