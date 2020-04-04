<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="grid-container full">
	<div class="top-bar show-for-large">
		<div class="top-bar-left">
			<ul class="menu align-left">
				<li class="button menu-button hollow"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
		</div>
		<div class="top-bar-right">
			<ul class="menu align-right">
				<li><a href="#">About Us</a></li>
	            <li><a href="#">Programs</a></li>
	            <li><a href="#">Events</a></li>
	            <li><a href="#">Blog</a></li>
	            <li><input type="search" placeholder="Search"></li>
      			<li><button type="button" class="button primary">Search</button></li>
			</ul>
		</div>
	</div>
	<div class="top-bar-right float-right show-for-medium-only">
		<ul class="menu">
			<li><button class="menu-icon menu-icon-padded" type="button" data-toggle="off-canvas"></button></li>
			<!-- <li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li> -->
		</ul>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<li><button class="menu-icon menu-icon-padded" type="button" data-toggle="off-canvas"></button></li>
			<!-- <li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li> -->
		</ul>
	</div>
</div>