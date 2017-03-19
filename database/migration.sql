CREATE TABLE users
(
id int AUTO_INCREMENT NOT NULL,
email varchar(255) NOT NULL UNIQUE,
password varchar(255) NOT NULL,

PRIMARY KEY (id)
);
