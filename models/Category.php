<?php 

class Category extends Connection{

// method SELECT information for status equals at 1
    public function getCategory(){
        
        $connect = parent::connect();
        parent::set_names();

        $sql = $connect->prepare("SELECT * FROM category WHERE estatus=1 ");
        $sql->execute();

        return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    //  method for return category for ID.
    public function getCategoryID($cat_id){
        $connect = parent::connect();
        parent::set_names();

        $sql = $connect->prepare(
            "SELECT * FROM category WHERE estatus=1 AND cat_id =?");
        $sql->execute();

        return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    }



}


?>