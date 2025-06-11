<?php
namespace Core;

class Core{
	public function start(){
		$url = '/';
		$parametros = array();

		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}

		if(!empty($url) && $url != '/'){
			$url = explode('/', $url);
			
			array_shift($url);
			$controller = $url[0].'Controller';

			array_shift($url);
			if(isset($url[0]) && !empty($url[0])){
				$action = $url[0];
				array_shift($url);
			}else{
				$action = 'index';
			}

			if(count($url) > 0){
				$parametros = $url;
			}
		}else{
			$controller = 'HomeController';
			$action = 'index';
		}

		$controller = ucfirst($controller);

		$prefixo = '\Controllers\\';

		if(!file_exists('Controllers/'.$controller.'.php') || !method_exists($prefixo.$controller, $action)){
			$controller = 'VirbErroController';
			$action = 'index';
		}
	
		$controller = $prefixo.$controller;

		$c = new $controller();

		call_user_func_array(array($c, $action), $parametros);
	}
}