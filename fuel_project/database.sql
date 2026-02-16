CREATE DATABASE fuel_db;
USE fuel_db;

CREATE TABLE fuel_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    distance DECIMAL(10,2),
    fuel_rate DECIMAL(10,2),
    price DECIMAL(10,2),
    fuel_used DECIMAL(10,2),
    total_cost DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);