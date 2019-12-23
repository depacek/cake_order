<?php
require_once "common.class.php";
class Customer extends Common{
	public $id,$name,$username,$password,$address,$phoneNumber;

	public function register(){
		  $sql = "insert into tbl_customer(name,username,password,address,phoneNumber) values ('$this->name','$this->username','$this->password','$this->address','$this->phoneNumber')";
	return $this->insert($sql);
	}

	function login(){
		$sql="select * from tbl_customer where username='$this->username' and password='$this->password'";
		$conn = new mysqli('localhost','root','','db_project'); 
		if($conn->connect_errno != 0) {
			die('Database Connection Error');
		}
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$data=$result->fetch_object();
			print_r($data);
			session_start();
			$_SESSION['user_name']=$data->name;
			$_SESSION['user_username']=$data->username;
			$_SESSION['user_address']=$data->address;
			
			header('location:home.php');
		}else {
			return "Username Password didnt match";
		}
	}
}
?>