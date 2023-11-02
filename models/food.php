<?php
class Food_Model {
    private $db;

    public function __construct() {
        // Kết nối cơ sở dữ liệu
        $this->db = new PDO('mysql:host=localhost;dbname=food', 'root', '');
    }

    public function addFood($name, $description) {
        // Thêm một món ăn vào cơ sở dữ liệu
        $stmt = $this->db->prepare("INSERT INTO foods (name, description) VALUES (?, ?)");
        $stmt->execute([$name, $description]);
    }

    public function updateFood($id, $name, $description) {
        // Cập nhật thông tin một món ăn trong cơ sở dữ liệu
        $stmt = $this->db->prepare("UPDATE foods SET name = ?, description = ? WHERE id = ?");
        $stmt->execute([$name, $description, $id]);
    }

    public function deleteFood($id) {
        // Xóa một món ăn khỏi cơ sở dữ liệu
        $stmt = $this->db->prepare("DELETE FROM foods WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function getAllFoods() {
        // Lấy danh sách tất cả các món ăn
        $stmt = $this->db->prepare("SELECT * FROM foods");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>