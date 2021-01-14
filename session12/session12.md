- Array: mang trong php
- Array bao gom 2 thanh phan
	- Key: la chi so cua array, key chay tu 0 den n
	- Value: la gia tri cua array tuong ung voi phan tu thu key
		- Value co cac kieu gia tri: integer, float, string, object, array...
- Dinh nghia array
	- Cach 1
		$tenbien = array();
		//gan cac gia tri vao array
		$tenbien[] = giatri; //khi do key se tu dong tang 1 don vi
	- Cach 2
		//tao bien va xac lap gia tri cho bien
		$tenbien = array(giatri1,giatri2...);
	- Cach 3
		//co the dat gia ten key
		$tenbien = array("tenkey1"=>giatri1,"tenkey2"=>giatri2);
- Dinh nghia array theo cach khac: thay tu khoa array thanh dau []
	- Cach 1: $tenbien = [] <=> $tenbien = array();
	- Cach 2: $tenbien = [giatri1,giatri2...] <=> $tenbien = array(giatri1,giatri2...);
	- Cach 3: $tenbien = ["tenkey1"=>giatri1,"tenkey2"=>giatri2]
- Truy xuat gia tri cua bien
	- $tenbien[key]
		- key co the la so tu 0 den n
		- key co the la ten key (da dat khi khoi tao)
- Duyet cac phan tu array
	- Ham print_r($tenbien) se hien thi cau truc cua array
	- Cach 1
		foreach($bien as $key=>$value){}
	- Cach 2
		foreach($bien as $value){}
- include "tenfile" -> load noi dung cua mot file khac vao file hien tai
- include_once "tenfile" -> load noi dung cua mot file khac vao file hien tai
- require "tenfile" -> load noi dung cua mot file khac vao file hien tai
- require_once "tenfile" -> load noi dung cua mot file khac vao file hien tai