CREATE DATABASE blog_rocket_ideas;

USE blog_rocket_ideas;

-- validate --

-- 0 = No validado
-- 1 = Validado para publicacion de articulo
-- 2 = Administrador

create table users(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(30) NOT NULL,
    user varchar(30) NOT NULL,
    password varchar(100) NOT NULL,
    registration_date date NOT NULL,
    validate tinyint NOT NULL,
    PRIMARY KEY (id),
    UNIQUE(id)
);

create table blog(
    id int NOT NULL AUTO_INCREMENT,
    title varchar(150),
    content text,
    date_register DATETIME NOT NULL,
    id_user int,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES users(id)
);

INSERT INTO users (user, password, registration_date, validate) VALUES ('admin', '$2y$10$OY8RrLOeKaFQXr.4L4Xvp.iqpepUQgPHq2pjxx0xrfJ5rwuBLeTJu', NOW(), 2);