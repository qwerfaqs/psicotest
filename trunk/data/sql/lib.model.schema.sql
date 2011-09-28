
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- calificaciones
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `calificaciones`;


CREATE TABLE `calificaciones`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`motivo` TEXT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
