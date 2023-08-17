
-- mostrar los grupos en los que ha sido incrito angel eduardo beltran--
Select Carreras.nombre as 'Carrera',Carreras.area,CONCAT(grupos.grado,'',grupos.seccion) as 'Grado/Seccion'
from  Carreras,grupos,alumno_grupo,alumnos
where Carreras.clave=grupos.carrera
and alumnos.matricula=alumno_grupo.alumno
and grupos.cve_grupos=alumno_grupo.grupo
and alumno_grupo.alumno='22170082'
and alumnos.nombre='Angel Eduardo'
group by Carreras.nombre,Carreras.area,grupos.grado,grupos.seccion
--- hacer 3 consultas --
--mostrar Cantidad  De Alumnos  Por Periodo--
select concat (periodo.periodo,'',periodo.año) as cuatrimestre , count(grupos.cve_grupos) as 'alumnos incritos'
from periodo,alumno_grupo,grupos where grupos.cve_grupos=alumno_grupo.grupo and periodo.clave=grupos.periodo
group by periodo.periodo ,periodo.año
--Mostrar Alumnos Inscritos Por Grupo En El Peridod M-A 2022--
select alumnos.matricula as matricula , concat(alumnos.nombre,'',alumnos.apellidos) as alumno
from alumno_grupo,grupos,Carreras,alumnos,periodo
where alumno_grupo.grupo=grupos.cve_grupos 
and grupos.carrera=Carreras.clave 
and alumnos.matricula=alumno_grupo.alumno and grupos.periodo=periodo.clave
and grupos.grado=2 and grupos.seccion='A'
and Carreras.area='DSM' and periodo.periodo='E-A' and periodo.año=2023
-- mostra cantidad de alumnos incritos por area seccion a 6gdo auto --
select alumnos.matricula AS matricula, CONCAT (alumnos.nombre,' ',alumnos.apellidos) as Alumno
from alumno_grupo, grupos,Carreras, alumnos
where alumno_grupo.grupo=GRUPOS.cve_grupos 
and grupos.carrera=Carreras.clave and alumnos.matricula=alumno_grupo.alumno
and GRUPOS.grado=6 and GRUPOS.seccion='A' and CARRERAS.area='AUTO'
