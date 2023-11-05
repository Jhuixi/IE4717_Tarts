use mysql;

create table checkOut
( productid int unsigned not null auto_increment primary key,
  productname char(50) not null,
  price float(6,2) not null,
  qty int unsigned not null
);

insert into checkOut values
	(1, "Chocolatie","7.80",1),
    (2, "Yamiee","6.80",1);