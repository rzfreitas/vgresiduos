<?php get_header(); ?>
	
	<div id="content">
	
		    <main id="main" class="large-12 medium-8 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
	</div> <!-- end #content -->

<?php get_footer(); ?>