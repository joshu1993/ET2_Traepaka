CREATE DATABASE traepakaDB;
CREATE USER 'traepakaDBuser'@'localhost' IDENTIFIED BY 'traepakaDBpass';
GRANT ALL PRIVILEGES ON traepaka.* TO traepakaDBuser@'localhost' IDENTIFIED BY "traepakaDBpass";
USE traepakaDB;


-- -----------------------------------------------------
-- Table USERS
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users`;

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `username` VARCHAR(20) NOT NULL UNIQUE,
  `name` VARCHAR(30) NOT NULL,
  `surname` VARCHAR(50) NOT NULL, 
  `password`  VARCHAR(255) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table PRODUCTS
-- -----------------------------------------------------
DROP TABLE IF EXISTS `products`;

CREATE TABLE IF NOT EXISTS `products` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `name` VARCHAR (30) NOT NULL,
  `description` VARCHAR(200) NOT NULL,
  `date` TIMESTAMP,
  `place` VARCHAR(20) NOT NULL,
  `price` INT (9) NOT NULL,
  `category` ENUM ('Casa y Jardin', 'Caza y Pesca', 'Deportes', 'Mobiliario', 'Moda', 'Motor', 'Tecnologia', 'Otros'),
  `user_id` INT UNSIGNED,
  PRIMARY KEY (`id`)
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*CREATE INDEX `fk_Producto_Usuario1_idx` ON `products` (`User_id` ASC);*/

-- -----------------------------------------------------
-- Table CHATS
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chats`;

CREATE TABLE IF NOT EXISTS `chats` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `content` TEXT,
  `date` TIMESTAMP NOT NULL,
  `user_id` INTEGER UNSIGNED, 
  `product_id` INTEGER UNSIGNED,
  PRIMARY KEY (`id`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*CREATE INDEX `fk_Chat_Usuario1_idx` ON `chats` (`user_id` ASC);*/

-- -----------------------------------------------------
-- Table `responses_chats`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `responses_chats`;

CREATE TABLE IF NOT EXISTS `responses_chats` (
  id INT UNSIGNED AUTO_INCREMENT,
  user_id INTEGER UNSIGNED,
  chat_id INTEGER UNSIGNED,
  PRIMARY KEY(`id`)
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE products
  ADD FOREIGN KEY (user_id)
  REFERENCES users (id)
  ON DELETE CASCADE
  ON UPDATE CASCADE;

ALTER TABLE chats
  ADD FOREIGN KEY (user_id) 
  REFERENCES users (id)
  ON DELETE CASCADE
  ON UPDATE CASCADE,
  ADD FOREIGN KEY (post_id) 
  REFERENCES products (id)
  ON DELETE CASCADE
  ON UPDATE CASCADE;

ALTER TABLE responses_chats
  ADD FOREIGN KEY (user_id) 
  REFERENCES users (id)
  ON DELETE CASCADE
  ON UPDATE CASCADE,
  ADD FOREIGN KEY (chat_id) 
  REFERENCES chats (id)
  ON DELETE CASCADE
  ON UPDATE CASCADE;


-- -----------------------------------------------------
-- INSERTS `USERS`
-- -----------------------------------------------------

INSERT INTO `users` (`id`, `username`, `name`, `surname`, `password`, `email`) VALUES 
(NULL, 'rgcarrera', 'Ramon ', 'Gago Carrera', '1234', 'rgcarrera@gmail.com'), 
(NULL, 'joshua93', 'Joshua', 'Rodriguez Martiña', '1234', 'joshua93@gmail.com');


-- -----------------------------------------------------
-- INSERTS `PRODUCTS`
-- -----------------------------------------------------

INSERT INTO `products` (`id`, `name`, `description`, `date`,`place`, `price`, `category`, `user_id`) VALUES 
(NULL, 'Futbolin Presas', 'Futbolin Presas 2000 como nuevo. Me deshago de el por falta de espacio en casa. LLeva ademas jugadores de repuesto y un pack de 20 bolas.', CURRENT_TIMESTAMP, 'Madrid', 650, 'Casa y Jardin', '1'), 
(NULL, 'Iphone 6S', 'Urge la venta de este Iphone 6S. Me he dado cuenta de que Apple no es lo mio y quiero volver a Android de una vez.', CURRENT_TIMESTAMP, 'Santander', 550, 'Tecnologia', '2'), 
(NULL, 'Moto Ducati', 'Ducati Streetfighter 1098 absolutamente impecable. De diciembre de 2010. Con muy poco uso, solo tiene 15.738kms. Revisiones anuales hechas.', CURRENT_TIMESTAMP, 'Burgos', 4600, 'Motor', '3'), 
(NULL, 'Bolso MK', 'Precioso bolso Michael Kors nuevo a estrenar color violeta con tachas doradas. Precio negociable', CURRENT_TIMESTAMP, 'Madrid', 115, 'Moda', '4'), 
(NULL, 'Escopeta', 'Vendo escopeta Winchester Diamond, en perfecto estado de acero y ajustes. Esta perfecta y se puede mandar al armero que quieran para comprobar. Gastos de envio incluidos.', CURRENT_TIMESTAMP, 'Lugo', 350, 'Caza y Pesca', '5')
(NULL, 'Mando PS4', 'Mando personalizado de ps4 en perfecto estado. Comprado hace menos de 6 meses y con muy poco uso. Doy 1 año de garantía.', CURRENT_TIMESTAMP, 'Alicante', 30, 'Tecnologia', '6');

-- -----------------------------------------------------
-- INSERTS `CHATS`
-- -----------------------------------------------------

INSERT INTO `chats` (`id`, `content`, `date`, `user_id`, `product_id`) VALUES 
(NULL, 'Debes ..', CURRENT_TIMESTAMP, NULL, '5', '1'), 
(NULL, 'Hola soy...', CURRENT_TIMESTAMP, NULL, '6', '1'), 
(NULL, 'Mira estoy en..', CURRENT_TIMESTAMP, NULL, '5', '2'), 
(NULL, 'Que tal?..', CURRENT_TIMESTAMP, NULL, '6', '2'), 
(NULL, 'Anda justo estaba buscando..', CURRENT_TIMESTAMP, NULL, '1', '3'), 
(NULL, 'Oye, me interesa..', CURRENT_TIMESTAMP, NULL, '6', '3'), 
(NULL, 'Te gustaría..', CURRENT_TIMESTAMP, NULL, '1', '4'), 
(NULL, 'Podriamos quedar..', CURRENT_TIMESTAMP, NULL, '6', '4'), 
(NULL, 'He pensado..', CURRENT_TIMESTAMP, NULL, '1', '5'), 
(NULL, 'Buenas soy...', CURRENT_TIMESTAMP, NULL, '5', '5')
(NULL, 'Buenas tardes soy..', CURRENT_TIMESTAMP, NULL, '1', '6'), 
(NULL, 'Que te parece si..?', CURRENT_TIMESTAMP, NULL, '5', '6');


-- -----------------------------------------------------
-- INSERTS `RESPONSES_CHATS`
-- -----------------------------------------------------

INSERT INTO `responses_chats` (`id`, `user_id`, `response_id`, `vote`) VALUES 
(NULL, '5', '1', '1'), 
(NULL, '6', '1', '1'),
(NULL, '5', '3', '0'), 
(NULL, '1', '4', '1'), 
(NULL, '5', '5', '1'), 
(NULL, '6', '6', '0'), 
(NULL, '5', '7', '0'), 
(NULL, '1', '7', '1'), 
(NULL, '6', '9', '1'), 
(NULL, '5', '10', '0'), 
(NULL, '6', '11', '1'), 
(NULL, '5', '12', '0');


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
