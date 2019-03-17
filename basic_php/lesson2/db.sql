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
