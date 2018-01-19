/* jQuery.ajax({
	url: 'https://apiv2.vgresiduos.com.br/api/ResidueResource/GetDefaultResidueList',
	type: 'POST',
	headers: {'X-Requested-With': 'XMLHttpRequest'},
	contentType: 'application/json; charset=utf-8',
	Authorization:'Basic cmZlcnJlaXJhQHZlcmRlZ2hhaWEuY29tLmJyOkAxMjNtdWRhcg==',
	success: function (result) {
	jQuery.each(result.content.list, function(i, item){		
		jQuery('#residuo').append(jQuery('<ul><li>', {
			value: item.ID,
			text : item.Description,
			var : availableTags = [
				result
			  ],
			  
		}));
	});
	}			
}); */

jQuery( function() {
	var suggestions = [];
	jQuery.ajax({
		url: 'https://apiv2.vgresiduos.com.br/api/ResidueResource/GetDefaultResidueList',
		type: 'POST',
		headers: {'X-Requested-With': 'XMLHttpRequest'},
		contentType: 'application/json; charset=utf-8',
		Authorization:'Basic cmZlcnJlaXJhQHZlcmRlZ2hhaWEuY29tLmJyOkAxMjNtdWRhcg==',
		success: function (result) {
		jQuery.each(result.content.list, function(i, item){		
			suggestions.push({
				label: item.Description,
				id: item.ID
			});				  			
		});
		}
	});

    jQuery( "#residuo" ).autocomplete({
		minLength: 3,
		//source
		source: suggestions,
		//select
		select: function(e, ui) {
			jQuery("#idresiduo").val(ui.item.id);			
		}
    });
} );

function redirect_gerador(){
	var name = jQuery('#nome').val();
	var email =  jQuery('#e-mail').val();
	var idresiduo = jQuery('#idresiduo').val();
	var quant = jQuery('#quantidade').val();

	alert("Obrigado! Você está sendo direcionado para a plataforma VG Resíduos.");
	
	var url  = 'https://novo.vgresiduos.com.br/mercado/ra?name='+name+"&email="+email+"&residueId="+idresiduo+"&quantity="+quant;
	
	window.location.replace(url);	
}

function redirect_tratador(){
	var name2 = jQuery('#nome_tratador').val();
	var email2 =  jQuery('#email_tratador').val();

	alert("Obrigado! Você está sendo direcionado para a plataforma VG Resíduos.");
	
	var url  = 'https://novo.vgresiduos.com.br/ra?name='+name2+"&email="+email2;
	
	window.location.replace(url);
}

jQuery(document).ready(function() {
	function setHeight() {
	  windowHeight = jQuery(window).innerHeight();
	  jQuery('#img-banner').css('min-height', windowHeight - '95');
	};
	setHeight();
	
	jQuery(window).resize(function() {
	  setHeight();
	});
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '776' == event.detail.contactFormId ) {
        redirect_gerador();
    }
}, false );

document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '777' == event.detail.contactFormId ) {
        redirect_tratador();
    }
}, false );