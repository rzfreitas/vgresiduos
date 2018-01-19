<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header p-t-c">	
		<h1 class="entry-title single-title font-verde" itemprop="headline"><?php the_title(); ?></h1>
		<h5><strong>Categoria(s): <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?></strong></h5>
    </header> <!-- end article header -->
					
    <section class="entry-content p-t-c font-preta text-justify" itemprop="articleBody">		
		<?php the_content(); ?>
	</section> <!-- end article section -->
	<?php get_template_part( 'parts/content', 'byline' ); ?>				
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
		<div class="large-12 columns padding-bottom p-b-c">
			<p>Compartilhe</p>
			<a class="icon-link round facebook fill" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&t=<?php the_title();?>" target="_blank" title="Compartilhar no Facebook"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
			<a class="icon-link round twitter fill" href="http://twitter.com/share?text=%20Sharing%20on%20Twitter&url=<?php the_permalink();?>&hashtags=consultoriaonline,certificaçãoISO,VerdeGhaia" target="_blank" title="Compartilhar no Tweeter"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
			<a class="icon-link round google-plus fill" href="http://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank" title="Compartilhar no Google+"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;
			<a class="icon-link round linkedin fill" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>" target="_blank" title="Compartilhar no LinkedIn"><i class="fa fa-linkedin"></i></a>
		</div>	
			<hr>	
	<div class="p-b-70">

		<?php comments_template(); ?>
		
	</div>
													
</article> <!-- end article -->