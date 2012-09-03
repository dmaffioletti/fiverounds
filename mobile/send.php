<?php 
	require_once '../class/class.phpmailer.php';

	function filter( $txt ) {
		return addslashes( $txt );
	}
		
	if ( ! empty( $_POST ) ) {
	
		$nome       = filter( $_POST['txtNome'] );
		$email      = filter( $_POST['txtEmail'] );
		$fone       = filter( $_POST['txtTelefone'] );
		$modalidade = filter( $_POST['select_modalidades'] );
		$assunto    = filter( $_POST['txtAssunto'] );
		$mensagem   = filter( $_POST['txtMensagem'] );
			
		$msg = $nome .'<br>'. $email.'<br>'.$fone .'<br>'.$modalidade.'<br>'.$assunto.'<br>'.$mensagem;
	}
	
	if ( empty( $nome ) || empty( $email ) || empty( $fone ) || empty( $modalidade ) || empty( $assunto ) || empty( $mensagem ) ) {

		header('location:contato.html');
		
	} else {
		
		$Email = new PHPMailer();
		$Email->SetLanguage("br");
		$Email->IsMail(); 
		$Email->IsHTML(true); 
		$Email->From = $email;
		$Email->FromName = $nome;
		$Email->AddAddress("daniel@gnpbrasil.com.br");
		$Email->Subject = $assunto;
		$Email->Body = $msg;
		
		if ( $Email->Send() ) {
			header('location:enviado.html');
		}
		
	}	
?>