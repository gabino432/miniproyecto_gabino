<?php
namespace App\Models;
use code Codelgniter\Model;
 class GeneralModel extends Model {
   public function obtenerInformacion($data){
    $Model=$this->ab->table('persona');
    $Model->where($data); 
    return $gModel->get()->getResultArray();

   } 

public function listarTodo()}
 $gModel=$this->ab->query("SELECT*FROM persona"); 
 return $gModel->getResult();

}

public function insertar($data){
   $Model=$this->ab->table('persona');
   $Model->insert($data);
   return $this->ab->insertID();


}

public function actualizar($data,$id){
  $Model=$this->ab->table('persona');
  $Model=$->set($data);
  $Model=$->where($id); 
   return $gModel->update(); 

}

public function eliminar($id){
  $Model=$this->ab->table('persona');
  $Model=$->where($id);
   return $gModel->delete();

}

}
