- He quan tri csdl mysql su dung de luu tru du lieu
- Database: trong csdl mysql se co nhieu database, moi database la mot goi du lieu phuc vu cho mot uc dich nao do. VD: database tin tuc, database ban hang...
	- Trong Database se bao gom nhie bang(table)
		- Trong table se bao gom cac thnh phan
			- cac cot (file). Cac cot se co kieu du lieu khac nhau 
				- varchar :kieu ky tu, do rong tu 1 den 4000 ky tu 
				- Text: kieu ky tu co do rong tinh bang byte
				- AI: cot nay khong can nhap du lieu, no se tu tang len 1 khi insert ban ghi moi
				- chu y: kieu varchar, text,date thi gia tri co dau nhay bao quanh.
				- Moi lien he giua cac cot trong bang:
				- Khoa chinh: gia tri khong duoc phep giong nhau o cac ban ghi. VD: ban ghi dau tien co gia tri 1 thi cacc ban ghi khac khong co gia tri 1 nua
				- Khoa ngoai: la mot cot cua bang a cung kieu du lieu cua bang B, dung de khop noi cac ban ghi co cung gia tri voi nhau 
			- cac hang: su dung de luu tru cac ban ghi

- Truy cap phpmyadmin: http://locahost/phpmyadmin
- Truy vấn CSDL:
	- Cau truc truy van
		select tencot from tenbang where tencot sosanh giatri group by tencot order bytencot limit tubanghi, laybaonhieubanghi
	- Liet ke tat ca cac ban ghi 
		select * form tenbang
	- Liet ke cac cot chi dinh
		select cot1, cot2, ... from tenbang
	- Dat ten cho cot hien thi
		select cot1 as "tencot1", cot2 as "tencot2" from tenbang
	- Dieu kien truy van: where 
		- where tencot sosanh giatri
			- sosanh
				- lonhon: >
				- lonhon hoac bang:>=
				- nho hon:<
				- nho hon hoac bang <=
				- bang nhau: =
				- khac nhau:<>
		-where tencot in (tap cac gia tri)
			VD1: where luong in (1400000,145999999)
		- where tencot not in (tap cac gia tri)
		- where tencot sosanh (truy van con tra ve mot gia tri phu hop voi kieu gia tri cua ten cot)
		- where tencot in (truy van con tra ve nhieu gia tri phu hop voi kieu gia tri cua ten cot)
		- where tencot not in (truy van con tra ve nhieu gia tri phu hop voi kieu gia tri cua ten cot)
		- where tencot like "%key" -> ket thuc bang tu khoa key
		- where tencot like "key%" -> bat dau bang tu khoa key
		- where tencot like "%key%" -> co chua tu khoa key
	- Cac ham uoc luong :
		- min(tencot) -> tra ve gia tri nho nhat
		- max(tencot) -> tra ve gia tri lon nhat
		- sum(tencot) -> tong
		- avg(tencot) -> gia tri trung binh
		- count(tencot) -> dem so ban ghi
	- Cac ham ve thoi gian
		- now() -> ta ve thoi gian hien tai
		- year(thoigian)-> nam
		- month(thoigian) -> thang
		- day(thoigian) -> ngay
	- Group by: nhom cac gia tri hien thi theo cac gia tri block
	- Order by tencot asc -> sapxep ten cot tang dan
	- order by tencot desc -> sapxep ten cot giam dan
	- limit tubanghi, laybaonhieubanghi
		- ban ghi dau tien la ban ghi thu 0
	- join cac bang voi nhau
		- inner join -> join cac bang dua tren cac gia tri chung cua cot join
		- left join -> join cac bang, uu tien hien thi cot ben trai, neu cot bn phai khong co gia tri chung thi hien thi null
		- right join -> join cac bang, uu tien hien thi cot ben phai, neu cot bn trai khong co gia tri chung thi hien thi null
			select tencot from bang1 right join bang2 on bang1.tencot = bang2.tencot where...
	- Insert
		inseet into tenbang set cot1=giatri1,cot2=giatri2...
		insert into tenbang(cot1,cot2...) values(giatri1,giatri2...)
	- Update
		update tnbang set tencot1=giatri1,tencot2=giatri2,... where ...
		chu y: neu khong co where thi toan bo cac ban ghi se update cung mot gia tri
	- Delete
		delete from tenbang where ...
		chu y: neu khong co dieu kien where thi toan bo cac ban ghi trong bang se bi xoa
	- Mo hinh MVC:
		- Bao gom 3 thanh phan 
			 - Model: la phan gan nhat voi csdl, chua cac ham su dung de thao tac du lieu
			 - Controller: nam giua moder va view, co tac vu lay du lieu tu model va truyen ra view
			 - view: hien thi du lieu
		Chu y: 
			- Co nhieu MVC khac nhau, moi MVC thuc hien mot chuc nang
			- Khi load MVC chi can load file Controller thi MVC se hoat dong
