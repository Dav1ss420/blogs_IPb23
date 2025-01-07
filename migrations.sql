CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content VARCHAR(5200)
);
INSERT INTO posts
(content)
VALUES
("Driz bus svetki"),
("Otrs bloga ieraksts"),
("Ka uztaisit siermaizi?");

SELECT * FROM posts;

SELECT * FROM posts
WHERE id=1;

SELECT * FROM posts
WHERE content LIKE "%o%";