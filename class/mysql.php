<?php 

class Sql extends PDO{

	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname = dbphp7", "root", "");
	}

	private function setParamters($statment, $value, $key){
		$statment->bindParam($key,$value);
	}

	private function setParams($statement, $parameters = array()){
		foreach ($parameters as $key => $value) {
			# code...
			$this->setParamters($key,$value);
		}
	}

	public function query($rowQuery, $params = array()){

		$sql = $this->conn->prepare()$rowQuery;

		$this->setParamters($sql,$params);
		$sql->execute();
		return $sql;

	}

	public function result($rowQuery, $params = array()):array{

		$sql = $this->query($rowQuery,$params);
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}



}

 ?>



 
