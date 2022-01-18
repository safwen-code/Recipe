<?php
class RecipeManager
{
    public function GetAllRecipe()
    {
        try {
            $pdo = $this->connectDB();
            $sql = "SELECT * from recipes ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll();
            return $row;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
    public function GetRecipeById($id)
    {
        try {
            $pdo = $this->connectDB();
            $sql = "SELECT * FROM recipes WHERE recipe_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':id' => $id,
            ));
            $recipe = $stmt->fetch(PDO::FETCH_ASSOC);
            return $recipe;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
    public function UpdateRecipe($id, $title, $recipe, $author)
    {
        try {
            $pdo = $this->connectdb();
            $sql = "UPDATE recipes SET title = :title,
        recipe = :recipe, author = :author
        WHERE recipe_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':id' => $id,
                ':title' => $title,
                ':recipe' => $recipe,
                ':author' => $author,

            ));
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
    public function AddRecipe($title, $recipe, $author)
    {
        try {
            $pdo = $this->connectDB();
            $sql = "INSERT INTO recipes (title, recipe, author)
            VALUES (:title, :recipe, :author)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':title' => $title,
                ':recipe' => $recipe,
                ':author' => $author
            ));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function DeleteRecipe($id)
    {
        try {
            $pdo = $this->connectdb();
            $sql = "DELETE FROM recipes WHERE recipe_id = :id ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}
