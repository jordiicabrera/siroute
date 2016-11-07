$('.tooltip').hide();

$('.form-input').focus(function() {
   $('.tooltip').fadeOut(250);
   $("."+$(this).attr('tooltip-class')).fadeIn(500);
});

$('.form-input').blur(function() {
   $('.tooltip').fadeOut(250);
});

$('.login-button').click(function (event) {
  event.preventDefault();
  // or use return false;
});

$( ".login-button" ).click(function() {
  $.ajax({
  	type: "POST",
  	url: "../../procesos/trxLogin.php",
  	data:{"opcion":"login",txtUsuario:$("#txtUsuario").val,txtClave:$("#txtClave").va},
    	
  })
});