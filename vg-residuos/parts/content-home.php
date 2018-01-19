  </div>
</div>

<section>
<div class="banner-home" id="img-banner">    
  <div class="row v-center p-t-c p-b-c">
    <h2 class="columns">Nós conectamos os geradores de resíduos aos principais tratadores e fornecedores do Brasil. E o melhor: sem custo para você!</h2>
    <div class="large-6 columns">
      <a class="botao-conversao gera" data-toggle="animatedModal-gerador">SOU UM GERADOR E QUERO ENCONTRAR UM FORNECEDOR</a>
    </div>
    <div class="large-6 columns">
      <a class="botao-conversao forn" data-toggle="animatedModal-tratador">SOU UM TRATADOR E QUERO ENCONTRAR MAIS CLIENTES</a>
    </div>
  </div>
</div>
</section>

<section>
<div class="row p-t-20 p-b-20 clientes-home">
<?php $images = get_field('clientes');
  if( $images ): 
    echo '<div id="slider" class="flexslider">';
      echo '<ul class="slides">';
        foreach( $images as $image ):
          echo '<li>';
            echo '<img src="'.$image['url'].'" alt="'.$image['alt'].'" />';
          echo '</li>';
        endforeach;
      echo '</ul>';
    echo '</div>';
  endif; ?>
</div>
</section>

<section>
<div class="bgcolor-grey">
  <div class="row p-t-50 p-b-50">  
    <div class="small-12 medium-12 large-5 columns text-justify">
      <h1 class="font-verde"> O que é o VG Resíduos? </h1>
      <p> O <strong>VG Resíduos</strong> é um sistema, totalmente on-line, que possibilita a Gestão completa dos Resíduos de qualquer tipo de organização – da geração até a destinação final. O sistema apresenta metodologia baseada na <strong>Política Nacional de Resíduos</strong> e demais legislações pertinentes ao assunto, e traz funcionalidades específicas para o controle das áreas geradoras, dos processos, dos prestadores de serviços e dos documentos. Evite multas, notificações ambientais e reduza os custos de seus resíduos! </p>
      <div class="p-t-20">
        <a class="botao-conversao rowfull text-center" data-toggle="animatedModal-contato">TESTAR GRÁTIS O VG RESÍDUOS</a>
      </div>
    </div>

    <div class="small-12 medium-12 large-6 columns p-t-30">
      <div class="wrapper">
        <div class="ytb" data-embed="ifIxHSUF4Eo">
          <div class="play-button"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section>
<div class="row p-b-50 p-t-30 p-t-c p-b-c text-center">
  <h2 class="font-verde columns p-b-20">Conheça as funcionalidades da Plataforma de Gestão de Resíduos</h2>	
  <div class="large-4 columns">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dashboard-vgresiduos.png" alt="dashboard Plataforma Gestão Resíduos" />
    <h3>Dashboard</h3>
    <p class="text-justify">Acompanhe sua <strong>gestão de resíduos e o processo de certificação</strong> pelo nosso Dashboard. Nele é possível visualizar a quantidade gerada versus a quantidade destinada dos seus resíduos. O sistema informa também as licenças que estão vencidas e prestes a vencer.</p>     
  </div>
  <div class="large-4 columns">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mercado-residuos-vgresiduos.png" alt="mercado dos resíduos" />
    <h3>Mercado de Resíduos</h3>
    <p class="text-justify">Encontre melhores <strong>tratadores e fornecedores</strong> para destinar seus resíduos. Com essa funcionalidade você pode acompanhar as olicitações enviadas para o Mercado de Resíduos, as que já retornaram o seu fornecedor ideal e as que estão pendentes.</p>     
  </div>
  <div class="large-4 columns">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/relatorios-vgresiduos.png" alt="relatórios da Plataforma de Gestão de Resíduos" />
    <h3>Relatórios</h3>
    <p class="text-justify">Disponibilizamos os vários relatórios para uma melhor <strong>gestão da sua operação</strong>. Por exemplo, com o relatório de geração por área você pode criar estratégias de redução da geração de resíduos. Geramos também os principais relatórios que precisam ser enviados para os órgãos ambientais com o <strong>Inventário CONAMA 313</strong> e o <strong>Inventário Ibama</strong>.</p>     
  </div>
</div>
</section>

<!-- <div class="row p-t-30 p-b-50 text-center">
      <h2>Baixe grátis os nossos e-books:</h2>
      <div class="ebook-home">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/E-book-vg-residuos.png" alt="melhor plataforma gestão resíduo" /><br>
        <a class="new-button-round green-button" href="http://vgresiduos.com.br/ebooks/Mercado-de-Res%C3%ADduos-em-expans%C3%A3o.pdf" target="_blank">BAIXAR E-BOOK GRÁTIS</a>
      </div>
</div> -->

<div class="rowfull faixa-conversion p-t-c p-b-c">
	<div class="row p-t-20 p-b-20 t-c-c">
    	<div class="small-12 medium-6 large-9 columns text-left fontbranca block-conversion t-c-c p-b-c">
    		<h2 class="text-left"><strong>Conheça mais sobre a plataforma!</strong></h2>
      </div>
        <div class="small-12 medium-6 large-3 columns">
        	<a class="new-button-round" data-toggle="animatedModal-contato">EXPERIMENTE O VG RESÍDUOS</a>
        </div>
    </div>
</div>

<script>
   jQuery(document).ready(function() {
    jQuery('.flexslider').flexslider({
      animation: "slide",
      animationLoop: true,
      itemWidth: 120,
      itemMargin: 15,
      controlNav: false,
      maxItems: 7
    });
  });
</script>