SELECT cliente.id as cedula,CONCAT(primer_nombre,' ',primer_apellido) AS Nombre, dias_mora, CASE WHEN dias_mora <=20 THEN 'Riesgo Bajo'
WHEN dias_mora BETWEEN 21 AND 35 THEN 'Riesgo medio' WHEN dias_mora>35 THEN 'Riesgo Alto' 
END as riesgo , ciudad.nombre as ciudad FROM cliente JOIN ciudad ON cliente.id_ciudad = ciudad.id ORDER BY dias_mora ASC


SELECT persona.cc,persona.nombre, institucion, MAX(fecha) fecha 
FROM estudios JOIN persona ON persona.CC= estudios.FkPersona GROUP BY persona.CC
