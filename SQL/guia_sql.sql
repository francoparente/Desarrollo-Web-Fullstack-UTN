-- 1. Listar los nombres de los usuarios.
SELECT nombre AS Nombre
FROM usuario;

-- 2. Calcular el saldo máximo de los usuarios que tienen más de 30 años. Investigar sobre la utilización de la función MAX().
SELECT MAX(saldo) as `Maximo saldo de los mayores de 30 años`
FROM usuario
WHERE (DATEDIFF(NOW(),fechaNacimiento)) > 365*30;

-- 3. Listar nombre y teléfono de los usuarios con teléfono NOKIA, BLACKBERRY o SONY. Investigar sobre la utilización de la función IN().
SELECT 	nombre as Nombre,
		telefono as Teléfono
FROM usuario
WHERE marca IN('NOKIA', 'BLACKBERRY', 'SONY');

-- 4. Contar los usuarios sin saldo o inactivos.
SELECT COUNT(usuario) as `Cantidad de usuarios sin saldo o inactivos`
FROM usuario
WHERE saldo = 0
OR activo = 0;

-- 5. Listar los números de teléfono con saldo menor o igual a 300.
SELECT telefono as `Telefonos con saldo menor o igual a 300`
FROM usuario
WHERE saldo <= 300;

-- 6. Calcular la suma de los saldos de los usuarios de la compañía telefónica NEXTEL. Investigar sobre la utilización de la función SUM().
SELECT SUM(saldo)
FROM usuario
WHERE compañia = "NEXTEL";

-- 7. Contar el número de usuarios por compañía telefónica. Investigar sobre la utilización de la función COUNT() y GROUPBY().
SELECT compañia,
COUNT(usuario) as Usuarios
FROM usuario
GROUP BY compañia;

-- 8. Contar el número de usuarios por nivel.
SELECT nivel,
COUNT(usuario) as Usuarios
FROM usuario
GROUP BY nivel;

-- 9. Listar los usuarios con nivel 2.
SELECT nombre
FROM usuario
WHERE nivel = 2;

-- 10. Mostrar el email de los usuarios que usan gmail. Investigar sobre la utilización de la función LIKE().
SELECT email
FROM usuario
WHERE email like '%gmail.com%';

-- 11. Listar nombre y teléfono de los usuarios con teléfono LG, SAMSUNG o MOTOROLA.
SELECT nombre, telefono
FROM usuario
WHERE marca in('LG', 'SAMSUNG', 'MOTOROLA')