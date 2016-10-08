<?php mh_before_footer(); ?>
<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) { ?>
<footer class="mh-footer">
	<div class="mh-container mh-container-inner mh-footer-widgets mh-row clearfix">
		<?php if (is_active_sidebar('footer-1')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-1">
				<?php dynamic_sidebar('footer-1'); ?>
			</div>
		<?php } ?>
		<?php if (is_active_sidebar('footer-2')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-2">
				<?php dynamic_sidebar('footer-2'); ?>
			</div>
		<?php } ?>
		<?php if (is_active_sidebar('footer-3')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-3">
				<?php dynamic_sidebar('footer-3'); ?>
			</div>
		<?php } ?>
		<?php if (is_active_sidebar('footer-4')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-4">
				<?php dynamic_sidebar('footer-4'); ?>
			</div>
		<?php } ?>
	</div>
</footer>
<!-- -->
<nav class="mh-footer-nav"><div class="mh-container mh-container-inner clearfix"><div class="menu-footer-container">
<ul id="menu-footer" class="menu">
<li id="menu-item-252" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-252"><a href="http://localhost/thealpham/prava-za-polzvane">Права за ползване</a></li>
<li id="menu-item-253" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-253"><a href="http://localhost/thealpham/za-nas">За нас</a></li>
<li id="menu-item-254" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-254"><a href="http://localhost/thealpham/sitemap/">Карта на сайта</a></li>
<li id="menu-item-255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255"><a href="http://localhost/thealpham/kontakti">Контакти</a></li></ul></div></div></nav>
<!-- -->
<?php } ?>
<div class="mh-copyright-wrap">
	<div class="mh-container mh-container-inner clearfix">
		<p class="mh-copyright"><?php printf(__(' %1$s &copy; АЛФА МЪЖ. Всички права запазени | WordPress Theme by %2$s', 'mh-magazine-lite'), date("Y"), '<a href="' . esc_url('http://www.mhthemes.com/') . '" rel="nofollow">MH Themes</a>'); ?></p>
	</div>
</div>
<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>