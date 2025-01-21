create database Mannerings
go
use Mannerings
go
create table Houses(
	REFNO varchar(10) primary key,
	TOWN varchar(10),
	TYPE varchar(20),
	BEDROOMS int,
	PRICE int,
	HEATTING VARCHAR(3),
	GARAGE VARCHAR(10)
)
insert into Houses values
('13678','Croydon','Detached',4,250000,'Yes','Double'),
('13679','Croydon','Semi-Detached',3,165000,'No','Single'),
('13700','Redhill','Flat',2,110000,'Yes','None'),
('13702','Crewly','Detached',4,220000,'Yes','Double'),
('13703','Crewly','Semi-Detached',4,145000,'Yes','Single'),
('13705','Croydon','Terrace',3,95000,'No','None'),
('13708','Brighton','Terrace',3,150000,'Yes','None'),
('13709','Redhill','Detached',3,165000,'Yes','Single'),
('13711','Crewly','Detached',3,175000,'Yes','Double'),
('13712','Brighton','Flat',2,75000,'Yes','None')

select distinct * from Houses where GARAGE='None'