<?php include("header.php"); ?>
<section>
			<div class="container">
				<div class="textos">
					<?php
		// Start the loop.
						while ( have_posts() ) : the_post();

			// Include the page content template.
						
				the_post();
				the_content();
		 	

			// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
						comments_template();
						endif;

		// End the loop.
						endwhile;
						?>
				</div>
			</div>
</section>
<?php include("footer.php"); ?>
	

	
	
