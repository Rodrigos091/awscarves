CREATE TABLE IF NOT EXISTS shop(
item_id IN UNSIGNED NOT NULL AUTO_INCREMENT ,
item_name VARCHAR(20) NOT NULL,
item_desc VARCHAR(200) NOT NULL,
item_img VARCHAR(20) NOT NULL,
item_price DECIMAL(4,2) NOT NULL,
PRIMARY KEY ( item_id) ) ;





insert into shop
	(item_name , item_desc , item_img , item_price)
	values
	( "scarve" , "great for all season." , "images/gallery4.jpg" , 6.99),
	( "cotton" , "imported from India." , "images/gallery3.jpg" , 5.99),
	( "silk" , "also in differents colours" , "images/gallery2.jpg" , 7.99),
	( "yarn" , "keep in touch with fashion" , "images/gallery5.jpg" , 5.50);







