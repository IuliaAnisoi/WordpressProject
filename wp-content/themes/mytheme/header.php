<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog PhotoGraphy Template">
	<link rel="shortcut icon" href="wp-content/themes/mytheme/assets/images/logo.png"/>

	<!-- CSS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">


	<?php
		wp_head();
	?>

</head> 

<body>
    
    <div class="container">
		<header class="header">	 
			<div class="container">
				<div class="row">	 	
					<div class="logo col-sm-4">  
						<img class="logo" src="wp-content/themes/mytheme/assets/images/logo.png" alt="logo"/> 
							<a class="site-title" href="index.html"></a>

							<?php echo get_bloginfo('name')?>
	    			</div>
					<div class="col-sm-8">
						<?php 
							wp_nav_menu(
								array(
									'menu' => 'primary',
									'container' => '',
									'theme_location' => 'primary',
									'items_wrap' => '<ul id="" class="navbar">%3$s</ul>'
								));
						?>
					</div>

				</div>
			</div>
		</header>
	</div>

    

