$(document).ready(function() {
	$.ajax({
		url: 'http://www.televerbier.ch/fr/mini-panier.htm', 
		success: function(contenu) {
			$contenuComplete 	= $(contenu);
			$zoneAjax = $contenuComplete.find('#nbProduitMiniPanierAjax'); 
			if ($zoneAjax.length > 0) {
				nbProduitPanierAjax = $zoneAjax.val();
				$(document).find('.aModifierEnAjaxNbProduitPanier1').empty().append(nbProduitPanierAjax);
				$(document).find('.aModifierEnAjaxNbProduitPanier2').empty().append(nbProduitPanierAjax);
			}
		}
	});
})

$(document).on('click','.colorbox-gmap-each',function(event) {
	$.colorbox({href:$(this).attr('data-iframe'),iframe:'true',
	initialHeight:'700px', initialWidth:'900px',width:'900px',height:'500px',maxWidth:'95%', maxHeight:'95%'});
	event.preventDefault();
});
function showModaleDialogTC(selecteur,nameForm,h,w,ancre,langue) {
	var IdProduit = $('#pac_id_tc').attr('value');
	var lg = langue;
	$(selecteur).dialog({
			bgiframe	: true,
			width		: 'auto', 
		    maxWidth	: w,
		    height		: 'auto',
			modal		: true,
			autoOpen	: false,
			fluid		: true,
			buttons: {
				'FERMER': function() {
					$('.'+ nameForm).html('<p align="center" class="r-importantgras"><img src="/images/ajax-loader.gif"></p>');
					$(this).dialog("close");
					}
				}
		});

	$.ajax({
		url: '/' + langue + '/descTC.htm', 
		data: 'IdProduit=' + IdProduit + '&ancre='+ancre,
		dataType: 'html',
		type: 'get',
		beforeSend : function(){
			$('.'+ nameForm).html('<p align="center" >CHARGEMENT / LOADING<br /><img src="/images/ajax-loader.gif"></p>');
		},
		success: function(htmlResponse) {
			$('.'+ nameForm).empty();
			var response = $('#DetailsDescription', htmlResponse).html();
			//alert(htmlResponse.substr(3000,5000));

				$('.'+ nameForm).html('<input type="hidden" name="pac_id_tc" id="pac_id_tc" value="'+IdProduit+'"/>'+response);
			

		}
	});
	
	$(selecteur).dialog('open');
	
}; 
// on window resize run function
$(window).resize(function () {
    fluidDialog();
});

// catch dialog if opened within a viewport smaller than the dialog width
$(document).on("dialogopen", ".ui-dialog", function (event, ui) {
    fluidDialog();
});

function fluidDialog() {
    var $visible = $(".ui-dialog:visible");
    // each open dialog
    $visible.each(function () {
        var $this = $(this);
        var dialog = $this.find(".ui-dialog-content").data("ui-dialog");
        // if fluid option == true
        if (dialog.options.fluid) {
            var wWidth = $(window).width();
            // check window width against dialog width
            if (wWidth < (parseInt(dialog.options.maxWidth) + 50))  {
                // keep dialog from filling entire screen
                $this.css("max-width", "90%");
            } else {
                // fix maxWidth bug
                $this.css("max-width", dialog.options.maxWidth + "px");
            }
            //reposition dialog
            dialog.option("position", dialog.options.position);
        }
    });

}

jQuery.extend({
	callModal : function(html, height, width, containerClass){
		$('<div class="'+containerClass+'">'+html+'</div>').modal({
			containerCss: {
			    height: height,
			    width: width,
			    backgroundColor: '#414636',
			    border: '3px solid #ccc'
			}
			, overlayCss: {
			    backgroundColor: '#414636',
			    cursor: 'wait'
			}
			, onOpen: function (dialog) {
				dialog.overlay.fadeIn('slow', function () {
					dialog.container.slideDown('slow', function () {
						dialog.data.fadeIn('slow');
					});
				});
			}
			, onClose: function (dialog) {
				dialog.data.fadeOut(200, function () {
				    dialog.container.slideUp(200, function () {
				      dialog.overlay.fadeOut(200, function () {
				        $.modal.close(); // must call this!
				      });
				    });
				});
			}
		});
	}
});

function ouvrir_tr(frame)
{
	$('#'+frame).show();
}
					
function close_tr(frame)
{
	$('#'+frame).hide();
}

function formatprix(prix)
{	
	prix=Math.round(prix*100)/100;
	var test=prix.toString();
	if (test.indexOf('.',0)==-1)
		prix=prix+'.00';
	else
	{
		test=test.substr(test.indexOf('.',0)+1,2);
		if ((parseInt(test)<10) && (test.length==1))
		   prix=prix+'0';
	}
	prix='CHF '+prix;
	return prix;
}

function maj_prix(sej_id,i,j,prixbase,cas)
{
	var prix=0;
	if (cas==4)
	{
		if ($("select[name='quantite_"+sej_id+"[" + i+"]']").get(0).selectedIndex!=0)
			prix=prixbase*$("select[name='quantite_"+sej_id+"[" + i+"]']").get(0).selectedIndex;
	}
	else
	{
		if ($("select[name='nb_pax_"+sej_id+"[" + i+"]["+j+"]']").get(0).selectedIndex!=0)
			prix=prixbase*$("select[name='nb_pax_"+sej_id+"[" + i+"]["+j+"]']").get(0).selectedIndex;
		else
			prix=prixbase;
	}
	prix=formatprix(prix);
	$("#affPrix_"+sej_id+"_"+i+"_"+j).html(prix);
}

function RecalculePrix(url)
{
	var assannulvalue=$("input[name='assannulcoche']:checked").val();

	$.ajax({
		data: 'assannulcoche='+assannulvalue
		, dataType: 'html'
		, type: 'get'
		, url: url
		, success: function(html) {
			$('#contenucentral2').html($('#panierm',html).html());
			var script=$(html).filter('script');
			$.each(script, function(idx, val) { 
				$('#contenucentral2').append($(this)); 
			});
		}
	});//fin $.ajax()
}


function gereOptions(sej_id,opt,quant,pens)
{
	  for(i=0;i<quant;i++)
	  {
		  for(j=0;j<pens;j++)
		  {
			  if (i<$("select[name='quantite_opt_"+sej_id+"["+opt+"]']").get(0).options[$("select[name='quantite_opt_"+sej_id+"["+opt+"]']").get(0).selectedIndex].text)
				  ouvrir_tr("opt_"+sej_id+"_"+opt+"_"+i+"_"+j);
			  else
				  close_tr("opt_"+sej_id+"_"+opt+"_"+i+"_"+j);
		  }
	  }
}

function deconnexion(url)
{
	document.location.href=url+'?fermeture=1';
}

function maj_prixopt(sej_id,i,j,k,prixbase)
{
	var prix=0;
	if ($("select[name='nb_paxopt_"+sej_id+"[" + i+"]["+j+"]["+k+"]']").get(0).selectedIndex!=0)
		prix=prixbase*$("select[name='nb_paxopt_"+sej_id+"[" + i+"]["+j+"]["+k+"]']").get(0).selectedIndex;
	else
		prix=prixbase;
	prix=formatprix(prix);
	$("#affPrixOpt_"+sej_id+"_"+i+"_"+j+"_"+k).html(prix);
}

function validDate(idProduit,catId,sejour,Date,url,convert)
{
	$.ajax({
		data: 'idProduit='+idProduit+'&sejour='+sejour+'&dateSel='+Date+'&catId='+catId+'&convert='+convert
		, dataType: 'html'
		, type: 'get'
		, url: url
		, beforeSend : function(){
			self.location.hash='#moisdepart';
			$('#dureeDepart').html('<p align="center" class="r-importantgras">CHARGEMENT / LOADING<br /><img src="/images/ajax-loader.gif"></p>');
			
		}
		, success: function(html) {
			
			$('#dureeDepart').html($('#dureeDepart',html).html());
			var script=$(html).filter('script');
			$.each(script, function(idx, val) { 
				$('#dureeDepart').append($(this)); 
			});
			self.location.hash='#moisdepart';
		}
	});//fin $.ajax()
}

var ajaxUpdateMillieu = false;
//$('.ajaxpage').live('click',function() {
$(document).on('click','.ajaxpage',function() {
	ajaxUpdateMillieu=true;
	$('#div_depart_cal').hide('slow');
	var href=$(this).attr("href");
	href=href.substr(href.lastIndexOf('page=')+5,href.length);
	$('#pageAjax').attr("value",href);
	$('.formAjax').change();
	
	if( $('.listing-zone').length != 0 ){
		$('html, body').animate({scrollTop: $('.listing-zone').offset().top}, 2000);
	}
	
	
	
	return false;		
});

//$('.catAjax').live('click',function() {
$(document).on('click','a.catAjax',function(event) {
	event.preventDefault();
	var choixCourant=$(this).attr('data-choix');
	$('.moteur-onglets a[data-choix!=""]').each(function( index, value ) {
		var choix=$(this).attr('data-choix');
		if (choixCourant!=choix){
			$(this).addClass('choix'+choix).removeClass('choix'+choix+'-on');
		}else{
			$(this).addClass('choix'+choix+'-on').removeClass('choix'+choix);	
		}
	});
	$('#div_depart_cal').hide('slow');
	if($(this).attr('data-idsub')>0){
		$('<input>').attr('type','hidden').attr('id','val_26').attr('name','val_26').attr('value',$(this).attr('data-idsub')).appendTo('.formAjax,.formAjaxAccueil');
	}
	$('input#catAjax').val($(this).attr('data-idcat'))
	$('select#catAjax').append($('<option>', {value: $(this).attr('data-idcat'),text: $(this).html()})).val($(this).attr('data-idcat'));
	$('.formAjax,.formAjaxAccueil').change();
	return false;		
});
$(document).on('change','select.catAjax',function(event) {
	event.preventDefault();
	url=$(this).find(':selected').attr('data-href');
	if(url){
		window.location.href=url;
		event.stopPropagation();
	}else{
		var choixCourant=$(this).val();
		$('input#catAjax').val(choixCourant)
		$('select#catAjax').append($('<option>', {value: choixCourant,text: $(this).html()})).val(choixCourant);
		$('.formAjax,.formAjaxAccueil').change();
	}
	return false;		
});



//$('.tcAjax').live('click',function() {
$(document).on('click','.tcAjax',function() {
	var href=$(this).attr("href");
	href=href.substr(href.lastIndexOf('idProduit=')+10,href.length);
	$('#idProduit').attr("value",href);
	$.ajax({
		data: $('.formDisposTarifsAjax').serialize()
		, dataType: 'html'
		, type: 'get'
		, url: $('.formDisposTarifsAjax').attr('target')
		, beforeSend : function(){
			$('#disponibilites-tarifs').html('<p align="" class="r-importantgras">CHARGEMENT / LOADING<br /><img src="/images/ajax-loader.gif"></p>');
		}
		, success: function(html) {
			$('#disponibilites-tarifs').html(html);
			var script=$(html).filter('script');
			$.each(script, function(idx, val) { 
				$('#disponibilites-tarifs').append($(this)); 
			});
			
			self.location.hash='#moisdepart';
		}
	});//fin $.ajax()
	return false;
});

//$('.lienFiche').live('click',function() {
$(document).on('click','.lienFiche',function() {
		$('#fondrecherche').html('<p align="left" class="r-textespecialgras"><br /><br /><br />CHARGEMENT DES INFORMATIONS DU PRODUIT <br /> LOADING PRODUCT\'S INFORMATIONS <br /><br /><img src="/images/ajax-loader.gif"></p>');
		$('#contenuresultatsrecherche').hide(1000).stop().html('<p align="center"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><strong>CHARGEMENT DES INFORMATIONS DU PRODUIT<br />LOADING PRODUCT\'S INFORMATIONS</strong> <br /><br /><img src="/images/ajax-loader.gif"></p>').stop().hide().stop().show('slow');

});

function formSelectValid(obj){
	if('val_148' == $(obj).attr('name')) {
		$('#val_147').val('')
    }
}



function nbSejourChange()
{
	var newscript='';
	
	$.ajax({
		data: $('.dureeDepart').serialize()
		, dataType: 'html'
		, type: 'get'
		, url: $('.dureeDepart').attr('target')
		, beforeSend : function(){
			$('#divDureeSejour').html('<p align="center" class="r-importantgras"><img src="/images/ajax-loader.gif"></p>');
			$('#divPrixOption').fadeTo('slow', 0.33)
		}
		, success: function(html) {
			
			$('.dureeDepart').html($('.dureeDepart', html).html()).fadeIn('slow');
			$('.divscript').html('');			
			var script=$(html).filter('script');
			
			$.each(script, function(idx, val) { 			
				
				newscript = newscript + $(this).html();
				newscript = newscript.replace('<script>','');
				newscript = newscript.replace('</script>',''); 
			});
			newscript = '<script>' + newscript + '</script>';
			
			$('.divscript').append(newscript); 
			
			//scrollVertical(2, 100);
			self.location.hash='#nbsejour';
		}
	});//fin $.ajax()
	return false;
}


function submitMiniMoteur()	{
	$("#cat_id").attr("value",$("#typeHebergement").attr("value"));
	$('#fg').attr("value",1);
	$('#sg').attr("value",1);
	$('.formAjax').attr("action","http://www.televerbier.ch/fr/liste-resultat.htm");
	$('.formAjax').submit();
}

$(document).ready(function(){

	//$('#simplemodal-overlay').live('click', function() {
	$(document).on('click','#simplemodal-overlay', function() {
		$.modal.close();
	});
	
	setInterval("slide('.contenupromotions-accueil')", 6000);
	setTimeout("setInterval(\"slide('.contenupromotions')\", 6000)", 50);
	
	//$('#submit-recherche').live('click', function() {
	$(document).on('click','#submit-recherche', function() {
		$('#resetAjax').attr("value",1);
		$('.formAjax').change();
	});
	
	$(document).on('click','#resetRecherche', function() {
		$('#resetAjax').attr("value",1);
		$('.formAjax').change();
	});
	
	$(document).on('change','.formAjax', function() {
		
		var self = this;
		
		$('#div_depart_cal').hide('slow'); // fermeture du calendrier de d'arrivee
		$('#div_fin_cal').hide('slow'); // fermeture du calendrier de depart

		form = $(this);
		url = form.attr('data-update');
		
		if( url=='' || typeof url == 'undefined'){
			url = form.attr('action');
		}else{
			//$('#renderMode').val('ajax')
		}
		
		$('.ajaxLoading').html('<p align="center">CHARGEMENT / LOADING<br /><img src="/images/ajax-loader.gif"></p>');
		$.ajax({
			data: form.serialize()
			, dataType: 'html'
			, type: 'get'
			, url: url
			, complete : function() {

			}
			, success: function(resultat) {
				
				$resultatComplete 	= $(resultat);
				//pour l'accueil
				$moteurZone 		= $resultatComplete.find('.moteur'); 
				if ($moteurZone.length > 0) {
					$(".moteur-zone").empty().append($moteurZone);
				}
				
				//pour l'accueil special
				$moteurZone 		= $resultatComplete.find('.rm-moteur'); 
				if ($moteurZone.length > 0) {
					$(".rm-moteur-zone2").empty().append($moteurZone);
				}
				
				//pour le listing

				$moteurZone 		= $resultatComplete.find('.moteur-listing');
				if ($moteurZone.length > 0) {
					$(".moteur-listing").html($moteurZone);

				}
				$listingZone 		= $resultatComplete.find('.listing-zone');
				if ($listingZone.length > 0) {
					$(".listing-zone").empty().append($listingZone);

					//on relance les colorbox
					lanceColorbox();
				}
				$carteZone 		= $resultatComplete.find('.cartographie');
				if ($carteZone.length > 0) {
					$(".cartographie").empty().append($carteZone);
					//on relance la google map
					loadScript();
				}
				if($('form.formAjax input[name=open]').val()==1){
					$('.moteur-m').show();
				}
				
				$('.moteur-m-message').show();
				$('.moteur-m-message').delay(1750).hide(1)

				$('.zoneMaps').html($('.zoneMaps',resultat).html());
				if (typeof initializeMapVel === "function") { 
					initializeMapVel();
				}


			}
		});//fin $.ajax()
		
		return false;
	});
	
	//$('.moisDepartAjax').live('change', function() {
	$(document).on('change','.moisDepartAjax', function() {
		var self = this;
		$.ajax({
			data: $(this).serialize()
			, dataType: 'html'
			, type: 'get'
			, url: $(this).attr('target')
			, success: function(html) {				
				$('.moisDepartAjax').html($('.moisDepartAjax', html).html());
				var script=$(html).filter('script');
				$.each(script, function(idx, val) { 
					$(self).append($(this)); 
				});
				$('#dureeDepart').html('');
			}
		});//fin $.ajax()
		return false;
	});


	$(document).on('change','.nbSejourAjax', function() {
		nbSejourChange();
		return false;
	});
	$(document).on('change','.triMoteur', function() {
		ajaxUpdateMillieu = true;
		$('#tri').attr('value', $(this).val());
		$('.formAjax').change();
	});
	$(document).on('change','.resppMoteur', function() {
		ajaxUpdateMillieu = true;
		$('#respp').attr('value', $(this).val());
		$('.formAjax').change();
	});

});
function getScrollY() {
	  scrOfY = 0;
	  if( typeof( window.pageYOffset ) == 'number' ) {
	    //Netscape compliant
	    scrOfY = window.pageYOffset;
	  } else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
	    //DOM compliant
	    scrOfY = document.body.scrollTop;
	  } else if( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {
	    //IE6 standards compliant mode
	    scrOfY = document.documentElement.scrollTop;
	  }
	return scrOfY;
}


function slide(selecteur) {
	if ($(selecteur).length > 1) {
		$(selecteur+'.affiche')
		.animate({left:'-200px'}, 300, function() {
			$(this).remove().insertAfter(selecteur+'.hidden:last').addClass('hidden').removeClass('affiche');
		})
		.nextAll(selecteur+'.hidden:first').animate({left:'6px'}, 300, function() {
			$(this).addClass('affiche').removeClass('hidden');
		});
	}
}

function montre(id) {
	var d = document.getElementById(id);
	for (var i = 1; i<=10; i++) {
		if( i != 999 )
		if (document.getElementById('smenu'+i)) {
			document.getElementById('smenu'+i).style.display='none';}
		}
	if (d) {d.style.display='block';}
}


function memoMenuIdArbo(id) {
	$.get("/menuId2Session.php",{menuId: id },
        function success(data){ // Au succès on renvoie le résultat de la requête
        	//alert(data); // Affichage
    });
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
function MM_showHideLayers() { //v3.0
var i,p,v,obj,args=MM_showHideLayers.arguments;
for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
if (obj.style) { obj=obj.style; v=(v=='display')?'block':(v='none')?'none':v; }
obj.display=v; }
}

function ouvrirwebcam() { popupwebcam = window.open("","popupwebcam","toolbar=no,status=no,directories=no,menubar=no,location=no,scrollbars=no,resizable=no,left=50,top=50,width=704,height=576");
if( self.focus ) popupwebcam.focus(); } // -->



jQuery.extend({dimentions : function(){
	struct = {pageYOffset:0, pageXOffset:0, innerHeight:0, innerWidth:0}
	if (document.body) {
  	  struct.pageYOffset = document.body.scrollTop;
  	  struct.pageXOffset = document.body.scrollLeft;
  	  struct.innerHeight = document.body.clientHeight;
  	  struct.innerWidth = document.body.clientWidth;
    } else if (self.innerHeight) {
		struct.pageYOffset = self.pageYOffset;
		struct.pageXOffset = self.pageXOffset;
		struct.innerHeight = self.innerHeight;
		struct.innerWidth = self.innerWidth;
     } else if (document.documentElement && document.documentElement.clientHeight) {
    	 struct.pageYOffset = document.documentElement.scrollTop;
    	 struct.pageXOffset = document.documentElement.scrollLeft;
         struct.innerHeight = document.documentElement.clientHeight;
         struct.innerWidth = document.documentElement.clientWidth;
     } 
      
      return struct;
}});



function scrollVertical(pas, nbIteration){ 
	for (var i=0;i<nbIteration;i++){ 
	    scrollBy(0,pas); 
	  } 
}
$(document).on('click','.carte-bouton-lien',function() {
	
	$.colorbox({href:"http://www.televerbier.ch/fr/cartographie.htm",
	initialHeight:'700px', initialWidth:'900px',width:'900px',maxWidth:'95%', maxHeight:'95%',width: '1000px',height: '700px',
	onComplete:function(){loadScript();}});

});
$(document).on('click','.carte-bouton a,.carte-lien a,.nbresultats2 a.carte',function() {
	$.colorbox({href:"", initialHeight:'700px', initialWidth:'900px',width:'900px',maxWidth:'95%', maxHeight:'95%'});
});


/* appel en ajax des fiches produits consulter par l'internaute (sur listing et fiche produit) */
function afficheConsultationPrecedentes(listeId) {
	$.ajax({
	  url: "http://www.televerbier.ch/fr/ajax-consultationsprecedentes.htm?b2f-session-write-close=1&listeId="+listeId
	}).done(function(html) {
		$('#consultationsPrecedentesAjax').replaceWith($('#consultationsPrecedentesAjax', html));
	});
}

function monScrollTo(id){
	if($(id).length!=0){
		$('html, body').animate({scrollTop:$(id).offset().top-100}, 'slow');
	}
	
}
$(document).on('click','[data-link]',function(event) {
	if (event.target.localName != 'a'){
		window.location.href = $(this).attr('data-link') ;
	}
	
});
$(document).on('click','.moteur-m-bouton1 a',function(event) {
	event.preventDefault();
	$('.moteur-m').toggle();
	
	$('form.formAjax input[name=open]').val($('form.formAjax input[name=open]').val()==0 ? 1 : 0);
});



