<?php 
	//tao class sinh vien
	/**
	 * 
	 */
	class SinhVien{
		//trong class se co thuoc tinh (chinh la bien trong class)
		public $hoten;
		//co the gan gia tri mac dinh cho thuoc tinh
		public $email = "";
		//trong class se co cac phuong thuc(chinh la cac ham trong class)
		public function setSinhVien($ht,$m){
			//tac dong vao bien trong class bang tu khoa $this->tenbien
			$this->hoten=$ht;
			$this->email=$m;
			//tac dong vao ham trong class bang cu phap:$this->tebham(ds tham so neu co );
			$this->displaySinhVien();

		}
		public function displaySinhVien(){
			echo "<h1>Ho ten:{$this->hoten}</h1>";
			echo "<h1>email :{$this->email}</h1>";
		}
		//trong class se co ham tao, ham huy. Ham tao duoc mac dinh goi dau tien khi khoi tao class
		public function __construct(){
			echo "<h1> Ham tao duoc mac dinh goi dau tien</h1>";
		}
		//ham huy se goi cuoi cung truoc khi ket thuc class
		public function __destruct(){
			echo "<h1> Ham huy duoc mac dinh goi cuoi cung</h1>";
		}
	}
	//tao doi tuong cu the cua class nay
	$sv1= new SinhVien();
	//tu doi tuong co the tac dong vao ham,bien trong class bang cu phap:$obj->tenham();$obj->tenbien;
	$sv1->setSinhVien("Nguyen Van A","nva@gmail.com");
	$sv2= new SinhVien();
	$sv2->setSinhVien("Nguyen Van B","nvb@gmail.com");

 ?>