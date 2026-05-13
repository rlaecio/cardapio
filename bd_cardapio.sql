DROP DATABASE IF EXISTS bd_cardapio;
CREATE DATABASE bd_cardapio
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE bd_cardapio;

CREATE TABLE tb_categoria (
    idCategoria INT NOT NULL AUTO_INCREMENT,
    nomeCategoria VARCHAR(100) NOT NULL,
    descricaoCategoria VARCHAR(255) DEFAULT NULL,
    estadoCategoria ENUM('Ativa','Inativa') NOT NULL DEFAULT 'Ativa',
    PRIMARY KEY (idCategoria),
    UNIQUE KEY uk_nomeCategoria (nomeCategoria)
) ENGINE=InnoDB;

CREATE TABLE tb_artigo (
    idArtigo INT NOT NULL AUTO_INCREMENT,
    idCategoria INT NOT NULL,
    designacaoArtigo VARCHAR(120) NOT NULL,
    descricaoArtigo VARCHAR(255) DEFAULT NULL,
    precoArtigo DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    disponivelArtigo TINYINT(1) NOT NULL DEFAULT 1,
    PRIMARY KEY (idArtigo),
    KEY fk_tb_artigo_tb_categoria_idx (idCategoria),
    CONSTRAINT fk_tb_artigo_tb_categoria
        FOREIGN KEY (idCategoria) REFERENCES tb_categoria(idCategoria)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE tb_utilizador (
    idUtilizador INT NOT NULL AUTO_INCREMENT,
    nomeUtilizador VARCHAR(120) NOT NULL,
    emailUtilizador VARCHAR(150) NOT NULL,
    telefoneUtilizador VARCHAR(20) DEFAULT NULL,
    estadoUtilizador ENUM('Ativo','Inativo') NOT NULL DEFAULT 'Ativo',
    PRIMARY KEY (idUtilizador),
    UNIQUE KEY uk_emailUtilizador (emailUtilizador)
) ENGINE=InnoDB;

CREATE TABLE tb_sugestao (
    idSugestao INT NOT NULL AUTO_INCREMENT,
    idUtilizador INT NOT NULL,
    idArtigo INT DEFAULT NULL,
    textoSugestao TEXT NOT NULL,
    dataSugestao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    estadoSugestao ENUM('Nova','Em análise','Arquivada') NOT NULL DEFAULT 'Nova',
    PRIMARY KEY (idSugestao),
    KEY fk_tb_sugestao_tb_utilizador_idx (idUtilizador),
    KEY fk_tb_sugestao_tb_artigo_idx (idArtigo),
    CONSTRAINT fk_tb_sugestao_tb_utilizador
        FOREIGN KEY (idUtilizador) REFERENCES tb_utilizador(idUtilizador)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT fk_tb_sugestao_tb_artigo
        FOREIGN KEY (idArtigo) REFERENCES tb_artigo(idArtigo)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

INSERT INTO tb_categoria (nomeCategoria, descricaoCategoria, estadoCategoria) VALUES
('Entradas', 'Pequenas sugestões para iniciar a refeição.', 'Ativa'),
('Pratos principais', 'Pratos completos de carne, peixe e vegetariano.', 'Ativa'),
('Sobremesas', 'Doces, fruta e sobremesas frias.', 'Ativa'),
('Bebidas', 'Águas, refrigerantes, sumos e bebidas quentes.', 'Ativa');

INSERT INTO tb_artigo (idCategoria, designacaoArtigo, descricaoArtigo, precoArtigo, disponivelArtigo) VALUES
(1, 'Sopa do dia', 'Sopa caseira preparada diariamente.', 2.50, 1),
(1, 'Pão de alho', 'Pão tostado com manteiga e alho.', 3.20, 1),
(2, 'Bacalhau à casa', 'Lombo de bacalhau no forno com batata e legumes.', 12.50, 1),
(2, 'Francesinha', 'Francesinha com molho da casa.', 11.00, 1),
(2, 'Hambúrguer vegetariano', 'Hambúrguer vegetariano com salada e batata.', 9.50, 1),
(3, 'Mousse de chocolate', 'Sobremesa clássica de chocolate.', 3.00, 0),
(3, 'Leite-creme', 'Leite-creme queimado na hora.', 3.40, 1),
(4, 'Água 0,5L', 'Garrafa de água sem gás.', 1.20, 1),
(4, 'Sumo de laranja natural', 'Preparado no momento.', 2.80, 1);

INSERT INTO tb_utilizador (nomeUtilizador, emailUtilizador, telefoneUtilizador, estadoUtilizador) VALUES
('Ana Silva', 'ana@example.com', '912345678', 'Ativo'),
('Bruno Costa', 'bruno@example.com', '913456789', 'Ativo'),
('Carla Rocha', 'carla@example.com', '914567890', 'Inativo'),
('Diogo Pinto', 'diogo@example.com', '915678901', 'Ativo');

INSERT INTO tb_sugestao (idUtilizador, idArtigo, textoSugestao, dataSugestao, estadoSugestao) VALUES
(1, 1, 'Adicionar indicação de alergénios na sopa do dia.', '2026-03-01 12:00:00', 'Nova'),
(2, 3, 'Servir meia dose ao almoço.', '2026-03-03 13:15:00', 'Em análise'),
(3, 6, 'Criar uma versão com menos açúcar.', '2026-03-04 20:30:00', 'Arquivada'),
(4, NULL, 'Criar um menu infantil para o fim de semana.', '2026-03-06 19:00:00', 'Nova');