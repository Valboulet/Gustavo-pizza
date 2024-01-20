-- Active: 1695307432997@@127.0.0.1@3306@pizzeria
CREATE DATABASE pizzeria
    DEFAULT CHARACTER SET = 'utf8mb4';
CREATE TABLE users (
    id CHAR(36) NOT NULL PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(60) NOT NULL,
    role ENUM('admin', 'client') NOT NULL DEFAULT 'client'
);
CREATE TABLE customers (
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    phone VARCHAR(13) NOT NULL,
    user_id CHAR(36) NOT NULL PRIMARY KEY, -- Inheritance from users table
    FOREIGN KEY (user_id) REFERENCES users(id)
);
CREATE TABLE orders (
    id CHAR(36) NOT NULL,
    date DATE NOT NULL,
    hour TIME NOT NULL,
    message TEXT(500),
    customer_id CHAR(36) NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customers(user_id) ON DELETE CASCADE,
    PRIMARY KEY (id, customer_id) -- Composition with customers table
);
CREATE TABLE pizzas (
    id TINYINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    price DECIMAL(4,2) UNSIGNED NOT NULL,
    availability BOOLEAN DEFAULT 1
);
CREATE TABLE extras (
    id TINYINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    price DECIMAL(3,2) UNSIGNED NOT NULL,
    availability BOOLEAN DEFAULT 1
);
CREATE TABLE drinks (
    id TINYINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    price DECIMAL(3,2) UNSIGNED NOT NULL,
    availability BOOLEAN DEFAULT 1
);
CREATE TABLE orderlines (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    pizza_id TINYINT UNSIGNED NOT NULL,
    FOREIGN KEY (pizza_id) REFERENCES pizzas(id) ON DELETE CASCADE,
    extra_id TINYINT UNSIGNED, -- Foreign key can be null
    FOREIGN KEY (extra_id) REFERENCES extras(id) ON DELETE CASCADE,
    drink_id TINYINT UNSIGNED, -- Foreign key can be null
    FOREIGN KEY (drink_id) REFERENCES drinks(id) ON DELETE CASCADE,
    quantity TINYINT UNSIGNED DEFAULT 1,
    order_id CHAR(36) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    PRIMARY KEY (id, order_id) -- Composition with orders table
);
CREATE TABLE ingredients (
    id TINYINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL
);
CREATE TABLE recipes (
    pizza_id TINYINT UNSIGNED NOT NULL,
    ingredient_id TINYINT UNSIGNED NOT NULL,
    FOREIGN KEY (pizza_id) REFERENCES pizzas(id) ON DELETE CASCADE,
    FOREIGN KEY (ingredient_id) REFERENCES ingredients(id),
    PRIMARY KEY (pizza_id, ingredient_id) -- Association between pizzas and ingredients tables
);
