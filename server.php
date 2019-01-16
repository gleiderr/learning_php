<?php 
	
	//Classe responsável por produzir respostas às requisições;
	class Server {
		public function getStudentsName($id_array) {
			return 'Sam';
		}
	}

	//Inicializado server repassando o URI do server.
	$server = new SoapServer(NULL, array('uri' => 'http://localhost/learning_php/server.php'));
	$server->setClass('Server'); //Atribuida classe manipuladora das requisições SOAP
	$server->handle(); //Manipula requisições
 ?>