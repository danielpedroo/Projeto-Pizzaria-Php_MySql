CREATE DATABASE pizzaria;
USE pizzaria;

CREATE TABLE bordas (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	tipo VARCHAR(100)
);

CREATE TABLE massas(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	tipo VARCHAR(100)
);

CREATE TABLE sabores(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nome VARCHAR(100)
);

CREATE TABLE pizzas(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	borda_id INT NOT NULL,
    massa_id INT NOT NULL,
    FOREIGN KEY (borda_id) REFERENCES bordas(id),
    FOREIGN KEY (massa_id) REFERENCES massas(id)
);

CREATE TABLE pizza_sabor(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	pizza_id INT NOT NULL,
    sabor_id INT NOT NULL,
    FOREIGN KEY (pizza_id) REFERENCES pizzas(id),
    FOREIGN KEY (sabor_id) REFERENCES sabores(id)
);

CREATE TABLE status(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	tipo VARCHAR(100)
);

CREATE TABLE pedidos(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	status_id INT NOT NULL,
    pizza_id INT NOT NULL,
	FOREIGN KEY (pizza_id) REFERENCES pizzas(id),
    FOREIGN KEY (status_id) REFERENCES status(id)
);

INSERT INTO status(tipo) VALUES ("Em produção");
INSERT INTO status(tipo) VALUES ("Em entrega");
INSERT INTO status(tipo) VALUES ("Concluido");
SELECT * FROM status;

INSERT INTO massas(tipo) VALUES ("Massa comum");
INSERT INTO massas(tipo) VALUES ("Massa temperada");
INSERT INTO massas(tipo) VALUES ("Massa integral");
SELECT * FROM massas;

INSERT INTO bordas(tipo) VALUES ("Cheddar");
INSERT INTO bordas(tipo) VALUES ("Catupiry");
SELECT * FROM bordas;

INSERT INTO sabores(nome) VALUES ("4 Queijos");
INSERT INTO sabores(nome) VALUES ("Frango com catupiry");
INSERT INTO sabores(nome) VALUES ("Lombinho");
INSERT INTO sabores(nome) VALUES ("Filé com cheddar");
INSERT INTO sabores(nome) VALUES ("Potuguesa");
INSERT INTO sabores(nome) VALUES ("Margherita");
SELECT * FROM sabores;

SELECT * FROM pedidos;
SELECT * FROM pizza_sabor;















