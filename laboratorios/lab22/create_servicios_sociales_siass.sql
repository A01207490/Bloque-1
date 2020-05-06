CREATE DEFINER=`root`@`localhost` PROCEDURE `socios_formadores`.`create_servicios_sociales_siass`()
BEGIN
	/*
	 * Hacer un drop de la tabla de trabajo de servicios_sociales_siass
	 */
	DROP TABLE IF EXISTS servicios_sociales_siass;
	/*
	 * Crear tabla de trabajo de servicios_sociales_siass
	 */
	CREATE TABLE `servicios_sociales_siass` (
	`alumno_matricula` varchar(1024) DEFAULT NULL,
	`alumno_nombre` varchar(1024) DEFAULT NULL,
	`alumno_genero` varchar(1024) DEFAULT NULL,
	`alumno_carrera` varchar(1024) DEFAULT NULL,
	`proyecto_nombre` varchar(1024) DEFAULT NULL,
	`organizacion_nombre` varchar(1024) DEFAULT NULL,
	`proyecto_horas_registradas` varchar(1024) DEFAULT NULL,
	`ss_horas_acreditadas` varchar(1024) DEFAULT NULL,
	`alumno_semestre` varchar(1024) DEFAULT NULL,
	`alumno_tipo` varchar(1024) DEFAULT NULL,
	`folio` varchar(1024) DEFAULT NULL,
	`folio_2` varchar(1024) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
END