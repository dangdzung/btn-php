DROP DATABASE IF EXISTS project_1;
CREATE DATABASE project_1;
USE project_1;

CREATE TABLE admin(
    id int primary key AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    password varchar(100) not null,
    role varchar(50) null default 'member'
);

CREATE TABLE category(
    id int primary key AUTO_INCREMENT,
    name varchar(100) not null unique,
    status tinyint null default '1'
);

CREATE TABLE product(
    id int primary key AUTO_INCREMENT,
    name varchar(100) not null unique,
    price float not null,
    sale float  null default '0',
    image varchar(200)not null,
    description text null,
    category_id int not null,
    status tinyint null default '1',
    foreign key (category_id) references category(id)
);

CREATE TABLE customer(
    id int primary key AUTO_INCREMENT,
    name varchar(100) not null,
    email varchar(100) not null unique,
    phone varchar(100) not null unique,
    password varchar(100) not null ,
    address varchar(255) null,
    status tinyint null default '1'
);

CREATE TABLE cart(
    id int primary key AUTO_INCREMENT,
    product_id int not null,
    customer_id int not null,
    quantity int not null,
    price float not null,
    foreign key (product_id) references product(id),
    foreign key (customer_id) references customer(id)
);

CREATE TABLE orders(
    id int primary key AUTO_INCREMENT,
    name varchar(100)  null,
    email varchar(100)  null,
    phone varchar(100)  null,
    address varchar(255) null,
    customer_id int not null,
    status tinyint null default '1',
    order_note varchar(255) null,
    order_date date DEFAULT NOW(),
    foreign key (customer_id) references customer(id)
);

CREATE TABLE order_detail(
    order_id int not null,
    product_id int not null,
    quantity int not null,
    price float not null,
    primary key (order_id,product_id),
    foreign key (order_id) references orders(id),
    foreign key (product_id) references product(id)
);
    
CREATE TABLE favorite (
    customer_id int not null,
    product_id int not null,
    primary key (order_id,product_id),
    foreign key (customer_id) references customer(id),
    foreign key (product_id) references product(id)
);


CREATE TABLE comments (
    customer_id int not null,
    product_id int not null,
    comment text not null,
    status tinyint null default '1',
    primary key (customer_id,product_id),
    foreign key (customer_id) references customer(id),
    foreign key (product_id) references product(id)
);

CREATE TABLE ratings (
    customer_id int not null,
    product_id int not null,
    start float not null,
    primary key (customer_id,product_id),
    foreign key (customer_id) references customer(id),
    foreign key (product_id) references product(id)
);


create table teacher (
    id int primary key AUTO_INCREMENT,
    name varchar(100) not null unique,
    age int not null,


);


INSERT INTO admin(name,email,password,role) values 
('Admin Root','admin@gmail.com','123456','admin'),
('Trần Văn Nam','namvt@gmail.com','123456','number');