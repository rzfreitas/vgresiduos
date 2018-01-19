jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

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

function scrollToElement(selector, offset){

	jQuery("html, body").animate({

            scrollTop: jQuery(selector).offset().top + offset + 'px'

        }, 'fast');	

}

/* YOUTUBE SEM IFRAME*/
!function(){for(var e=document.querySelectorAll(".ytb"),t=0;t<e.length;t++){var n="https://img.youtube.com/vi/"+e[t].dataset.embed+"/sddefault.jpg",r=new Image;r.src=n,r.addEventListener("load",function(){e[t].appendChild(r)}()),e[t].addEventListener("click",function(){var e=document.createElement("iframe");e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen",""),e.setAttribute("src","https://www.youtube.com/embed/"+this.dataset.embed+"?rel=0&showinfo=0&autoplay=1"),this.innerHTML="",this.appendChild(e)})}}();
