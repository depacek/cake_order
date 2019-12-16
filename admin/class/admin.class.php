<?php
require_once "common.class.php";
class Admin extends Common{
	public $id,$name,$username,$password,$email,$address,$phoneNumber,$status,$last_login;

	

	public function login(){
		 $sql= "select * from tbl_admin where email='$this->email' and password='$this->password' and status= 1";
		 $this->connect();
		$result = $this->connect->query($sql);
		if ($result->num_rows == 1) {
			return $result->fetch_object();
		}else{
			return false;
		}
	}

}

?>