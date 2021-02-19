
<?php
get_header();
?>
   
   <main> 
		<div class="container">
			<?php echo do_shortcode('[slick-slider  dots="false" image_fit="true" variablewidth="false" sliderheight="700"]'); ?>

			<div class="row">
			<h1 class=''> <?php the_title(); ?></h1>
			</div>

			<div class='row about-me-section'>	
				<div class="col-5  ">
							<div class="row">
								<p class="about-me">About Me</p>
							</div>

							<div class="row">
								<ul class="social-list-about-me">
											<li href="#facebook"><i class="fab fa-facebook-square"></i></li>
											<li href="#twitter"><i class="fab fa-twitter-square"></i></li>
											<li href="#pinterest"><i class="fab fa-pinterest-square"></i></li>
											<li href="#instagram"><i class="fab fa-instagram-square"></i></li>
											<li href="#skype"><i class="fab fa-skype"></i></li>
											<li href="#googleplus"><i class="fab fa-google-plus-square"></i></li>
								</ul>
							</div>
				</div>

					<div class="about-me-description col-7"> 
							<p class="verticalLine">Lorem Ipsum is simply dummy text of the 
								printing and typesetting industry. Lorem Ipsum has been the industry's 
								standard dummy text ever since the 1500s, when an unknown printer took a 
								galley of type and scrambled it to make a type specimen book. It has survived 
								not only five centuries, but also the leap into electronic typesetting, 
								remaining essentially unchanged. It was popularised in the 1960s with the
								release of Letraset sheets containing Lorem Ipsum passages, and more recently 
								with desktop publishing software like Aldus PageMaker including versions of 
								Lorem Ipsum.</p> 
					</div>

			</div>
			


			<div class="gallery">
				<div class="gallery__item gallery__item--1">
						<img src="wp-content/themes/mytheme/assets/images/img1.jpg" class="gallery__img" alt="Image 1">
				</div>
				<div class="gallery__item gallery__item--13">
						<img src="wp-content/themes/mytheme/assets/images/img13.jpg" class="gallery__img" alt="Image 13">
				</div>
				<div class="gallery__item gallery__item--3">
						<img src="wp-content/themes/mytheme/assets/images/img3.jpg" class="gallery__img" alt="Image 3">
				</div>
				<div class="gallery__item gallery__item--4">
						<img src="wp-content/themes/mytheme/assets/images/img4.jpg" class="gallery__img" alt="Image 4">
				</div>
				<div class="gallery__item gallery__item--5">
						<img src="wp-content/themes/mytheme/assets/images/img5.jpg" class="gallery__img" alt="Image 5">
				</div>
				<div class="gallery__item gallery__item--6">
						<img src="wp-content/themes/mytheme/assets/images/img6.jpg" class="gallery__img" alt="Image 6">
				</div>
				<div class="gallery__item gallery__item--7">
						<img src="wp-content/themes/mytheme/assets/images/img11.jpg" class="gallery__img" alt="Image 7">
				</div>
				<div class="gallery__item gallery__item--8">
						<img src="wp-content/themes/mytheme/assets/images/img8.jpg" class="gallery__img" alt="Image 8">
				</div>
				<div class="gallery__item gallery__item--9">
						<img src="wp-content/themes/mytheme/assets/images/img9.jpg" class="gallery__img" alt="Image 9">
				</div>
				<div class="gallery__item gallery__item--10">
						<img src="wp-content/themes/mytheme/assets/images/img10.jpg" class="gallery__img" alt="Image 10">
				</div>
			</div>
                   
			<?php
			if( have_posts() ){
				while( have_posts()){
					the_post();
					the_content();
				}
			}
			?>
		</div>
	</main>

 <?php
 get_footer();
 ?>       