-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jun-2020 às 19:48
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `tutela` varchar(20) NOT NULL,
  `local` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `Rotas` varchar(3000) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `Nome`, `area`, `tutela`, `local`, `descricao`, `Rotas`, `img`) VALUES
(5, 'Dooh ponto 1', 'alimentos (Hamburguer) ', 'Privado', 'Benfica', 'Empresa especializada em venda de hamburguers', 'afshhthgvcfnnchgnc', ''),
(6, 'Tupuca', 'Venda online e entrega ao domicÃ­lio', 'Privado', 'Luanda-Talatona', 'Empresa nacional de e-commerce', 'sbzlfksbdÃ§ozgg', ''),
(7, 'Igreja Adventista do sÃ©timo dia (Paviterra I)', 'ReligiÃ£o', 'Privado', 'Luanda-Rocha Pinto', 'Venha ter uma encontro com Deus.', 'Avenida 21 de janeiro, Rua da UAT', ''),
(8, 'Academia BAI', 'Economia-BancÃ¡rio', 'Privado', 'Luanda-Morro Bento', 'Somos uma comunidade organizada e que lhe oferece o que procuras', 'Avenida Pedro de Castro Van-Dunem Loy', ''),
(9, 'Kero', 'Comercio', 'Privado', 'Luanda-Talatona', 'Supermercado', 'Avenida Samora Machel', ''),
(15, 'ColÃ©gio Novo Horizonte de Batalha', 'EducaÃ§Ã£o', 'Privado', 'Luanda-Futungo', 'EducaÃ§Ã£o com rigor e excelÃªncia', 'Avenida Pedro de Castro Van-Dunem Loy', ''),
(16, 'Hipermercado kero conbatentes', 'Comercio', 'Privado', 'Luanda-Maianga', 'Hipermercado de referencia', ' 8Â°49&#39;06.7&#34;S 13Â°15&#39;01.0&#34;E', ''),
(17, 'Bakonsul', 'TecnolÃ³gia', 'Privado', 'Luanda-Cassenda', 'Somos uma startup de tecnologia ', '8Â°50&#39;54.7&#34;S 13Â°13&#39;36.1&#34;E', ''),
(18, 'ColÃ©gio Saber', 'EducaÃ§Ã£o', 'Privado', 'Luanda-Morro Bento', 'EducaÃ§Ã£o para todos.', ' 8Â°49&#39;06.7&#34;S 13Â°15&#39;01.0&#34;E', ''),
(19, 'Igreja EnvagÃ©lica Congregacional de Angola', 'ReligiÃ£o', 'Privado', 'Luanda-Rocha Pinto', 'FÃ© e adoraÃ§Ã£o a Deus', '8Â°50&#39;54.7&#34;S 13Â°13&#39;36.1&#34;E', ''),
(20, 'PavilhÃ£o Multiusos da Cidadela', 'Desporto', 'Privado', 'Luanda-Mutamba', 'Campos multiusos e salas anexas', ' 8Â°49&#39;06.7&#34;S 13Â°15&#39;01.0&#34;E', ''),
(22, 'ColÃ©gio Episalque', 'EducaÃ§Ã£o', 'Privado', 'Luanda-Futungo', 'EducaÃ§Ã£o com rigor e excelÃªncia', 'Rua da pomobel', ''),
(23, 'Restaurante Vista Mar', 'Atendimento ao cliente', 'Privado', 'Luanda-Futungo', 'Atendimento ao rigor', 'Rua da pomobel', '7bd7f96e-5609-4675-8209-a064468f044b.jpg'),
(24, 'Lutalor center', 'EducaÃ§Ã£o', 'Privado', 'Luanda-Morro Bento', 'FormaÃ§Ã£o tÃ©cnica profissional', '8Â°50&#39;54.7&#34;S 13Â°13&#39;36.1&#34;E', 'â€œNota mental_ NÃ£o meÃ§a seu progresso com a rÃ©guaâ€¦.jpg'),
(25, 'Atelier do peixe', 'Restaurante', 'Privado', 'Rua da 11, futungo II', 'Temos piscina com vista para o mar, snack bar, snooker e muito mais.', 'Avenida Pedro de Castro Van-Dunem Loy', 'ConheÃ§a Sua BÃ­blia de Capa a Capa.jpg'),
(30, '', '', '', '', '', '', '70354065_103340954395114_4387825635695788032_n.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `indereco`
--

CREATE TABLE `indereco` (
  `id` int(11) NOT NULL,
  `address` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `lat` float NOT NULL,
  `ing` float NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `usuario`, `senha`) VALUES
(1, 'Mario Batalha', '1234m'),
(2, 'Amilton Silva', '321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
