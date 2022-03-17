--Unicamente se debe de cambiar la ruta, no se necesitan cambios en constraints
delete from _evaluacion_instructor_curso where id > 0;
delete from profesor_curso where id > 0;
delete from profesores_categorias where id > 0;
delete from _evaluacion_final_curso where id > 0;
delete from participante_curso where id > 0;
delete from profesors where id > 0;
copy profesors(id,nombres,apellido_paterno,apellido_materno,rfc,numero_trabajador,fecha_nacimiento,telefono,grado,abreviatura_grado,email,genero,baja,semblanza_corta,facebook,unam,procedencia,facultad_id) from 'E:\2021-2i\Profesores.csv' delimiter '|' csv;

--Unicamente se debe de cambiar la ruta, no se necesitan cambios en constraints
delete from cursos where id > 0;
delete from salons where id > 0;
copy salons(id,sede,capacidad) from 'E:\2021-2i\Sedes.csv' delimiter '#' csv;


--El constraint de Institución debe de pasar de Not Null a Null, igual con fecha_disenio, igual con tipo, igual con duración curso y cambiar la ruta
delete from catalogo_cursos where id > 0;
copy catalogo_cursos(id,clave_curso,coordinacion_id,nombre_curso,tipo,antecedentes,fecha_disenio,objetivo,contenido,duracion_curso,dirigido) from 'E:\2021-2i\CatalogoCursos.csv' delimiter '|' csv;

--Cambio de las secuencias para poder agregar nuevos datos
alter sequence catalogo_cursos_id_seq restart with 748;
alter sequence salons_id_seq restart with 59;
alter sequence profesors_id_seq restart with 5396;