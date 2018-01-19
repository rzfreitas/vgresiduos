<?php get_header(); ?>

<div class="rowfull pattern-01 fontbranca">
	<div class="row p-t-70 p-b-70">
		<div class="large-9 columns">
				
				<header>
		    		<h2 class="page-title fontamarela"><?php the_archive_title();?></h2>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>					 
		    	</header>
				
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<hr>
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
					
				    <a href="<?php the_permalink();?>"><div class="text-center"><button class="button">LEIA MAIS</button></a></div><br>
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		  </div>
		  <div class="large-3 columns text-right">			
				<div id="categories-6" class="widget widget_categories linha-categoria"><h4 class="widgettitle">Categorias</h4>
					<ul>
						<li class="fontbrancas"><a href="http://www.consultoriaiso.org/category/iso-14001/">ISO 14001</a></li><br>
						<li class="linha-categoria"><a href="http://www.consultoriaiso.org/category/iso-22000/">ISO 22000</a></li><br>
						<li class="linha-categoria"><a href="http://www.consultoriaiso.org/category/iso-9001/">ISO 9001</a></li><br>
						<li class="linha-categoria"><a href="http://www.consultoriaiso.org/category/ohsas-18001/">OHSAS 18001</a></li><br>
						<li class="linha-categoria"><a href="http://www.consultoriaiso.org/category/certificacao-iso/">Certificação ISO</a></li><br>							
					</ul>
				</div>
		  </div>	
	</div>
</div>

<?php get_footer(); ?>