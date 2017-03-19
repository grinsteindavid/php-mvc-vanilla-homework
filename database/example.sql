-- CREATE PEOPLE TABLE --
CREATE TABLE people
(
id int NOT NULL,
id_user int NOT NULL,
lastName varchar(255) NOT NULL,
firstName varchar(255),
address varchar(255),
city varchar(255),

PRIMARY KEY (id),
FOREIGN KEY (id_user) REFERENCES users(id)
);
