<?php 
	require_once 'class/class.phpmailer.php';

	function filter( $txt ) {
		return addslashes( $txt );
	}
	
	if ( ! empty( $_POST ) ) {
	
		$nome       = filter( $_POST['nome'] );
		$email      = filter( $_POST['email'] );
		$fone       = filter( $_POST['telefone'] );
		$modalidade = filter( $_POST['modalidade'] );
		$assunto    = filter( $_POST['assunto'] );
		$mensagem   = filter( $_POST['mensagem'] );
			
		$msg = $nome .'<br>'. $email.'<br>'.$fone .'<br>'.$modalidade.'<br>'.$assunto.'<br>'.$mensagem;
	}
	
	if ( empty( $nome ) || empty( $email ) || empty( $fone ) || empty( $modalidade ) || empty( $assunto ) || empty( $mensagem ) ) {

		echo "Campos vazios...";
		
	} else {
		
		$Email = new PHPMailer();
		$Email->SetLanguage("br");
		$Email->IsMail(); 
		$Email->IsHTML(true); 
		$Email->From = $email;
		$Email->FromName = $nome;
		$Email->AddAddress("pedrogaliza@hotmail.com, galiza@fiverounds.com.br");
		$Email->Subject = $assunto;
		$Email->Body = $msg;
		
		if ( $Email->Send() ) {
			echo "Mensagem enviada!";
		}
		
	}	
?>