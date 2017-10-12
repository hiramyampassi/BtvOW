<?php namespace Models;

class Noticias {
    private $id,$nombre,$descripcion,$precio,$imagen;
    private $tipo_id,$tipo_nombre,$tipo_descripcion;
    private $con;

    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function set($atributo,$contenido){
        $this->atributo = $contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }

    public function listar(){
        $sql = "SELECT p.*, t.nombre tipo_nombre FROM noticias p, tipo t WHERE t.id=p.tipo_id";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }

    public function add(){
        $sql = "INSERT INTO noticias(nombre, descripcion, precio, Tipo_id,imagen)
                VALUES ('{$this->nombre}','{$this->descripcion}','{$this->precio}','{$this->tipo_id}','{$this->imagen}')";
        $this->con->consultaSimple($sql);
    }

    public function delete(){
        $sql = "DELETE FROM noticias WHERE id = '{$this->id}'";
        $this->con->consultaSimple($sql);
    }

    public function edit(){
        $sql = "UPDATE noticias SET nombre='{$this->nombre}',descripcion='{$this->descripcion}',
                precio='{$this->precio}',Tipo_id = '{$this->tipo_id}' WHERE id= '{$this->id}'";
        $this->con->consultaSimple($sql);
    }

    public function view(){
        $sql = "SELECT p.*, t.nombre tipo_nombre FROM noticias p, tipo t WHERE p.tipo_id t.'{$this->id}'";
        $datos = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($datos);
        return $row;
    }

}












