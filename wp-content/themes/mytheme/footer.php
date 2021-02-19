
<div class="container">
<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col col-sm-9">
				<?php
					dynamic_sidebar('footer_area_two');
				?>							
                </div>				
		    	<ul class="social-list col-sm-3">
							<li href="#facebook"><i class="fab fa-facebook-square"></i></li>
							<li href="#twitter"><i class="fab fa-twitter-square"></i></li>
							<li href="#pinterest"><i class="fab fa-pinterest-square"></i></li>
							<li href="#instagram"><i class="fab fa-instagram-square"></i></li>
							<li href="#skype"><i class="fab fa-skype"></i></li>
							<li href="#googleplus"><i class="fab fa-google-plus-square"></i></li>
				</ul>			
				<div>	
				<?php
					dynamic_sidebar('footer_area_one');
				?>
				</div>	
			</div>			
		</div>
       
     </footer>
</div>  
<?php
	wp_footer();
?>

</body>
</html> 