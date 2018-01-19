<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	
	<div class="large-8 columns">
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?><br>
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="articleBody">
		<div class="text-center"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a></div><br><br>
		<div class="text-justify"><?php the_excerpt('<button class="test">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?></div>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
		
	</footer> <!-- end article footer -->	
	</div>
	
</article> <!-- end article -->