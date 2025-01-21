create database Mana_commodity
go
use Mana_commodity
go
create table CLASSES(
	Class_ID varchar(50) primary key,
	Class_Name varchar(50)
)
create table STUDENTS(
	Student_ID varchar(50) primary key,
	S_FristName varchar(50),
	S_LastName varchar(50),
	S_City varchar(50),
	Class_ID varchar(50)
	constraint FK_S_C foreign key (Class_ID)
		references CLASSES(Class_ID)
)
insert into CLASSES values
('CS01','Computer Science 2019'),
('CS02','Computer Science 2020'),
('Ma01','Math 2017'),
('Mu01','Math 2019')

insert into STUDENTS values
('CS101','Linh','Tran Thu','Can Tho','CS01'),
('CS102','An','Phan Van','Vinh Long','CS01'),
('CS201','Van','Truong Thu','Tra Vinh','CS02'),
('CS202','Truong','Duong Van','Vinh Long','CS02')
