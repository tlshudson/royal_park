<?php
namespace Controllers;
use \Core\Controller;
use \Models\VirbEmail;
use \Models\Links;

class HomeController extends Controller{
	public function index(){
		$captch = array();
		$captch[1] = rand(1, 9);
		$captch[2] = rand(1, 9);
		$captch[3] = $captch[1] + $captch[2];

		$header = array(
			'title' 		=> 'Home',
			'description' 	=> '',
			'keywords' 		=> '',
			'url'			=> URL,
			'imagem'		=> IMG.'marca.png',
		);

		if(isset($_POST['acao'])){
			$response = isset($_POST['g-recaptcha-response'])?$_POST['g-recaptcha-response']:null; 

			if (!is_null($response)) {
				$vEmail = new VirbEmail();
				$vEmail->emailEnvio('contato');
			}else{
				return false;
			}
		}

		$info = array(
			'header'	=> $header,
			'captch'	=> $captch

		);

		$this->loadTemplateSite('inicial', $info);
	}
}