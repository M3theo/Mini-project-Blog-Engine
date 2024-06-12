create database blog;
show databases;
create table posts (id INT(11) AUTO_INCREMENT PRIMARY KEY, title VARCHAR(255) NOT NULL, content TEXT NOT NULL, date DATETIME NOT NULL);

create table posts (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    date DATETIME NOT NULL
);

#see if it worked
show tables;

#how to insert value into a table
INSERT INTO posts (title, content, date) VALUES ('DINER', 'ROUGAIL SAUCISSE', NOW(), 'C était très bon');

#show all post of the table "posts"
SELECT * FROM posts;

#how to delete data of a table (The first post for example)
DELETE FROM 'posts' WHERE 'id' = 1;

#create users table
create table users (username TEXT NOT NULL, password TEXT NOT NULL, role TEXT NOT NULL);

#def of css
CSS est l'acronyme de « Cascading Style Sheets » ce qui signifie « feuille de style en cascade ». Le CSS correspond à un langage informatique permettant de mettre en forme des pages web (HTML ou XML).
