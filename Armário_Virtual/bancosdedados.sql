SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `armario_virtual` DEFAULT CHARACTER SET utf8 ;
USE `armario_virtual` ;

CREATE TABLE IF NOT EXISTS `armario_virtual`.`categorias` (
  `id_categorias` INT NOT NULL AUTO_INCREMENT,
  `nome_categorias` VARCHAR(100) NOT NULL,
  `descricao_categorias` VARCHAR(100) NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `armario_virtual`.`roupa` (
  `id_roupa` INT NOT NULL AUTO_INCREMENT,
  `nome_roupa` VARCHAR(100) NOT NULL,
  `tipo_roupa` VARCHAR(100) NOT NULL,
  `cor_roupa` VARCHAR(50) NULL,
  `tamanho_roupa` VARCHAR(10) NULL,
  `estacao_roupa` VARCHAR(50) NULL,
  `foto_roupa` VARCHAR(255) NULL COMMENT 'Caminho para o arquivo da imagem',
  `categorias_id_categorias` INT NOT NULL,
  PRIMARY KEY (`id_roupa`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `armario_virtual`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(100) NOT NULL,
  `email_usuario` VARCHAR(100) NOT NULL,
  `telefone_usuario` VARCHAR(20) NOT NULL,
  `roupa_id_roupa` INT NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE = InnoDB;
