<?php
namespace Controllers;
use \Core\Controller;
use \Models\Links;

class LinkController extends Controller{
	public function index(){
		header('location:'.URL);
	}
	public function type($link, $pagina){
		$links = new Links();
				
		switch ($link) {
			case 'whatsapp':
				//$links->addLeads($link, $pagina);
				header('');
			break;
			case 'telefone':
				//$links->addLeads($link, $pagina);
				header('');
			break;
		}
	}
}