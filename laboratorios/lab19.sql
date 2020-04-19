/*
 *  La suma de las cantidades e importe total de todas las entregas realizadas durante el 97.
 */
SELECT YEAR(e.Fecha), SUM(e.Cantidad) suma_cantidad, SUM(e.Cantidad * m.Costo) importe_total
FROM Entregan e, Materiales m 
WHERE e.Clave = m.Clave 
AND YEAR(e.Fecha) = 1997
GROUP BY YEAR(e.Fecha)
/*
 * Para cada proveedor, obtener la razón social del proveedor, número de entregas e importe total de las entregas realizadas. 
 */
SELECT p.RazonSocial, COUNT(*) numero_entregas, SUM(e.Cantidad * m.Costo) importe_total
FROM Proveedores p, Entregan e, Materiales m 
WHERE p.RFC = e.RFC 
AND e.Clave = m.Clave 
GROUP BY p.RazonSocial
/*
 * Por cada material obtener la clave y descripción del material, la cantidad total entregada, la mínima cantidad entregada, la máxima cantidad entregada, el importe total de las entregas de aquellos materiales en los que la cantidad promedio entregada sea mayor a 400.
 */
SELECT m.Clave, m.Descripcion, SUM(e.Cantidad) cantidad_total, MIN(e.Cantidad) cantidad_minima, MAX(e.Cantidad) cantidad_maxima, SUM(e.Cantidad * m.Costo) importe_total
FROM Materiales m, Entregan e
WHERE m.Clave = e.Clave 
GROUP BY m.Clave, m.Descripcion 
HAVING AVG(e.Cantidad) > 400
/*
 * Para cada proveedor, indicar su razón social y mostrar la cantidad promedio de cada material entregado, detallando la clave y descripción del material, excluyendo aquellos proveedores para los que la cantidad promedio sea menor a 500.
 */
SELECT p.RazonSocial, m.Clave, m.Descripcion, AVG(e.Cantidad) cantidad_promedio
FROM Proveedores p, Entregan e, Materiales m 
WHERE p.RFC = e.RFC 
AND e.Clave = m.Clave 
GROUP BY p.RazonSocial, m.Clave, m.Descripcion
HAVING AVG(e.Cantidad) > 500
/*
 * Mostrar en una solo consulta los mismos datos que en la consulta anterior pero para dos grupos de proveedores: aquellos para los que la cantidad promedio entregada es menor a 370 y aquellos para los que la cantidad promedio entregada sea mayor a 450.
 */
SELECT p.RazonSocial, m.Clave, m.Descripcion, AVG(e.Cantidad) cantidad_promedio
FROM Proveedores p, Entregan e, Materiales m 
WHERE p.RFC = e.RFC 
AND e.Clave = m.Clave 
GROUP BY p.RazonSocial, m.Clave, m.Descripcion
HAVING AVG(e.Cantidad) < 370
OR AVG(e.Cantidad) > 450
/*
 * Insertar 5 nuevos materiales.
 */
INSERT INTO Materiales 
VALUES (1440, 'Cal', 80);
INSERT INTO Materiales 
VALUES (1450, 'ARMEX', 200);
INSERT INTO Materiales 
VALUES (1460, 'Yeso', 100);
INSERT INTO Materiales 
VALUES (1470, 'Polín', 50);
INSERT INTO Materiales 
VALUES (1480, 'Pasto sintético', 320);

/*
 * Clave y descripción de los materiales que nunca han sido entregados.
 */
SELECT Clave, Descripcion 
FROM Materiales m 
WHERE Clave NOT IN
(
SELECT DISTINCT e.clave
FROM Entregan e
)
/*
 * Razón social de los proveedores que han realizado entregas tanto al proyecto 'Vamos México' como al proyecto 'Querétaro Limpio'.
 */
SELECT DISTINCT p.RazonSocial
FROM Proveedores p, Entregan e, Proyectos p2
WHERE p.RFC = e.RFC 
AND p2.Numero = e.Numero 
AND p2.Denominacion IN ('Vamos México', 'Queretaro Limpio')
/*
 * Descripción de los materiales que nunca han sido entregados al proyecto 'CIT Yucatán'.
 */
SELECT m.Descripcion
FROM Materiales m
WHERE m.Clave NOT IN 
(
SELECT DISTINCT m.Clave 
FROM Materiales m, Entregan e, Proyectos p2
WHERE e.Clave = m.Clave 
AND p2.Numero = e.Numero 
AND p2.Denominacion = 'CIT Yucatan'
)
/*
 * Razón social y promedio de cantidad entregada de los proveedores cuyo promedio de cantidad entregada es mayor al promedio de la cantidad entregada por el proveedor con el RFC 'VAGO780901'.
 */
SELECT p.RazonSocial, AVG(e.Cantidad) cantidad_promedio
FROM Proveedores p, Entregan e
WHERE p.RFC = e.RFC 
GROUP BY p.RazonSocial
HAVING AVG(e.Cantidad) >
(
SELECT AVG(e.Cantidad)
FROM Entregan e
WHERE e.RFC = 'VAGO780901'
)
/*
 * RFC, razón social de los proveedores que participaron en el proyecto 'Infonavit Durango' y cuyas cantidades totales entregadas en el 2000 fueron mayores a las cantidades totales entregadas en el 2001.
 */
SELECT p.RFC, p.RazonSocial
FROM Proveedores p, Entregan e, Proyectos p2
WHERE p.RFC = e.RFC 
AND p2.Numero = e.Numero 
AND p2.Denominacion = 'Infonavit Durango'
AND YEAR(e.Fecha) = 2000
GROUP BY p.RFC, p.RazonSocial
HAVING SUM(e.Cantidad) > 
(
SELECT SUM(e.Cantidad)
FROM Proveedores p, Entregan e, Proyectos p2
WHERE p.RFC = e.RFC 
AND p2.Numero = e.Numero 
AND p2.Denominacion = 'Infonavit Durango'
AND YEAR(e.Fecha) = 2001
)

