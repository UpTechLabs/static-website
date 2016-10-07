<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<meta name="robots" content="noodp,noydir">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="<?php echo $url; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<meta property="og:title" name="og:title" content="<?php echo $title; ?>">
	<meta property="og:locale" name="og:locale" content="en_US">
	<meta property="og:type" name="og:type" content="website">
	<meta property="og:url" name="og:url" content="<?php echo $url; ?>">
	<meta property="og:site_name" name="og:site_name" content="UpTech Labs">
	<meta name="og:description" content="<?php echo $description; ?>">
	<meta property="og:image" content="<?php echo $og_image; ?>">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="twitter:card" name="twitter:card" content="summary_large_image">
	<meta property="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="<?php echo $description; ?>">
	<meta name="twitter:site" content="@UpTechLabs">
	<meta property="twitter:image" content="<?php echo $twitter_image; ?>">
	<meta property="twitter:creator" name="twitter:creator" content="@UpTechLabs">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Lato" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo $assets_dir; ?>/dist/css/style.min.css?ver=<?php echo $version; ?>" type="text/css" media="all">
	<link rel="shortcut icon" href="<?php echo $assets_dir; ?>/images/favicon.ico?ver=0.0.1">
	<link rel="apple-touch-icon" href="<?php echo $assets_dir; ?>/images/apple-touch-icon.png?ver=0.0.1">
	<meta name="google-site-verification" content="74Gkg7z-j_PlfcTqP1VVkHmuTBiTQAe9yDCJYEP8wdg" />
	<?php
	include_once ( 'fixed/google-analytics.html' );
	?>
</head>
<body class="<?php echo $page; ?>">
	<div class="site__container">
		<?php include( 'fixed/header.php' ); ?>
		<main class="site__content" itemscope itemtype="http://schema.org/CreativeWork">
			<?php include( $page . '/index.php' ); ?>
		</main>
		<?php include( 'fixed/footer.php' ); ?>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<script src="<?php echo $assets_dir; ?>/dist/js/jquery.project.min.js?ver=<?php echo $version; ?>"></script>
	</div>
</body>
</html>