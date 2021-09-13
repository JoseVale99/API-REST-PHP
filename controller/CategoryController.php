<?php
 require_once("../config/conexion.php");
 require_once("../models/Category.php");

    $category = new Category();

    
    switch($_GET["op"]){
        case "GetAll":
            // return  a json of category
            $data = $category->getCategory();
            echo json_encode($data);
            
            break;
    }

    

?>