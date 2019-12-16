<?php
require_once "common.class.php";
class Product extends Common{
	public $id,$name,$price,$description,$rank,$status,$created_at,$updated_at,$updated_by,$created_by,$image;
	public function create(){
		 $sql = "insert into tbl_product (name,price,description,status,rank,created_at,image) values ('$this->name','$this->price','$this->description','$this->status','$this->rank','$this->created_at','$this->image')";
		return $this->insert($sql);
	}
	public function lists(){
		$sql = "select * from tbl_product order by created_at desc limit 10";
		return $this->select($sql);
	}
	public function getProductById(){
		$sql = "select * from tbl_product where id='$this->id'";
		return $this->select($sql);
	}
	public function deleteProductById(){
		$sql = "delete from tbl_product where id='$this->id'";
		return $this->delete($sql);
	}
	public function selectProductById(){
		$sql = "select * from tbl_product where id='$this->id'";
		return $this->select($sql);
	}
		public function edit(){
		 $sql = "update tbl_product set name='$this->name' ,price='$this->price' , description='$this->description' ,status='$this->status' ,rank='$this->rank', created_at ='$this->created_at',updated_by='$this->updated_by',image='$this->image' where id='$this->id'";
		return $this->update($sql);
	}
	
}
?>