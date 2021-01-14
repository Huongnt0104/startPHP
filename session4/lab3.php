<?php 
	class PhepTinh{
		public $so1=0;
		public $so2=0;
		public function __construct($s1,$s2){
			$this->so1=$s1;
			$this->so2=$s2;
		}
		public function cong(){
			$ketqua = $this->so1 + $this->so2;
			echo "<h1>{$this->so1}+{$this->so2} = $ketqua</h1>";
		}
		public function tru(){
			$ketqua = $this->so1 - $this->so2;
			echo "<h1>{$this->so1}-{$this->so2} = $ketqua</h1>";
		}
		public function nhan(){
			$ketqua = $this->so1 * $this->so2;
			echo "<h1>{$this->so1}*{$this->so2} = $ketqua</h1>";
		}
		public function chia(){
			//ham ceil(so) se lay chan
			//ham floor(so)se lay san
			$ketqua = floor($this->so1 / $this->so2);
			echo "<h1>{$this->so1}/{$this->so2} = $ketqua</h1>";
		}
	}
	//khoi tao doi tuong
	$pt=new PhepTinh(5,3);
	$pt->cong();
	$pt->tru();
	$pt->nhan();
	$pt->chia();

 ?>