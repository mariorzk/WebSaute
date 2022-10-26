-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2022 às 19:03
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `saute`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_auto`
--

CREATE TABLE `cad_auto` (
  `id_auto` int(11) NOT NULL,
  `autorizacao` varchar(50) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `id_proc` int(11) DEFAULT NULL,
  `referendum` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_dep`
--

CREATE TABLE `cad_dep` (
  `id_dep` int(11) NOT NULL,
  `dependencia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_ent`
--

CREATE TABLE `cad_ent` (
  `id_ent` int(11) NOT NULL,
  `entidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_hab`
--

CREATE TABLE `cad_hab` (
  `id_hab` int(11) NOT NULL,
  `habilitacao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_inst`
--

CREATE TABLE `cad_inst` (
  `id_inst` int(11) NOT NULL,
  `instituicao` varchar(50) DEFAULT NULL,
  `id_nivel` int(11) DEFAULT NULL,
  `end` varchar(50) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `bairr-dist` varchar(50) DEFAULT NULL,
  `id_mun` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id_dep` int(11) DEFAULT NULL,
  `id_ent` int(11) DEFAULT NULL,
  `creden` varchar(50) DEFAULT NULL,
  `v-creden` varchar(50) DEFAULT NULL,
  `recreden` varchar(50) DEFAULT NULL,
  `v-recreden` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_mun`
--

CREATE TABLE `cad_mun` (
  `id_mun` int(11) NOT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_nat`
--

CREATE TABLE `cad_nat` (
  `id_nat` int(11) NOT NULL,
  `naturalidade` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_niv`
--

CREATE TABLE `cad_niv` (
  `id_niv` int(11) NOT NULL,
  `nivel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_niv-hab`
--

CREATE TABLE `cad_niv-hab` (
  `id_niv-hab` int(11) NOT NULL,
  `niv-hab` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_orgao`
--

CREATE TABLE `cad_orgao` (
  `id_orgao` int(11) NOT NULL,
  `orgao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_proc`
--

CREATE TABLE `cad_proc` (
  `id_proc` int(11) NOT NULL,
  `processo` varchar(50) DEFAULT NULL,
  `id_inst` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_prof`
--

CREATE TABLE `cad_prof` (
  `id_prof` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `foto` longblob DEFAULT NULL,
  `nasc` varchar(50) DEFAULT NULL,
  `id_nat` int(11) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `id_orgao` int(11) DEFAULT NULL,
  `end` varchar(50) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `fixo` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pai` varchar(50) DEFAULT NULL,
  `mae` varchar(50) DEFAULT NULL,
  `id_hab` int(11) DEFAULT NULL,
  `id_niv-hab` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_auto`
--
ALTER TABLE `cad_auto`
  ADD PRIMARY KEY (`id_auto`);

--
-- Índices para tabela `cad_dep`
--
ALTER TABLE `cad_dep`
  ADD PRIMARY KEY (`id_dep`);

--
-- Índices para tabela `cad_ent`
--
ALTER TABLE `cad_ent`
  ADD PRIMARY KEY (`id_ent`);

--
-- Índices para tabela `cad_hab`
--
ALTER TABLE `cad_hab`
  ADD PRIMARY KEY (`id_hab`);

--
-- Índices para tabela `cad_inst`
--
ALTER TABLE `cad_inst`
  ADD PRIMARY KEY (`id_inst`),
  ADD KEY `id_niv_fk` (`id_nivel`),
  ADD KEY `id_ent_fk` (`id_ent`),
  ADD KEY `id_mun_fk` (`id_mun`),
  ADD KEY `id_dep_fk` (`id_dep`);

--
-- Índices para tabela `cad_mun`
--
ALTER TABLE `cad_mun`
  ADD PRIMARY KEY (`id_mun`);

--
-- Índices para tabela `cad_nat`
--
ALTER TABLE `cad_nat`
  ADD PRIMARY KEY (`id_nat`);

--
-- Índices para tabela `cad_niv`
--
ALTER TABLE `cad_niv`
  ADD PRIMARY KEY (`id_niv`),
  ADD KEY `id_niv_fk` (`id_niv`);

--
-- Índices para tabela `cad_niv-hab`
--
ALTER TABLE `cad_niv-hab`
  ADD PRIMARY KEY (`id_niv-hab`);

--
-- Índices para tabela `cad_orgao`
--
ALTER TABLE `cad_orgao`
  ADD PRIMARY KEY (`id_orgao`);

--
-- Índices para tabela `cad_proc`
--
ALTER TABLE `cad_proc`
  ADD PRIMARY KEY (`id_proc`),
  ADD KEY `id_inst_fk` (`id_inst`);

--
-- Índices para tabela `cad_prof`
--
ALTER TABLE `cad_prof`
  ADD PRIMARY KEY (`id_prof`),
  ADD KEY `id_orgao_fk` (`id_orgao`),
  ADD KEY `id_hab_fk` (`id_hab`),
  ADD KEY `id_niv-hab_fk` (`id_niv-hab`),
  ADD KEY `id_nat_fk` (`id_nat`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_auto`
--
ALTER TABLE `cad_auto`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_dep`
--
ALTER TABLE `cad_dep`
  MODIFY `id_dep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_ent`
--
ALTER TABLE `cad_ent`
  MODIFY `id_ent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_hab`
--
ALTER TABLE `cad_hab`
  MODIFY `id_hab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_inst`
--
ALTER TABLE `cad_inst`
  MODIFY `id_inst` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_mun`
--
ALTER TABLE `cad_mun`
  MODIFY `id_mun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_nat`
--
ALTER TABLE `cad_nat`
  MODIFY `id_nat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_niv`
--
ALTER TABLE `cad_niv`
  MODIFY `id_niv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_niv-hab`
--
ALTER TABLE `cad_niv-hab`
  MODIFY `id_niv-hab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_orgao`
--
ALTER TABLE `cad_orgao`
  MODIFY `id_orgao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_proc`
--
ALTER TABLE `cad_proc`
  MODIFY `id_proc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_prof`
--
ALTER TABLE `cad_prof`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cad_inst`
--
ALTER TABLE `cad_inst`
  ADD CONSTRAINT `id_dep_fk` FOREIGN KEY (`id_dep`) REFERENCES `cad_dep` (`id_dep`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_ent_fk` FOREIGN KEY (`id_ent`) REFERENCES `cad_ent` (`id_ent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_mun_fk` FOREIGN KEY (`id_mun`) REFERENCES `cad_mun` (`id_mun`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `niv_id_fk` FOREIGN KEY (`id_nivel`) REFERENCES `cad_niv` (`id_niv`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cad_proc`
--
ALTER TABLE `cad_proc`
  ADD CONSTRAINT `id_inst_fk` FOREIGN KEY (`id_inst`) REFERENCES `cad_inst` (`id_inst`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cad_prof`
--
ALTER TABLE `cad_prof`
  ADD CONSTRAINT `id_hab_fk` FOREIGN KEY (`id_hab`) REFERENCES `cad_hab` (`id_hab`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_nat_fk` FOREIGN KEY (`id_nat`) REFERENCES `cad_mun` (`id_mun`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_niv-hab_fk` FOREIGN KEY (`id_niv-hab`) REFERENCES `cad_niv-hab` (`id_niv-hab`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_orgao_fk` FOREIGN KEY (`id_orgao`) REFERENCES `cad_orgao` (`id_orgao`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;