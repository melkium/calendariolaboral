<?php


class AustipoBD extends GenericoBD{

	 public static function obtenerTipoporAusGeneral($id_general){
      $conexion = GenericoBD::conectar();
      $query="select * from aus_tipo where id_tipo=(select id_tipo from aus_general where id_general=".$id_general.")";
      $rs = mysql_query($query,$conexion) or die(mysql_error());
      
      $austipo=null;
      if (mysql_num_rows($rs) == 1)
      {
        $fila = mysql_fetch_assoc($rs);
        $austipo = new Austipo();  
        $austipo->setId($fila['id']);
        $austipo->setDescripcion($datos['desc']);
      
      GenericoBD::desconectar($conexion);
      return $austipo;
  }

   public static function obtenerTipoporAusindividual($id_individual){
      $conexion = GenericoBD::conectar();
      $query="select * from aus_tipo where id_tipo=(select id_tipo from aus_individual where id_individual=".$id_individual.")";
      $rs = mysql_query($query,$conexion) or die(mysql_error());
      
      $austipo=null;
      if (mysql_num_rows($rs) == 1)
      {
        $fila = mysql_fetch_assoc($rs);
        $austipo = new Austipo();  
        $austipo->setId($fila['id']);
        $austipo->setDescripcion($datos['desc']);
      
      GenericoBD::desconectar($conexion);
      return $austipo;
  }


}
?>