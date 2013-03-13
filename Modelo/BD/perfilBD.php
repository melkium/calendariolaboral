<?php
require_once "../Modelo/base/perfil.php";

class PerfilBD extends GenericoBD{


	 public static function obtenerPerfilporTrabajador($id_trabajador){
      $conexion = GenericoBD::conectar();
      $query="select * from perfil where id_perfil=(select id_perfil from trabajador where id_trabajador=".$id_trabajador.")";
      $rs = mysql_query($query,$conexion) or die(mysql_error());
      
      $perfil=null;
      if (mysql_num_rows($rs) == 1)
      {
        $fila = mysql_fetch_assoc($rs);
        $perfil = new Perfil();  
        $perfil->setId($fila['id_perfil']);
        $perfil->setNombre($fila['nombre']);
        $perfil->setDescripcion($fila['desc']);
        $perfil->setServiciosMinimos($fila['serv_minimo']);
        $perfil->setRol(null);
      GenericoBD::desconectar($conexion);
      return $perfil;
  }
  }
}
?>