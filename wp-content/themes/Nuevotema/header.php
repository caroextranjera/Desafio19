<!DOCTYPE HTML><!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vitrotemp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<?php wp_head() ?>

	</head>
	<body>
		
	
	<div id="page">

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div><img src="/wp-content/themes/Nuevotema/images/logo.png"></div>
					</div>
                   
                    <?php wp_nav_menu(array(
                     'theme_location' => 'superior',
                      'container' => 'div',
                       'container_class' => 'col-xs-10 text-right menu-1',
                        'items_wrap' => '<ul>%3$s</ul>',
                  
                       )); ?>


				</div>
				
			</div>
		</nav>