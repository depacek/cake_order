<?php

class Common{
	protected $connect;
	function set($var,$value){
		$this->$var = $value;
	}

	function get($var){
		return $this-> $var;
	}
	protected function connect(){
		$this->connect = new mysqli('localhost','root','','db_project');
			
			if($this->connect->connect_errno!= 0) {
				die('Database Connection error');
			}
	}
	function insert($sql){
		// print_r($sql);
		$this->connect();
		$this->connect->query($sql);
		if ($this->connect->affected_rows == 1){
			return true;
		}else{
			return false;
		}
	}
	function select($sql){
		$this->connect();
		$result = $this->connect->query($sql);
		$data = [];
		if($result->num_rows > 0){
			while( $row = $result->fetch_object()){
				array_push($data, $row);
			}
			return $data;
		}
	}
	function delete($sql){
		$this->connect();
		$this->connect->query($sql);
		if ($this->connect->affected_rows > 0 ){
			return true;
		}else{
			return false;
		}
	}
	function update($sql){
		// print_r($sql);
		$this->connect();
		$this->connect->query($sql);
		if ($this->connect->affected_rows > 0){
			return true;
		}else{
			return false;
		}
	}
}
?>