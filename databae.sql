create table menus
(
	id int(10) unsigned auto_increment
		primary key,
	name varchar(255) not null,
	position int not null,
	visible tinyint(1) not null,
	link varchar(255) not null,
	created_at timestamp null,
	updated_at timestamp null
)
;

create table migrations
(
	id int(10) unsigned auto_increment
		primary key,
	migration varchar(255) not null,
	batch int not null
)
;

create table password_resets
(
	email varchar(255) not null,
	token varchar(255) not null,
	created_at timestamp null
)
;

create index password_resets_email_index
	on password_resets (email)
;

create table posts
(
	id int(10) unsigned auto_increment
		primary key,
	body text not null,
	short_body text not null,
	heading varchar(255) not null,
	filename varchar(255) not null,
	visible tinyint(1) not null,
	link varchar(255) not null,
	author varchar(255) not null,
	created_at timestamp null,
	updated_at timestamp null
)
;

create table users
(
	id int(10) unsigned auto_increment
		primary key,
	name varchar(255) not null,
	email varchar(255) not null,
	password varchar(255) not null,
	remember_token varchar(100) null,
	created_at timestamp null,
	updated_at timestamp null,
	constraint users_email_unique
		unique (email)
)
;

