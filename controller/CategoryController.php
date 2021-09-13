<?php
    header('Content-Type: application/json');
    require_once("../config/conexion.php");
    require_once("../models/Category.php");
    $category = new Category();
    $body = json_decode(file_get_contents("php://input"), true);
    
    switch($_GET["op"]){
        case "GetAll":
            // return  a json of category
            $data = $category->getCategory();
            echo json_encode($data);
            
            break;
            case "GetID":
                $data = $category->getCategoryID($body["cat_id"]);
                echo json_encode($data);
            break;
        }


    

?>