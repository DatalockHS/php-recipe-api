<?php
//this is a representation of the table in the database called recipe

//information is stored into these models and used by the view

//implements JSONSerializable and can be encode or decode

//i have included the mysql script in a folder called mysql_script

class Recipe implements  JsonSerializable {
    private $recipe_id;
    private $recipe_name;
    private $recipe_serving_size;
    private $ingredients;
    private $directions;

    public function __construct($recipe_id, $recipe_serving_size, $ingredients, $directions,$recipe_name)
    {
        $this->recipe_id = $recipe_id;
        $this->recipe_serving_size = $recipe_serving_size;
        $this->ingredients = $ingredients;
        $this->directions = $directions;
        $this->recipe_name = $recipe_name;
    }

    public function getRecipeId()
    {
        return $this->recipe_id;
    }


    public function getRecipeName()
    {
        return $this->recipe_name;
    }


    public function setRecipeName($recipe_name): void
    {
        $this->recipe_name = $recipe_name;
    }


    public function setRecipeId($recipe_id): void
    {
        $this->recipe_id = $recipe_id;
    }

    public function getRecipeServingSize()
    {
        return $this->recipe_serving_size;
    }


    public function setRecipeServingSize($recipe_serving_size): void
    {
        $this->recipe_serving_size = $recipe_serving_size;
    }


    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients): void
    {
        $this->ingredients = $ingredients;
    }



    public function getDirections()
    {
        return $this->directions;
    }



    public function setDirections($directions): void
    {
        $this->directions = $directions;
    }


    public function jsonSerialize()
    {
        return array('recipe_id' => $this->recipe_id, 'serving_size' => $this->recipe_serving_size, 'ingredients' => $this->ingredients, 'directions' => $this->directions,'recipe_name' => $this->recipe_name);
    }

    }