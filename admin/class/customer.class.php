<?php
require_once "common.class.php";
class Customer extends Common{
	public $id,$name,$username,$password,$email,$address,$phoneNumber;

	public function register(){
		 $sql = "insert into tbl_customer(name,username,password,email,address,phoneNumber) values ('$this->name','$this->username','$this->password','$this->email','$this->address','$this->phoneNumber')";
	return $this->insert($sql);
	}
}
?>