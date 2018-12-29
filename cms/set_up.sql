
create database my_first_cakePHP_app;
grate all on my_first_cakePHP_app.* to kosukephp@localhost identified by 'DB_PASSWOERD';
use my_first_cakePHP_app

create table users (
	id int unsigned primary key auto_increment,
	name varchar(50),
  email varchar(255),
  created datetime default null,
  modified datetime default null
);

create table lessons (
	id int unsigned primary key auto_increment,
	title varchar(50),
  created datetime default null,
  modified datetime default null
);

insert into users (name, email, created) values
  ('kosuke', 'test1@test.com', now()),
  ('kouta', 'test2@test.com', now()),
  ('yuuta', 'test3@test.com', now());

insert into lessons (title, created) values
  ('経済学', now()),
  ('心理学', now()),
  ('経営学', now());

select * from users;
