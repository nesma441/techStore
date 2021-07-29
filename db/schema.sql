create table cats(
id int unsigned not null auto_increment,
name varchar(200),
created_at datetime not null default now(),
primary key (id)

);
create table products(
id int unsigned not null auto_increment,
name varchar(200),
`desc` text not null,
price decimal (8,2) not null,
pieces_no smallint not null,
img varchar (255) not null ,
cat_id int unsigned ,
created_at datetime not null default now(),

primary key (id),
foreign key(cat_id) references cats(id ) on delete set null

);
create table orders(
id int unsigned not null auto_increment,
name varchar(255) not null ,
email varchar(255)  ,
address varchar(255)  ,
phone varchar(255) not null ,
status enum ('pending','approved','canceled' ) not null default 'pending',
primary key (id)
);
create table order_details (
id int unsigned not null auto_increment,
order_id int unsigned,
product_id int unsigned ,
qty int not null,
primary key (id ),
foreign key (order_id) references orders(id ),
foreign key (product_id) references products(id )


);

create table admins (
id int unsigned not null auto_increment,
name varchar(255) not null ,
email varchar(255)  ,
`password` varchar(255) not null ,
is_super enum('yes','no') not null default 'no',
created_at datetime not null default now(),

primary key 
);

-- // seeds
INSERT INTO cats (name) VALUES ('Laptops'), ('PCs'), ('Mobiles');

INSERT INTO products (name, desc, price, pieces_no, img, cat_id) VALUES
 ('lenovo ideapad', 'this is dummy description for product', 15000, 10, '1.jpg', 1), 
('dell laptop', 'this is dummy description for product', 10000, 10, '2.jpg', 1), 
('hp laptop', 'this is dummy description for product', 8000, 8, '3.jpg', 1), 
('lenovo thinkpad', 'this is dummy description for product', 13000, 5, '4.jpg', 1),
 ('pc 123', 'this is dummy description for product', 5000, 3, '5.jpg', 2),
  ('pc 456', 'this is dummy description for product', 6000, 4, '6.jpg', 2),
   ('pc 789', 'this is dummy description for product', 7000, 2, '7.jpg', 2), 
   ('samsung ay 7aga', 'this is dummy description for product', 5000, 100, '8.jpg', 3),
    ('oppo ay 7aga', 'this is dummy description for product', 5500, 50, '9.jpg', 3),
     ('hwawei ay 7aga', 'this is dummy description for product', 5200, 30, '10.jpg', 3); 

INSERT INTO admins (name, email, 'password') VALUES ('kareem fouad', 'kareem@admin.com', "); 


