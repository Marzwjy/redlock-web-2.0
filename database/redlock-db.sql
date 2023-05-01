CREATE DATABASE Redlock;
USE Redlock;

CREATE TABLE users (
    ID INT NOT NULL AUTO_INCREMENT,
    Nama VARCHAR(225) NOT NULL,
    Alamat VARCHAR(225) NOT NULL,
    Jabatan VARCHAR(225) NOT NULL,
    Primary key (ID)
);

INSERT INTO users VALUES("1", "Reivy", "Tanjung Bunga", "CEO");
INSERT INTO users VALUES("2", "Jel", "BTP", "Direktur");
INSERT INTO users VALUES("3", "Manda", "Malino", "Manager");
INSERT INTO users VALUES("4", "Vanesia", "DH", "Staff");
INSERT INTO users VALUES("5", "Yessica", "Gatsu", "Staff");