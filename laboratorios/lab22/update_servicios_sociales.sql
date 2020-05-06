CREATE DEFINER=`root`@`localhost` PROCEDURE `socios_formadores`.`update_servicios_sociales`()
BEGIN
	/*
	 * Actualizar tabla de alumnos con la tabla de servicios_sociales_siass
	 */
	INSERT INTO alumnos (alumno_matricula, alumno_nombre, alumno_carrera, 
	                     alumno_semestre, alumno_tipo)
	SELECT DISTINCT alumno_matricula, alumno_nombre, alumno_carrera, 
	       alumno_semestre, alumno_tipo
	FROM servicios_sociales_siass
	WHERE alumno_matricula NOT IN(
		SELECT alumno_matricula 
		FROM alumnos);
	/*
	 * Borrar todos los registros del periodo activo
	 */
	DELETE FROM servicios_sociales 
	WHERE periodo_id IN 
	(
		SELECT periodo_id 
		FROM periodos 
		WHERE periodo_activo = 0
	);
	/*
	 * Insertar en servicios sociales todos los registros que están presentes en la tabla servicios_sociales_siass
 	 */
	INSERT INTO servicios_sociales
	(periodo_id, organizacion_id, proyecto_id, alumno_matricula, folio)
	SELECT p1.periodo_id, o.organizacion_id, p2.proyecto_id, a.alumno_matricula, s.folio
	FROM servicios_sociales_siass s, periodos p1, proyectos p2, alumnos a, organizaciones o
	WHERE s.alumno_matricula = a.alumno_matricula 
	AND s.proyecto_nombre = p2.proyecto_nombre 
	AND s.organizacion_nombre = o.organizacion_nombre
	AND p1.periodo_activo = 0; 
END