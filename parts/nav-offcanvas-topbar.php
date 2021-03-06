<!-- By default, this menu will use off-canvas for small
	and a topbar for medium-up -->
	<div class="header" style="background-color: #fff;">
		<div class="row">
			<div class="top-bar" style="background-color: #fff; ">
				<a href="<?php echo home_url(); ?>" id="logo"></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="top-bar" id="top-bar-menu">
			<div class="top-bar-left float-left">
				<ul class="menu show-for-small">
					<!--<li><a href="<?php echo home_url(); ?>" class="show-for-large"><?php bloginfo('name'); ?></a></li>-->
					<li><a href="<?php echo home_url(); ?>" class="hide-for-large">Slag.no</a></li>
				</ul>
			</div>
			<div class="top-bar-left float-left show-for-medium">
				<?php joints_top_nav(); ?>
			</div>
			<div class="top-bar-right float-right show-for-medium">

				<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
					<input type="search" class="search-field top-search" placeholder="Søk..." value name="s" title="Søk etter:">
				</form>
			</div>

			<div class="top-bar-right float-right show-for-small-only">
				<ul class="menu float-right">
					<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
					<li><a data-toggle="off-canvas"><?php _e( 'Meny', 'jointswp' ); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="small-12 columns" style="margin: 1rem 0 0">

		<?php if ( ! is_page('Hjem') && function_exists('yoast_breadcrumb') ) {
		  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
</div>
</div>
