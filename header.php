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
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'header_menu',
                        'container' => 'header',
                        'theme_location' => 'main',
                        // 'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                    )
                );
			?>
            <a href="localhost/wordpress/my-account"><p class="mini-text">My Account </br><b>Signup</b> & <b>Login</b></p></a>
                <!-- <a href="#"><img class="icon" src=" <?php  // echo $images_icon_dir . '/person.png'?>" alt="person"></a>
                 -->
            </div>
            <div class="center-shop-menu"></div>
            <div class="right-shop-menu">
                <a href="#"><img class="icon" src="<?php echo $images_icon_dir . '/heart.png'?>" alt="hearth"></a>
                <a href="#"><img class="icon" src="<?php echo $images_icon_dir . '/shop-bag.png'?>" alt="shop-bag"></a>
            </div>
        </div>
    </header>
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