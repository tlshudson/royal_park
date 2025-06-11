<?php
namespace Core;

class Controller{
	public function loadTemplateSite($pagina, $info = array()){
		extract($info);
		require 'views/_site/template.php';
	}
	public function loadTemplatePainel($pagina, $info = array()){
		extract($info);
		require 'views/_painel/template/painel.php';
	}
	public function loadTemplateLogin($pagina, $info = array()){
		extract($info);
		require 'views/_painel/template/login.php';
	}
	public function loadSite($pagina, $info = array()){
		extract($info);
		require 'views/_site/'.$pagina.'.php';
	}
	public function loadPainel($pagina, $info = array()){
		extract($info);
		require 'views/_painel/'.$pagina.'.php';
	}
}