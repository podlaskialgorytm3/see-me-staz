<?php $images_icon_dir = get_template_directory_uri() . '/assets/images'?>
<?php $burger_menu= get_field("burger_menu") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
    <title>Home - Sarcom Crafter</title>
</head>
<body>
    <header class="header">
        <div class="search"><input placeholder="Search products..." type="search"><img class="find-button" src="/images/magnifer.png" alt=""></div>
        <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            
            if ( has_custom_logo() ) {
                echo '<div class ="logo"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></div>';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
        ?>
        <div class="shop-menu">
            <div class="left-shop-menu">
                <img class="icon" src="<?php echo $images_icon_dir . '/person.png'?>" alt="person">
                <p class="mini-text">My Account </br><b>Signup</b> & <b>Login</b></p>
            </div>
            <div class="center-shop-menu"></div>
            <div class="right-shop-menu">
                <img class="icon" src="<?php echo $images_icon_dir . '/heart.png'?>" alt="hearth">
                <img class="icon" src="<?php echo $images_icon_dir . '/shop-bag.png'?>" alt="shop-bag">
            </div>
        </div>
    </header>
    <div class="nav-menu">
        <div class="burger-menu">
            <img src="<?php echo get_template_directory_uri()."/assets/images/burger-menu.png" ?>" alt="Burger Menu" class="burger-menu-icon icon burger-items">
            <p class="burger-menu-text burger-items bold">Menu</p>
            <div class="burger-main-menu">
                <span class="x"><img class="icon" src="<?php echo get_template_directory_uri()."/assets/images/x.png" ?>" alt=""></span>
                <ul>
                    <li>Home</li>
                    <li>Shop <img src="<?php echo get_template_directory_uri()."/assets/images/plus.png" ?>" class="shop-icon plus" alt="">
                        <ul class="shop-list">
                            <li>Product Category</li>
                            <li>Top rated produckt</li>
                        </ul>
                    </li>
                    <li>Blog <img src="<?php echo get_template_directory_uri()."/assets/images/plus.png" ?>" class="blog-icon plus" alt="">
                        <ul class="blog-list">
                            <li>Left Sidebar</li>
                            <li>Right Sidebar</li>
                            <li>Full Width</li>
                        </ul>
                    </li>
                    <li>Media <img src="<?php echo get_template_directory_uri()."/assets/images/plus.png" ?>" class="media-icon plus" alt="">
                        <ul class="media-list">
                            <li><p class="bold">Gallery</p></li>
                            <li>2 Columns</li>
                            <li>3 Columns</li>
                            <li>4 columns</li>
                        </ul>
                    </li>
                    <li>Shortcode <img src="<?php echo get_template_directory_uri()."/assets/images/plus.png" ?>" class="shortcode-icon plus" alt="">
                        <ul class="shortcode-list">
                            <li><p class="bold">Shortcode Pages</p></li>
                            <li>Accordions & Toggles</li>
                            <li>Buttons</li>
                            <li>Divder</li>
                            <li>Lists</li>
                            <li>Map & Contact</li>
                        </ul>
                    </li>
                    <li>Pages <img src="<?php echo get_template_directory_uri()."/assets/images/plus.png" ?>" class="pages-icon plus" alt="">
                        <ul class="pages-list">
                            <li>FAQs</li>
                            <li>Sitemap</li>
                            <li>Typography</li>
                        </ul>
                    </li>
                    <li>About Us</li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <h1></h1>
           <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'main',
                        'container' => 'nav',
                        'theme_location' => 'main',
                        // 'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                    )
                );
			?>
            <!-- <ul>
                <li>Strona glowna</li>
                <li>Sklep
                    <ul>
                        <li>Product Category</li>
                        <li>Top rated produckt</li>
                    </ul>
                </li>
                <li>Blog
                    <ul>
                        <li>Left Sidebar</li>
                        <li>Right Sidebar</li>
                        <li>Full Width</li>
                    </ul>
                </li>
                <li>Media
                    <ul>
                        <li><p class="bold">Gallery</p></li>
                        <li>2 Columns</li>
                        <li>3 Columns</li>
                        <li>4 columns</li>
                    </ul>
                </li>
                <li>Shortcode
                    <ul>
                        <li><p class="bold">Shortcode Pages</p></li>
                        <li>Accordions & Toggles</li>
                        <li>Buttons</li>
                        <li>Divder</li>
                        <li>Lists</li>
                        <li>Map & Contact</li>
                    </ul>
                </li>
                <li>Pages
                    <ul>
                        <li>FAQs</li>
                        <li>Sitemap</li>
                        <li>Typography</li>
                    </ul>
                </li>
                <li>About Us</li>
                <li>Contact Us</li>
            </ul> -->
    </div>