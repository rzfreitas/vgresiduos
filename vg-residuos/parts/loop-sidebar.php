<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
	
	<header class="article-header">
		<h5><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="articleBody">
		<div class="text-center"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
		
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
		
	</footer> <!-- end article footer -->	
	
	
</article> <!-- end article -->