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
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

	<?php
		wp_head();
	?>

</head> 

<body>
    
    <div class="container">
		<header class="header">	 
			<div class="container">
				<div class="row">	 	
					<div class="logo col-6 pt-lg-4">  
						<img class="logo" src="wp-content/themes/mytheme/assets/images/logo.png" alt="logo"/> 
							<a class="site-title" href="index.html"></a>

							<?php echo get_bloginfo('name')?>
	    			</div>
				
					<?php 
						wp_nav_menu(
							array(
								'menu' => 'primary',
								'container' => '',
								'theme_location' => 'primary',
								'items_wrap' => '<ul id="" class="navbar col-6 pt-lg-4 ">%3$s</ul>'
							));
					?>

				</div>
			</div>
		</header>
	</div>

    
    <main> 
		<div class="container">
				<h1 class="heading"> <?php the_title(); ?></h1>
		</div>			
	</main>
