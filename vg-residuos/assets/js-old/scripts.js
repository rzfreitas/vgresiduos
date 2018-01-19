jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

});

/*SCROLL TO TOP*/
jQuery(document).ready(function(){ 
	jQuery(window).scroll(function(){ 
		if (jQuery(this).scrollTop() > 100) { 
			jQuery('#scroll').fadeIn(); 
				} else { 
					jQuery('#scroll').fadeOut(); 
				} 
			}); 
	jQuery('#scroll').click(function(){ 
		jQuery("html, body").animate({ scrollTop: 0 }, 600); 
			return false; 
		}); 
});

/* REDIRECIONA */
document.getElementById("botao_form").onclick = function() {
redirect();
};	
		
function redirect(){
    var name = jQuery('#name').val();
    var email =  jQuery('#email').val();
	alert("Obrigado! Você está sendo direcionado para a plataforma de Consultoria On-Line...");
    window.location = 'https://portal.sgionline.com.br/ra?name='+name+"&email="+email+"&data=TEST DRIVE";
    return false;
}

/* PULA PRO CONTEUDO*/
jQuery(document).ready(function() {
  jQuery(".jumper").on("click", function( e ) {

    e.preventDefault();

    jQuery("body, html").animate({ 
      scrollTop: jQuery( jQuery(this).attr('href') ).offset().top 
    }, 2000);

  });
})