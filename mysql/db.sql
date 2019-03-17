CREATE TABLE users(
    id int(11) PRIMARY KEY NOT null AUTO_INCREMENT,
    username varchar(255),
    email varchar(100) NOT NULL,
    password varchar(255) not null,
    avatar varchar(200)
);

insert into table_names(column1, column2...) values(value1, value2..) ;

DELETE FROM table_names where id > 5 limit 1;

update table_names set column1='', column2=?? where id = ??;

select * from table_names where ???;
select name, image, price from products where name like '%pr%'

SELECT * from Orders WHERE OrderID != 2000 LIMIT 10 OFFSET 100;
in, between, >, < and , or 

SELECT AVG(Freight) as avg_freight from Orders 
min, max, avg, 
SELECT ProductID, ProductName (UnitPrice*UnitsInStock) as total FROM Products;

SELECT if(UnitsInStock = 0, 'het hang', UnitsInStock) AS in_stock FROM Products;
SELECT
    ProductID,
    ProductName,
    UnitPrice,
    (
        CASE WHEN UnitsInStock > 50 THEN 'Con rat nhieu' WHEN UnitsInStock > 10 THEN 'con nhieu' WHEN UnitsInStock > 0 THEN 'con it' ELSE 'het hang'
    END
)
FROM
    Products;

    SELECT * FROM `Products` ORDER BY ProductID DESC /*mac dinh la asc, */
    SELECT * FROM `Products` GROUP BY SupplierID ORDER BY ProductID DESC/* select distint suppliers nhom ket qua lai theo dieu kien*/
    SELECT * FROM `Products` GROUP BY CategoryID HAVING CategoryID != 7;
    SELECT Products.ProductID as ID, Products.ProductName as Name, Products.UnitPrice as Price FROM Products; /*day du*/
    SELECT p.ProductID as ID, p.ProductName as Name, p.UnitPrice as Price FROM Products as p /*alias cho cot va cho bang*/
    SELECT e.EmployeeID as id, concat(e.FirstName, ' ', e.LastName) as full_name, e.Title as Title FROM Employees as e

    SELECT p.* FROM products as p;
    SELECT p.* 
FROM products as p
LEFT JOIN categories as c ON p.category_id = c.id;

SELECT * from products
LEFT JOIN categories ON categories.id = products.category_id;

SELECT p.*, c.id as CateID, c.name as cate_name, c.status as cate_status FROM products as p JOIN categories as c ON c.id = p.category_id


SELECT p.ProductID, p.ProductName, p.CategoryID, c.CategoryID as cate_id, c.CategoryName as cateName FROM Products as p LEFT JOIN Categories as c ON p.CategoryID = c.CategoryID
