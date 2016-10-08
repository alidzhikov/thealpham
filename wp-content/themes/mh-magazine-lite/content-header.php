<div class="mh-header-mobile-nav clearfix"></div>

<!--adding preheader -->


<div class="mh-preheader"><div class="mh-container mh-container-inner mh-row clearfix"><nav class="mh-header-nav mh-col-2-3 clearfix"><div class="menu-header-container"><ul id="menu-header" class="menu"><li id="menu-item-238" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-238"><a target="_blank" href="http://www.mhthemes.com/themes/mh/magazine/">Theme Features</a></li><li id="menu-item-239" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-239"><a target="_blank" href="http://www.mhthemes.com/themes/showcase/">Showcase</a></li><li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-240"><a href="http://demo.mh-themes.com/magazine/contact/">Contact</a></li></ul></div></nav><nav class="mh-social-icons mh-social-nav mh-col-1-3 clearfix"><div class="menu-social-header-container">

<span class="social-icons">
<a target="_blank" href="https://www.facebook.com/MHthemes"><span class="fa-fb-icon"><i class="fa fa-facebook 2x"></i></span><span class="screen-reader-text">Facebook</span></a>
</span>

</div></nav></div></div>
<!--ending the preheader -->
<header class="mh-header">
	<div class="mh-container mh-container-inner mh-row clearfix">
		<?php mh_magazine_lite_custom_header(); ?>
	</div>
	<div class="mh-main-nav-wrap">
		<nav class="mh-main-nav mh-container mh-container-inner clearfix">
			<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
		</nav>
	</div>
</header>