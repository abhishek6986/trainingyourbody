<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!--<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">-->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href='http://fonts.googleapis.com/css?family=Changa+One|Raleway:400,600,700|Lato:400,700|Roboto:400,700,500' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>	<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) {return;}  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=164446820299615";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>

			<!-- header -->
			<header class="container-fluid header">
           		<div class="container">
                   <div class="col-md-6 col-sm-6">
                   <?php //get_option_tree( 'header_logo'); ?>
                   <?php
				   if(get_option_tree( 'header_logo')){?>
				   <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php echo get_option_tree( 'header_logo'); ?>" /></a>
				   <?php }else{?>
				   <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_img.png" /></a>
				   <?php }?>
                   
                   			
                   </div>
                    <div class="col-md-5 pull-right cll_no_head">
                   		<h3 class="contact_no"><?php
				   if(get_option_tree( 'phone_number')){?>
				   <?php echo get_option_tree( 'phone_number'); ?>
				   <?php }else{?>
				   (305) 404-5756
				   <?php }?></h3>

                   	<?php if(get_option_tree( 'email_address')){?>
                   		<a href="mailto:<?php echo get_option_tree( 'email_address'); ?>" class="mail_to"><?php echo get_option_tree( 'email_address'); ?></a>
				    <?php }else{?>
				   		<a href="mailto:info@trianingyourbody.com" class="mail_to">info@trainingyourbody.com</a>
				    <?php }?>
                   </div>
                   <div class="clearfix clearfix_mob"></div>
                   
                   		<nav  role="navigation" class="navbar navbar_top navbar-default">
                     <div class="navbar-header">
           					 <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           			 <a href="#" class="navbar-brand">Menu</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        			<div id="navbarCollapse" class="collapse navbar-collapse">
                    <?php wp_nav_menu(array('menu' => 'Main Menu','menu_class' => "main_menu")); ?>
                   		<!--<ul class="main_menu">
                        		<li><a href="">HOME</a></li>
                                <li><a href="">TRAINERS </a></li>
                                <li><a href="">LOCATIONS</a></li>
                                <li><a href="">PROGRAMS</a></li>
                                <li><a href="">RATES</a></li>
                                <li><a href="">CONTACT</a></li>
                          </ul>-->
       				 </div>
               
                    </nav>
                   
                   
                   
                </div>
            </header>
			<!-- /header -->
