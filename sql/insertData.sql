use mysql;

create table tarts
( productid int unsigned not null auto_increment primary key,
  productname char(50) not null,
  price float(6,2) not null
);

insert into tarts values
	(1, "Chocolatie","7.80"),
    (2, "Yamiee","6.80"),
    (3, "Jack-o'-lantern","7.80"),
    (4, "Lemonie Blossom","6.80"),
    (5, "Berrie Forest","8.20"),
    (6, "Be Peachie","8.20"),
    (7, "Green Sunset","8.80"),
    (8, "Sparkie Pink","8.20"),
    (9, "Wallie's Favourite","8.20"),
    (10, "Hazelnut Dream","8.20"),
    (11, "Everything Pistachio","9.20"),
    (12, "Surprise me","22.80");