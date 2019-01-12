CREATE DATABASE mapmemo;
use mapmemo;

CREATE TABLE markers (
    id   INTEGER          PRIMARY KEY AUTOINCREMENT,
    lat  DECIMAL (10, 20) NOT NULL,
    lng  DECIMAL (10, 20) NOT NULL,
    name VARCHAR (500)    NOT NULL,
    image TEXT             NOT NULL
);
