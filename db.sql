CREATE DATABASE crudveiculo DEFAULT CHARACTER 
SET utf8;
USE crudveiculo;

CREATE TABLE veiculo (
    marca VARCHAR(100),
    modelo VARCHAR(100),
    placa VARCHAR(20) PRIMARY KEY,
    ano VARCHAR(4),
    flag INT
);