 var scotchApp = angular.module('gestionalo_app', ['ngRoute', 'ngAnimate']);

var dir_route = "/Vista/templates/";

// configure our routes
scotchApp.config(['$routeProvider','$locationProvider', function($routeProvider,$locationProvider) {
    
    $routeProvider

        // route for the home page
        .when('/', {
            templateUrl : dir_route+'home.html',
             controller  : 'home_controller'
        })
        
        .when('/quienes-somos', {
            templateUrl : dir_route+'quienes-somos.html',
             controller  : 'quienes_somos_controller'
        })
        
        .when('/blog', {
            templateUrl : dir_route+'blog.html',
             controller  : 'blog_controller'
        })
        
        .otherwise({
            redirectTo: '/'
        });
}]);

// Controlador del home
scotchApp.controller('home_controller', function($scope) {
    botones_formulario();
    
    $().ready(function(){
    	$('.parallax').parallax();
    	
    	$('.sheet').eq(1).find('.a').find('.col.m3').viewportChecker({
            classToAdd: 'visible animated bounceInLeft',
            offset: 100
           });
       $('.sheet').eq(1).find('.a').find('.col.m7').viewportChecker({
        classToAdd: 'visible animated bounceInRight',
        offset: 100
       });
       $('.sheet').eq(1).find('.b').find('.col.m6').viewportChecker({
            classToAdd: 'visible animated bounceInUp',
            offset: 100
           });
       $('.sheet').eq(1).find('.b').find('.col.m5').viewportChecker({
        classToAdd: 'visible animated flipInX',
        offset: 100
       });
       $('.sheet').eq(2).find('.b').find('.col.m3').viewportChecker({
        classToAdd: 'visible animated bounceInLeft',
        offset: 100
       });
       $('.sheet').eq(2).find('.b').find('.col.m7').viewportChecker({
        classToAdd: 'visible animated bounceInRight',
        offset: 100
       });
    	$('.message').viewportChecker({
    		classToAdd: 'visible animated bounceInLeft',
    		offset: 100
    	});
    	$('footer .modal-trigger').viewportChecker({
    		classToAdd: 'visible animated tada',
    		offset: 100
    	});
    	
        // Boton login formulario 	
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
    						window.location = "../Vista/panel.php";
    					}
    					
    				}
    			});
    		}
    	});
    });
    
    flecha();
    
    window_scroll();
});

// Controlador de quiénes somos
scotchApp.controller('quienes_somos_controller',function($scope) {
    libraries();
    
    botones_formulario();
    
    flecha('qs');
    
    $().ready(function(){
    	
    	$('.sheet').eq(1).find('.a').find('.col.m3').viewportChecker({
            classToAdd: 'visible animated bounceInLeft',
            offset: 100
           });
       $('.sheet').eq(1).find('.a').find('.col.m7').viewportChecker({
        classToAdd: 'visible animated bounceInRight',
        offset: 100
       });
       $('.sheet').eq(1).find('.b').find('.col.m6').viewportChecker({
            classToAdd: 'visible animated bounceInUp',
            offset: 100
           });
       $('.sheet').eq(1).find('.b').find('.col.m5').viewportChecker({
        classToAdd: 'visible animated flipInX',
        offset: 100
       });
       $('.sheet').eq(2).find('.b').find('.col.m3').viewportChecker({
        classToAdd: 'visible animated bounceInLeft',
        offset: 100
       });
       $('.sheet').eq(2).find('.b').find('.col.m7').viewportChecker({
        classToAdd: 'visible animated bounceInRight',
        offset: 100
       });
    	$('.message').viewportChecker({
    		classToAdd: 'visible animated bounceInLeft',
    		offset: 100
    	});
    	$('footer .modal-trigger').viewportChecker({
    		classToAdd: 'visible animated tada',
    		offset: 100
    	});
    	
        // Boton login formulario 	
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
    						window.location = "../Vista/panel.php";
    					}
    					
    				}
    			});
    		}
    	});
    });
    
    window_scroll();
});

// Controlador del blog
scotchApp.controller('blog_controller',function($scope) {
    libraries();
    
    flecha();
    
    botones_formulario();
    
    window_scroll();
    
    scale_blog();
    
    window_resize();

});

// create the controller and inject Angular's $scope
scotchApp.controller('main', function($scope) {
    
    var x = Math.floor((Math.random() * 3) + 1);
    var animations = ['page-home','page-contact','page-about'];
    
    $scope.pageClass = animations[x-1];
    
    $('.tooltipped').tooltip({delay: 50});
    
    // $('.collapsible').collapsible({
    //   accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    // });
    
    $('select').material_select();
    
    
    
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
      });
    
    $('#btn_profile').unbind('click').click(function(e){
        e.preventDefault();
         $('.button-collapse1')[0].click();
    });
    
});

function window_scroll(){
    //  Scroll a la página
    $(window).scroll(function(e){
    	var scroll = $(window).scrollTop();
    	if(scroll >= 100){
    		$('.navigation').addClass('shadow');
    	}else{
    		$('.navigation').removeClass('shadow');
    	}
    });
}

function libraries(){
    $('.parallax').parallax();
    $('.materialboxed').materialbox();
}

function flecha(args){
    // Click en la fecla de la primera pagina del home
    if(typeof( args ) == 'undefined'){
        $('.flecha').unbind('click').click(function(){
        	var altura = $('.sheet').height() + parseInt($('.sheet').css('padding-top'));
        	$('body').animate({scrollTop: altura},1000);
        });
    }else if(args === "qs"){
        $('.flecha').unbind('click').click(function(){
        	var altura = $('.sheet').height() + parseInt($('.sheet').css('padding-top'));
        	$('body').animate({scrollTop: altura - 50 },1000);
        });
    }
}

function scale_blog(){
    var altura_noticias = $('.noticias').height();
    
    var altura_grande = altura_noticias * 0.65;
    var altura_normal = altura_noticias * 0.35;
    
    $('.noticias .parte1 .articulo:first-child').css('min-height',altura_grande+'px').find('div').css('min-height',altura_grande+'px');
    $('.noticias .parte1 .articulo:last-child').css('min-height',altura_normal+'px').find('div').css('min-height',altura_normal  +'px');
    $('.noticias .parte2 .bloque_b').css('min-height',altura_grande+'px').find('div').css('min-height',altura_grande+'px');
    $('.noticias .parte2 .bloque_c').css('min-height',altura_normal+'px').find('div').css('min-height',altura_normal+'px');
    $('.noticias .parte2 .bloque_a').css('min-height',altura_grande+'px')
    $('.noticias .parte2 .bloque_a div > .articulo').css('min-height',(( altura_grande / 2) + 1)+'px');
    $('.noticias .parte2 .bloque_a div > .articulo div').css('min-height',(( altura_grande / 2) + 1)+'px');
    $('.noticias .parte1 .articulo:last-child').css('min-height',altura_normal+'px').find('div').css('height',altura_normal+'px');
}

function window_resize(){
    $(window).resize(function(){
        scale_blog();
    });
}

function botones_formulario(){
    // Boton del login Evento
    $(".logIn").unbind('click').click(function(event) {
    	$(".container-login").slideToggle(900);
    });
    
    // Boton de Registrarse
    $('.signUp').unbind('click').click(function(){ 
    	$('#modal2').openModal();
    });
}