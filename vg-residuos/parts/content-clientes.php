	</div>  <!-- end .main-content -->
</div> <!-- end .off-canvas-wrapper -->

<div class="padding-bottom p-t-70 padding-top-pad-home padding-top-pad-pro-contato p-t-c-50">	
				<?php 
				// check for rows (parent repeater)
				if( have_rows('clientes_por_ramo') ): ?>
					<div id="to-do-lists">
					<?php
					// loop through rows (parent repeater)
					while( have_rows('clientes_por_ramo') ): the_row(); ?>
						<div class="text-center">
							<h3 class="medium-3 medium-centered small-6 small-centered font-marinho ramo"><?php the_sub_field('ramo'); ?></h3>							
						</div>	
					</div>	
					<?php if( have_rows('clientes') ): ?>
		<div class="row bloco-clientes">
			<div class="small-12 medium-12 large-10 large-centered columns text-center padding-top p-b-70 clientes">			
			<?php while( have_rows('clientes') ): the_row(); 				  
				// vars
				$image = get_sub_field('imagem_do_cliente');				
				$link = get_sub_field('link_do_cliente');
				?>				
				<ul>
					<?php if( $link ): ?>
						<a class="no-decoration" href="<?php echo $link; ?>" target="_blank">
					<?php endif; ?>
						<img src="<?php echo $image['url']; ?>" alt="Clientes Verde Ghaia" title="<?php echo $content ?>" />						
					<?php if( $link ): ?>
						</a>
					<?php endif; ?>				
				</ul>
			<?php endwhile; ?>
			</div>
			<?php endif; ?>		
		</div>
		<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
	<?php endif; // if( get_field('to-do_lists') ): ?>	
</div>
				
		
		

