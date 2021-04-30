<?php
//This is responsible for return the view of encoded in json format

require_once "../dao/RecipeDAO.php";

$recipe_book = RecipeDAO::get_recipes();

echo '{"recipes":[';
    for($i=0;$i<count($recipe_book);$i++){
        if ($i==count($recipe_book)-1){
            echo json_encode($recipe_book[$i]);
        }
        else{
            echo json_encode($recipe_book[$i]).",";
        }
    }
echo "]}";
