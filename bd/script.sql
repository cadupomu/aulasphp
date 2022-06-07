create database if not exists hortifruti;
use hortifruti;

create or replace table hortifruti(
    id int primary key auto_increment,
    produto varchar(250) not null,
    quantidade int not null unique,
    valor DOUBLE(9,2) not null unique,
    create_at timestamp not null default current_timestamp
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

create or replace table login(
    id int primary key auto_increment,
    email varchar(250) not null unique,
    senha varchar(255) not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into login(email, senha) values ('admin@senac.com.br', md5('admin@123'));