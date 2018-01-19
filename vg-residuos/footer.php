				<?php if(!is_singular( 'post' ) && !is_page('Blog')){?>
					<?php get_template_part( 'parts/content', 'noticias' ); ?>
				<?php }?>
                
				<footer class="footer" role="contentinfo">
					<div id="inner-footer">
					
						<div class="row padding-top p-b-30">
							<div class="small-12 medium-4 large-4 columns">	
								<br><h3><i class="fa fa-phone"></i> (31) 2127-9137 </h3>
							</div>	
							<div class="small-12 medium-4 large-4 columns p-b-c p-t-c">	
								<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/logo-vg-footer.png" alt="Verde Ghaia Logo"> </a>
							</div>							
							<div class="small-12 medium-4 large-4 columns end p-b-c">
							  <br>															
								<a class="icon-link round facebook fill" href="https://www.facebook.com/verdeghaia" target="_blank"><i class="fa fa-facebook"></i></a>							
								<a class="icon-link round linkedin fill" href="https://www.linkedin.com/company-beta/1959430/" target="_blank"><i class="fa fa-linkedin"></i></a>
								<a class="icon-link round twitter fill" href="https://twitter.com/verdeghaia" target="_blank"><i class="fa fa-twitter"></i></a>
								<a class="icon-link round google-plus fill" href="https://plus.google.com/103021621222845476497" target="_blank"><i class="fa fa-google-plus"></i></a>							
								<a class="icon-link round youtube fill" href="https://www.youtube.com/user/canalverdegaia?sub_confirmation=1" target="_blank"><i class="fa fa-youtube"></i></a>
								<!--a class="icon-link round instagram fill" href="https://instagram.com/vgconsultoriaonline" target="_blank"><i class="fa fa-instagram"></i></a-->
							</div>
						</div>				
                        								
						<div class="row">
							
							<div class="small-12 medium-5 large-2 columns footer-column">	
								<ul class="contact text-center">
									<b><p>LINKES ÚTEIS</p></b>
									<li><a href="<?php echo get_home_url(); ?>/biblioteca" target="_blank"> Biblioteca VG </a></li>
									<li><a href="http://www.abnt.org.br/ " target="_blank"> ABNT </a></li>
									<li><a href="http://www.iso.org/iso/home.html" target="_blank"> ISO </a></li>                                       
									<li><a href="https://sogi8.sogi.com.br/" target="_blank"> soGI8 </a></li>                                        		
									<li><a href="http://vgresiduos.com.br/" target="_blank"> VG Resíduos </a></li>
									<li><a href="http://deivisonpedroza.com.br/" target="_blank"> Deivison Pedroza </a></li>	
									<li><a href="http://palestrantesfamosos.org" target="_blank"> Palestrantes Famosos </a></li>
									<li><a href="http://futurelegis.sogi.com.br/" target="_blank"> FutureLegis </a></li>
								</ul>
							</div>                                
                            
							<div class="small-12 medium-5 large-2 columns footer-column">	
								<ul class="contact">	  
									<strong><p>CONHEÇA A VERDE GHAIA</p></strong>
									<li><a href="https://www.verdeghaia.com.br/" target="_blank"></i> Verde Ghaia Grupo </a></li>
									<li><a href="http://www.vgresiduos.com.br/" target="_blank"></i> VG Resíduos </a></li>
									<li><a href="https://www.consultoriaiso.org/" target="_blank"> Consultoria Online </a></li>
									<li><a href="http://oksigeno.org.br/" target="_blank"> Instituto Oksigeno </a></li>									
									<li><a href="http://vgriscolegal.com.br/site/" target="_blank"> VG Risco Legal </a></li>
									<li><a href="http://www.vgbioenergia.com.br/" target="_blank"> VG Bio Energia </a></li>
								</ul>	
							</div>
                            
							<div class="small-12 medium-5 large-2 columns footer-column">
								<ul class="contact">
									<strong><p>CONSULTORIAS / CERTIFICAÇÕES</p></strong>
									<li><a href="http://www.consultoriaiso.org/iso-9001/o-que-e-iso-9001/" target="_blank">ISO 9001</a></li>
                                    <li><a href="http://www.consultoriaiso.org/iso-14001/o-que-e-iso-14001/" target="_blank">ISO 14001</a></li>
                                    <li><a href="http://www.consultoriaiso.org/iso-22000/o-que-e-iso-22000/" target="_blank">ISO 22000</a></li>
                                    <li><a href="http://www.consultoriaiso.org/ohsas-18001/o-que-e-ohsas-18001/" target="_blank">OHSAS 18001</a></li>
                                    <li><a href="http://www.consultoriaiso.org/iso-9001/migracao-para-empresas-certificadas-iso-9001-2015/" target="_blank">Migração ISO 9001 versão 2015</a></li>
								</ul>
							</div>
                            
                            <div class="small-12 medium-5 large-2 columns footer-column">
							  <ul class="contact font-verde">
								<p class="font-preta"><b>FRANQUIAS</b></p>
								<li>Norte Fluminense - RJ</li>
								<li>Central Mineira - MG</li>
								<li>Porto Alegre - RS</li>
								<li>Guarulhos - SP</li>
								<li>Recife - RE</li>
								<li>Dourados - MS</li>
								<li>Campinas - SP</li>
								<li>Serra - ES</li>
								<li>Ilhéus - BA</li>
							  </ul>
							</div>
                            
							<div class="small-12 medium-5 large-2 columns end footer-column">
							  <ul class="contact">									
								<span><b>MATRIZ BELO HORIZONTE</b></span><li><a href="https://goo.gl/maps/4tG1jKQm38U2" target="_blank">Rua General Dionísio Cerqueira, nº 315, Gutierrez, Belo Horizonte/MG – CEP: 30441-063</a></li>
								<span><b>REGIONAL SÃO PAULO</b></span><p class="font-verde">Av Brigadeiro Luiz Antônio, n° 2909, Sala 64/65, Jardim Paulista/SP - CEP: 01401-000</p>
							  </ul>
							</div>
						
                     	</div>
                		<?php get_template_part('parts/content', 'formularios'); ?>
					</div>
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->	
				
		<div class="rowfull copyright">
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<p>© Copyright 2017 - <strong><a href="https://www.verdeghaia.com.br" target="_blank">Grupo Verde Ghaia</a></strong> - Todos os direitos reservados.</p>
				</div>
			</div>
		</div>
		
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5a4f7667d7591465c70682f6/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
		
		<!-- BEGIN JIVOSITE CODE {literal}
		<script type='text/javascript'>
		(function(){ var widget_id = 'uINaeWMTLx';var d=document;var w=window;function l(){
		var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
		{/literal} END JIVOSITE CODE -->				

		<?php wp_footer(); ?>		

	</body>
</html> <!-- end page -->