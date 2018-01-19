<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">	
	<div class="box-s-b">
		<ul>
			<li><label>
				<span class="screen-reader-text"><?php echo _x( '', 'label', 'jointswp' ) ?></span>			
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'BUSCAR', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( '', 'jointswp' ) ?>" />
			</label></li>			
		</ul>
	</div>
</form>