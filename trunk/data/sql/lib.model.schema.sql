
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
	`created_at` DATETIME,
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
	`created_at` DATETIME,
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
	`sexo` CHAR(1),
	`fechanacimiento` DATE,
	`password` CHAR(20),
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- auditorias
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `auditorias`;


CREATE TABLE `auditorias`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`objeto` VARCHAR(50),
	`tipooperacion` VARCHAR(80),
	`created_at` DATETIME,
	`descripcion` TEXT,
	`administradores_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `administradores_id`(`administradores_id`),
	CONSTRAINT `auditorias_FK_1`
		FOREIGN KEY (`administradores_id`)
		REFERENCES `administradores` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- escalas
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `escalas`;


CREATE TABLE `escalas`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`tests_id` INTEGER(11)  NOT NULL,
	`nombre` VARCHAR(50),
	`nombreLargo` VARCHAR(20),
	`descripcion` TEXT,
	PRIMARY KEY (`id`),
	KEY `tests_id`(`tests_id`),
	CONSTRAINT `escalas_FK_1`
		FOREIGN KEY (`tests_id`)
		REFERENCES `tests` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
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
#-- estadosresultados
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `estadosresultados`;


CREATE TABLE `estadosresultados`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` CHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- evaluaciones
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `evaluaciones`;


CREATE TABLE `evaluaciones`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`perfil_id` INTEGER(11)  NOT NULL,
	`estadosevaluaciones_id` INTEGER(11)  NOT NULL,
	`cantidad` INTEGER(11),
	`fecha` DATE,
	`nombre` CHAR(50),
	`created_at` CHAR(20),
	PRIMARY KEY (`id`),
	KEY `estadosevaluaciones_id`(`estadosevaluaciones_id`),
	KEY `perfil_id`(`perfil_id`),
	CONSTRAINT `evaluaciones_FK_1`
		FOREIGN KEY (`perfil_id`)
		REFERENCES `perfil` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `evaluaciones_FK_2`
		FOREIGN KEY (`estadosevaluaciones_id`)
		REFERENCES `estadosevaluaciones` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- hojas
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `hojas`;


CREATE TABLE `hojas`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- intensidades
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `intensidades`;


CREATE TABLE `intensidades`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`resultadosparciales_id` INTEGER(11)  NOT NULL,
	`opciones_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `resultadosparciales_id`(`resultadosparciales_id`),
	KEY `opciones_id`(`opciones_id`),
	CONSTRAINT `intensidades_FK_1`
		FOREIGN KEY (`resultadosparciales_id`)
		REFERENCES `resultadosparciales` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `intensidades_FK_2`
		FOREIGN KEY (`opciones_id`)
		REFERENCES `opciones` (`id`)
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
	`tipoopcion_id` INTEGER(11)  NOT NULL,
	`texto` CHAR(50),
	PRIMARY KEY (`id`),
	KEY `tipoopcion_id`(`tipoopcion_id`),
	CONSTRAINT `opciones_FK_1`
		FOREIGN KEY (`tipoopcion_id`)
		REFERENCES `tipoopcion` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- percentiles
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `percentiles`;


CREATE TABLE `percentiles`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`escalas_id` INTEGER(11)  NOT NULL,
	`percentil` INTEGER(11),
	`desde` INTEGER(11)  NOT NULL,
	`hasta` INTEGER(11),
	PRIMARY KEY (`id`),
	KEY `escalas_id`(`escalas_id`),
	CONSTRAINT `percentiles_FK_1`
		FOREIGN KEY (`escalas_id`)
		REFERENCES `escalas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- perfil
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `perfil`;


CREATE TABLE `perfil`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(100),
	`descripcion` TEXT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- preguntas
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `preguntas`;


CREATE TABLE `preguntas`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`tests_id` INTEGER(11)  NOT NULL,
	`imagen` CHAR(100),
	`descripcion` TEXT,
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
	`created_at` DATETIME,
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
	`descripcion` TEXT,
	`celda` CHAR(20),
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
#-- respuestasescalas
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `respuestasescalas`;


CREATE TABLE `respuestasescalas`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`respuestas_id` INTEGER(11)  NOT NULL,
	`escalas_id` INTEGER(11)  NOT NULL,
	`valor` INTEGER(11),
	PRIMARY KEY (`id`),
	KEY `respuestas_id`(`respuestas_id`),
	KEY `escalas_id`(`escalas_id`),
	CONSTRAINT `respuestasescalas_FK_1`
		FOREIGN KEY (`respuestas_id`)
		REFERENCES `respuestas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `respuestasescalas_FK_2`
		FOREIGN KEY (`escalas_id`)
		REFERENCES `escalas` (`id`)
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
	`pruebas_id` INTEGER(11)  NOT NULL,
	`aspirantes_id` INTEGER(11)  NOT NULL,
	`duracion` CHAR(20),
	`puntaje` CHAR(20),
	`estadosresultados_id` INTEGER(11),
	PRIMARY KEY (`id`),
	KEY `pruebas_id`(`pruebas_id`),
	KEY `aspirantes_id`(`aspirantes_id`),
	KEY `estadosresultados_id`(`estadosresultados_id`),
	CONSTRAINT `resultados_FK_1`
		FOREIGN KEY (`pruebas_id`)
		REFERENCES `pruebas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultados_FK_2`
		FOREIGN KEY (`aspirantes_id`)
		REFERENCES `aspirantes` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultados_FK_3`
		FOREIGN KEY (`estadosresultados_id`)
		REFERENCES `estadosresultados` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- resultadosescalas
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `resultadosescalas`;


CREATE TABLE `resultadosescalas`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`resultados_id` INTEGER(11)  NOT NULL,
	`escalas_id` INTEGER(11)  NOT NULL,
	`valor` CHAR(5),
	PRIMARY KEY (`id`),
	KEY `resultados_id`(`resultados_id`),
	KEY `escalas_id`(`escalas_id`),
	CONSTRAINT `resultadosescalas_FK_1`
		FOREIGN KEY (`resultados_id`)
		REFERENCES `resultados` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultadosescalas_FK_2`
		FOREIGN KEY (`escalas_id`)
		REFERENCES `escalas` (`id`)
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
	`aspirantes_id` INTEGER(11)  NOT NULL,
	`pruebas_id` INTEGER(11)  NOT NULL,
	`preguntas_id` INTEGER(11)  NOT NULL,
	`opciones_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `pruebas_id`(`pruebas_id`),
	KEY `preguntas_id`(`preguntas_id`),
	KEY `aspirantes_id`(`aspirantes_id`),
	KEY `opciones_id`(`opciones_id`),
	CONSTRAINT `resultadosparciales_FK_1`
		FOREIGN KEY (`aspirantes_id`)
		REFERENCES `aspirantes` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultadosparciales_FK_2`
		FOREIGN KEY (`pruebas_id`)
		REFERENCES `pruebas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultadosparciales_FK_3`
		FOREIGN KEY (`preguntas_id`)
		REFERENCES `preguntas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `resultadosparciales_FK_4`
		FOREIGN KEY (`opciones_id`)
		REFERENCES `opciones` (`id`)
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
	`puntaje_aprobacion` CHAR(20),
	`paginacion` INTEGER(11),
	`tipoopcion_id` INTEGER(11)  NOT NULL,
	`tests_id` INTEGER(11),
	PRIMARY KEY (`id`),
	KEY `tests_id`(`tests_id`),
	KEY `tipoopcion_id`(`tipoopcion_id`),
	CONSTRAINT `tests_FK_1`
		FOREIGN KEY (`tipoopcion_id`)
		REFERENCES `tipoopcion` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `tests_FK_2`
		FOREIGN KEY (`tests_id`)
		REFERENCES `tests` (`id`)
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
#-- valores
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `valores`;


CREATE TABLE `valores`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`celda` CHAR(10),
	`valor` CHAR(30),
	`hojas_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`id`),
	KEY `hojas_id`(`hojas_id`),
	CONSTRAINT `valores_FK_1`
		FOREIGN KEY (`hojas_id`)
		REFERENCES `hojas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
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

#-----------------------------------------------------------------------------
#-- valoresperado
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `valoresperado`;


CREATE TABLE `valoresperado`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`perfil_id` INTEGER(11)  NOT NULL,
	`escalas_id` INTEGER(11)  NOT NULL,
	`mayorque` INTEGER(11),
	`menorque` INTEGER(11),
	PRIMARY KEY (`id`),
	KEY `escalas_id`(`escalas_id`),
	KEY `perfil_id`(`perfil_id`),
	CONSTRAINT `valoresperado_FK_1`
		FOREIGN KEY (`perfil_id`)
		REFERENCES `perfil` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `valoresperado_FK_2`
		FOREIGN KEY (`escalas_id`)
		REFERENCES `escalas` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
