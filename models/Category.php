<?php 

class Category extends Connection{


    public function getCategory(){
        // method for connection in db
        $connect = parent::connect();
        parent::set_names();

        $sql = $connect->prepare("SELECT * FROM category WHERE estatus=1 ");
        $sql->execute();

        return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>