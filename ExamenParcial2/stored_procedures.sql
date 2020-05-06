CREATE DEFINER=`dawbdorg_1207490`@`%.%.%.%` PROCEDURE `dawbdorg_A01207490`.`consultar_incidentes`()
BEGIN
    SELECT incidente_fecha, l.lugar_nombre, ti.tipo_incidente_nombre 
    FROM incidentes i, lugares l, tipos_incidente ti 
    WHERE i.lugar_id = l.lugar_id 
    AND i.tipo_incidente_id = ti.tipo_incidente_id
    ORDER BY incidente_fecha DESC;
END

CREATE DEFINER=`dawbdorg_1207490`@`%.%.%.%` PROCEDURE `consultar_lugares`()
BEGIN
    SELECT *
    FROM lugares; 
END

CREATE DEFINER=`dawbdorg_1207490`@`%.%.%.%` PROCEDURE `consultar_tipos_incidente`()
BEGIN
    SELECT *
    FROM tipos_incidente; 
END

CREATE DEFINER=`dawbdorg_1207490`@`%.%.%.%` PROCEDURE `insertar_incidente`(lugar_id int, tipo_incidente int)
BEGIN
    INSERT INTO incidentes values(NOW(), lugar_id, tipo_incidente);
END