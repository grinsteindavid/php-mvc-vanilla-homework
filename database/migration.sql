CREATE TABLE users
(
id int AUTO_INCREMENT NOT NULL,
email varchar(255) NOT NULL UNIQUE,
password varchar(255) NOT NULL,
created_at varchar(255) NOT NULL,

PRIMARY KEY (id)
);

CREATE TABLE events
(
id int AUTO_INCREMENT NOT NULL,
name varchar(255) NOT NULL UNIQUE,
description text NOT NULL,
created_at varchar(255) NOT NULL,

PRIMARY KEY (id)
);

CREATE TABLE user_event
(
id_user int NOT NULL,
id_event int NOT NULL,

FOREIGN KEY (id_user) REFERENCES users(id),
FOREIGN KEY (id_event) REFERENCES events(id)
);

CREATE TABLE vouchers
(
id int AUTO_INCREMENT NOT NULL,
name varchar(255) NOT NULL UNIQUE,
description text NOT NULL,
created_at varchar(255) NOT NULL,

PRIMARY KEY (id)
);

CREATE TABLE user_voucher
(
id_user int NOT NULL,
id_voucher int NOT NULL,

FOREIGN KEY (id_user) REFERENCES users(id),
FOREIGN KEY (id_voucher) REFERENCES vouchers(id)
);
