jQuery(document).ready(function($) {
	$('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
	});
});

jQuery(document).ready(function(){
  $(window).scroll(function () {
    if ($(this).scrollTop() > 245) {
      $("#toposite").addClass("navbar-fixed-top animated fadeInDown");
      $("#bartop").addClass("bartopscroll");
    } else {
      $("#toposite").removeClass("navbar-fixed-top animated fadeInDown");
      $("#bartop").removeClass("bartopscroll");
    }
  });
});

jQuery(document).ready(function(){
  jQuery('.parceiros').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});

/*************************************/
/********** FORMULARIO **************/
$(document).ready( function(){
	$('#nomeCompleto').keyup(function (e) {
		var nome = $('#nomeCompleto').val();
		$('#nomeInscrito').val(nome);
	});
	$('#cep').keyup(function (e) {
		var envio = $('#cep').val();
		$('#celForm').val(envio);
	});
	$('#cel').keyup(function (e) {
		var cel = $('#cel').val();
		$('#celForm').val(cel);
	});
	$('#emailInscrito').keyup(function (e) {
		var email = $('#emailInscrito').val();
		$('#emailCompra').val(email);
	});

});

jQuery(document).ready(function(){
	jQuery('#form_matricula').validator().on('submit', function (e) {
	  if (e.isDefaultPrevented()) {
	    alert('Necessário Preencher os campos obrigatórios.');
	  } else {
			var dados = jQuery( this ).serialize();
			jQuery.ajax({
				type: "POST",
				url: "/wp-content/themes/graduamais/functions/matricula.php",
				data: dados,
				success: function( data )
				{
					jQuery('#modalConfirm').modal('show')
				}
			});
			return false;
	  }
	})
});

/* formulário da camapanha */
jQuery(document).ready(function(){
	jQuery('#cadastro_campanha').validator().on('submit', function (e) {
	  if (e.isDefaultPrevented()) {
	    alert('Necessário Preencher os campos obrigatórios.');
	  } else {
			var dados = jQuery( this ).serialize();
			jQuery.ajax({
				type: "POST",
				url: "/wp-content/themes/graduamais/functions/envia-promo.php",
				data: dados,
				success: function( data )
				{
					jQuery('#sucesso').modal('show');
					jQuery('#nome').val('');
					jQuery('#email').val('');
					jQuery('#telefone').val('');
					jQuery('#nome1').val('');
					jQuery('#email1').val('');
					jQuery('#telefone1').val('');
				}
			});
			return false;
	  }
	})
});


/********** /FORMULARIO **************/

jQuery(function($){
	$(".data").mask("99/99/9999");
  $("#telefone-fix").mask("(99) ?9 9999-9999");
	$("#telefone-bnh").mask("(99) ?9 9999-9999");
  $("#cel").mask("(99) 99999-9999");
  $("#cpf").mask("999.999.999-99");
  $("#cep").mask("99999-999");
	$("#num").mask("00000");
});

$(function(){
	$(".input-pesquisa").keyup(function(){
		//pega o css da tabela
		var tabela = $(this).attr('alt');
		if( $(this).val() != ""){
			$("."+tabela+" .filtra").hide();
			$("."+tabela+" .filtra>.col-md-7:contains-ci('" + $(this).val() + "')").parent(".filtra").show();
		} else{
			$("."+tabela+" .filtra").show();
		}
	});
});
$.extend($.expr[":"], {
	"contains-ci": function(elem, i, match, array) {
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});
