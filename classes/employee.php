<?php
    class employee extends Db
    {
        //selectionner tous les donnees de la bd
        public function select(){
          $sql="select * from tblclient";
          $result=$this->connect()->query($sql);
          if($result->rowCount()>0){
              while($row=$result->fetch(PDO::FETCH_OBJ)){
                $data[]=$row;
              }
              return $data;
          }
        }

         function add($id,$nom,$ville,$tel){
               $sql="insert into tblclient values(?,?,?,?)";
               $resultat=$this->connect()->prepare($sql);
               $resultat->bindValue(1,$id,PDO::PARAM_STR);
               $resultat->bindValue(2,$nom,PDO::PARAM_STR);
               $resultat->bindValue(3,$ville,PDO::PARAM_STR);
               $resultat->bindValue(4,$tel,PDO::PARAM_STR);
               return $resultat->execute();
             }
    }

?>
