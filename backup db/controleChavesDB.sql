-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 13/03/2023 às 15:37
-- Versão do servidor: 8.0.32
-- Versão do PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controleChavesDB`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `chaves`
--

CREATE TABLE `chaves` (
  `numero` int NOT NULL,
  `local` varchar(140) NOT NULL,
  `copiaReserva` varchar(140) NOT NULL,
  `armario` int NOT NULL,
  `situacao` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `chaves`
--

INSERT INTO `chaves` (`numero`, `local`, `copiaReserva`, `armario`, `situacao`) VALUES
(1, 'Armário Manutenção Infra N3', 'Não', 1, 'ocupada'),
(2, 'Rack Bio-Imagem 3', 'Não', 1, 'livre'),
(3, 'Rack Campo Santo Telefonia', 'Não', 1, 'livre'),
(4, 'Rack CEDEPE', 'Não', 1, 'ocupada'),
(5, 'Rack Diretoria', 'Não', 1, 'livre'),
(6, 'Rack Infra', 'Não', 1, 'livre'),
(7, 'Rack Laboratório', 'Não', 1, 'livre'),
(8, 'Rack P.A. Ortopédico', 'Não', 1, 'livre'),
(9, 'Rack e Porta Garagem 5', 'Não', 1, 'livre'),
(10, 'Rack Subestação 1, 2, e 3', 'Não', 1, 'livre'),
(11, 'Rack Subestações Elétricas', 'Não', 1, 'livre'),
(12, 'Rack UTI Cirurgica Pediátrica ', 'Não', 1, 'livre'),
(13, 'Rack Antigo S/Lima', 'Não', 1, 'livre'),
(14, 'Rack Antigo Call Center', 'Não', 1, 'livre'),
(15, 'Rack Bio-Imagem 2', 'Não', 1, 'livre'),
(16, 'Rack CDP IBC Salas 27 e 28', 'Não', 1, 'livre'),
(17, 'Rack Manutenção', 'Não', 1, 'livre'),
(18, 'Rack N. A. C.', 'Não', 1, 'livre'),
(19, 'Rack Ressonancia (Sala de Laudos)', 'Não', 1, 'livre'),
(20, 'Rack e Sala Radioterapia', 'Não', 1, 'livre'),
(21, 'Rack Switch Campo Santo', 'Não', 1, 'livre'),
(22, 'Rack de Acolhimento Infanto Juvenil', 'Não', 1, 'livre'),
(23, 'Relógios de Ponto Chave Mestra', 'Não', 1, 'livre'),
(24, 'Sala Ambulatório Pav. 1', 'Não', 1, 'livre'),
(25, 'Sala Central de Leitos e PABX', 'Não', 1, 'ocupada'),
(26, 'Sala Data Center Tabula/Nobreak', 'Não', 1, 'ocupada'),
(27, 'Sala da Nova Telefonia', 'Não', 1, 'livre'),
(28, 'Sala de Rack IBC', 'Não', 1, 'livre'),
(29, 'Sala DG Gateway', 'Não', 1, 'livre'),
(30, 'Sala PA Pediátrica', 'Não', 1, 'livre'),
(31, 'Sala PA Adulto', 'Não', 1, 'livre'),
(32, 'Sala TI Gastro Otorrino', 'Não', 1, 'livre'),
(33, 'Sala Pavilhão 3', 'Não', 1, 'livre'),
(34, 'Sala Coordenação Infra', 'Não', 1, 'ocupada'),
(35, 'Sala Service Desk', 'Não', 1, 'livre'),
(36, 'UTI Clinica Fundo da São Cristovão', 'Não', 1, 'livre'),
(37, 'Vestiário II', 'Não', 1, 'livre'),
(38, 'Bio Imagem I', 'Não', 1, 'livre'),
(39, 'Coordenação Enfermagem', 'Não', 1, 'livre'),
(40, 'Jardim Erick', 'Não', 1, 'livre'),
(41, 'JN 3° Andar', 'Não', 1, 'livre'),
(42, 'C - MA / C - Cirugico', 'Não', 1, 'livre'),
(43, 'Porta Área Comum ', 'Não', 1, 'livre'),
(44, 'Servidor Avançar', 'Não', 1, 'livre'),
(45, 'Servidor CAF', 'Não', 1, 'ocupada'),
(46, 'Servidor Campo Santo', 'Não', 1, 'livre'),
(47, 'Servidor Catu', 'Não', 1, 'livre'),
(48, 'Servidor Mover', 'Não', 1, 'livre'),
(49, 'Monitoração', 'Não', 1, 'livre'),
(50, 'Porta Externa Data Center', 'Não', 1, 'ocupada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registers`
--

CREATE TABLE `registers` (
  `id` int NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nChave` int NOT NULL,
  `dataTime` datetime NOT NULL,
  `C_matricula` int NOT NULL,
  `T_nome` varchar(140) NOT NULL,
  `T_empresa` varchar(140) NOT NULL,
  `T_colabRespon` varchar(140) NOT NULL,
  `T_matriRespon` int NOT NULL,
  `situacao` varchar(20) NOT NULL,
  `cadastrante` varchar(140) NOT NULL,
  `motivo` varchar(500) NOT NULL,
  `dateTimeDevolucao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `registers`
--

INSERT INTO `registers` (`id`, `tipo`, `nChave`, `dataTime`, `C_matricula`, `T_nome`, `T_empresa`, `T_colabRespon`, `T_matriRespon`, `situacao`, `cadastrante`, `motivo`, `dateTimeDevolucao`) VALUES
(1, 'Colaborador (C)', 23, '2023-02-25 20:40:00', 92120, 'José Roberto', '-----', '-----', 0, 'Devolvida', 'José Roberto (9120)', 'Verificar switch', '2023-02-25 20:48:00'),
(2, 'Terceiro (T)', 35, '2023-02-25 20:41:00', 0, 'Joelson', 'Estrutural', 'José Roberto', 92120, 'Devolvida', 'José Roberto (9120)', 'Implementar novos pontos de rede', '2023-02-26 15:55:00'),
(4, 'Colaborador (C)', 33, '1978-02-07 06:10:00', 11991, 'Teste', '-----', '-----', 0, 'Devolvida', 'José Roberto (9120)', 'Reparo na sala tal', '2023-03-13 10:44:00'),
(7, 'Colaborador (C)', 23, '2023-03-05 11:53:00', 8281, 'Matheus', '-----', '-----', 0, 'Devolvida', 'José Roberto (9120)', 'Reparo nos equipamentos', '2023-03-05 12:01:00'),
(8, 'Colaborador (C)', 7, '2023-03-13 10:24:00', 9120, 'José Roberto', '-----', '-----', 0, 'Devolvida', 'José Roberto (9120)', 'safasfsafsadf', '2023-03-13 10:44:00'),
(9, 'Colaborador (C)', 33, '2023-03-13 10:44:00', 43545, 'dfgdfgdf', '-----', '-----', 0, 'Pendente', 'José Roberto (9120)', 'sdfsdfsadfs', '2023-03-13 13:44:36'),
(10, 'Colaborador (C)', 1, '2023-03-13 11:43:00', 9120, 'José Roberto', '-----', '-----', 0, 'Pendente', 'José Roberto (9120)', 'sdfsdfsd', '2023-03-13 14:43:29'),
(11, 'Colaborador (C)', 25, '2023-03-13 11:43:00', 9120, 'José Roberto', '-----', '-----', 0, 'Pendente', 'José Roberto (9120)', 'sdfsdf', '2023-03-13 14:43:37'),
(12, 'Colaborador (C)', 26, '2023-03-13 11:46:00', 9120, 'José Roberto', '-----', '-----', 0, 'Pendente', 'José Roberto (9120)', 'asdasdasd', '2023-03-13 14:46:45'),
(13, 'Colaborador (C)', 34, '2023-03-13 11:50:00', 3434, 'werwerwe', '-----', '-----', 0, 'Pendente', 'José Roberto (9120)', 'sdfsfsdf', '2023-03-13 14:51:00'),
(14, 'Colaborador (C)', 50, '2023-03-13 12:27:00', 9120, 'José Roberto', '-----', '-----', 0, 'Pendente', 'José Roberto (9120)', 'dadasda', '2023-03-13 15:27:39'),
(15, 'Colaborador (C)', 4, '2023-03-13 12:31:00', 9120, 'José Roberto', '-----', '-----', 0, 'Pendente', 'José Roberto (9120)', 'asdasdasd', '2023-03-13 15:31:55'),
(16, 'Colaborador (C)', 45, '2023-03-13 12:31:00', 9120, 'José Roberto', '-----', '-----', 0, 'Pendente', 'José Roberto (9120)', 'tewrtewrtwert', '2023-03-13 15:32:13');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `matricula` int NOT NULL,
  `nome` varchar(140) NOT NULL,
  `sobrenome` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `setor` varchar(140) NOT NULL,
  `adm` tinyint(1) NOT NULL DEFAULT '0',
  `adm-setor` tinyint(1) NOT NULL DEFAULT '0',
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`matricula`, `nome`, `sobrenome`, `email`, `senha`, `setor`, `adm`, `adm-setor`, `data_criacao`) VALUES
(1, 'Teste', 'Sobrenome', 'teste@santacasaba.org.br', '$2y$10$/PrVOqfVzWzICuRrp8y9N.lgw6.Cf/kuRXrps/MMAdw3ruioBbzGa', 'TIC', 0, 0, '2023-03-13 11:20:32'),
(9120, 'José Roberto', 'Souza Cardoso', 'jose.cardoso@teste.org.br', '$2y$10$/PrVOqfVzWzICuRrp8y9N.lgw6.Cf/kuRXrps/MMAdw3ruioBbzGa', 'TIC', 1, 0, '2023-03-13 11:20:29');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `chaves`
--
ALTER TABLE `chaves`
  ADD PRIMARY KEY (`numero`);

--
-- Índices de tabela `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
