<?php
namespace Models;

use \Core\Model;
use \PHPMailer\PHPMailer\PHPMailer ;
use \PHPMailer\PHPMailer\SMTP ;
use \PHPMailer\PHPMailer\Exception ;

class VirbEmail extends Model{

/*AUXILIARES*/
	public function emailEnvio($tipo, $dados = array()){
		$mail = new  PHPMailer();

		switch($tipo){
			case 'contato'; $assunto = $this->emailContato(); break;
		}

		$titulo   = $assunto['titulo']; 
		$mensagem = $assunto['mensagem'];

		try{
			$mail->IsSMTP(); 
			$mail->Host 		= 'smtp.virtualizabrasil.com.br';; 
			$mail->SMTPAuth 	= true;
			$mail->Username 	= "naoresponda@virtualizabrasil.com.br"; 
			$mail->Password 	= "t2V5*ax5"; 
			$mail->Port 		= 587;

			$mail->setFrom('naoresponda@virtualizabrasil.com.br', CLIENTE);
			$mail->addAddress('comercial@royalparkempreendimentos.com.br', CLIENTE);
			$mail->addAddress('contato@agenciafertil.com.br', CLIENTE);

			$mail->IsHTML(true);
			$mail->CharSet = "utf-8"; 
			$mail->Subject  = "$titulo"; 
			$mail->Body = "$mensagem";
			$mail->send();

			echo '<script type="text/javascript">alert("Mensagem enviada com sucesso, logo nosso especialista entrará em contato.).")</script>';

		}catch(Exception  $e){
			echo '<script type="text/javascript">alert("A mensagem não pôde ser enviada. Tente novamente")</script>';
		}

	}	
	public function emailContato(){
		$nome 		= addslashes($_POST['nome']);
		$email 		= addslashes($_POST['email']);
		$telefone	= addslashes($_POST['telefone']);

		$dados['titulo'] = 'Contato :: '.CLIENTE;
		$dados['mensagem'] = '
			Olá,<br><br>
			Você tem uma nova mensagem, segue abaixo os dados.<br><br>

			Nome: <b>'.$nome.'</b><br>
			Email: <b>'.$email.'</b><br>
			Telefone: <b>'.$telefone.'</b><br>

			<br>
			Este e-mail foi enviado automáticamente, por favor não responda.
		';

		return $dados;
	}	
}