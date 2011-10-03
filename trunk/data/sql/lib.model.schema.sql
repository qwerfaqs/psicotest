
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- administradores
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `administradores`;


CREATE TABLE `administradores`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`usuario` CHAR(50),
	`password` CHAR(50),
	`nombre` CHAR(50),
	`apellido` CHAR(20),
	PRIMARY KEY (`id`),
	UNIQUE KEY `usuario` (`usuario`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- asistencias
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `asistencias`;


CREATE TABLE `asistencias`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`evaluaciones_id` INTEGER(11)  NOT NULL,
	`aspirantes_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `aspirantes_id`(`aspirantes_id`),
	KEY `evaluaciones_id`(`evaluaciones_id`),
	CONSTRAINT `asistencias_FK_1`
		FOREIGN KEY (`evaluaciones_id`)
		REFERENCES `evaluaciones` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `asistencias_FK_2`
		FOREIGN KEY (`aspirantes_id`)
		REFERENCES `aspirantes` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- aspirantes
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `aspirantes`;


CREATE TABLE `aspirantes`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(60),
	`apellido` VARCHAR(60),
	`cedula` CHAR(30),
	`password` CHAR(20),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- estadopruebas
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `estadopruebas`;


CREATE TABLE `estadopruebas`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- estadosevaluaciones
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `estadosevaluaciones`;


CREATE TABLE `estadosevaluaciones`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- evaluaciones
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `evaluaciones`;


CREATE TABLE `evaluaciones`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`cantidad` INTEGER(11),
	`fecha` DATE,
	`nombre` CHAR(50),
	`estadosevaluaciones_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `estadosevaluaciones_id`(`estadosevaluaciones_id`),
	CONSTRAINT `evaluaciones_FK_1`
		FOREIGN KEY (`estadosevaluaciones_id`)
		REFERENCES `estadosevaluaciones` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- opciones
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `opciones`;


CREATE TABLE `opciones`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`texto` CHAR(50),
	`tipoopcion_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `tipoopcion_id`(`tipoopcion_id`),
	CONSTRAINT `opciones_FK_1`
		FOREIGN KEY (`tipoopcion_id`)
		REFERENCES `tipoopcion` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- preguntas
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `preguntas`;


CREATE TABLE `preguntas`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`imagen` CHAR(100),
	`descripcion` TEXT,
	`tests_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `tests_id`(`tests_id`),
	CONSTRAINT `preguntas_FK_1`
		FOREIGN KEY (`tests_id`)
		REFERENCES `tests` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pruebas
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pruebas`;


CREATE TABLE `pruebas`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`tests_id` INTEGER(11)  NOT NULL,
	`evaluaciones_id` INTEGER(11)  NOT NULL,
	`estadopruebas_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `tests_id`(`tests_id`),
	KEY `estadopruebas_id`(`estadopruebas_id`),
	KEY `evaluaciones_id`(`evaluaciones_id`),
	CONSTRAINT `pruebas_FK_1`
		FOREIGN KEY (`tests_id`)
		REFERENCES `tests` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `pruebas_FK_2`
		FOREIGN KEY (`evaluaciones_id`)
		REFERENCES `evaluaciones` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `pruebas_FK_3`
		FOREIGN KEY (`estadopruebas_id`)
		REFERENCES `estadopruebas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- respuestas
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `respuestas`;


CREATE TABLE `respuestas`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`preguntas_id` INTEGER(11)  NOT NULL,
	`estados_id` INTEGER(11)  NOT NULL,
	`opciones_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `preguntas_id`(`preguntas_id`),
	KEY `estados_id`(`estados_id`),
	KEY `opciones_id`(`opciones_id`),
	CONSTRAINT `respuestas_FK_1`
		FOREIGN KEY (`preguntas_id`)
		REFERENCES `preguntas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `respuestas_FK_2`
		FOREIGN KEY (`estados_id`)
		REFERENCES `valoresdeverdad` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `respuestas_FK_3`
		FOREIGN KEY (`opciones_id`)
		REFERENCES `opciones` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- resultados
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `resultados`;


CREATE TABLE `resultados`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`duracion` CHAR(20),
	`puntaje` CHAR(20),
	`pruebas_id` INTEGER(11)  NOT NULL,
	`aspirantes_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `pruebas_id`(`pruebas_id`),
	KEY `aspirantes_id`(`aspirantes_id`),
	CONSTRAINT `resultados_FK_1`
		FOREIGN KEY (`pruebas_id`)
		REFERENCES `pruebas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultados_FK_2`
		FOREIGN KEY (`aspirantes_id`)
		REFERENCES `aspirantes` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- resultadosparciales
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `resultadosparciales`;


CREATE TABLE `resultadosparciales`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`opciones_id` INTEGER(11)  NOT NULL,
	`preguntas_id` INTEGER(11)  NOT NULL,
	`aspirantes_id` INTEGER(11)  NOT NULL,
	`pruebas_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `pruebas_id`(`pruebas_id`),
	KEY `preguntas_id`(`preguntas_id`),
	KEY `aspirantes_id`(`aspirantes_id`),
	KEY `opciones_id`(`opciones_id`),
	CONSTRAINT `resultadosparciales_FK_1`
		FOREIGN KEY (`opciones_id`)
		REFERENCES `opciones` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultadosparciales_FK_2`
		FOREIGN KEY (`preguntas_id`)
		REFERENCES `preguntas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultadosparciales_FK_3`
		FOREIGN KEY (`aspirantes_id`)
		REFERENCES `aspirantes` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultadosparciales_FK_4`
		FOREIGN KEY (`pruebas_id`)
		REFERENCES `pruebas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tests
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tests`;


CREATE TABLE `tests`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`titulo` VARCHAR(80),
	`historia` TEXT,
	`enunciado` TEXT,
	`imagen` CHAR(100),
	`duracion` CHAR(30),
	`tipoopcion_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `tipoopcion_id`(`tipoopcion_id`),
	CONSTRAINT `tests_FK_1`
		FOREIGN KEY (`tipoopcion_id`)
		REFERENCES `tipoopcion` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tipoopcion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tipoopcion`;


CREATE TABLE `tipoopcion`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- valoresdeverdad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `valoresdeverdad`;


CREATE TABLE `valoresdeverdad`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;