<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Core Stylesheet -->
<!-- <link href="<?php //bloginfo('stylesheet_url');?>" rel="stylesheet"> -->

<!-- Responsive CSS -->
<!-- <link href="<?php //bloginfo('stylesheet_url');?>" rel="stylesheet"> -->
<link href="<?php get_template_directory_uri().'assets/css/responsive.css'?>" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <!-- <a class="navbar-brand" href="index.html"><img src="<?php //echo get_template_directory_uri();?>/core-img/logo.png" alt=""></a> -->
                        <a class="navbar-brand"><?php
          							/** Get Logo Generic Method */
          							the_custom_logo();?>
                      </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                  <?php //$custom_nav = wp_get_nav_menu_items('Social Links Menu');
                                  //var_dump($custom_nav);?>
                                  <?php
/*  ######################### Dummy Start ################################# */
                                  ?>
                                  <?php
                                    // $args = array(
                                    //     'menu'    => 'Social Links Menu',
                                    //     'submenu' => 'Yelp',
                                    // );
                                    /* This is testing */
                                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                           // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
                                    $menuID = $menuLocations['primary']; // Get the *primary* menu ID
                                    $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.

                                  ?>
                                  <?php
/*  ######################### Dummy End ################################# */
                                  ?>

                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buy <i class="fa fa-angle-down" aria-hidden="true"></i></a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <!-- <div class="dropdown-item"><?php //wp_nav_menu( $args ); ?></div> -->
                                        <?php foreach ( $primaryNav as $navItem ) {?>

                                            <?php
                                            echo '<a class="dropdown-item" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';?>
                                        <?php }
                                        // $menu_name = 'buy'; // Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
                                        //
                                        // if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                                        // $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                        //
                                        // $menu_items = wp_get_nav_menu_items($menu->term_id);
                                        //
                                        //
                                        // foreach ( (array) $menu_items as $key => $menu_item ) {
                                        //     $title = $menu_item->title;?>
                                            <!-- <div class="dropdown-item"><?php //echo $title; ?></div> -->
                                        <?php //}
                                      //  }?>

                                        <!-- <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="explore.html">Explore</a>
                                        <a class="dropdown-item" href="listing.html">Listing</a>
                                        <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a> -->

                                    </div>

                                </li>
                                <li class="nav-item dropdown">
                                  <?php
                                  $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                         // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
                                  $menuID = $menuLocations['primary']; // Get the *primary* menu ID
                                  $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
                                  ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                      <?php foreach ( $primaryNav as $navItem ) {
                                          echo '<a class="dropdown-item" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
                                      }?>
                                        <!-- <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="explore.html">Explore</a>
                                        <a class="dropdown-item" href="listing.html">Listing</a>
                                        <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a> -->
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <!-- <a class="nav-link" href="contact.html">Contact</a> -->
                                    <?php $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                           // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
                                    $menuID = $menuLocations['thirdmenu']; // Get the *primary* menu ID
                                    $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.?>
                                    <?php foreach ( $primaryNav as $navItem ) {
                                        echo '<li><a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                                    }?>

                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a href="#">Sign in  or Register</a>
                            </div>
                            <!-- Add listings btn -->
                            <div class="dorne-add-listings-btn">
                                <a href="#" class="btn dorne-btn">Plan Visit</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
