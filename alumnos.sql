CREATE TABLE alumnos (
    alumno_id SERIAL PRIMARY KEY NOT NULL ,
    alumno_nombre VARCHAR(50) NOT NULL,
    alumno_apellido VARCHAR(50) NOT NULL,
    alumno_fecha_naci DATE NOT NULL,
    alumno_telefono INTEGER NOT NULL,
    alumno_correo VARCHAR(50) NOT NULL
);
