create database Aptech_PHP21_Thuat;


create table Aptech_PHP21_Thuat.users (
id int (20),
last_name varchar (255),
first_name varchar (255),
email varchar (255) unique,
created_at datetime,
modified_at datetime,
deleted_at datetime
);

alter table aptech_php21_thuat.users add dob date;

alter table aptech_php21_thuat.users drop column dob;

insert into aptech_php21_thuat.users (id, last_name, first_name, email, created_at)
values
(1, 'Thuat', 'Tran', 'tvthuat.89@gmail.com', 1),
(2, 'Nam', 'Nguyen', 'namnh.website@gmail.com', 2),
(3, 'Long', 'Phi', 'longphi.php21@gmail.com', 3),
(4, 'Trinh', 'Nguyen', 'trinhnguyen.php21@gmail.com', 4),
(5, 'Phu', 'Le', 'phule.php21@gmail.com',1);