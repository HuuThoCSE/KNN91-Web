create database Cities
go
use Cities
go
create table Countries(
    code varchar(5) primary key,
    Name varchar(20),
    Continent varchar(20),
    independence_yead int,
    population int,
    gnp decimal(10, 2),
    head_of_state varchar(50)
)
create table Cities(
    id int primary key,
    Name varchar(20),
    country_code varchar(5),
    district varchar(20),
    population int
)
create table Languages(
    country_code varchar(5),
    language varchar(20),
    official varchar(10),
    percentage float,
    constraint PK_L primary key (country_code, language)
)
alter table Cities add
    constraint FK_CT_Coun foreign key(country_code)
        references Countries(code)
alter table Languages add
    constraint FK_L_Coun foreign key(country_code)
        references Countries(code)

-- Insert sample data into Countries table
insert into Countries (code, Name, Continent, independence_yead, population, gnp, head_of_state) values
('USA', 'United States', 'North America', 1776, 331002651, 21433.23, 'Joe Biden'),
('CAN', 'Canada', 'North America', 1867, 37742154, 1736.43, 'Justin Trudeau'),
('MEX', 'Mexico', 'North America', 1810, 128932753, 1221.99, 'Andrés Manuel López Obrador'),
('BRA', 'Brazil', 'South America', 1822, 212559417, 1444.73, 'Jair Bolsonaro'),
('ARG', 'Argentina', 'South America', 1816, 45195774, 449.66, 'Alberto Fernández');

-- Insert sample data into Cities table
insert into Cities (id, Name, country_code, district, population) values
(1, 'New York', 'USA', 'New York', 8419000),
(2, 'Los Angeles', 'USA', 'California', 3980400),
(3, 'Toronto', 'CAN', 'Ontario', 2731571),
(4, 'Mexico City', 'MEX', 'Mexico City', 9209944),
(5, 'São Paulo', 'BRA', 'São Paulo', 12325232);

-- Insert sample data into Languages table
insert into Languages (country_code, language, official, percentage) values
('USA', 'English', 'Yes', 80.0),
('CAN', 'English', 'Yes', 56.0),
('CAN', 'French', 'Yes', 21.0),
('MEX', 'Spanish', 'Yes', 98.0),
('BRA', 'Portuguese', 'Yes', 99.0);
select Cities.Name,Cities.population from Cities,Countries where Countries.code=Cities.country_code order by population desc
select Name,population from Countries order by population desc
select distinct Countries.Name as country,Cities.Name as city from Cities,Countries where Countries.code=Cities.country_code