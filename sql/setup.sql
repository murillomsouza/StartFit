CREATE DATABASE IF NOT EXISTS startfit CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE startfit;


CREATE TABLE IF NOT EXISTS exercicios (
  id_exercicio INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  categoria VARCHAR(100) DEFAULT NULL,
  equipamento VARCHAR(100) DEFAULT NULL,
  descricao TEXT DEFAULT NULL,
  imagem VARCHAR(255) DEFAULT NULL,
  data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS fichas (
  id_ficha INT AUTO_INCREMENT PRIMARY KEY,
  nome_aluno VARCHAR(255) NOT NULL,
  data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS fichas_exercicios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_ficha INT NOT NULL,
  id_exercicio INT NOT NULL,
  ordem INT DEFAULT 0,
  data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_ficha) REFERENCES fichas(id_ficha) ON DELETE CASCADE,
  FOREIGN KEY (id_exercicio) REFERENCES exercicios(id_exercicio) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO exercicios (nome, categoria, equipamento, descricao, imagem) VALUES
('Agachamento Livre', 'Inferiores', 'Barra', 'Agachamento livre com barra, 3x8-10', 'img/exercises/squat.png'),
('Supino Reto', 'Superiores', 'Barra', 'Supino reto no banco, 4x6-8', 'img/exercises/bench.png'),
('Puxada na Barra', 'Costas', 'Pulley', 'Puxada na frente, 3x10', 'img/exercises/pull.png'),
('Leg Press', 'Inferiores', 'Máquina', 'Leg press 45°, 3x12', 'img/exercises/legpress.png');
