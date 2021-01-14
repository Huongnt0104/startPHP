- Array:mang trong php
- Array bao gom 2 thanh phan
	 - Key: la chi so cua array, key chay tu 0 den n
	 - Value: la gai tri cua array  tuong ung voi phan tu thu key 
	 	- Value co cac kieu gia tri :integr, float ,string ,object..
- Dinh nghia array 
	- Cach 1
		$tenbien = array();
		//gan cac gia tri vao array
		$tenbien [] = giatri ; //khi do key se tu dong tang 1 don vi
- Duyet cac phan tu array
	- Ham print_r($tenbien) se hien thi cau truc cua array
	- Cach 1
		foreach($bien as $key =>$value){}
	- Cach 2
		foreach($bien as $value){}