<<<<<<< HEAD

=======
jQuery(document).ready(function($) {
	$('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
	});
});
>>>>>>> cc70505338358502181738e458a67ae37cff1e42

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

$(document).ready(function(){
	$('#form_matricula').submit(function(){
		var dados = $( this ).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/graduamais/functions/matricula.php",
			data: dados,
			success: function( data )
			{
				jQuery('#modalConfirm').modal('show')
			}
		});
		return false;
	});
});
/********** /FORMULARIO **************/

<<<<<<< HEAD
jQuery(document).ready(function(){
  jQuery('.cartoes').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3500,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          autoplay: true,
          autoplaySpeed: 3500,
          arrows: false,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3500,
          arrows: false,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3500,
          arrows: false,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
=======
jQuery(function($){
	$(".data").mask("99/99/9999");
  $("#telefone-fix").mask("(999) 9999-9999");
  $("#cel").mask("(999) 99999-9999");
  $("#cpf").mask("999.999.999-99");
  $("#cep").mask("99999-999");
	$("#num").mask("00000");
>>>>>>> cc70505338358502181738e458a67ae37cff1e42
});
