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
				header('location:https://api.whatsapp.com/send/?phone=553833650100');
			break;
			case 'telefone':
				//$links->addLeads($link, $pagina);
				header('location:tel:3833650100');
			break;
		}
	}
}