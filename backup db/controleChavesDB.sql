-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 06/03/2023 às 03:17
-- Versão do servidor: 5.7.41
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
  `numero` int(10) NOT NULL,
  `local` varchar(140) NOT NULL,
  `copiaReserva` varchar(140) NOT NULL,
  `armario` int(10) NOT NULL,
  `cor` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `chaves`
--

INSERT INTO `chaves` (`numero`, `local`, `copiaReserva`, `armario`, `cor`) VALUES
(1, 'Armário Manutenção Infra N3', 'Não', 1, 'Verde'),
(2, 'Rack Bio-Imagem 3', 'Não', 1, 'Amarela'),
(3, 'Rack Campo Santo Telefonia', 'Não', 1, 'Amarela'),
(4, 'Rack CEDEPE', 'Não', 1, 'Amarela'),
(5, 'Rack Diretoria', 'Não', 1, 'Amarela'),
(6, 'Rack Infra', 'Não', 1, 'Amarela'),
(7, 'Rack Laboratório', 'Não', 1, 'Amarela'),
(8, 'Rack P.A. Ortopédico', 'Não', 1, 'Amarela'),
(9, 'Rack e Porta Garagem 5', 'Não', 1, 'Amarela'),
(10, 'Rack Subestação 1, 2, e 3', 'Não', 1, 'Amarela'),
(11, 'Rack Subestações Elétricas', 'Não', 1, 'Amarela'),
(12, 'Rack UTI Cirurgica Pediátrica ', 'Não', 1, 'Amarela'),
(13, 'Rack Antigo S/Lima', 'Não', 1, 'Amarela'),
(14, 'Rack Antigo Call Center', 'Não', 1, 'Amarela'),
(15, 'Rack Bio-Imagem 2', 'Não', 1, 'Amarela'),
(16, 'Rack CDP IBC Salas 27 e 28', 'Não', 1, 'Amarela'),
(17, 'Rack Manutenção', 'Não', 1, 'Amarela'),
(18, 'Rack N. A. C.', 'Não', 1, 'Amarela'),
(19, 'Rack Ressonancia (Sala de Laudos)', 'Não', 1, 'Amarela'),
(20, 'Rack e Sala Radioterapia', 'Não', 1, 'Amarela'),
(21, 'Rack Switch Campo Santo', 'Não', 1, 'Amarela'),
(22, 'Rack de Acolhimento Infanto Juvenil', 'Não', 1, 'Amarela'),
(23, 'Relógios de Ponto Chave Mestra', 'Não', 1, 'Azul'),
(24, 'Sala Ambulatório Pav. 1', 'Não', 1, 'Azul'),
(25, 'Sala Central de Leitos e PABX', 'Não', 1, 'Azul'),
(26, 'Sala Data Center Tabula/Nobreak', 'Não', 1, 'Azul'),
(27, 'Sala da Nova Telefonia', 'Não', 1, 'Azul'),
(28, 'Sala de Rack IBC', 'Não', 1, 'Azul'),
(29, 'Sala DG Gateway', 'Não', 1, 'Azul'),
(30, 'Sala PA Pediátrica', 'Não', 1, 'Azul'),
(31, 'Sala PA Adulto', 'Não', 1, 'Azul'),
(32, 'Sala TI Gastro Otorrino', 'Não', 1, 'Azul'),
(33, 'Sala Pavilhão 3', 'Não', 1, 'Azul'),
(34, 'Sala Coordenação Infra', 'Não', 1, 'Azul'),
(35, 'Sala Service Desk', 'Não', 1, 'Azul'),
(36, 'UTI Clinica Fundo da São Cristovão', 'Não', 1, 'Branca'),
(37, 'Vestiário II', 'Não', 1, 'Branca'),
(38, 'Bio Imagem I', 'Não', 1, 'Branca'),
(39, 'Coordenação Enfermagem', 'Não', 1, 'Branca'),
(40, 'Jardim Erick', 'Não', 1, 'Branca'),
(41, 'JN 3° Andar', 'Não', 1, 'Branca'),
(42, 'C - MA / C - Cirugico', 'Não', 1, 'Branca'),
(43, 'Porta Área Comum ', 'Não', 1, 'Branca'),
(44, 'Servidor Avançar', 'Não', 1, 'Rosa'),
(45, 'Servidor CAF', 'Não', 1, 'Rosa'),
(46, 'Servidor Campo Santo', 'Não', 1, 'Rosa'),
(47, 'Servidor Catu', 'Não', 1, 'Rosa'),
(48, 'Servidor Mover', 'Não', 1, 'Rosa'),
(49, 'Monitoração', 'Não', 1, 'Amarela'),
(50, 'Porta Externa Data Center', 'Não', 1, 'Amarela');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registers`
--

CREATE TABLE `registers` (
  `id` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nChave` int(10) NOT NULL,
  `dataTime` datetime NOT NULL,
  `C_matricula` int(10) NOT NULL,
  `T_nome` varchar(140) NOT NULL,
  `T_empresa` varchar(140) NOT NULL,
  `T_colabRespon` varchar(140) NOT NULL,
  `T_matriRespon` int(10) NOT NULL,
  `situacao` varchar(20) NOT NULL,
  `cadastrante` varchar(140) NOT NULL,
  `motivo` varchar(500) NOT NULL,
  `dateTimeDevolucao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `registers`
--

INSERT INTO `registers` (`id`, `tipo`, `nChave`, `dataTime`, `C_matricula`, `T_nome`, `T_empresa`, `T_colabRespon`, `T_matriRespon`, `situacao`, `cadastrante`, `motivo`, `dateTimeDevolucao`) VALUES
(1, 'Colaborador (C)', 23, '2023-02-25 20:40:00', 92120, 'José Roberto', '-----', '-----', 0, 'Devolvida', 'José Roberto (9120)', 'Verificar switch', '2023-02-25 20:48:00'),
(2, 'Terceiro (T)', 35, '2023-02-25 20:41:00', 0, 'Joelson', 'Estrutural', 'José Roberto', 92120, 'Devolvida', 'José Roberto (9120)', 'Implementar novos pontos de rede', '2023-02-26 15:55:00'),
(4, 'Colaborador (C)', 33, '1978-02-07 06:10:00', 11991, 'Teste', '-----', '-----', 0, 'Pendente', 'José Roberto (9120)', 'Reparo na sala tal', '2023-02-26 00:29:23'),
(7, 'Colaborador (C)', 23, '2023-03-05 11:53:00', 8281, 'Matheus', '-----', '-----', 0, 'Devolvida', 'José Roberto (9120)', 'Reparo nos equipamentos', '2023-03-05 12:01:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `matricula` int(10) NOT NULL,
  `nome` varchar(140) NOT NULL,
  `sobrenome` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`matricula`, `nome`, `sobrenome`, `email`, `senha`, `data_criacao`) VALUES
(1, 'Teste', 'Sobrenome', 'teste@santacasaba.org.br', '$2y$10$/PrVOqfVzWzICuRrp8y9N.lgw6.Cf/kuRXrps/MMAdw3ruioBbzGa', '2023-02-26 00:49:18'),
(9120, 'José Roberto', 'Souza Cardoso', 'jose.cardoso@teste.org.br', '$2y$10$/PrVOqfVzWzICuRrp8y9N.lgw6.Cf/kuRXrps/MMAdw3ruioBbzGa', '2023-02-26 00:49:18');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
