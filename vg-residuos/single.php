<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns p-t-50 padding-right p-t-c" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php setPostViews(get_the_ID()); ?>
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->
		
		<div class="large-4 columns p-t-30 p-t-c">
			<!--h4 class="text-center medium-offset-1 fontbranca" id="titulo-colunista">Colunistas</h4>
			<div class="colunistas text-center medium-offset-1">							
					<div class="row collapse">
						<div class="medium-6 columns"><a href="http://www.vgresiduos.com.br/wordpress/author/deivison/"><img src="http://www.vgresiduos.com.br/wp-content/uploads/2016/12/deivison-pedroza-verde-ghaia.jpg"></img></div>
						<div class="medium-6 columns" id="colunistas-small"><small class="font-preta"><strong>Deivison Pedroza</strong><br>Presidente do Grupo Verde Ghaia</small></a></div>
				</div>
			</div--><br>
			<h4 class="text-center fontbranca" id="titulo-colunista">E-books Grátis</h4>		
			<div class="colunistas">
				<div class="ebook-blog">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/E-book-vg-residuos.png" alt="melhor plataforma gestão resíduo" /><br>
					<a class="new-button-round green-button" href="http://vgresiduos.com.br/ebooks/Mercado-de-Res%C3%ADduos-em-expans%C3%A3o.pdf" target="_blank">BAIXAR E-BOOK GRÁTIS</a>
				</div>
			</div>
			
			<h4 class="text-center fontbranca" id="titulo-colunista">Saiba mais</h4>
			<div class="colunistas">			
				<?php
				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>				
						<div class="row">
						<div class="large-6 columns"><a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('thumbnail'); ?> </a></div>
						<div class="large-6 columns text-left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><strong><?php the_title(); ?></strong></a></div>
						</div><br>
				<?php }
				wp_reset_postdata(); ?>
			</div>
		</div>
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>