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
user_id int NOT NULL,
event_id int NOT NULL,

FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (event_id) REFERENCES events(id)
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
user_id int NOT NULL,
voucher_id int NOT NULL,

FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (voucher_id) REFERENCES vouchers(id)
);
