<?php
//this is a data access object it has the ability to connect the database and retrieve or post information

//the methods are static so they can be access from different php files given that you require or include this file location

//add methods to this file to manipulate the my-sql database

require_once "../config/db_config.php";

require_once "../models/Recipe.php";

class RecipeDAO
{
    public static function get_recipes(): array
    {
        $conn = new mysqli(SERVERNAME,DBUSER, DBPASSWORD, DBNAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //change to correct table in project database
        $stmt = $conn->prepare('SELECT * FROM recipe');
        $stmt->execute();
        $recipe_book = [];
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $recipe = new Recipe($row["recipe_id"], $row['recipe_serving_size'], $row['ingredients'],$row['directions'],$row['recipe_name']);

            $recipe_book[] = $recipe;
        }
        $conn->close();
        return $recipe_book;
    }


}