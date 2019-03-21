$(document).ready(function () {
    $(document).foundation();

    $('.comparateur-link').hover(
        function (event) {
            $(this).parent().children('.comparateur-bulle').show();
        },
        function (event) {
            $(this).parent().children('.comparateur-bulle').hide();
        }
    )

    $('a.colorboxBlocLive').colorbox({
        iframe: true,
        width: "650px",
        height: "90%",
        maxWidth: "90%",
    });

    $('.variable-width').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        centerMode: false,
        variableWidth: true
    });

    $('.evenement').slick({
        dots: false,
        infinite: false,
        speed: 400,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 830,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    var autoScroll = false;
    if ($('.lienslider').data('auto') == 1) {
        autoScroll = true;
    }
    $('.lienslider').slick({
        dots: false,
        infinite: autoScroll,
        speed: 400,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: autoScroll,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 830,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.scrollTo').click(function () {
        var page = $(this).attr('href');
        var speed = 900;
        $('html, body').animate({scrollTop: $(page).offset().top}, speed);
        return false;
    });

    var maxHeight = 350;
    $('.colmenu').each(function () {
        var el = $(this);
        if (el.height() > maxHeight) {
            maxHeight = el.height();
        }
    });
    if ($(window).width() > 640){
        $('.colmenu').height(maxHeight);
    }

    $('.drop-menu').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropeddown').slideToggle(300);
    });
    $('.drop-menu').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropeddown').slideUp(300);
    });
    $('.drop-menu .dropeddown li').click(function () {
        $(this).parents('.drop-menu').find('span').text($(this).text());
        $(this).parents('.drop-menu').find('input').attr('value', $(this).attr('id'));
    });

    var $sticky = $('.sticky');
    var $stickyrStopper = $('.sticky-stopper');
    if (!!$sticky.offset()) { // make sure ".sticky" element exists

        var generalSidebarHeight = $sticky.innerHeight();
        var stickyTop = $sticky.offset().top;
        var stickOffset = 0;
        var stickyStopperPosition = $stickyrStopper.offset().top;
        var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
        var diff = stopPoint + stickOffset;

        $(window).scroll(function () { // scroll event

            var windowTop = $(window).scrollTop(); // returns number

            if (stopPoint < windowTop) {
                $sticky.css({position: 'absolute', top: diff});
            } else if (stickyTop < windowTop + stickOffset) {
                $sticky.css({position: 'fixed', top: stickOffset, margin: '0px 0px 0px 0px', right: '0'});
            } else {
                $sticky.css({position: 'relative', padding: '0px 40px 0px 0px'});
            }
        });
    }

    $('.slider-articles').slick({
        centerMode: false,
        slidesToShow: 3,
        arrows: true,
        dots: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    arrows: true,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 641,
                settings: {
                    arrows: true,
                    slidesToShow: 1
                }
            }
        ]
    });

    $(document).on('click', '.block_click', function (event) {
        event.preventDefault();
        event.stopPropagation();
        var linkProduct = $(this).find('a').attr('href');
        if (linkProduct) {
            window.open(linkProduct);
        }
    });

    $(document).on('click', '.Actu-articles article , .Actu-top', function (event) {
        event.preventDefault();
        event.stopPropagation();
        var linkProduct = $(this).attr('data-href');
        if (linkProduct) {
            window.open(linkProduct);
        }
    });


    $("#datepickerFin").datepicker({
        altField: "#datepickerFinopen", altFormat: "d MM yy", onClose: function () {
            $('#datepickerFinopen').parent().height(0);
        }
    });
    $("#datepickerDeb").datepicker({
        altField: "#datepickerDebopen", altFormat: "d MM yy", onClose: function () {
            $('#datepickerDebopen').parent().height(0);
        }
    });
    $("#datepickerFin").datepicker('option', 'firstDay', 1);
    $("#datepickerDeb").datepicker('option', 'firstDay', 1);

$('script[src="https://secure.adnxs.com/px?id=882538&seg=7900671,9770184&t=1"]').next().attr('style', 'display:none;');

});

function modificationAffichageFilAriane(blocAModifier, lien, libelle) {
    contenuFAL = $(document).find('.fil-ariane ' + blocAModifier);
    contenu = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' + lien + '" itemprop="url"><span itemprop="title">' + libelle + '</span></a></span>';
    contenuFAL.replaceWith(contenu);
}

function modificationAffichageFilArianeRefonte(blocAModifier, lien, libelle) {
    contenuFAL = $(document).find('.fil-ariane-rm ' + blocAModifier);
    if (lien == '') {
        contenu = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">' + libelle + '</span></span>';
    } else {
        contenu = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' + lien + '" itemprop="url"><span itemprop="title">' + libelle + '</span></a></span>';
    }

    contenuFAL.replaceWith(contenu);
}


function lanceColorbox() {
    //lance les colorbox photo du listing
    $(document).find('.toutesLesColorbox').each(function () {
        $uneColorbox = $(this);
        idProduit = $uneColorbox.attr('data-idProduitColorbox');
        if (idProduit) {
            $("a.colorbox-photos-produits-" + idProduit + ":not(.slick-cloned)").colorbox({
                rel: 'colorbox-photos-produits-' + idProduit,
                transition: "none",
                maxWidth: '95%',
                maxHeight: '95%'
            });
        }
    });

    //lancement colorbox pour la google map

    $("a.colorboxLienGMListing").colorbox({
        'width': '95%',
        'height': '95%'
    });
}

function ouvertureMoteurSpecialAccueil() {
    $('#moteur-formulaire1').hide();
    $('.moteur-onglets a').each(function () {
        $(this).removeClass('on');
    });
    $('.moteur-onglets a.lienSpecial').addClass('on');
    $('#moteur-formulaire3').show();
}

function showMoteurAccueil(){
    $('#moteur-formulaire3').hide();
    $('.moteur-onglets a').each(function () {
        $(this).removeClass('on');
    });
    $('.moteur-onglets a.moteurAccueilLink').addClass('on');
    $('#moteur-formulaire1').show();
}

function ouvertureMoteurSpecialAccueil2() {
    $('#rm-moteur-formulaire1').hide();
    $('.rm-moteur-onglets a').each(function () {
        $(this).removeClass('on');
    });
    $('.rm-moteur-onglets a.lienSpecial').addClass('on');
    $('#rm-moteur-formulaire3').show();
}

function ouvertureMoteurSpecialAutre() {
    $('#moteur1').hide();
    $('#moteur3').show();
}

function afficheDiaporama(libelleDiaporama) {
    $('.diaporama').hide(0, function () {
        $('#accueilGrandePhotoDiaporama_' + libelleDiaporama).show(0);
    });
    $('.blocs-accueil').hide(0, function () {
        $('#accueilBlocDiaporama_' + libelleDiaporama).show(0);
    });

    //pour refonte accueil verbier
    $('.connaitre-zone').hide(0, function () {
        $('#accueilBlocDiaporama_' + libelleDiaporama).show(0);
    });

    //Ajout gestion des "roulement" iframe carte interactive sur domaine skiable
    $('.mapsInteractiveDomaine').hide(0, function () {
        $('#mapInteractiveDomaine_' + libelleDiaporama).show(0);
    });

    //GS le 18/11/2016 -> Ajout du choix de la saison dans un cookie pour que les diaporamas soit toujours ceux correspondant au choix de l'internaute
    $.cookie('saisonChoix', libelleDiaporama, {expires: 1, path: '/'});
}

//Début du script pour l'affichage/masquage de la flèche qui permet de descendre dessous le diaporama ou la grande photo fixe
$.fn.isOnScreen = function () {
    var win = $(window);
    var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    if (typeof bounds !== 'undefined') {
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();
        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    } else {
        return true;
    }
};
$(window).scroll(function () {
    if ($('#topContenu').isOnScreen()) {
        $('.flechebas-fixe').addClass('non');
    } else {
        $('.flechebas-fixe').removeClass('non');
    }
});
$(document).ready(function () {
    if ($('#topContenu').isOnScreen()) {
        $('.flechebas-fixe').addClass('non');
    } else {
        $('.flechebas-fixe').removeClass('non');
    }

    // Script onglets page TARIFS
    // Tabs initialization
    $('#tabs-tarifs').tabs();

    // Open and close station vertical tabs
    $(".tarifs_station-title").on('click', function (e) {
        var target = e.currentTarget;
        var $content = $(target).next(".tarifs_station-content");
        $content.slideToggle(400, function () {
            $content.toggleClass('open');
        });
        $(target).toggleClass('open');
    });

    // Show categories details
    $(".tarifs_categories i").on('click', function (e) {
        var target = e.currentTarget;
        var $details = $(target).closest(".tarifs_categories").find(".categories-detail");
        $details.toggle();
    });

    // Script onglets page HORAIRES
    // Tabs initialization
    $('#tabs-horaires').tabs();

    // Open and close station vertical tabs
    $(".horaires_station-title").on('click', function (e) {
        var target = e.currentTarget;
        var $content = $(target).next(".horaires_station-content");
        $content.slideToggle(400, function () {
            $content.toggleClass('open');
        });
        $(target).toggleClass('open');
    });

    // Show categories details
    $(".horaires_categories i").on('click', function (e) {
        var target = e.currentTarget;
        var $details = $(target).closest(".horaires_categories").find(".horaires-detail");
        $details.toggle();
    });


// Get IE or Edge browser version
    var version = detectIE();

    if (version !== false) {
        if (document.getElementById('tabs-tarifs') != null) {
            document.getElementById('tabs-tarifs').classList.add('ie');
        }
    }

    /**
     * detect IE
     * returns version of IE or false, if browser is not Internet Explorer
     */
    function detectIE() {
        var ua = window.navigator.userAgent;

        var msie = ua.indexOf('MSIE ');
        if (msie > 0) {
            // IE 10 or older => return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        }

        var trident = ua.indexOf('Trident/');
        if (trident > 0) {
            // IE 11 => return version number
            var rv = ua.indexOf('rv:');
            return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
        }

        var edge = ua.indexOf('Edge/');
        if (edge > 0) {
            // Edge (IE 12+) => return version number
            return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        }
        // other browser
        return false;
    }

    /**
     * Detects if the device is a mobile or not
     */

    if ($('html').hasClass('touch') && $(window).width() < 480) {
        $('html').addClass('isMobile');
        $('.open').removeClass('open');
    }

});



$(window).resize(function () {
    if ($('#topContenu').isOnScreen()) {
        $('.flechebas-fixe').addClass('non');
    } else {
        $('.flechebas-fixe').removeClass('non');
    }
});
//Fin du script pour l'affichage/masquage de la flèche qui permet de descendre dessous le diaporama ou la grande photo fixe


// Scripts player Youtube Playlist

// FIN Scripts player Youtube Playlist
