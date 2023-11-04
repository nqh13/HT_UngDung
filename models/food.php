<?php
require_once 'configs/database.php';
class Food_Model extends Database
{
    private $db;

    public function __construct()
    {
        parent::__construct('localhost', 'htbepan', 'root', '');
        parent::connect();
    }

    public function addFood($name, $description, $image)
    {
        // Thêm một món ăn vào cơ sở dữ liệu
        $sql = "INSERT INTO monan (ten_mon_an, mo_ta, hinh_anh) VALUES (?, ?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $description, $image]);
    }

    public function updateFood($id, $name, $description, $image)
    {
        // Cập nhật thông tin một món ăn trong cơ sở dữ liệu
        $sql = "UPDATE monan SET ten_mon_an = ?, mo_ta = ?, hinh_anh = ? WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $description, $image, $id]);
    }

    public function deleteFood($id)
    {
        // Xóa một món ăn khỏi cơ sở dữ liệu
        $sql = "DELETE FROM monan WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
    }

    public function getAllFoods()
    {
        // Lấy danh sách tất cả các món ăn
        $sql = "SELECT * FROM monan";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
