<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
										
    <section class="entry-content" itemprop="articleBody">
		<?php if (is_page(15)) { get_template_part('parts/content', 'home'); }?>
		<?php if (is_page(5)) { get_template_part('parts/content', 'contato'); }?>
		<?php if (is_page(7)) { get_template_part('parts/content', 'posts'); }?>
        <?php if (is_page(26)) { get_template_part('parts/content', 'clientes'); }?>
        <?php if (is_page(233)) { get_template_part('parts/content', 'gestaofornecedores'); }?>
        <?php if (is_page(236)) { get_template_part('parts/content', 'mercadoresiduos'); }?>
		<?php if (is_page(268)) { get_template_part('parts/content', 'gerenciamentoresiduos'); }?>

	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
					
</article> <!-- end article -->