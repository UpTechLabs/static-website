<header class="site__header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
	<div class="wrap">
		<div class="site__title" itemprop="headline">
			<a href="<?php echo $site_url; ?>" class="no-border-bottom"><img class="site__logo" src="<?php echo $assets_dir; ?>/images/UpTechLabs-Full-Logo.png" width="250px" height="56px" alt="UpTech Labs - Unlocking WordPress community innovation, revenue, and growth potential"></a>
			<p class="site__description" itemprop="description">We unlock your innovation, revenue, and growth potential....by empowering you to be more awesome.</p>
		</div>
		<nav class="site__menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<ul class="sitenav__menu menu">
				<li class="sitenav__item<?php render_active_nav_class( 'about', $page ); ?>"><a href="<?php echo $site_url; ?>/about">About</a></li>
				<li class="sitenav__item<?php render_active_nav_class( 'education', $page ); ?>"><a href="<?php echo $site_url; ?>/education">Education</a></li>
				<li class="sitenav__item<?php render_active_nav_class( 'products', $page ); ?>"><a href="<?php echo $site_url; ?>/products">Products</a></li>
				<li class="sitenav__item twitter"><a href="https://twitter.com/UpTechLabs"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="screen-reader-text">Twitter</span></a></li>
			</ul>
		</nav>
	</div>
</header>