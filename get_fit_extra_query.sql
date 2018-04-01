create database get_fit;

create table members
(
m_id int primary key,
fname varchar(20),
lname varchar(20),
age int,
contact varchar(10),
gender varchar(15),
email varchar(30),
password varchar(15),
program int foreign key references program(p_id)
);

insert into members values(1,'Rahul','Dravid',42,9999875698,'Male','Rdravid@gmail.com','rahuldravid',1);

drop table members

create table program
(
p_id int primary key,
p_name varchar(30)
);

insert into program values(1,'Muscle Gain');
insert into program values(2,'Weight Loss');
insert into program values(3,'Body Transformation');
insert into program values(4,'Getting Fitter');

select * from program;

select * from members;

/* Nested Query */
select p_name from program where p_id in (select program from members where fname='Rahul' and lname='Dravid');

create table trainers
(
t_id int primary key,
t_fname varchar(20),
t_lname varchar(20),
t_age int check(t_age>18),
t_experience int default '0'
);

insert into trainers values(1,'James','Bond',30,default);

create table workouts
(
w_id int primary key,
w_name varchar(25),
w_target_muscle varchar(20),
);

create view account_info
as
(select m.m_id,m.fname,m.lname,m.age,p.p_name from members m,program p where m.program=p.p_id);

select * from account_info;

drop view account_info;