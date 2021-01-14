<?php
get_header();
?>

<div class="container">
	<article class="content ">About me
	<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dictum, nisl at euismod vestibulum,
		 lectus velit ultricies dolor, id dignissim dolor erat id ligula. Duis nec augue eu purus commodo porta.
		  Nulla ultrices neque sed leo maximus, eget ultrices lectus tempor. Maecenas dignissim nisl sit amet augue vestibulum faucibus. 
		  In orci lacus, imperdiet et bibendum eu, auctor nec tellus. Vestibulum in sollicitudin turpis, ac porta ligula. 
		  Maecenas semper massa neque, sit amet porta tellus commodo ac. Vestibulum vel lectus dictum, luctus ligula luctus, facilisis urna. 
		  Proin ut sem ultrices, consequat arcu ut, suscipit metus. Vestibulum non hendrerit elit.</p>

	<?php
	if( have_posts() ){
		while( have_posts()){
			the_post();
			the_content();
		}
	}
	?>
</article>
</div>


 <?php
 get_footer();
 ?>       