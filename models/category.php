<?php
require_once 'configs/database.php';

class Category_Model extends Database
{
    public function __construct()
    {
        parent::__construct('localhost', 'htbepan', 'root', '');
        parent::connect();
    }

    public function addCategory($name, $description)
    {
        // Add a new category to the database
        $sql = "INSERT INTO category (name, description) VALUES (?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $description]);
    }

    public function updateCategory($id, $name, $description)
    {
        // Update the information of a category in the database
        $sql = "UPDATE category SET name = ?, description = ? WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $description, $id]);
    }

    public function deleteCategory($id)
    {
        // Delete a category from the database
        $sql = "DELETE FROM category WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
    }

    public function getAllCategories()
    {
        // Get a list of all categories
        $sql = "SELECT * FROM loaimonan";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategoryById($id)
    {
        // Get the information of a category by ID
        $sql = "SELECT * FROM loaimonan WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
