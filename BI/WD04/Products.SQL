create database Products
go
use Products
go
create table Account(
    id_account int primary key identity,
    email varchar(100),
    pass varchar(100),
    create_date datetime
)
create table Product_Category(
    id_product_category int primary key identity,
    name varchar(100),
    description text
)
create table Product(
    id_product int primary key identity,
    id_product_category int,
    id_account int,
    name varchar(100),
    image text,
    price decimal,
    constraint FK_P_PC foreign key (id_product_category)
        references Product_Category (id_product_category),
    constraint FK_P_AC foreign key (id_account)
        references Account (id_account)
)
-- Insert sample data into Account table
INSERT INTO Account (email, pass, create_date) VALUES
('user1@example.com', 'Pass@123', '2025-01-01'),
('user2@example.com', 'User@234', '2025-01-02'),
('user3@example.com', 'Test@345', '2025-01-03'),
('user4@example.com', 'Pass@456', '2025-01-04'),
('user5@example.com', 'User@567', '2025-01-05'),
('user6@example.com', 'Test@678', '2025-01-06'),
('user7@example.com', 'Pass@789', '2025-01-07'),
('user8@example.com', 'User@890', '2025-01-08'),
('user9@example.com', 'Test@901', '2025-01-09'),
('user10@example.com', 'Pass@012', '2025-01-10');

-- Insert sample data into Product_Category table
INSERT INTO Product_Category (name, description) VALUES
('Electronics', 'Devices and gadgets'),
('Books', 'Fiction and non-fiction books'),
('Clothing', 'Apparel and accessories'),
('Furniture', 'Home and office furniture'),
('Toys', 'Toys and games for children'),
('Sports', 'Sports equipment and apparel'),
('Beauty', 'Cosmetics and skincare products'),
('Groceries', 'Food and beverages'),
('Automotive', 'Car accessories and tools'),
('Music', 'Musical instruments and albums');

-- Insert sample data into Product table
INSERT INTO Product (id_product_category, id_account, name, image, price) VALUES
(1, 1, 'Smartphone', 'img/smartphone.png', 699.99),
(2, 2, 'Mystery Novel', 'img/mystery_novel.png', 19.99),
(3, 3, 'Winter Jacket', 'img/winter_jacket.png', 89.99),
(4, 4, 'Office Chair', 'img/office_chair.png', 149.99),
(5, 5, 'Lego Set', 'img/lego_set.png', 49.99),
(6, 6, 'Football', 'img/football.png', 29.99),
(7, 7, 'Lipstick', 'img/lipstick.png', 14.99),
(8, 8, 'Organic Tea', 'img/organic_tea.png', 9.99),
(9, 9, 'Car Charger', 'img/car_charger.png', 24.99),
(10, 10, 'Electric Guitar', 'img/electric_guitar.png', 299.99)

select id_product,image,Product.name as name1,Product_Category.name as name2,price from Product,Product_Category where Product.id_product_category=Product_Category.id_product_category