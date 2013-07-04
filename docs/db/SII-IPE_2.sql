------------------------------
-- pgDesigner 1.2.17
--
-- Project    : SII-IPE
-- Date       : 04/06/2013 04:38:16.023
-- Description: Sistema integral de informacion del instituto Practico Ebenezer.
------------------------------


-- Start Tabla's declaration
CREATE TABLE "libro" (
"id" serial NOT NULL,
"id_decimal" int NOT NULL,
"titulo" character varying(512) NOT NULL,
"nombreautor" character varying(128) NOT NULL,
"apaterno_autor" character varying(64),
"amaterno_autor" character varying(64),
"ano_publicacion" character varying(4),
"editorial" character varying(128),
"tomo" character varying(2),
"isbn" character varying(32),
"tema_primario" character varying(64),
"tema_secundario" character varying(64),
"tema_terciario" character varying(64),
"herejia" bool NOT NULL DEFAULT false,
"cantidad" int,
"foto" character varying(255),
"fot" boolean DEFAULT false,
"numero_dewey" character varying(32) NOT NULL,
"actualizado" bool NOT NULL DEFAULT false,
"observaciones" character varying(512)
) WITHOUT OIDS;
ALTER TABLE "libro" ADD CONSTRAINT "table1_pk" PRIMARY KEY("id");
COMMENT ON TABLE "libro" IS 'Catálogo de libros de la Biblioteca del Instituto Practico Ebenezer.';
COMMENT ON COLUMN "libro"."id" IS 'Identificador de la obra';
COMMENT ON COLUMN "libro"."id_decimal" IS 'Numero Dewey 000.000-999.0';
COMMENT ON COLUMN "libro"."titulo" IS 'Titulo de la obra.';
COMMENT ON COLUMN "libro"."nombreautor" IS 'Nombre del autor de la obra.';
COMMENT ON COLUMN "libro"."apaterno_autor" IS 'Apellido paterno del autor de la Obra.';
COMMENT ON COLUMN "libro"."amaterno_autor" IS 'Apellido materno del autor.';
COMMENT ON COLUMN "libro"."ano_publicacion" IS 'Ano que se publico el libro.';
COMMENT ON COLUMN "libro"."editorial" IS 'Editorial que saco el libro.';
COMMENT ON COLUMN "libro"."tomo" IS 'Numero de tomo, digito 1-99';
COMMENT ON COLUMN "libro"."isbn" IS 'Numero ISBN de la obra.';
COMMENT ON COLUMN "libro"."tema_primario" IS 'Tema de la obra';
COMMENT ON COLUMN "libro"."tema_secundario" IS 'Tema secuandario de la obra';
COMMENT ON COLUMN "libro"."tema_terciario" IS 'Tema terciario de la obra';
COMMENT ON COLUMN "libro"."cantidad" IS 'Cantidad de ejemplares en la Bibliteca del IPE.';
COMMENT ON COLUMN "libro"."foto" IS 'Url de la foto del libro';
COMMENT ON COLUMN "libro"."numero_dewey" IS 'Numero Dewey generado "automaticamente" para cada obra.';
COMMENT ON COLUMN "libro"."actualizado" IS 'Si esta o no actualizado.';
COMMENT ON COLUMN "libro"."observaciones" IS 'Observaciones del libro';

CREATE TABLE "entero" (
"id" serial NOT NULL,
"numero" int NOT NULL,
"nombre" character varying(128) NOT NULL,
"descripcion" character varying(512)
) WITHOUT OIDS;
ALTER TABLE "entero" ADD CONSTRAINT "entero_pk" PRIMARY KEY("id");
COMMENT ON TABLE "entero" IS 'Numeros enteros dewey';
COMMENT ON COLUMN "entero"."id" IS 'Identificador de la Categoria';
COMMENT ON COLUMN "entero"."numero" IS 'Numero Dewey de la clasificacion.';
COMMENT ON COLUMN "entero"."nombre" IS 'Nombre para la clasificacion';
COMMENT ON COLUMN "entero"."descripcion" IS 'Descripcion del tema';

CREATE TABLE "decimal" (
"id" serial NOT NULL,
"id_entero" int NOT NULL,
"numero" int NOT NULL,
"nombre" character varying(128) NOT NULL,
"descripcion" character varying(512)
) WITHOUT OIDS;
ALTER TABLE "decimal" ADD CONSTRAINT "decimal_pk" PRIMARY KEY("id");
COMMENT ON TABLE "decimal" IS 'Numeros decimales del Sistema Dewey';
COMMENT ON COLUMN "decimal"."id" IS 'Identificador de la Categoria';
COMMENT ON COLUMN "decimal"."id_entero" IS 'Id foraneo de la tabla entero';
COMMENT ON COLUMN "decimal"."numero" IS 'Numero Dewey de la clasificacion.';
COMMENT ON COLUMN "decimal"."nombre" IS 'Nombre para la clasificacion';
COMMENT ON COLUMN "decimal"."descripcion" IS 'Decripcion del decimal';

CREATE TABLE "alumno" (
"id" serial NOT NULL,
"nombre" character varying(64) NOT NULL,
"a_paterno" character varying(64) NOT NULL,
"a_materno" character varying(64),
"sexo" character varying(9) NOT NULL CHECK (sexo in('femenino','masculino')),
"direccion" character varying(64) NOT NULL,
"colonia" character varying(64) NOT NULL,
"ciudad" character varying(64) NOT NULL,
"estado" character varying(64) NOT NULL,
"cp" character varying(5),
"pais" character varying(64),
"telefono" character varying(12) NOT NULL DEFAULT NULL,
"celular" character varying(12) DEFAULT NULL,
"e_mail" character varying(128) NOT NULL DEFAULT NULL,
"fecha_nacimiento" date NOT NULL,
"estado_civil" character varying(32) NOT NULL,
"padres_nombres" character varying(256),
"padres_direccion" character varying(64),
"padres_colonia" character varying(64),
"padres_ciudad" character varying(64),
"padres_estado" character varying(64),
"padres_cp" character varying(5),
"padres_pais" character varying(64),
"padres_telefono" character varying(12),
"padres_celular" character varying(12),
"padres_email" character varying(128),
"pastor_nombre" character varying(128),
"pastor_direccion" character varying(64),
"pastor_colonia" character varying(64),
"pastor_ciudad" character varying(64),
"pastor_estado" character varying(64),
"pastor_cp" character varying(5),
"pastor_pais" character varying(64),
"pastor_telefono" character varying(12),
"pastor_celular" character varying(12),
"pastor_email" character varying(128),
"iglesia_nombre" character varying(128),
"iglesia_direccion" character varying(128),
"iglesia_colonia" character varying(64),
"iglesia_ciudad" character varying(64),
"iglesia_estado" character varying(64),
"iglesia_cp" character varying(5),
"iglesia_pais" character varying(64),
"iglesia_telefono" character varying(12),
"iglesia_email" character varying(128),
"iglesia_web" character varying(128),
"emergencia_nombre" character varying(128),
"emergencia_direccion" character varying(64),
"emergencia_colonia" character varying(64),
"emergencia_ciudad" character varying(64),
"emergencia_estado" character varying(64),
"emergencia_telefono" character varying(12),
"emergencia_celular" character varying(12),
"fecha_conversion" date NOT NULL,
"fecha_bautismo" date NOT NULL,
"fecha_llamamiento" date NOT NULL,
"testimonio_salvacion" text NOT NULL,
"testimonio_llamado" text NOT NULL,
"actividades_iglesia" text NOT NULL,
"primaria_nombre" character varying(64),
"primaria_ciudad" character varying(64),
"primaria_final" date,
"secundaria_nombre" character varying(64),
"secundaria_ciudad" character varying(64),
"secundaria_final" date,
"prepa_nombre" character varying(64),
"prepa_ciudad" character varying(64),
"prepa_final" date,
"otra_nombre" character varying(64),
"otra_ciudad" character varying(64),
"otra_fecha" date,
"insti_nombre" character varying(64),
"insti_ciudad" character varying(64),
"insti_fecha" character varying(64),
"drogas" boolean NOT NULL,
"alcohol" boolean NOT NULL,
"medicina_especial" boolean NOT NULL,
"medicamento_actual" boolean NOT NULL,
"situacion_medica" text NOT NULL,
"trabajo_secular" text,
"peticion_oracion" text,
"numero_control" character varying(10) DEFAULT NULL,
"inscrito" boolean NOT NULL DEFAULT false,
"foto" character varying(256),
"recomendacion_pastor" boolean,
"preparatoria_pastor" boolean,
"carta_recomedacion_hermano" boolean,
"certificado_medico" boolean,
"acta_nacimiento" boolean,
"fotografias" boolean,
"acta_matrimonio" boolean
) WITHOUT OIDS;
ALTER TABLE "alumno" ADD CONSTRAINT "alumno_pk" PRIMARY KEY("id");
COMMENT ON TABLE "alumno" IS 'Catálogo de alumnos.';
COMMENT ON COLUMN "alumno"."id" IS 'Clave del alumno';
COMMENT ON COLUMN "alumno"."nombre" IS 'Nombre(s) de alumno';
COMMENT ON COLUMN "alumno"."a_paterno" IS 'Apellido paterno del alumno.';
COMMENT ON COLUMN "alumno"."a_materno" IS 'Apellido materno del alumno.';
COMMENT ON COLUMN "alumno"."sexo" IS 'Sexo';
COMMENT ON COLUMN "alumno"."direccion" IS 'Domicilio del alumno.';
COMMENT ON COLUMN "alumno"."colonia" IS 'Colonia del alumno.';
COMMENT ON COLUMN "alumno"."ciudad" IS 'Ciudad del alumno.';
COMMENT ON COLUMN "alumno"."estado" IS 'Estado de residencia del alumno.';
COMMENT ON COLUMN "alumno"."cp" IS 'Codigo Postal.';
COMMENT ON COLUMN "alumno"."pais" IS 'Pais de procedencia';
COMMENT ON COLUMN "alumno"."celular" IS 'Telefono movil del alumno';
COMMENT ON COLUMN "alumno"."e_mail" IS 'Correo electronico.';
COMMENT ON COLUMN "alumno"."fecha_nacimiento" IS 'Fecha de nacimiento del alumno';
COMMENT ON COLUMN "alumno"."estado_civil" IS 'Estado civil del alumo: (Soltero(a), Casado(a), Divorciado(a), Viudo(a)).';
COMMENT ON COLUMN "alumno"."padres_nombres" IS 'Nombre de los padres del alumno.';
COMMENT ON COLUMN "alumno"."padres_direccion" IS 'Direccion de los padres del alumno.';
COMMENT ON COLUMN "alumno"."padres_colonia" IS 'Colonia donde viven sus padres del alumno.';
COMMENT ON COLUMN "alumno"."padres_ciudad" IS 'Ciudad donde viven sus padres.';
COMMENT ON COLUMN "alumno"."padres_estado" IS 'Estado donde viven los padres.';
COMMENT ON COLUMN "alumno"."padres_cp" IS 'Codigo Postal.';
COMMENT ON COLUMN "alumno"."padres_pais" IS 'Pais de los papas.';
COMMENT ON COLUMN "alumno"."padres_telefono" IS 'Telefono de los padres.';
COMMENT ON COLUMN "alumno"."padres_celular" IS 'Numero de telefono celular de los padres del alumno.';
COMMENT ON COLUMN "alumno"."padres_email" IS 'Correo electronico de los padres del alumno.';
COMMENT ON COLUMN "alumno"."pastor_nombre" IS 'Nombre del pastor de alumno.';
COMMENT ON COLUMN "alumno"."pastor_direccion" IS 'Direccion del pastor de la iglesia del alumno.';
COMMENT ON COLUMN "alumno"."pastor_colonia" IS 'Colonia donde vive el pastor de la iglesia del alumno.';
COMMENT ON COLUMN "alumno"."pastor_ciudad" IS 'Ciudad donde vive el pastor de la iglesia del alumno.';
COMMENT ON COLUMN "alumno"."pastor_estado" IS 'Ciudad donde vive el pastor de la iglesia del alumno.';
COMMENT ON COLUMN "alumno"."pastor_cp" IS 'Codigo postal del pastor del alumno.';
COMMENT ON COLUMN "alumno"."pastor_pais" IS 'Pais del pastor del alumno.';
COMMENT ON COLUMN "alumno"."pastor_telefono" IS 'Numero de telefono del pastor del alumno.';
COMMENT ON COLUMN "alumno"."pastor_celular" IS 'Numero de telefono celular del pastor del alumno.';
COMMENT ON COLUMN "alumno"."pastor_email" IS 'Correo electronico del pastor.';
COMMENT ON COLUMN "alumno"."iglesia_nombre" IS 'Iglesia de procedencia del alumno.';
COMMENT ON COLUMN "alumno"."iglesia_direccion" IS 'Direccion de la Iglesia de procedencia.';
COMMENT ON COLUMN "alumno"."iglesia_colonia" IS 'Colonia donde se encuentra la iglesia de procedencia del alumno.';
COMMENT ON COLUMN "alumno"."iglesia_ciudad" IS 'Ciudad de la Iglesia.';
COMMENT ON COLUMN "alumno"."iglesia_estado" IS 'Estado donde se encuenta la Iglesia de prodecencia del alumno.';
COMMENT ON COLUMN "alumno"."iglesia_cp" IS 'Codigo postal de la Iglesia del alumno.';
COMMENT ON COLUMN "alumno"."iglesia_telefono" IS 'Telefono de la iglesia del alumno.';
COMMENT ON COLUMN "alumno"."iglesia_email" IS 'Correo electronico de la Iglesia de donde viene el alumno.';
COMMENT ON COLUMN "alumno"."iglesia_web" IS 'Pagina web de la iglesia.';
COMMENT ON COLUMN "alumno"."emergencia_nombre" IS 'Nombre de una persona a quien hablar en caso de emergencia.';
COMMENT ON COLUMN "alumno"."fecha_conversion" IS 'Fecha en que se convirtio el alumno.';
COMMENT ON COLUMN "alumno"."fecha_bautismo" IS 'Fecha en que el alumno se bautizo.';
COMMENT ON COLUMN "alumno"."fecha_llamamiento" IS 'Fecha en que el alumno dedico su vida de tiempo completo.';
COMMENT ON COLUMN "alumno"."testimonio_salvacion" IS 'Descripcion del testimonio de la salvacion y en base a que esta seguro de ser salvo.';
COMMENT ON COLUMN "alumno"."testimonio_llamado" IS 'Descripcion del testimonio de su llamamiento.';
COMMENT ON COLUMN "alumno"."actividades_iglesia" IS 'Descripcion de las actividades/ministerios que el alumno desarrolla en la Iglesia.';
COMMENT ON COLUMN "alumno"."primaria_nombre" IS 'Nombre de la primaria donde estudio.';
COMMENT ON COLUMN "alumno"."primaria_ciudad" IS 'Ciudad donde estudio la primaria.';
COMMENT ON COLUMN "alumno"."primaria_final" IS 'Fecha en que termino la primaria.';
COMMENT ON COLUMN "alumno"."secundaria_nombre" IS 'Nombre de la secuandaria donde estudio.';
COMMENT ON COLUMN "alumno"."secundaria_ciudad" IS 'Ciudad donde estudio la secundaria.';
COMMENT ON COLUMN "alumno"."secundaria_final" IS 'Fecha de graduacion dela secundaria.';
COMMENT ON COLUMN "alumno"."prepa_nombre" IS 'Nombre de la preparatoria donde estudio.';
COMMENT ON COLUMN "alumno"."prepa_ciudad" IS 'Cuidad donde estudio la preparatoria.';
COMMENT ON COLUMN "alumno"."prepa_final" IS 'Fecha de terminacion de la preparatoria.';
COMMENT ON COLUMN "alumno"."otra_nombre" IS 'Nombre de alguna otra institucion donde haya estudiado.';
COMMENT ON COLUMN "alumno"."otra_ciudad" IS 'Ciudad de alguna otra institucion donde haya estudiado.';
COMMENT ON COLUMN "alumno"."otra_fecha" IS 'Fecha de alguna otra institucion donde haya estudiado.';
COMMENT ON COLUMN "alumno"."insti_nombre" IS 'Nombre de algun otro instito biblico donde haya estudiado.';
COMMENT ON COLUMN "alumno"."insti_ciudad" IS 'Ciudad de algun otro instito biblico donde haya estudiado.';
COMMENT ON COLUMN "alumno"."insti_fecha" IS 'Fecha de algun otro instituto donde haya estudiado.';
COMMENT ON COLUMN "alumno"."drogas" IS 'Consume drogas? Si o no.';
COMMENT ON COLUMN "alumno"."alcohol" IS 'Toma alcohol, Si o no?';
COMMENT ON COLUMN "alumno"."medicina_especial" IS 'Estuvieron bajo tratamiento? Si o no?';
COMMENT ON COLUMN "alumno"."medicamento_actual" IS 'Toma algun medicamento actualmente? Si o no.';
COMMENT ON COLUMN "alumno"."situacion_medica" IS 'Describa los problemas medicos que ha tenido o tiene actualmente';
COMMENT ON COLUMN "alumno"."trabajo_secular" IS 'Experiencia en trabajo secular.';
COMMENT ON COLUMN "alumno"."peticion_oracion" IS 'Algun motivo de oración.';
COMMENT ON COLUMN "alumno"."numero_control" IS 'Número de control del alumno en el Instituto Practico Ebenezer.';
COMMENT ON COLUMN "alumno"."inscrito" IS 'Si el alumno esta inscrito o preinscrito.';
COMMENT ON COLUMN "alumno"."foto" IS 'url de la foto de alumno';
COMMENT ON COLUMN "alumno"."recomendacion_pastor" IS 'Revision de la carta de recomendacion de pastor.';
COMMENT ON COLUMN "alumno"."preparatoria_pastor" IS 'Comprobante de prepa.';
COMMENT ON COLUMN "alumno"."carta_recomedacion_hermano" IS 'Carta de recomendacion  de dos hermanos de la Iglesia.';
COMMENT ON COLUMN "alumno"."certificado_medico" IS 'Certificado medico';
COMMENT ON COLUMN "alumno"."acta_nacimiento" IS 'Acta de nacimiento del alumno.';
COMMENT ON COLUMN "alumno"."fotografias" IS 'Fotografias del alumno.';
COMMENT ON COLUMN "alumno"."acta_matrimonio" IS 'Acta de matrimonio si aplica.';

CREATE TABLE "profesor" (
"id" serial NOT NULL,
"rfc" character varying(15) NOT NULL,
"nombre" character varying(64) NOT NULL,
"a_paterno" character varying(64) NOT NULL,
"a_materno" character varying(64) NOT NULL,
"direccion" character varying(64) NOT NULL,
"colonia" character varying(64) NOT NULL,
"ciudad" character varying(64) NOT NULL,
"estado" character varying(64) NOT NULL,
"cp" character varying(5) NOT NULL,
"sexo" character varying(9) NOT NULL CHECK (sexo in('femenino', 'masculino')),
"telefono" character varying(12),
"celular" character varying(12),
"email" character varying(128) NOT NULL,
"foto" character varying(256),
"activo" bool NOT NULL DEFAULT true,
"observaciones" text
) WITHOUT OIDS;
ALTER TABLE "profesor" ADD CONSTRAINT "profesor_pk" PRIMARY KEY("id");
COMMENT ON TABLE "profesor" IS 'Catalogo de profesores.';
COMMENT ON COLUMN "profesor"."id" IS 'Identificador para cada profesor.';
COMMENT ON COLUMN "profesor"."rfc" IS 'RFC del profesor';
COMMENT ON COLUMN "profesor"."nombre" IS 'Nombre(s) del profesor.';
COMMENT ON COLUMN "profesor"."a_paterno" IS 'Apellido paterno del profesor.';
COMMENT ON COLUMN "profesor"."a_materno" IS 'Apellido materno del profesor.';
COMMENT ON COLUMN "profesor"."direccion" IS 'Direccion del profesor.';
COMMENT ON COLUMN "profesor"."colonia" IS 'Colonia del profesor';
COMMENT ON COLUMN "profesor"."ciudad" IS 'Ciudad donde vive el profesor.';
COMMENT ON COLUMN "profesor"."estado" IS 'Estado donde vive el profesor.';
COMMENT ON COLUMN "profesor"."cp" IS 'Codigo postal';
COMMENT ON COLUMN "profesor"."sexo" IS 'Genero del profesor.';
COMMENT ON COLUMN "profesor"."telefono" IS 'Numero de telefono del profesor';
COMMENT ON COLUMN "profesor"."celular" IS 'Numero de celular del profesor.';
COMMENT ON COLUMN "profesor"."email" IS 'Correo electronico del profesor.';
COMMENT ON COLUMN "profesor"."foto" IS 'Url de la foto del profesor.';
COMMENT ON COLUMN "profesor"."activo" IS 'Si el profesor aun trabaja para el IPE.';
COMMENT ON COLUMN "profesor"."observaciones" IS 'Anotaciones respecto al desempeño del profesor.';

CREATE TABLE "curso" (
"id" serial NOT NULL,
"id_materia" int NOT NULL,
"id_profesor" int NOT NULL,
"id_periodo" int NOT NULL,
"id_salon_lunes" int,
"lunes_hora_inicio" time,
"lunes_hora_final" time,
"id_salon_martes" int,
"martes_hora_inicio" time,
"martes_hora_final" time,
"id_salon_miercoles" int,
"miercoles_hora_inicio" time,
"miercoles_hora_final" time,
"id_salon_jueves" int,
"jueves_hora_inicio" time,
"jueves_hora_final" time,
"id_salon_viernes" int,
"viernes_hora_inicio" time,
"viernes_hora_final" time,
"anno" character varying(4) NOT NULL,
"estado" boolean NOT NULL DEFAULT true
) WITHOUT OIDS;
ALTER TABLE "curso" ADD CONSTRAINT "curso_pk" PRIMARY KEY("id");
COMMENT ON TABLE "curso" IS 'Catálogo de los cursos que se imparten por periodo.';
COMMENT ON COLUMN "curso"."id" IS 'Clave del curso.';
COMMENT ON COLUMN "curso"."id_profesor" IS 'Clave del profesor que imparte el curso.';
COMMENT ON COLUMN "curso"."id_periodo" IS 'Clave del periodo.';
COMMENT ON COLUMN "curso"."id_salon_lunes" IS 'Clave del salon del lunes.';
COMMENT ON COLUMN "curso"."lunes_hora_inicio" IS 'Hora de inicio del curso lunes.';
COMMENT ON COLUMN "curso"."lunes_hora_final" IS 'Hora de final del curso lunes.';
COMMENT ON COLUMN "curso"."id_salon_martes" IS 'Clave del salon del martes.';
COMMENT ON COLUMN "curso"."id_salon_miercoles" IS 'Clave del salon del miercoles';
COMMENT ON COLUMN "curso"."miercoles_hora_inicio" IS 'Hora de inicio de clases el miercoles.';
COMMENT ON COLUMN "curso"."miercoles_hora_final" IS 'Hora de final del miercoles.';
COMMENT ON COLUMN "curso"."id_salon_jueves" IS 'Clave del salon del jueves.';
COMMENT ON COLUMN "curso"."jueves_hora_inicio" IS 'Hora de inicio del jueves.';
COMMENT ON COLUMN "curso"."jueves_hora_final" IS 'Hora final jueves';
COMMENT ON COLUMN "curso"."id_salon_viernes" IS 'Clave del salon del viernes.';
COMMENT ON COLUMN "curso"."viernes_hora_inicio" IS 'Hora de inicio del viernes.';
COMMENT ON COLUMN "curso"."viernes_hora_final" IS 'Hora final del viernes.';
COMMENT ON COLUMN "curso"."anno" IS 'Año en que se imparte el curso';
COMMENT ON COLUMN "curso"."estado" IS 'Campo que indicara si el curso actual puede ser modificado por el profesor. Verdadero si es posible modificar.';

CREATE TABLE "lista" (
"id" serial NOT NULL,
"id_alumno" int NOT NULL,
"id_curso" int NOT NULL,
"fecha_inscripcion" date NOT NULL,
"primera_calificacion_examen" character varying(16),
"calificacion_parcial" character varying(16),
"segunda_calificacion_examen" character varying(16),
"calificacion_final" character varying(16),
"aprobado" bool NOT NULL DEFAULT false,
"observaciones" text,
"inasistencia" int,
"externo" bool DEFAULT false,
"recursando" bool DEFAULT false
) WITHOUT OIDS;
ALTER TABLE "lista" ADD CONSTRAINT "lista_pk" PRIMARY KEY("id");
COMMENT ON TABLE "lista" IS 'Alumnos inscritos en un curso.';
COMMENT ON COLUMN "lista"."id" IS 'Clave de la lista.';
COMMENT ON COLUMN "lista"."id_alumno" IS 'Clave del alumno';
COMMENT ON COLUMN "lista"."id_curso" IS 'Clave del curso en el que esta inscrito el alumno.';
COMMENT ON COLUMN "lista"."fecha_inscripcion" IS 'Fecha en que se inscribio al curso.';
COMMENT ON COLUMN "lista"."primera_calificacion_examen" IS 'Calificación primer parcial del alumno.';
COMMENT ON COLUMN "lista"."calificacion_parcial" IS 'Calificación parcial del alumno.';
COMMENT ON COLUMN "lista"."segunda_calificacion_examen" IS 'Calificación segunda del alumno.';
COMMENT ON COLUMN "lista"."aprobado" IS 'Aprobado o reprobado.';
COMMENT ON COLUMN "lista"."observaciones" IS 'Observaciones del alumno.';
COMMENT ON COLUMN "lista"."externo" IS 'El alumno es externo.
True = Verdadero 
False = Falso';
COMMENT ON COLUMN "lista"."recursando" IS 'Si el alumno esta recursando la materia.';

CREATE TABLE "book" (
"id" serial NOT NULL,
"id_decimal" int NOT NULL,
"title" character varying(512) NOT NULL,
"author_firstname" character varying(128) NOT NULL,
"author_lastname" character varying(64),
"year" character varying(4),
"publishing_house" character varying(128),
"isbn" character varying(32),
"volume" character varying(2),
"primary_subject" character varying(64),
"secondary_subject" character varying(64),
"tertiary_subject" character varying(64),
"heresy" bool NOT NULL DEFAULT false,
"quantity" int,
"picture" character varying(255),
"pic" boolean DEFAULT false,
"dewey_number" character varying(32) NOT NULL,
"actualizado" bool NOT NULL DEFAULT false,
"observations" character varying(512)
) WITHOUT OIDS;
ALTER TABLE "book" ADD CONSTRAINT "book_pk" PRIMARY KEY("id");
COMMENT ON TABLE "book" IS 'Catálogo de libros ingles de la Biblioteca del Instituto Practico Ebenezer.';
COMMENT ON COLUMN "book"."id" IS 'Identificador de la obra';
COMMENT ON COLUMN "book"."id_decimal" IS 'Numero Dewey 000.000-999.0';
COMMENT ON COLUMN "book"."title" IS 'Title of the book';
COMMENT ON COLUMN "book"."author_firstname" IS 'Name the author of the work.';
COMMENT ON COLUMN "book"."author_lastname" IS 'Lastname of the author';
COMMENT ON COLUMN "book"."year" IS 'Ano que se publico el libro.';
COMMENT ON COLUMN "book"."publishing_house" IS 'Editorial que saco el libro.';
COMMENT ON COLUMN "book"."isbn" IS 'Numero ISBN de la obra.';
COMMENT ON COLUMN "book"."volume" IS 'Volume of the book';
COMMENT ON COLUMN "book"."primary_subject" IS 'Tema de la obra';
COMMENT ON COLUMN "book"."secondary_subject" IS 'Tema secuandario de la obra';
COMMENT ON COLUMN "book"."tertiary_subject" IS 'Tema terciario de la obra';
COMMENT ON COLUMN "book"."quantity" IS 'Cantidad de ejemplares en la Bibliteca del IPE.';
COMMENT ON COLUMN "book"."picture" IS 'url de la foto del libro';
COMMENT ON COLUMN "book"."dewey_number" IS 'Numero Dewey generado "automaticamente" para cada obra.';

CREATE TABLE "decimalen" (
"id" serial NOT NULL,
"id_integer" int NOT NULL,
"number" int NOT NULL,
"name" character varying(128) NOT NULL,
"description" character varying(512)
) WITHOUT OIDS;
ALTER TABLE "decimalen" ADD CONSTRAINT "decimalen_pk" PRIMARY KEY("id");
COMMENT ON TABLE "decimalen" IS 'Numeros deciamles Dewey';
COMMENT ON COLUMN "decimalen"."id" IS 'Identificador de la Categoria';
COMMENT ON COLUMN "decimalen"."id_integer" IS 'Id foraneo del primer sumario';
COMMENT ON COLUMN "decimalen"."number" IS 'Numero Dewey de la clasificacion.';
COMMENT ON COLUMN "decimalen"."name" IS 'Nombre para la clasificacion';
COMMENT ON COLUMN "decimalen"."description" IS 'Decripcion del decimal';

CREATE TABLE "integer" (
"id" serial NOT NULL,
"number" int NOT NULL,
"name" character varying(128) NOT NULL,
"description" character varying(512)
) WITHOUT OIDS;
ALTER TABLE "integer" ADD CONSTRAINT "integer_pk" PRIMARY KEY("id");
COMMENT ON TABLE "integer" IS 'Numeros enteros Dewey';
COMMENT ON COLUMN "integer"."id" IS 'Identificador de la Categoria';
COMMENT ON COLUMN "integer"."number" IS 'Numero Dewey de la clasificacion.';
COMMENT ON COLUMN "integer"."name" IS 'Nombre para la clasificacion';
COMMENT ON COLUMN "integer"."description" IS 'Descripcion del tema';

CREATE TABLE "wk_book" (
"id" serial NOT NULL,
"id_decimal" int NOT NULL,
"title" character varying(512) NOT NULL,
"author_firstname" character varying(128) NOT NULL,
"author_lastname" character varying(64),
"year" character varying(4),
"publishing_house" character varying(128),
"isbn" character varying(32),
"volume" character varying(2),
"primary_subject" character varying(64),
"secondary_subject" character varying(64),
"tertiary_subject" character varying(64),
"heresy" bool NOT NULL DEFAULT false,
"quantity" int,
"picture" character varying(255),
"pic" boolean DEFAULT false,
"dewey_number" character varying(32) NOT NULL,
"actualizado" bool NOT NULL DEFAULT false,
"observations" character varying(512)
) WITHOUT OIDS;
ALTER TABLE "wk_book" ADD CONSTRAINT "wk_book_pk" PRIMARY KEY("id");
COMMENT ON TABLE "wk_book" IS 'Catálogo de libros ingles/español de la Biblioteca del Hno Daniel Wokaty';
COMMENT ON COLUMN "wk_book"."id" IS 'Identificador de la obra';
COMMENT ON COLUMN "wk_book"."id_decimal" IS 'Numero Dewey 000.000-999.0';
COMMENT ON COLUMN "wk_book"."title" IS 'Title of the book';
COMMENT ON COLUMN "wk_book"."author_firstname" IS 'Name the author of the work.';
COMMENT ON COLUMN "wk_book"."author_lastname" IS 'Lastname of the author';
COMMENT ON COLUMN "wk_book"."year" IS 'Ano que se publico el libro.';
COMMENT ON COLUMN "wk_book"."publishing_house" IS 'Editorial que saco el libro.';
COMMENT ON COLUMN "wk_book"."isbn" IS 'Numero ISBN de la obra.';
COMMENT ON COLUMN "wk_book"."volume" IS 'Volume of the book';
COMMENT ON COLUMN "wk_book"."primary_subject" IS 'Tema de la obra';
COMMENT ON COLUMN "wk_book"."secondary_subject" IS 'Tema secuandario de la obra';
COMMENT ON COLUMN "wk_book"."tertiary_subject" IS 'Tema terciario de la obra';
COMMENT ON COLUMN "wk_book"."quantity" IS 'Cantidad de ejemplares en la Bibliteca del IPE.';
COMMENT ON COLUMN "wk_book"."picture" IS 'Url de la foto del libro';
COMMENT ON COLUMN "wk_book"."dewey_number" IS 'Numero Dewey generado "automaticamente" para cada obra.';

CREATE TABLE "materia" (
"id" serial NOT NULL,
"nombre" character varying(64) NOT NULL,
"semestre" character varying(2) NOT NULL,
"clave" character varying(6),
"creditos" int NOT NULL DEFAULT 0,
"activo" boolean NOT NULL DEFAULT true
) WITHOUT OIDS;
ALTER TABLE "materia" ADD CONSTRAINT "materia_pk" PRIMARY KEY("id");
COMMENT ON TABLE "materia" IS 'Catalogo de materias que se imparten en el Instituto Practico Ebenezer.';
COMMENT ON COLUMN "materia"."id" IS 'Clave de la materia.';
COMMENT ON COLUMN "materia"."nombre" IS 'Nombre de la asignatura.';
COMMENT ON COLUMN "materia"."semestre" IS 'Semestre de la materia';
COMMENT ON COLUMN "materia"."clave" IS 'Clave corta de la materia.';
COMMENT ON COLUMN "materia"."creditos" IS 'Creditos por materia.';
COMMENT ON COLUMN "materia"."activo" IS 'Si la materia ese ofrece o no.';

CREATE TABLE "salon" (
"id" serial NOT NULL,
"salon" character varying(64) NOT NULL
) WITHOUT OIDS;
ALTER TABLE "salon" ADD CONSTRAINT "salon_pk" PRIMARY KEY("id");
COMMENT ON TABLE "salon" IS 'Salones que existen en el Instituto Practico Ebenezer.';
COMMENT ON COLUMN "salon"."id" IS 'Id del salon.';
COMMENT ON COLUMN "salon"."salon" IS 'Nombre del salon.';

CREATE TABLE "mes" (
"id" serial NOT NULL,
"nombre" character varying(32) NOT NULL
) WITHOUT OIDS;
ALTER TABLE "mes" ADD CONSTRAINT "mes_pk" PRIMARY KEY("id");
COMMENT ON TABLE "mes" IS 'Catalogos de los meses de anio.';
COMMENT ON COLUMN "mes"."nombre" IS 'Nombre del mes.';

CREATE TABLE "periodo" (
"id" serial NOT NULL,
"periodo" character varying(32) NOT NULL,
"inicio_periodo" int NOT NULL,
"final_periodo" int NOT NULL,
"nombre_corto" character varying(16)
) WITHOUT OIDS;
ALTER TABLE "periodo" ADD CONSTRAINT "periodo_pk" PRIMARY KEY("id");
COMMENT ON TABLE "periodo" IS 'Periodos cuando se imparten cursos.';
COMMENT ON COLUMN "periodo"."periodo" IS 'Nombre del periodo.';
COMMENT ON COLUMN "periodo"."inicio_periodo" IS 'Mes del Inicio del periodo.';
COMMENT ON COLUMN "periodo"."final_periodo" IS 'Mes de fin del periodo.';
COMMENT ON COLUMN "periodo"."nombre_corto" IS 'Nombre corto del periodo';

CREATE TABLE "producto_tienda" (
"id" serial NOT NULL,
"nombre" character varying(128),
"cantidad" int,
"precio" int,
"descripcion" character varying(512),
"sku" character varying(20)
) WITHOUT OIDS;
ALTER TABLE "producto_tienda" ADD CONSTRAINT "producto_tienda_pk" PRIMARY KEY("id");
COMMENT ON COLUMN "producto_tienda"."id" IS 'Id del producto';
COMMENT ON COLUMN "producto_tienda"."nombre" IS 'Nombre del producto';
COMMENT ON COLUMN "producto_tienda"."cantidad" IS 'Cantidad en stock';
COMMENT ON COLUMN "producto_tienda"."precio" IS 'Precio del producto';

CREATE TABLE "empleado_tienda" (
"id" serial NOT NULL,
"nombre" character varying(64) NOT NULL,
"a_paterno" character varying(32),
"a_materno" character varying(32),
"telefono" character varying(10)
) WITHOUT OIDS;
ALTER TABLE "empleado_tienda" ADD CONSTRAINT "empleado_tienda_pk" PRIMARY KEY("id");
COMMENT ON COLUMN "empleado_tienda"."id" IS 'Id del empleado';
COMMENT ON COLUMN "empleado_tienda"."nombre" IS 'Nombre del empleado';
COMMENT ON COLUMN "empleado_tienda"."a_paterno" IS 'Apellido materno de empleado.';
COMMENT ON COLUMN "empleado_tienda"."a_materno" IS 'Apellido materno del empleado.';
COMMENT ON COLUMN "empleado_tienda"."telefono" IS 'Telefono de empleado.';

CREATE TABLE "venta_tienda" (
"id" serial NOT NULL,
"id_empleado" int,
"id_producto" int NOT NULL,
"fecha_venta" date NOT NULL,
"cantidad_producto" character varying(4) NOT NULL,
"monto_venta" character varying(10)
) WITHOUT OIDS;
ALTER TABLE "venta_tienda" ADD CONSTRAINT "venta_tienda_pk" PRIMARY KEY("id");
COMMENT ON COLUMN "venta_tienda"."id" IS 'Serial de la venta.';
COMMENT ON COLUMN "venta_tienda"."id_empleado" IS 'Id del empleado que hace la venta.';
COMMENT ON COLUMN "venta_tienda"."id_producto" IS 'Id del producto que se vende.';
COMMENT ON COLUMN "venta_tienda"."fecha_venta" IS 'Fecha de la venta.';
COMMENT ON COLUMN "venta_tienda"."cantidad_producto" IS 'Cantidad de producto vendido.';

CREATE TABLE "compra_tienda" (
"id" serial NOT NULL,
"id_producto" int NOT NULL,
"id_empleado" int NOT NULL,
"fecha_compra" date NOT NULL,
"cantidad" int NOT NULL
) WITHOUT OIDS;
ALTER TABLE "compra_tienda" ADD CONSTRAINT "compra_tienda_pk" PRIMARY KEY("id");
COMMENT ON COLUMN "compra_tienda"."id" IS 'Id de las compras.';
COMMENT ON COLUMN "compra_tienda"."id_producto" IS 'Id del producto que se abastecera';
COMMENT ON COLUMN "compra_tienda"."id_empleado" IS 'id del empleado que hace la compra.';
COMMENT ON COLUMN "compra_tienda"."fecha_compra" IS 'Fecha de compra del producto';
COMMENT ON COLUMN "compra_tienda"."cantidad" IS 'Cantidad de producto que se compro.';

CREATE TABLE "log" (
"id" serial NOT NULL,
"fecha" timestamp NOT NULL,
"tipo_usuario" varchar(32) NOT NULL,
"tipo_log" varchar(32) NOT NULL,
"usuario" varchar(128),
"mensaje" varchar(1024),
"nombre_tabla" varchar(32),
"serialized" text
) WITHOUT OIDS;
ALTER TABLE "log" ADD CONSTRAINT "log_pk" PRIMARY KEY("id");
COMMENT ON TABLE "log" IS 'Log del Sistema';
COMMENT ON COLUMN "log"."id" IS 'Id del log';
COMMENT ON COLUMN "log"."fecha" IS 'Fecha de la modificacion.';
COMMENT ON COLUMN "log"."tipo_usuario" IS 'Tipo de usuario que hace la modificacion.';
COMMENT ON COLUMN "log"."tipo_log" IS 'Tipo de Log';
COMMENT ON COLUMN "log"."usuario" IS 'Nombre del usuario.';
COMMENT ON COLUMN "log"."mensaje" IS 'Algun mensaje del sistema.';
COMMENT ON COLUMN "log"."nombre_tabla" IS 'Nombre de la tabla.';

CREATE TABLE "folio_control" (
"id" serial NOT NULL,
"anno" varchar(4),
"consecutivo" int
) WITHOUT OIDS;
ALTER TABLE "folio_control" ADD CONSTRAINT "folio_control_pk" PRIMARY KEY("id");
COMMENT ON TABLE "folio_control" IS 'Folio de control para los alumnos de Instituto Práctico Ebenezer.';
COMMENT ON COLUMN "folio_control"."anno" IS 'Año del folio';

-- End Tabla's declaration

-- Start Relación's declaration
ALTER TABLE "libro" ADD CONSTRAINT "libro_fkey1" FOREIGN KEY ("id_decimal") REFERENCES "decimal"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "decimal" ADD CONSTRAINT "decimal_fkey1" FOREIGN KEY ("id_entero") REFERENCES "entero"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "decimalen" ADD CONSTRAINT "decimalen_fkey1" FOREIGN KEY ("id_integer") REFERENCES "integer"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "book" ADD CONSTRAINT "book_fkey1" FOREIGN KEY ("id_decimal") REFERENCES "decimalen"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "wk_book" ADD CONSTRAINT "wk_book_fkey1" FOREIGN KEY ("id_decimal") REFERENCES "decimalen"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "periodo" ADD CONSTRAINT "periodo_fkey1" FOREIGN KEY ("inicio_periodo") REFERENCES "mes"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "periodo" ADD CONSTRAINT "periodo_fkey2" FOREIGN KEY ("final_periodo") REFERENCES "mes"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "curso" ADD CONSTRAINT "curso_fkey1" FOREIGN KEY ("id_profesor") REFERENCES "profesor"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "curso" ADD CONSTRAINT "curso_fkey2" FOREIGN KEY ("id_salon_lunes") REFERENCES "salon"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "curso" ADD CONSTRAINT "curso_fkey3" FOREIGN KEY ("id_materia") REFERENCES "materia"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "curso" ADD CONSTRAINT "curso_fkey4" FOREIGN KEY ("id_periodo") REFERENCES "periodo"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "lista" ADD CONSTRAINT "lista_fkey1" FOREIGN KEY ("id_alumno") REFERENCES "alumno"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "lista" ADD CONSTRAINT "lista_fkey2" FOREIGN KEY ("id_curso") REFERENCES "curso"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "venta_tienda" ADD CONSTRAINT "venta_tienda_fkey1" FOREIGN KEY ("id_producto") REFERENCES "producto_tienda"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "venta_tienda" ADD CONSTRAINT "venta_tienda_fkey2" FOREIGN KEY ("id_empleado") REFERENCES "empleado_tienda"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "compra_tienda" ADD CONSTRAINT "compras_fkey1" FOREIGN KEY ("id_producto") REFERENCES "producto_tienda"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "compra_tienda" ADD CONSTRAINT "compra_tienda_fkey2" FOREIGN KEY ("id_empleado") REFERENCES "empleado_tienda"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "curso" ADD CONSTRAINT "curso_fkey5" FOREIGN KEY ("id_salon_martes") REFERENCES "salon"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "curso" ADD CONSTRAINT "curso_fkey6" FOREIGN KEY ("id_salon_martes") REFERENCES "salon"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "curso" ADD CONSTRAINT "curso_fkey7" FOREIGN KEY ("id_salon_miercoles") REFERENCES "salon"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "curso" ADD CONSTRAINT "curso_fkey8" FOREIGN KEY ("id_salon_jueves") REFERENCES "salon"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "curso" ADD CONSTRAINT "curso_fkey9" FOREIGN KEY ("id_salon_viernes") REFERENCES "salon"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

-- End Relación's declaration

