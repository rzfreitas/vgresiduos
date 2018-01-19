	</div>  <!-- end .main-content -->
</div> <!-- end .off-canvas-wrapper -->

<div class="rowfull quemsomosquadro quemsomosquadro-xs hide-for-small-only custom-bloco">
	<div class="quemsomosquadro-color-overlay text-center"></div>
</div>

<div class="padding-bottom p-t-70">
	<div class="row padding-left">
		<h1 class="font-verde"> Conheça a Verde Ghaia </h1>
	</div>
	<div class="row">
		<div class="small-12 medium-12 large-6 columns">			
			<?php  the_content() ;?>
		</div>
		<div class="small-12 medium-12 large-6 columns">
			<div class="flex-video">
				<iframe width="420" height="315" src="//www.youtube.com/embed/xoNT9t1asNY" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<!--div class="padding-bottom padding-top pattern-02">			
		<h1 class="text-center">Nossa Equipe *</h1><br>		
		
		<?php if( have_rows('equipe') ): ?>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns text-center padding-top equipe">			
				
			<?php while( have_rows('equipe') ): the_row(); 

				// vars
				$image = get_sub_field('imagem_equipe');
				$content = get_sub_field('nome_equipe');
				$link = get_sub_field('link_do_cliente');

				?>				
				<ul>
					<?php if( $link ): ?>
						<a class="no-decoration" href="<?php echo $link; ?>" target="_blank">
					<?php endif; ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $content ?>" title="<?php echo $content ?>" />
						<div><strong><br><?php echo $content; ?></strong></div>
					<?php if( $link ): ?>
						</a>
					<?php endif; ?>				
				</ul>
			<?php endwhile; ?>

			</div>
			<?php endif; ?>		
	</div>
	<h5 class="text-center p-t-50">* Lista não exaustiva</h5>
</div-->

<div class="rowfull vantagens p-t-70 p-b-70 p-t-c p-b-c">
	<h2 class="p-b-70 fontamarela text-center">Prêmios conquistados pelo Grupo Verde Ghaia</h2>
	<div class="row medium-offset-2 fontbranca">		
		<div class="medium-5 columns img-premio text-center">
			<img src="http://i.imgur.com/ta6sa07.png" alt="As pequenas e médias empresas que mais crescem no Brasil - Verde Ghaia" title="As pequenas e médias empresas que mais crescem no Brasil - Verde Ghaia"></img>				
		</div>		
		<div class="medium-5 columns img-premio text-center end">
			<img src="http://i.imgur.com/AWEQMlC.png" alt="Prêmio Latamir - Verde Ghaia" title="Prêmio Latamir - Verde Ghaia"></img>			
		</div>
	</div>
	<div class="row p-b-70 medium-offset-2 fontbranca">		
		<div class="medium-5 columns img-premio text-center">			
			<h5 class="padding-top font-verde"><strong>As empresas que mais crescem no Brasil</strong></h5>
			<h6 class="font-preta">4ª vez consecutiva</h6>		
		</div>		
		<div class="medium-5 columns img-premio text-center end">			
			<h5 class="padding-top font-verde"><strong>Prêmio de seguros brasileiros - LATAMIR</strong></h5>
			<h6 class="font-preta">Troféu: Empresa Altamente Elogiada</h6><h6 class="font-preta">Categoria: Serviços de Auditoria</h6>
		</div>
	</div>
	<div class="row medium-offset-2 fontbranca">		
		<div class="medium-5 columns img-premio text-center">
			<img src="http://i.imgur.com/Rof6RKi.gif" alt="Prêmio Estadão 2015 - Verde Ghaia" title="Prêmio Estadão 2015 - Verde Ghaia"></img>			
		</div>
		<div class="medium-5 columns img-premio text-center end">
			<img src="http://i.imgur.com/zLkNn8y.png" alt="Great Place To Work Minas Gerais - Verde Ghaia" title="Great Place To Work Minas Gerais - Verde Ghaia"></img>			
		</div>		
	</div>
	<div class="row medium-offset-2 fontbranca">		
		<div class="medium-5 columns img-premio text-center">		
			<h5 class="padding-top font-verde"><strong>Prêmio Estadão PME 2015</strong></h5>
			<h6 class="font-preta">Categoria: Minha história de Sucesso</h6>
		</div>
		<div class="medium-5 columns img-premio text-center end">			
			<h5 class="padding-top font-verde"><strong>Great Place To Work</strong></h5>
			<h6 class="font-preta">Melhores empresas para se trabalhar Minas Gerais</h6>
		</div>		
	</div>
</div>

<div class="rowfull">
	<div class="text-center quadro-azul small-12 medium-12 large-12 columns p-t-70 p-b-70">	
		<h2 class="row titulo p-b-70"><b>Para outras informações</b> acesse a página da <strong class="fontamarela">Verde Ghaia</strong></h2>
		<a class="button alert" href="http://www.verdeghaia.com.br/">VERDE GHAIA</a>
		<h3 class="padding-top"> Ou Ligue <i class="fi-telephone"></i> (31) 2127-9137 </h3>
	</div>
</div>

<!-- Modal -->
<div class="reveal" id="animatedModal10" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
	<div class="text-center">
		<div id="solicite-uma-proposta-05a76c968748d68a3ba8"></div>
			<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
			<script type="text/javascript">
			  new RDStationForms('solicite-uma-proposta-05a76c968748d68a3ba8-html', 'UA-70350867-1').createForm();
			</script>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>