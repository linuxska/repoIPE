------------------------------
-- pgDesigner 1.2.17
--
-- Project    : SII-IPE
-- Date       : 10/12/2012 20:18:51.283
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
"tema_secuandario" character varying(64),
"tema_terciario" character varying(64),
"herejia" bool NOT NULL DEFAULT false,
"cantidad" int,
"numero_dewey" character varying(32) NOT NULL,
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
COMMENT ON COLUMN "libro"."tema_secuandario" IS 'Tema secuandario de la obra';
COMMENT ON COLUMN "libro"."tema_terciario" IS 'Tema terciario de la obra';
COMMENT ON COLUMN "libro"."cantidad" IS 'Cantidad de ejemplares en la Bibliteca del IPE.';
COMMENT ON COLUMN "libro"."numero_dewey" IS 'Numero Dewey generado "automaticamente" para cada obra.';
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
CREATE UNIQUE INDEX "primersumario_idx1" ON "entero" USING btree ("id","numero","nombre");

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
"a_materno" character varying(64) NOT NULL,
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
"secuandaria_ciudad" character varying(64),
"secundaria_final" date,
"prepa_nombre" character varying(64),
"prepa_ciudad" character varying(64),
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
"inscrito" boolean NOT NULL,
"foto" character varying(256)
) WITHOUT OIDS;
ALTER TABLE "alumno" ADD CONSTRAINT "alumno_pk" PRIMARY KEY("id");
COMMENT ON TABLE "alumno" IS 'Catálogo de alumnos.';
COMMENT ON COLUMN "alumno"."id" IS 'Clave del alumno';
COMMENT ON COLUMN "alumno"."nombre" IS 'Nombre(s) de alumno';
COMMENT ON COLUMN "alumno"."a_paterno" IS 'Apellido paterno del alumno.';
COMMENT ON COLUMN "alumno"."a_materno" IS 'Apellido materno del alumno';
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
COMMENT ON COLUMN "alumno"."secuandaria_ciudad" IS 'Ciudad donde estudio la secundaria.';
COMMENT ON COLUMN "alumno"."secundaria_final" IS 'Fecha de graduacion dela secundaria.';
COMMENT ON COLUMN "alumno"."prepa_nombre" IS 'Nombre de la preparatoria donde estudio.';
COMMENT ON COLUMN "alumno"."prepa_ciudad" IS 'Cuidad donde estudio la preparatoria.';
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
COMMENT ON COLUMN "alumno"."inscrito" IS 'Si el alumno esta inscrito o preinscrito.';
COMMENT ON COLUMN "alumno"."foto" IS 'url de la foto de alumno';

CREATE TABLE "profesor" (
"id" serial NOT NULL,
"rfc" character varying(15) NOT NULL,
"nombre" character varying(64) NOT NULL,
"a_paterno" character varying(64) NOT NULL,
"a_materno" character varying(64) NOT NULL,
"direccion" character varying(64) NOT NULL,
"colonia" character varying(64) NOT NULL CHECK (.),
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
"id_salon" int NOT NULL,
"id_periodo" int NOT NULL,
"hora_inicio" time NOT NULL,
"hora_final" time NOT NULL,
"anno" int(4) NOT NULL,
"estado" boolean NOT NULL DEFAULT true
) WITHOUT OIDS;
ALTER TABLE "curso" ADD CONSTRAINT "curso_pk" PRIMARY KEY("id");
COMMENT ON TABLE "curso" IS 'Catálogo de los cursos que se imparten por periodo.';
COMMENT ON COLUMN "curso"."id" IS 'Clave del curso.';
COMMENT ON COLUMN "curso"."id_profesor" IS 'Clave del profesor que imparte el curso.';
COMMENT ON COLUMN "curso"."id_salon" IS 'Clave del salon.';
COMMENT ON COLUMN "curso"."id_periodo" IS 'Clave del periodo.';
COMMENT ON COLUMN "curso"."hora_inicio" IS 'Hora de inicio del curso.';
COMMENT ON COLUMN "curso"."hora_final" IS 'Hora de final del curso.';
COMMENT ON COLUMN "curso"."anno" IS 'Año en que se imparte el curso';
COMMENT ON COLUMN "curso"."estado" IS 'Campo que indicara si el curso actual puede ser modificado por el profesor. Verdadero si es posible modificar.';

CREATE TABLE "lista" (
"id" serial NOT NULL
) WITHOUT OIDS;
ALTER TABLE "lista" ADD CONSTRAINT "lista_pk" PRIMARY KEY("id");
COMMENT ON TABLE "lista" IS 'Alumnos inscritos en un curso.';
COMMENT ON COLUMN "lista"."id" IS 'Clave de la lista.';

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
"dewey_number" character varying(32) NOT NULL,
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
CREATE UNIQUE INDEX "firstsummary_idx1" ON "integer" USING btree ("id","number","name");

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
"dewey_number" character varying(32) NOT NULL,
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
COMMENT ON COLUMN "wk_book"."dewey_number" IS 'Numero Dewey generado "automaticamente" para cada obra.';

-- End Tabla's declaration

-- Start Relación's declaration
ALTER TABLE "libro" ADD CONSTRAINT "libro_fkey1" FOREIGN KEY ("id_decimal") REFERENCES "decimal"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "decimal" ADD CONSTRAINT "decimal_fkey1" FOREIGN KEY ("id_entero") REFERENCES "entero"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "decimalen" ADD CONSTRAINT "decimalen_fkey1" FOREIGN KEY ("id_integer") REFERENCES "integer"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "book" ADD CONSTRAINT "book_fkey1" FOREIGN KEY ("id") REFERENCES "decimalen"("id_integer") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "wk_book" ADD CONSTRAINT "wk_book_fkey1" FOREIGN KEY ("id_decimal") REFERENCES "decimalen"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

-- End Relación's declaration

