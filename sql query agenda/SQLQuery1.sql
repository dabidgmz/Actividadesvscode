-- ola --
/* gestion ala base de datos modo agenda */
--1. mostras datos de la agenda --
select * from agenda
--2. mostrar nombres y pasatiempos--
select nombre,pasatiempos from agenda
--3 mostrar el telfono de victoria--
select telefono from agenda where nombre = 'victoria'
-- 4 mostrar a los alumnos  que les gusta jugar --
select nombre,pasatiempos from agenda where pasatiempos like'jugar%'
-- 5 mostras las mujeres del grupo --
select nombre,sexo from agenda where sexo = 'f' 
--6 cuantos hombre hay --
select count (*)as 'cantidad de hombres en el grupo 'from agenda where sexo='m'
--7  mostrar cantidad ded numeros telefonicos ---
select count(telefono)as 'cantidad de numeros telefonicos'from agenda
--8 mostrar alumnos del año 2021--
select nombre from agenda where matrucula like '21'
--8 mostrar alumnos de matricula 00--
select nombre from agenda where matrucula like '%00%'