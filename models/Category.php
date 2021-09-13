<?php
// CRUD - API REST :  logical functions
class Category extends Connection
{

    // method for to get information for status equals at 1
    public function getCategory()
    {

        $connect = parent::connect();
        parent::set_names();

        $sql = $connect->prepare("SELECT * FROM category WHERE estatus=1 ");
        $sql->execute();

        return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    //  method to get categories of products by ID.
    public function getCategoryID($cat_id)
    {
        $connect = parent::connect();
        parent::set_names();

        $sql = $connect->prepare(
            "SELECT * FROM category WHERE estatus=1 AND cat_id = ?"
        );
        $sql->bindValue(1, $cat_id);
        $sql->execute();

        return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    //  method for create a new category in database.
    public function CreateCategory($cat_nom, $cat_obs)
    {
        $connect = parent::connect();
        parent::set_names();

        $sql = $connect->prepare(
            "INSERT INTO category(cat_id,cat_nom,cat_obs,estatus) VALUES(NULL,?,?,'1');"
        );
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->execute();

        return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    // method for update the categories in database.
    public function UpdateCategory($cat_id, $cat_nom, $cat_obs)
    {
        $connect = parent::connect();
        parent::set_names();

        $sql = $connect->prepare(
            "UPDATE category SET
                cat_nom =?, 
                cat_obs =?
                WHERE
                cat_id = ?"
        );
       
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->bindValue(3, $cat_id);
        $sql->execute();

        return $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
