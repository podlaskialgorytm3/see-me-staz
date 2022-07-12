<?php $images_icon_dir = get_template_directory_uri() . '/assets/images'?>
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
            <a href="<?php echo get_permalink()."/my-account" ?>"><img class="icon" src=" <?php  echo $images_icon_dir . '/person.png'?>" alt="person"></a>
            <a href="<?php echo get_permalink()."/my-account" ?>"><p class="mini-text">My Account </br><b>Signup</b> & <b>Login</b></p></a>
            </div>
            <div class="center-shop-menu"></div>
            <div class="right-shop-menu">
                <a href="#"><img class="icon" src="<?php echo $images_icon_dir . '/heart.png'?>" alt="hearth"></a>
                <a href="#"><img class="icon" src="<?php echo $images_icon_dir . '/shop-bag.png'?>" alt="shop-bag"></a>
            </div>
        </div>
    </header>
            <div class="hamburger-icon">
                <div class="hamburger-icon__bar"></div>
                <div class="hamburger-icon__bar"></div>
                <div class="hamburger-icon__bar"></div>
            </div>
           <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'main',
                        'container' => 'nav',
                        'theme_location' => 'main',
                    )
                );
			?>
  