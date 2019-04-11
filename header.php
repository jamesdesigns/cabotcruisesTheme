<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cabot Cruises<?php wp_title(); ?></title>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" >
<link href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet">
    
    
<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>
<!-- HEADER STARTS HERE -->
<div id="headerWrapper">
	<header class="clearfix">
		<figure class="logo">
				<img src="/sliders/CC-Logo-LG.png" alt="Cabot Cruises Logo" srcset="/sliders/CC-Logo-LG.png 1x, 
				/sliders/CC-Logo-MD.png 2x, /sliders/CC-Logo-SM.png 3x">
				<figcaption><i>"Explore the Caribbean today!"</i></figcaption>
				</figure>

        <div class="telephone">
            <a href="tel:801-555-1234">
                <i class="fas fa-phone-square"></i>
                <span>866-577-1000</span></a>
        </div><!-- end phone -->
    </header>
</div>
	
    
<!-- NAV STARTS HERE -->
<div id="navWrapper">
	<nav class="clearfix">

  		<button id="hamburgerBtn"></button>
		
		<?php wp_nav_menu(array('menu_id' => 'primaryNav')); ?> 
<!--
            <ul id="primaryNav">
                <li class="current-menu-item"><a href="#">Home</a></li>
								<li><a href="#">Cruises</a></li>
								<li><a href="#">Book</a></li>
                <li class="menu-item-has-children"><a href="#">Agent</a>
                    <ul>
                    <li><a href="#">Jay Willardson</a></li>
                    <li><a href="#">Lori Reynolds</a></li>
                    <li><a href="#">Jennifer Ward</a></li>
                    </ul>
                </li>
			</ul>
-->
			<div class="socialIconsTop">
				<span>
					<a href="#"><i class="fab fa-facebook-square"></i></a>&nbsp;&nbsp;
					<a href="#"><i class="fab fa-youtube-square"></i></a>&nbsp;&nbsp;
					<a href="#"><i class="fab fa-instagram"></i></a>&nbsp;
				</span>
			</div>
        
		<div id="search">
		<form method="get" action="">
			<input class="sfield" type="search" name="s" placeholder="Search...">
			<input class="sbtn" type="submit" value="">
			</form>
	</div>
	</nav>
</div>

<!-- MAIN STARTS HERE -->
<main class="clearfix">




	
