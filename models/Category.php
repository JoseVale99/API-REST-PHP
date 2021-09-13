<?php 

class Category extends Connection{


    public function getCategory(){
        // method for connection in db
        $connect = parent::connect();
        parent::set_names();

        $sql = $connect->prepare("SELECT * FROM categories WHERE estatus =1 ");
        $sql->execute();

    }
}


?>