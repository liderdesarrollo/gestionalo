$(".logIn").click(function(event) {
	$(".container-login").slideToggle(900);
});
$('.signUp').click(function(){ 
	$('#modal2').openModal();
});
$().ready(function(){
	$('.parallax').parallax();
	
	$('#btn_login').click(function(){
		var user = $('#user').val();
		var pwd = $('#pwd').val();
		
		if(user == "" || pwd == ""){
			Materialize.toast('No Pueden Haber Campos Vacíos!',1100,'rounded');
		}else{
			$.ajax({
				url:"../../Controlador/Controlador_03d.php",
				type:"POST",
				data:{
					user:user,
					pwd:pwd
				},success:function(res){
					if(res=="error"){
						Materialize.toast("Ingreso Incorrecto!! Verifique sus datos",5000,'rounded');
					}else{
						var datos = JSON.parse(res);
						console.log(datos);
						window.location = "../Vista/panel.php";
					}
					
				}
			});
		}
	});
});
$('.flecha').unbind('click').click(function(){
	var altura = $('.sheet').height() + parseInt($('.sheet').css('padding-top'));
	$('body').animate({scrollTop: altura},1000);
});
$(window).scroll(function(e){
	console.log(e);
	var scroll = $(window).scrollTop();
	if(scroll >= 100){
		$('.navigation').addClass('shadow');
	}else{
		$('.navigation').removeClass('shadow');
	}
});