
CREATE DATABASE saep_db;

USE saep_db;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE tutores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(100),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE pets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    raça VARCHAR(100) NOT NULL,
    tamanho VARCHAR(50) NOT NULL,
    nome VARCHAR(50),
    cliente_id INT NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,

    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
);

CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    descricao VARCHAR(255),
    pet_id INT NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,

    FOREIGN KEY (veiculo_id) REFERENCES veiculos(id)
);

use saep_db;

INSERT INTO usuarios 
(nome, email, senha, created_at, updated_at)
VALUES
('Administrador', 'admin@saep.com', SHA2('123456', 256), NOW(), NOW()),
('Carlos Oliveira', 'carlos@saep.com', SHA2('123456', 256), NOW(), NOW()),
('Mariana Santos', 'mariana@saep.com', SHA2('123456', 256), NOW(), NOW());


INSERT INTO tutores
(nome, cpf, telefone, email, created_at, updated_at)
VALUES
('João da Silva', '12345678901', '(16) 99999-1111', 'joao@email.com', NOW(), NOW()),
('Maria Oliveira', '98765432100', '(16) 98888-2222', 'maria@email.com', NOW(), NOW()),
('Carlos Santos', '11122233344', '(16) 97777-3333', 'carlos@email.com', NOW(), NOW()),
('Ana Souza', '55566677788', '(16) 96666-4444', 'ana@email.com', NOW(), NOW());

INSERT INTO pets
(raça, tamanho, nome, tutor_id, created_at, updated_at)
VALUES
('Pitbull', '51', 'Thor', 1, NOW(), NOW()),
('Yorkshire', '37', 'Guil', 1, NOW(), NOW()),
('Viralata', '56', 'lili', 2, NOW(), NOW()),
('budog', '36', 'ruy', 3, NOW(), NOW()),
('Viralata', '51', 'Max', 4, NOW(), NOW());
INSERT INTO agendamentos
(data, hora, descricao, pet_id, created_at, updated_at)
VALUES
('2026-09-21', '08:00:00', 'Consulta matinal', 1, NOW(), NOW()),
('2026-09-22', '10:30:00', 'Consulta por dor na barriga', 2, NOW(), NOW()),
('2026-09-23', '14:00:00', 'Verificar os pontos', 3, NOW(), NOW()),
('2026-09-24', '09:00:00', 'Consulta de retorno', 4, NOW(), NOW()),
('2026-09-25', '15:30:00', 'Renovar Bula de Remedio', 5, NOW(), NOW())