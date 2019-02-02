
create database my_first_cakePHP_app;
grate all on my_first_cakePHP_app.* to kosukephp@localhost identified by 'DB_PASSWOERD';
use my_first_cakePHP_app

CREATE TABLE `User` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(64) NOT NULL DEFAULT '',
  `password` VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

create table `Product` (
	id int unsigned primary key auto_increment,
	name varchar(50) NOT NULL,
	price int NOT NULL,
  created datetime default null,
  modified datetime default null
);

create table `Cart` (
	id int unsigned primary key auto_increment,
	count int(10) default 1 NOT NULL,
	status int(5) default 0 NOT NULL,
	user_id int NOT NULL,
	product_id int NOT NULL,
  created datetime default null,
  modified datetime default null
);

insert into `User` (`id`, `user_name`, `password`) values
	(1,'user','$2y$10$ecRmAWY4n/jLa0tTzIaG7.SMhb1TfdROy3nXeG5aVZorUX1n6/WHO');

insert into `Product` (name, price, created) values
  ('ジャンパー', 5000, now()),
  ('Tシャツ', 3000, now()),
  ('ジーパン', 4000, now());

select * from users;
