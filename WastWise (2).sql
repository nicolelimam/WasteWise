-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06/12/2023 às 02:14
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `WastWise`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Cliente`
--

CREATE TABLE `Cliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(300) NOT NULL,
  `emailCliente` varchar(300) NOT NULL,
  `senhaCliente` varchar(100) NOT NULL,
  `perfilCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Cliente`
--

INSERT INTO `Cliente` (`idCliente`, `nomeCliente`, `emailCliente`, `senhaCliente`, `perfilCliente`) VALUES
(1, 'Jonatas Lemes', 'jonatasl@gmail.com', '$2y$10$lZ5GY10lwPM88O8YIe7bDug6kLvh845cLBLpJiDz4x4b6l12ZrQDy', 1),
(3, 'Nicole Lima', 'nicolel@gmail.com', '$2y$10$G9BurUMFABQDEpbcxpJLFeJiCuh5.dNS4WhilWJM1qibju/VTKnMy', 1),
(4, 'Claudia Ribeiro', 'claudiar@gmail.com', '$2y$10$wwalz4oeq4E5kvxkMiqEqOXO937lb6MVFJVoaWnExKWm3Wo1wx0rq', 1),
(5, 'Alexandra R', 'alexandra@gmail.com', '$2y$10$44D3PY3Y0bwtmMtRrF84FeDUa16VxyfQt0hy0j1rU6iLL/GYBqMz6', 1),
(6, 'Isabel Cristini', 'isabelc@gmail.com', '$2y$10$sv6SmmJ1KtMgL1LhnV4ueu/dkOG44zvNviCie3RilDKMF4jAGMtAu', 1),
(7, 'Ana Carolina', 'anacarolinar@gmail.com', '$2y$10$WQOBl3US3OR8z4st0Y6IVu/nDL7Lj1YwenKiatZ8LGTu22wXlodOW', 1),
(8, 'Luiz Ribeiro', 'luizr@gmail.com', '$2y$10$5XNvC4WR337cvXUpw2TgzeUQ1sIcY.7wY.T7/z8mT7sJpWHV2Zgcq', 1),
(9, 'Leila Cristini', 'leilac@gmail.com', '$2y$10$9cuOy0Vjteut4Gs2xP4qwu0.NrdVVnhsHChoNBvalLpIHzRefeFZa', 1),
(10, 'Laura Flavia', 'lauraf@gmail.com', '$2y$10$GoSiC52RlXbma29KkAkRnO9HPvmFemkcr1rHwSOjM3MnbWnOgq6iu', 1),
(11, 'Cristini Muniz', 'cristinim@gmail.com', '$2y$10$5k01YyET0KN5qo156ibVS.fAvFyioU1F5Cwu6BO/KxeMHDw/CXUm2', 1),
(12, 'Bela Gonzaga', 'belag@gmail,com', '$2y$10$YLji5x6b1kuAwZG99uPmv.yzMnjVoa9kcn17z5Fcz8qHGqLpkWcYC', 1),
(13, 'Jorge Amado', 'jorgea@gmail,com', '$2y$10$NxB4fNfPMmCwiU0Ye4fPS.32/lHVqbQ5ah46MLiRSKdHjQ4Ya1Kgi', 1),
(14, 'Bruna Oliveira', 'brunao@gmail.com', '$2y$10$uOE1LphYnXXk3KAL784JceN2MMY/znyVTGVmUMQ/O6yzqloO/dJKW', 1),
(15, 'Fernanda Borges', 'fernandab@gmail.com', '$2y$10$IpRT/6SU9Y1cHkUUolwrK.oQLkb8B.eJwxMWTM7Kvk9y6ePGnnDsC', 1),
(16, 'Antonio Vitalicio', 'antoniov@gmail.com', '$2y$10$OjyZbOIXEM2Q.3o8O2AquO3/ugTnlH8e.Q39cDz8P3HoancXhIzse', 1),
(17, 'Flavio Santos', 'flavios@gmail.com', '$2y$10$fRzew5kuPnZW6ScPPiJEV.E7q/isrkw5yumSGrxXZ65Uti6aYZI0q', 1),
(19, 'Jorge Braga', 'jorgeb@gmail.com', '$2y$10$iSZyIxEd26/ChN3ZYFK9/Ok1Ma8UbLuYyT1hEh2vYjQzRYpYEstGi', 1),
(20, 'Amanda Lima', 'amandal@gmail.com', '$2y$10$pz8BoHWjqqBpdf6LRaCrHOjbpdORnSnxMCy6k6Tavs0J5Q6VJyTUq', 1),
(22, 'Betina Carla', 'betinac@gmail.com', '$2y$10$1yU0S8QRu/rPpHIs7DJq0.Fma83McR1f625AK4XrnvZegV7quqtCS', 1),
(23, 'Matheus Dalton', 'matheusd@gmail.com', '$2y$10$6XMRqOMVcHT9kwKov/xibe1lLCA/xVPCf.6HdoxnsukuT1w6ka3bK', 1),
(24, 'Jonatas Ferreira', 'jonatasf@gmail.com', '$2y$10$X0hJ0.ovkJb5ABTpOL.4Ke7I1CJxf7X6edNa9j.aez4AMzvTF0d7G', 1),
(25, 'Felipr Rocha', 'feliper@gmail.com', '$2y$10$CPrs0ZzHdXCgJE5s9cIBP.a9kv8c6BItD3pqXI2B5ES.dS8ReQBgq', 1),
(26, 'Jorge Felipe', 'jorgef@gmail.com', '$2y$10$D/oHN18.OqLYCkpkgZScHOx4dPiHwQkTJQMhTrJ0w6q31sTSM3RHm', 1),
(27, 'Felipr Rocha Silva', 'felipers@gmail.com', '$2y$10$YCI6S864Iez6ejeIG4eicOuLl93ADVekaeM0YPgnT0BLSMKqxEH3q', 1),
(28, 'Jonatas Lemes Silva', 'jonatasls@gmail.com', '$2y$10$5I9xue/JNZHk.Vh11y89Ne.wqjhvF5kUUHCpYsHzxz4Cg0pSu9VUy', 1),
(29, 'Carlos Silva', 'carloss@gmail.com', '$2y$10$xpdIzWEtYA/X3UbtvwYUs.KTyDJWDMLWla7ZeoPPl2lCtolNV/z4O', 1),
(30, 'Miguel RIbeiro', 'miguelg@gmail.com', '$2y$10$Q.xbFZimKVyHiGGlwtE0ZuTwmM2dJxqkGWI8.oQYRYlhZ6EAW1qfm', 1),
(31, 'Caio Ribeiro', 'caior@gmail.com', '$2y$10$wh7r5WDOYYV7c.hbBUkyN.4S24K2K7.ddqUUv.gkaR9BrBJjSM972', 1),
(32, 'Luana Silva', 'luanas@gmail.com', '$2y$10$VEkfKEBIFE32SqQaSeDP/OfeMP8QqAg6xWdOMrbhhHNoO/dPOnwxy', 1),
(35, 'Ana Luiza', 'analuiza@gmail.com', '$2y$10$nQkhfMmb74PxB7EZgm8JoO.klZbC.p/pQQLsfm77tLiTjsFQ7627u', 1),
(36, 'Eduardo Batista', 'eduardob@gmail.com', '$2y$10$LFn8MZj4/OckhQF/yTVY7eQwI7oAa2dd6LFbmA5g6XfnMu.JdTr36', 1),
(38, 'Fernando Luiz', 'fernandol@gmail.com', '$2y$10$DKLtTOy46rs.tLVWqxGMlOFjJ4n7kCSoM.N1o0olRv9/zTIfk1BOS', 1),
(39, 'Fernando Luiz Braga', 'fernandolb@gmail.com', '$2y$10$BqRz9XcD.mXk4ZWPhA89vOxzqrpM0bTMq4H3wM8J8k1t1S.XVFwqe', 1),
(40, 'Luiza Sonza', 'luizas@gmail.com', 'luiza123', 1),
(41, 'Maria José', 'mariaj@gmail.com', '$2y$10$YObbiVhtwIQ79fooOKtPG.LLKFYOo5XH8iXRTxSW0QjAW7KsAO7GC', 1),
(42, 'Maria Fernandes', 'mariaf@gmail.com', '$2y$10$EiJk13TsqblbY2Gv9eapL.mQU7VZnizGiKRj12XBDqSpDtpjv1aRi', 1),
(43, 'Monalisa Fortaleza', 'monalisaf@gmail.com', '$2y$10$igja3kP7fgzBeH1INzAAI.PoyjuTlPsuysC54dHcu/8l7dfi/bbFW', 1),
(45, 'Luiza Sonza Maria', 'luizasm@gmail.com', '$2y$10$TbXpfYS3Q02dv8Al0gPMP.bZEOI5olw7nXNXYEyVT5sSPTtBQMAS2', 1),
(46, 'José Augusto', 'josea@gmail.com', '$2y$10$W4QrVfKYhN43usScA7fkYupqvhrVyV8rto2BHM8jyJY8B2yyhIu1G', 1),
(47, 'Luana Carminha', 'luanac@gmail.com', '$2y$10$riR.GpYPRJN6e81WDeoBz.yfEASjiYUjobF3O4Sbqs89aX.SHiXPy', 1),
(48, 'Murilo Silva', 'murilos@gmail.com', '$2y$10$s822gXOK.yIxhhcdKFipW.CFsP2LJ8sRizpjjaRWWX0eGbD7CmMqq', 1),
(49, 'Valeria Domingues', 'valeriad@gmail.com', '$2y$10$9ZF8gVOnTVarjK1TH0kGvOT.vPouoEw6eA6ygU3H2Af/kJI5Y4TVS', 1),
(50, 'Monica Silva', 'monicas@gmail.com', '$2y$10$OdHU7Pxhp5y2Hxn3tXsCHe3YVlRqo1gMYZ4nObx.Tr0S6290tO8sm', 1),
(51, 'Maria Eduarda', 'mariad@gmail.com', '$2y$10$p2bOXqhVG/ldQ1R8v7t8munvvshIH0trDOpWqTCKLqqsvtR19PCy.', 1),
(52, 'Vitor Fernandes', 'vitorf@gmail.com', '$2y$10$qVzRZmkXNJMJ06Z9Rs4DrOpmTREBaiHC9VosXxWln5plpOugAIpLq', 1),
(53, 'Larissa Emanuela', 'larissae@gmail.com', '$2y$10$EVOy2GOyj1ly/tm45WqmkuzK8wXxQ3JQkfvMnQ3nCshK1dBhDk4Eu', 1),
(57, 'Maria José Ferreira', 'mariajf@gmail.com', '$2y$10$M35M7EWnmgV/ioPVsl7CfOkNsF9g.ovefVAN.gECWl.KNb95/5oI2', 1),
(58, 'Cristhoper Augusto', 'cristhoper@gmail.com', '$2y$10$VB6S1JP0LdCgkDBNqtyX7.et3tHl0ItDEn0yatgYsIhSzOZ2Cv4Y2', 1),
(60, 'Ana Carolina F', 'anacarolinaf@gmail.com', '$2y$10$3hZlerLYm31tmvJHibn6quks2IucDQoDswV79SuhnCCdSo0BIgllm', 1),
(61, 'Valentina Jesus', 'valentinaj@gmail,com', '$2y$10$AUAeQgwxHoz3mamVZ9QLv.HrD8NGP286v7vyRldxBbAdRuJ4iofXa', 1),
(62, 'Luiza Frangoli', 'luizaf@gmail.com', '$2y$10$5np1coHnHBmcymbMbS0ZQufJNNAbWM9NCXhvaMeI1i5akxHsZnVzm', 1),
(63, 'Flavia Ribeiro', 'flaviar@gmail.com', '$2y$10$NxSwR7kRQ.MloZnWnv026ON9XOo.Oug2aeaNdG8BI3mnoRrsZqOcG', 1),
(64, 'Amanda Ferreira', 'amandaf@gmail.com', '$2y$10$kBjzi1CYNfZPkrjNnKGXuOAcXIeEtcZEal7tefgDoks4s6VZB7DNm', 1),
(65, 'Geraldo Gouveia', 'geraldog@gmail.com', '$2y$10$YC4JkeGIJTiiCwcbn2dILuZX8rN.eeB79RuMRRz06H0BKM0hubpFC', 1),
(66, 'Julia Maria', 'juliam@gmail.com', '$2y$10$LVNZ16QNLhiQ9AOkELTKdelDRrCbz3Nu7xVCOyLFt6TureGvBY9bK', 1),
(67, 'Maria Julia Ribeiro', 'mariajr@gmail.com', '$2y$10$aevZQdhkicP2cQM2nK8QlObYHKL8qi/T2FogfXI/Dtdh/ivR58tdi', 1),
(68, 'Isabela Ferreira', 'isabelaf@gmail.com', '$2y$10$YCh8ikZj64XGwMfrkc.r2uTFZlizFwWr5TVBu1QJdYA2vZObVM.5y', 1),
(69, 'Laura Pligster', 'laurap@gmail.com', '$2y$10$BIVs9c61GtYBGeXN3zqJtO5Rm31an.oQwqqRFHpVDjB3m4F1gQk/q', 1),
(70, 'Claudia Cristina', 'claudiac@gmail.com', '$2y$10$3wTRlVyO.V4e/unMDo0sFurg5.Pe4j1F6e4fWcTwJvq5WeT5FwqsK', 1),
(71, 'Carla Santos', 'carlas@gmail.com', '$2y$10$TwgzD3fcPPUVMORcQ3BXnuSQy047lR0.DT.wgTXCkfQHx5fjVsYXm', 1),
(72, 'Lua Carla', 'luac@gmail.com', '$2y$10$4jJALT/F9je8b91EO4r.oO2W5AXnO6VcAy6Ca3eYAZX/AOnM4StWG', 2),
(73, 'Eduarda Ribeiro', 'eduardar@gmail.com', '$2y$10$hcoj99AkpQcqByb/cmc0XuTXN6.7VX.OQmC/wYYMsN0.7J7aRP3zS', 1),
(74, 'Bruna Marquezine', 'brunam@gmail.com', '$2y$10$M963AbO6f/4wUvKQBIrtqeWVHMK0QO5zl/JKY8G0tp5SST94VCmEa', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ClienteCep`
--

CREATE TABLE `ClienteCep` (
  `idClienteCep` int(11) NOT NULL,
  `enderecoCep` varchar(300) NOT NULL,
  `cidadeCep` varchar(300) NOT NULL,
  `estadoCep` varchar(300) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ClienteCep`
--

INSERT INTO `ClienteCep` (`idClienteCep`, `enderecoCep`, `cidadeCep`, `estadoCep`, `idCliente`) VALUES
(1, 'Rua Aloisio Orlando Palmas da Silva, 107', 'Cruzeiro', 'São Paulo', 72),
(2, 'Rua Aloisio Orlando Palmas da Silva, 107', 'Cruzeiro', 'São Paulo', 72),
(3, 'Rua Aloisio Orlando Palmas da Silva, 107', 'Cruzeiro', 'São Paulo', 72),
(4, 'Rua Sete de Setembro, 109', 'Cruzeiro', 'São Paulo', 74),
(5, 'Rua Aloisio Orlando Palmas da Silva, 110', 'Cruzeiro', 'São Paulo', 72);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Compra`
--

CREATE TABLE `Compra` (
  `idCompra` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idCliente` int(11) NOT NULL,
  `codigoSerial` varchar(300) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Compra`
--

INSERT INTO `Compra` (`idCompra`, `data`, `idCliente`, `codigoSerial`, `valor`) VALUES
(1, '2023-12-04 04:06:21', 72, 'AGyDV187kL12DE7', 55),
(2, '2023-12-04 04:25:23', 72, 'LKOS192jsIDB874', 50),
(3, '2023-12-04 04:25:23', 72, 'LKOS192jsIDB874', 50),
(4, '2023-12-04 04:25:35', 72, 'OKATK912js65SAW', 60),
(5, '2023-12-04 04:25:23', 74, 'LKOS192jsIDB874', 50),
(6, '2023-12-04 06:48:24', 72, 'LKOS192jsIDB874', 55);

-- --------------------------------------------------------

--
-- Estrutura para tabela `DadosArduino`
--

CREATE TABLE `DadosArduino` (
  `idDadosArd` int(11) NOT NULL,
  `idMinhasLixeiras` int(11) NOT NULL,
  `volume` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `DadosArduino`
--

INSERT INTO `DadosArduino` (`idDadosArd`, `idMinhasLixeiras`, `volume`, `date`) VALUES
(1, 1, 2.65, '2023-12-20'),
(2, 2, 2.65, '2023-12-13'),
(3, 5, 3.58, '2023-12-12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Imagens`
--

CREATE TABLE `Imagens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nome_imagem` varchar(255) NOT NULL,
  `dados_imagem` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Lixeira`
--

CREATE TABLE `Lixeira` (
  `codigoSerial` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `capacidade` float NOT NULL,
  `informacoesTecnica` varchar(300) NOT NULL,
  `fabricante` varchar(150) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Lixeira`
--

INSERT INTO `Lixeira` (`codigoSerial`, `modelo`, `capacidade`, `informacoesTecnica`, `fabricante`, `preco`) VALUES
('AGyDV187kL12DE7', 'Lixeira Inteligente Rattan', 5, 'A Lixeira Inteligente Rattan com Tampa 5L Preta é um produto eficiente e belo. Além de útil, é ideal para decorar sua cozinha. Confeccionada com design de trama, é estilosa e sofisticada. ', 'WasteWise', 55),
('LKOS192jsIDB874', 'Lixeira Inteligente Primafer', 5, 'A Lixeira Multiuso Primafer Branca é um produto confeccionado em alta tecnologia e com cor viva para valorizar ainda mais a decoração dos ambientes.', 'WasteWise', 50),
('OKATK912js65SAW', 'Lixeira Inteligente Plastutti', 5, 'O cesto de lixo com tampa plástica 5 Litros, conta um acabamento de qualidade. Combina com qualquer ambiente, desde escritórios, salas de reunião, consultórios, cozinhas e até mesmo em salões de beleza.', 'WasteWise', 60);

-- --------------------------------------------------------

--
-- Estrutura para tabela `MinhasLixeiras`
--

CREATE TABLE `MinhasLixeiras` (
  `idMinhasLixeiras` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `CodigoSerial` varchar(100) NOT NULL,
  `statusLixeira` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `MinhasLixeiras`
--

INSERT INTO `MinhasLixeiras` (`idMinhasLixeiras`, `idCliente`, `CodigoSerial`, `statusLixeira`) VALUES
(1, 72, 'AGyDV187kL12DE7', 2),
(2, 72, 'LKOS192jsIDB874', 2),
(3, 72, 'LKOS192jsIDB874', 2),
(4, 72, 'OKATK912js65SAW', 2),
(5, 74, 'LKOS192jsIDB874', 1),
(6, 72, 'LKOS192jsIDB874', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `emailCliente` (`emailCliente`);

--
-- Índices de tabela `ClienteCep`
--
ALTER TABLE `ClienteCep`
  ADD PRIMARY KEY (`idClienteCep`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `Compra`
--
ALTER TABLE `Compra`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `codigoSerial` (`codigoSerial`);

--
-- Índices de tabela `DadosArduino`
--
ALTER TABLE `DadosArduino`
  ADD PRIMARY KEY (`idDadosArd`),
  ADD KEY `idMinhasLixeiras` (`idMinhasLixeiras`);

--
-- Índices de tabela `Imagens`
--
ALTER TABLE `Imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `Lixeira`
--
ALTER TABLE `Lixeira`
  ADD PRIMARY KEY (`codigoSerial`),
  ADD UNIQUE KEY `modelo` (`modelo`);

--
-- Índices de tabela `MinhasLixeiras`
--
ALTER TABLE `MinhasLixeiras`
  ADD PRIMARY KEY (`idMinhasLixeiras`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `CodigoSerial` (`CodigoSerial`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de tabela `ClienteCep`
--
ALTER TABLE `ClienteCep`
  MODIFY `idClienteCep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `Compra`
--
ALTER TABLE `Compra`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `DadosArduino`
--
ALTER TABLE `DadosArduino`
  MODIFY `idDadosArd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `Imagens`
--
ALTER TABLE `Imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `MinhasLixeiras`
--
ALTER TABLE `MinhasLixeiras`
  MODIFY `idMinhasLixeiras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `ClienteCep`
--
ALTER TABLE `ClienteCep`
  ADD CONSTRAINT `ClienteCep_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`);

--
-- Restrições para tabelas `Compra`
--
ALTER TABLE `Compra`
  ADD CONSTRAINT `Compra_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`),
  ADD CONSTRAINT `Compra_ibfk_3` FOREIGN KEY (`codigoSerial`) REFERENCES `Lixeira` (`codigoSerial`);

--
-- Restrições para tabelas `DadosArduino`
--
ALTER TABLE `DadosArduino`
  ADD CONSTRAINT `DadosArduino_ibfk_1` FOREIGN KEY (`idMinhasLixeiras`) REFERENCES `MinhasLixeiras` (`idMinhasLixeiras`);

--
-- Restrições para tabelas `Imagens`
--
ALTER TABLE `Imagens`
  ADD CONSTRAINT `Imagens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Cliente` (`idCliente`);

--
-- Restrições para tabelas `MinhasLixeiras`
--
ALTER TABLE `MinhasLixeiras`
  ADD CONSTRAINT `MinhasLixeiras_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`),
  ADD CONSTRAINT `MinhasLixeiras_ibfk_2` FOREIGN KEY (`CodigoSerial`) REFERENCES `Lixeira` (`codigoSerial`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
