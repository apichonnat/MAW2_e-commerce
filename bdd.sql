-- MySQL Script generated by MySQL Workbench
-- 02/18/16 15:24:11
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema e-commerce
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema e-commerce
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `e-commerce` DEFAULT CHARACTER SET utf8 ;
USE `e-commerce` ;

-- -----------------------------------------------------
-- Table `e-commerce`.`country`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`country` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `tva` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`addresses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`addresses` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Street` VARCHAR(255) NOT NULL,
  `nb_street` INT NULL,
  `city` VARCHAR(255) NOT NULL,
  `npa` INT NOT NULL,
  `country_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Adress_Country1_idx` (`country_id` ASC),
  CONSTRAINT `fk_Adress_Country1`
    FOREIGN KEY (`country_id`)
    REFERENCES `e-commerce`.`country` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`info_connexions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`info_connexions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(255) NOT NULL,
  `pseudo` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `valided` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`languages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`languages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `language` VARCHAR(100) NOT NULL,
  `acronym` VARCHAR(4) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_Name` VARCHAR(45) NOT NULL,
  `last_Name` VARCHAR(45) NOT NULL,
  `Card_number` INT NULL,
  `adress_id` INT NOT NULL,
  `adress_delivery_id` INT NOT NULL,
  `info_connexion_id` INT NOT NULL,
  `date_inscription` DATE NOT NULL,
  `language_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Users_Adress1_idx` (`adress_id` ASC),
  INDEX `fk_Users_Adress2_idx` (`adress_delivery_id` ASC),
  INDEX `fk_Users_Info_Connexion1_idx` (`info_connexion_id` ASC),
  INDEX `fk_users_languages1_idx` (`language_id` ASC),
  CONSTRAINT `fk_Users_Adress1`
    FOREIGN KEY (`adress_id`)
    REFERENCES `e-commerce`.`addresses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_Adress2`
    FOREIGN KEY (`adress_delivery_id`)
    REFERENCES `e-commerce`.`addresses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_Info_Connexion1`
    FOREIGN KEY (`info_connexion_id`)
    REFERENCES `e-commerce`.`info_connexions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_languages1`
    FOREIGN KEY (`language_id`)
    REFERENCES `e-commerce`.`languages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `users_id` INT NOT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Orders_Users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_Orders_Users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `e-commerce`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`contain_articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`contain_articles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `subtitle` VARCHAR(45) NULL,
  `description` TEXT NOT NULL,
  `languages_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Contains_Articles_Languages1_idx` (`languages_id` ASC),
  CONSTRAINT `fk_Contains_Articles_Languages1`
    FOREIGN KEY (`languages_id`)
    REFERENCES `e-commerce`.`languages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`articles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contain_article_id` INT NOT NULL,
  `article_id` INT NOT NULL,
  `date_post` DATETIME NOT NULL,
  `sold` ENUM('Vendu, disponible, reserve') NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Articles_Contains_Articles1_idx` (`contain_article_id` ASC),
  INDEX `fk_Articles_Category_Articles1_idx` (`article_id` ASC),
  CONSTRAINT `fk_Articles_Contains_Articles1`
    FOREIGN KEY (`contain_article_id`)
    REFERENCES `e-commerce`.`contain_articles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Articles_Category_Articles1`
    FOREIGN KEY (`article_id`)
    REFERENCES `e-commerce`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`types_media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`types_media` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`media` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type_media_id` INT NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `path` VARCHAR(255) NOT NULL,
  `description` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Media_TypeMedia1_idx` (`type_media_id` ASC),
  CONSTRAINT `fk_Media_TypeMedia1`
    FOREIGN KEY (`type_media_id`)
    REFERENCES `e-commerce`.`types_media` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`comments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment` TEXT NOT NULL,
  `date_poste` DATETIME NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comment_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_comment_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `e-commerce`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`articles_media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`articles_media` (
  `media_id` INT NOT NULL,
  `article_id` INT NOT NULL,
  PRIMARY KEY (`media_id`, `article_id`),
  INDEX `fk_media_has_Articles_Articles1_idx` (`article_id` ASC),
  INDEX `fk_media_has_Articles_media1_idx` (`media_id` ASC),
  CONSTRAINT `fk_media_has_Articles_media1`
    FOREIGN KEY (`media_id`)
    REFERENCES `e-commerce`.`media` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_media_has_Articles_Articles1`
    FOREIGN KEY (`article_id`)
    REFERENCES `e-commerce`.`articles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `e-commerce`.`articles_orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `e-commerce`.`articles_orders` (
  `order_id` INT NOT NULL,
  `article_id` INT NOT NULL,
  PRIMARY KEY (`order_id`, `article_id`),
  INDEX `fk_orders_has_articles_articles1_idx` (`article_id` ASC),
  INDEX `fk_orders_has_articles_orders1_idx` (`order_id` ASC),
  CONSTRAINT `fk_orders_has_articles_orders1`
    FOREIGN KEY (`order_id`)
    REFERENCES `e-commerce`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_articles_articles1`
    FOREIGN KEY (`article_id`)
    REFERENCES `e-commerce`.`articles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
