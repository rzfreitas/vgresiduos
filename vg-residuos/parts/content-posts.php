	</div>
</div>

<div class="rowfull bgcolor-grey p-t-c">
	<!-- <div class="row p-t-30 p-t-c">
		<div class="large-12 columns recent-news">
			<?php
		  	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		  	$custom_args = array(
			  'post_type' => 'post',
			  'posts_per_page' => 18,
			  'paged' => $paged
			);			
		  	$custom_query = new WP_Query( $custom_args ); ?>

		  <?php if ( $custom_query->have_posts() ) : ?>
			<h1 style="display:none">Notícias Verde Ghaia</h1>
			
			<div class="flexslider box-shadow text-center">
				<ul class="slides">
					<?php
					$args = array(
						'numberposts'        => '10',
						'post_type'          => 'post',
						'post_status'        => 'publish',
						'category__not_in'   => array( 10, 11, 57 )
					);
					$recent_posts = wp_get_recent_posts($args);
					foreach( $recent_posts as $recent ){
						
						echo '<li> <div class="row-eq-height"><div class="large-5 columns nopadding centered hover-zoom"><a href="' . get_permalink($recent["ID"]) . '"><img src="' . get_the_post_thumbnail_url($recent["ID"], '') . '" align="center" width="400" height="200" alt="' . $recent["post_title"] . '"></a></div>';
						echo '<div class="large-7 columns centered titulo-post medium-11 p-t-20 p-b-20"><h2 class="text-left"><strong><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></h2></strong>';
							echo '<div class="left m-t-20"><p> ' . get_excerpt_by_id($recent["ID"]) . '</p></div>';
							echo '<div class="centered m-t-20"><a  href="' . get_permalink($recent["ID"]) . '"> <button class="botao-amarelo">LEIA MAIS</button> </a></div>';
						echo '</div>';
						echo '</div></li>';					
					}
					wp_reset_query();
					?>
				</ul>
			</div>
		</div>
	</div> -->

	<div class="row columns p-t-20 p-b-20 p-t-c p-b-c text-center">
		<?php
		$image = get_field('img_banner');
		if( !empty($image) ): ?>
			<a href="<?php the_field('link_banner'); ?>" target="_blank"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
		<?php endif; ?>
	</div>

	<div class="row">
		<div class="large-8 columns">			
			<h2 class="news">NOTÍCIAS</h2>		
		</div>
		<div class="large-4 columns">			
			<?php get_template_part('searchform') ?>			
		</div>
	</div>

	<div class="row">		
		<div class="large-8 columns">			
			<!-- the loop -->	
			<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>			
				
				<article class="row-eq-height blog-box">					
					<div class="large-5 columns img-post hover-zoom nopadding">							
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('', array( 'alt' => get_the_title(), 'title' => get_the_title() ) ); ?></a>							
					</div>
					<div class="large-7 columns content m-b-c">													
						<div class="titulo-post">
							<h2><strong><a href="<?php the_permalink();?>"><?php the_title(); ?></a></strong></h2>
							<b><small><i class="fa fa-calendar"></i> <?php the_time('j \d\e F \d\e Y') ?></small></b>
						</div>
						
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink();?>"><div class="text-left"><i class="fa fa-long-arrow-right"></i> Continuar lendo</a>						
					</div>
				</article>
				
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->
			<div class="large-12 columns p-b-70">
				<?php
					if (function_exists(custom_pagination)) {
					custom_pagination($custom_query->max_num_pages,"",$paged);
					}
				?>
			</div>

			<?php wp_reset_postdata(); ?>

			<?php else:  ?>			
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>	

		<div class="large-4 columns text-center p-t-15 p-t-c">
			<div class="canal-vg-b m-b-20 side-bar-grid">
				<h2>Mais Lidos</h2>
				<div class="p-t-20">			
					<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=6'); ?>
					<ul>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><br>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
						<?php endwhile; endif; ?>
					</ul>
					<?php wp_reset_query(); ?>
				</div>
			</div>			

			<div class="canal-vg-b">
				<h2>Facebook</h2>
			</div>
			<div class="fb-page m-b-20"				
				data-href="https://www.facebook.com/verdeghaia"
				data-width="380" 
				data-hide-cover="false"
				data-show-facepile="true">
			</div>

			<div class="canal-vg-b m-b-20">
				<h2>Canal Verde Ghaia</h2>				
				<iframe width="370" height="250" src="https://www.youtube.com/embed?max-results=1&controls=0&showinfo=1&rel=0&modestbranding=0&listType=user_uploads&list=canalverdegaia" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				<script src="https://apis.google.com/js/platform.js"></script>

				<div class="g-ytsubscribe" data-channel="canalverdegaia" data-layout="full" data-count="default"></div>
			</div>
			<div class="canal-vg-b m-b-20">
				<h2>Twitter</h2>
				<a class="twitter-timeline" data-height="400" href="https://twitter.com/VerdeGhaia">Tweets by VerdeGhaia</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>
	</div>

</div> <!--gray-b-->

<!-- <script>jQuery(document).ready(function() {jQuery(".flexslider").flexslider({animation:"slide"})});</script> -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

