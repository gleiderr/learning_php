<?php 

class Client {
	
	function __construct(){
		//Opções do cliente Soap:
		//	location: URL do SOAP server para o qual será enviada a requisição
		//	uri: Namespace do SOAP server
		//	trace: ligado para recuperar retorno de falhas
		$params = array('location' => 'http://localhost/learning_php/server.php',
						'uri' => 'urn://localhost/learning_php/server.php',
						'trace' => true);
		$this->instance = new SoapClient(NULL, $params);
	}

	//Efetua requisição SOAP para recuperação do nome de estudantes
	public function getName($id_array) {
		return $this->instance->__soapCall('getStudentsName', $id_array);
	}
}

$client = new Client();
 ?>