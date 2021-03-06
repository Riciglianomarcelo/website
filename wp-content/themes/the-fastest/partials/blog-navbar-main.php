<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top mediumnavigation">
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>">
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-black.png" alt="logo">
	</a>
	<!-- End Logo -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
       <?php
       wp_nav_menu([
         'menu'            => 'Blog Header Menu',
         'theme_location'  => 'blog-header',
         'container'       => 'div',
         'container_id'    => 'navbarResponsive',
         'container_class' => 'collapse navbar-collapse',
         'menu_id'         => false,
         'menu_class'      => 'navbar-nav ml-auto',
         'depth'           => 2,
         'fallback_cb'     => 'bs4navwalker::fallback',
         'walker'          => new WPAS\Utils\BS4Navwalker()
       ]);
       ?>
		<!-- End Menu -->
		<!-- Begin Search -->
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
		</form>
		<!-- End Search -->
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->