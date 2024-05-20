<?php
require 'Conexion.php';

class persona extends Conexion{
    public $cont_id;
    public $cont_nombre_servido;
    public $cont_menu;
    public $cont_fecha;
    public $cont_hora;
    public $cont_tiempo_comida;
    public $cont_nombre_Servidor;


    public function __construct($args = [])
    {
        $this->cont_id = $args['con_id'] ?? null;
        $this->cont_nombre_servido = $args['cont_nombre_servido'] ?? '';
        $this->cont_menu = $args['cont_menu'] ?? '';
        $this->cont_fecha = $args['cont_fecha'] ?? '';
        $this->cont_hora = $args['cont_hora'] ?? '';
        $this->cont_tiempo_comida= $args['cont_tiempo_comida'] ?? '';
        $this->cont_nombre_Servidor = $args['cont_nombre-servidor'] ?? '';

    }

      // METODO PARA INSERTAR
      public function guardar(){
        $sql = "INSERT into persona (cont_nombre_servido,
         cont_menu, cont_fecha, cont_hora, cont_tiempo_comida) values ('$this->cont_nombre_servido',
         '$this->cont_menu', '$this->cont_fecha', '$this->cont_hora', '$this->cont_tiempo_comida', '$this->cont_tiempo_comida')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }


    public function buscar(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM persona where cont_nombre_servido = 1 ";

        if($this->cont_menu!= ''){
            $sql .= " AND cont_menu= $this->cont_menu";
        }

        if($this->cont_fecha!= ''){
            $sql .= " AND cont_fecha = $this->cont_fecha ";
        }

        if($this->cont_hora != ''){
            $sql .= " AND cont_hora = $this->cont_hora ";
        }

        if($this->cont_tiempo_comida != ''){
            $sql .= " AND cont_tiempo_comida = $this->cont_tiempo_comida ";
        }
        if($this->cont_tiempo_comida != ''){
            $sql .= " AND cont_tiempo_comida = $this->cont_tiempo_comida ";
        }


        $resultado = self::servir($sql);
        return $resultado;
    }
}

