<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jokers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">




	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jokers' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php
			//the_custom_logo();
			//if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
			<?php //else : ?>
				<p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p>
			<?php
			//endif;

			//$description = get_bloginfo( 'description', 'display' );
			//if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php //echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			//endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jokers' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>



				<div class="connect_button"><a class="popup-trigger">Connecter</a></div>





		</nav><!-- #site-navigation -->




	</header><!-- #masthead -->

	<div class="popup" style="">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1 id="titreFormConnection">Sign Up for Free</h1>

          <form action="/" method="post">

          <div class="top-row">
            <div class="field-wrap">

              <input placeholder="Firstname" type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">

              <input placeholder="Lastname" type="text" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">

            <input placeholder="Email Adress" type="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">

            <input placeholder="Password" type="password" required autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block"/>Get Started</button>

          </form>

        </div>

        <div id="login">
          <h1 id="titreFormConnection">Welcome Back!</h1>

          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block"/>Log In</button>
             <div class="connexionFacebook">
				<fb:login-button
					scope="public_profile,email"
					onlogin="checkLoginState();">
					Connexion Facebook
				</fb:login-button>
			</div>
          </form>

        </div>

      </div><!-- tab-content -->
      <span class="popup-btn-close">close</span>
	</div> <!-- /form -->

	<div id="content" class="site-content">
