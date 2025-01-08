/*CREATE DATABASE blog_ipb23;
*/
USE blog_ipb23;

CREATE TABLE categories(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content VARCHAR(5200)
);
INSERT INTO categories
(content)
VALUES
("Svētki"),
("Mūzika"),
("Sports");

SELECT * FROM categories;

SELECT * FROM categories
WHERE id=1;

SELECT * FROM categories
WHERE content LIKE "%o%";