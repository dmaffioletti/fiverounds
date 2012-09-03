/* 
=========================================
author  : Daniel Machado Maffioletti
email   : dmaffioletti[at]gmail[dot]com
twitter : @dmaffioletti
=========================================
*/

$(function(){
	
	/*function blogShow(){
		$('#blog').delay(3000).animate( { 'top' : '0px' }, 3000 );
	}
	function blogHide(){
		$('#blog') .animate( { 'top' : '-370px' }, 500 );
	}*/
	
	$('#bgSecond, #teachers, #contato, #modalidades, #fiverounds').hide();
	
	fnc = {
		screenCenter : function() {
			posWidth = ( 2250 - $( document ).width() ) / 2;
			$('#bgPrimary, #bgSecond').animate({ 'background-position' : '-'+ posWidth +'px' } , 2000 );
		},
		screenShow : function() {
			$('#bgSecond').fadeIn( 1000 );
			$('#teachers').delay( 2500 ).show();
		},
		screenHide : function() {
			$('#bgSecond, #teachers').fadeOut( 1000 );
		},
		screenLeft : function() {
			$('#bgPrimary, #bgSecond').animate({ 'background-position' : '0px' } , 2000 );
		},
		screenRight : function() {
			var num = ( 2250 - $( document ).width() );
			$('#bgPrimary, #bgSecond').animate( { 'background-position' : '-'+num } , 2000 );
		},
		showInfo : function( what ) {
			
			$('#container').animate({ 'top' : '-5px' } , 500 );
			$('#contato, #modalidades, #fiverounds').hide();
			
			if( what == 'Contato' || what == 'Matricule-se' ) {
				$('#contato').delay( 2000 ).fadeIn( 1000 );
				$('#contato h2').html( what );
			}
			else if( what == 'Five Rounds' ){
				$('#fiverounds').delay( 2000 ).fadeIn( 1000 );
			}
			else {
				$('#modalidades').delay( 3000 ).fadeIn( 1000 );
			}
		},
		hideInfo : function(){
			$('#container').animate({ 'top' : '-1125px' } , 500 );
			$('#contato, #modalidades, #fiverounds').fadeOut( 300 );
		}
	};
	
	$('div#menu a').click(function() {
		
		switch ( $(this).attr('id') ) {
			
			case 'linkhome' :
			
				if ( ! $('#bgSecond').is(':hidden') ) {
					fnc.screenHide();
				}
				fnc.screenCenter();
				fnc.hideInfo();
				blogHide();
				break;
				
			case 'linkblog' :
			
				window.location.href="http://www.fiverounds.com.br/blog";
				break;
				
			case 'linkmodalidades' :
			
				if ( ! $('#bgSecond').is(':hidden') ) {
					fnc.screenHide();
				}
				fnc.screenCenter();
				fnc.hideInfo();
				fnc.showInfo('Modalidades');
				blogHide();
				break;
				
			case 'linkprofessores' :
				
				fnc.screenCenter();
				fnc.screenShow();
				fnc.hideInfo();
				blogHide();
				break;
			
			case 'linkfiverounds' :
			
				if ( ! $('#bgSecond').is(':hidden') ) {
					fnc.screenHide();
				}
				
				fnc.screenCenter();
				fnc.hideInfo();
				fnc.showInfo('Five Rounds');
				blogHide();
				break;
			
			case 'linkmatricule' :
			
				if ( ! $('#bgSecond').is(':hidden') ) {
					fnc.screenHide();
				}
				fnc.hideInfo();
				fnc.showInfo('Matricule-se');
				fnc.screenLeft();
				blogHide();
				break;
				
			case 'linkeventos' :
				
				if ( ! $('#bgSecond').is(':hidden') ) {
					fnc.screenHide();
				}
				fnc.hideInfo();
				fnc.screenRight();
				blogHide();
				break;
				
			case 'linkcontato' :
			
				if ( ! $('#bgSecond').is(':hidden') ) {
					fnc.screenHide();
				}
				fnc.hideInfo();
				fnc.showInfo('Contato');
				fnc.screenCenter();
				blogHide();
				break;
		};
	});
	
	$('#teachers div').each(function( i ){
		$( this, i ).cooltipbox({
			followMouse : true,
			useTitle    : false,
			text        : $( this, i ).html()
		});
	});
	
	$('#container div h2').click(function(){
		fnc.hideInfo();
	});
	
	$.validator.setDefaults({
		submitHandler: function() { 
			
			$.ajax({
				url     : 'send.php',
				type    : 'post',
				cache   : false,
				data    : 'nome='+ $('#txtNome').val() +'&email='+ $('#txtEmail').val() +'&telefone='+ $('#txtTelefone').val() +'&modalidade='+ $('#select_modalidades').val() +'&assunto='+ $('#txtAssunto').val() +'&mensagem='+ $('#txtMensagem').val()
			}).success(function( response ){
				$('#contato #msg').addClass('success').html( response );
			}).error(function(){
				$('#contato #msg').addClass('error').html('Mensagem não enviada!<br>Um error ocorreu por favor entre em contato<br>através do email: galiza@gnpbrasil.com.br>');
			});
		
		}
	});
	
	$("#frmContatos").validate({
		rules : {
			txtNome     : "required",
			txtEmail    : "required",
			txtTelefone : "required",
			txtAssunto  : "required",
			txtMensagem : "required"
		},
		messages : {
			txtNome     : "Nome obrigatório",
			txtEmail    : "Email obrigatório",
			txtTelefone : "Telefone obrigatório",
			txtAssunto  : "Por favor, informe o assunto",
			txtMensagem : "Por favor, digite a mensagem"
		}
	});
	
	fnc.screenCenter();
	//blogShow();
	
});