<?php
namespace Models;

use \Core\Model;
use PDO;

class Links extends Model{
	public function addLeads($tipo, $pagina){
		$dbhost = 'dbleads.mysql.dbaas.com.br';
		$dbname = 'dbleads';
		$dbuser = 'dbleads';
		$dbpass = 'Web@Fertil1234';

		try {
			$banco = new PDO('mysql:host='.$dbhost.'; dbname='.$dbname, $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			
		}

		$dados = array(
			'cliente'	=> 'Royal Park', 
			'pagina'	=> $pagina, 
			'tipo'		=> $tipo,
			'data'		=> date('Y-m-d H:i:s'),
			'ip'		=> $_SERVER['REMOTE_ADDR']
		);

		$sql = $banco->prepare('INSERT INTO tblLeads(cliente, pagina, tipo, data, ip) VALUES (:cliente, :pagina, :tipo, :data, :ip)');
		$sql->bindValue(':cliente' 		, $dados['cliente']);
		$sql->bindValue(':pagina' 		, $dados['pagina']);
		$sql->bindValue(':tipo' 		, $dados['tipo']);
		$sql->bindValue(':data' 		, $dados['data']);
		$sql->bindValue(':ip' 			, $dados['ip']);		
		$sql->execute();

		return true;
	}
}