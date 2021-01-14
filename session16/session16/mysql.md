- insert
	insert into tenbang set cot1=giatri1,cot2=giatri2...
	insert into tenbang(cot1,cot2...) values(giatri1,giatri2...)
- update	
	update tenbang set tencot1=giatri,tencot2=giatri... where ...
	Chu y: neu khong co dieu kien where thi toan bo cac ban ghi se update cung mot gia tri
- delete
	delete from tenbang where ...
	Chu y: neu khong co dieu kien where thi toan bo cac ban ghi trong bang se bi xoa
- Mo hinh MVC
	- Bao gom 3 thanh phan
		- Model: la phan gan nhat voi csdl, chua cac ham su dung de thao tac du lieu
		- Controller: nam giua model va view, co tac vu lay du lieu tu model va truyen ra view
		- View: hien thi du lieu
	Chu y:
		- Co nhieu MVC khac nhau, moi MVC thuc hien mot chuc nang
		- Khi load MVC chi can load file Controller thi MVC se hoat dong