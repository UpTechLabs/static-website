<?php

define( 'DEV_ENV', false );
$site_url = DEV_ENV === true ? 'http://uptechlabs.dev' : 'https://uptechlabs.io';

$version = '0.0.11';

$assets_dir    = '/assets';
$og_image      = $assets_dir . '/images/social/UpTechLabs-og.png';
$twitter_image = $og_image;

require_once( 'src/nav.php' );