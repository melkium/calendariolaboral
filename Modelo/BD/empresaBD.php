<?php


class EmpresaBD extends GenericoBD{

	 public static function obtenerEmpresaporCentro($id_centro){
      $conexion = GenericoBD::conectar();
      $query="select * from empresa where nif=(select id_nif from centro where id_centro=".$id_centro.")";
      $rs = mysql_query($query,$conexion) or die(mysql_error());
      
      $empresa=null;
      if (mysql_num_rows($rs) == 1)
      {
        $fila = mysql_fetch_assoc($rs);
        $empresa = new Empresa();  
        $empresa->setNif($datos['nif']);
        $empresa->setNombre($datos['nombre']);
        $empresa->setDireccion($datos['dir']);
      
      GenericoBD::desconectar($conexion);
      return $empresa;
  }


}
?>