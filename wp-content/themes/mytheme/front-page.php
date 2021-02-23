
<?php
get_header();
?>
   
   <main> 
		<div class="container">
			<div class="row">
				<h1 class=''> <?php the_title(); ?></h1>
			</div>

			<?php echo do_shortcode('[slick-slider  show_content="true" dots="false" image_fit="true" variablewidth="false" sliderheight="700"]'); ?>
	
			<div class='row about-me-section'>	
				<div class="col-5">
							<div class="row">
								<p class="about-me">
									<?php
									echo get_the_title(101);
									?>
								 </p>
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

					<div class="about-me-description col-7 verticalLine"> 
					
							<?php
							$content = get_post_field('post_content', $post_id=101);
							echo do_shortcode( $content );
							?>
						
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


            <div class="quotes">
				<?php
				if( have_posts() ){
					while( have_posts()){
						the_post();
						the_content();
					}
				}?>
				</div>
			
			<div class="footergallery ">
				<?php
					$attachments = get_children( array(
						'post_parent' => get_the_ID(), 
						'post_type' => 'attachment', 
						'post_mime_type' =>'image') );
					foreach ( $attachments as $attachment_id => $attachment ) { 
						?>
							<? echo wp_get_attachment_image( $attachment_id, array(425,341));
						
					}
				?>
			</div>
		
		</div>
	</main>

 <?php
 get_footer();
 ?>       