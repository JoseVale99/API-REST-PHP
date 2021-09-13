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
            case "Insert":
                $data = $category->CreateCategory($body["cat_nom"], $body["cat_obs"]);
                echo json_encode ("successfully data inserted!");
                break;
            case "Update":
                $data = $category->UpdateCategory($body["cat_id"],$body["cat_nom"], $body["cat_obs"]);
                echo json_encode ("update successfully data!");
            break;
        }
