<?php
require 'Conexion.php';

class alumnos extends Conexion{
    public $alumno_id;
    public $alumno_nombre;
    public $alumno_apellido;
    public $alumno_fecha_naci;
    public $alumno_telefono;
    public $alumno_correo;


    public function __construct($args = [] )
    {
        $this->alumno_id = $args['alumno_id'] ?? null;
        $this->alumno_nombre = $args['alumno_nombre'] ?? '';
        $this->alumno_apellido = $args['alumno_apellido'] ?? '';
        $this->alumno_fecha_naci = $args['alumno_fecha_naci'] ?? '';
        $this->alumno_telefono = $args['alumno_telefono'] ?? '';
        $this->alumno_correo = $args['alumno_correo'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO alumnos(alumno_nombre, alumno_apellido, alumno_fecha_naci, alumno_telefono, alumno_correo) values('$this->alumno_nombre','$this->alumno_apellido', '$this->alumno_fecha_naci', '$this->alumno_telefono', '$this->alumno_correo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
