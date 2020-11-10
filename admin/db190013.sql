
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tb_login` (
  `log_codigo` int(11) NOT NULL,
  `log_nome` varchar(120) DEFAULT NULL,
  `log_login` varchar(20) DEFAULT NULL,
  `log_senha` varchar(30) DEFAULT NULL,
  `log_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tb_news` (
  `new_codigo` int(11) NOT NULL,
  `new_titulo` varchar(120) DEFAULT NULL,
  `new_descricao` varchar(250) DEFAULT NULL,
  `new_autor` varchar(100) DEFAULT NULL,
  `new_data_publicacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `new_status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`log_codigo`);

ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`new_codigo`);
