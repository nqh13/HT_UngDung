<?php
require_once 'models/food.php';

class Food_Controller {
    private $model;

    public function __construct() {
        $this->model = new Food_Model();
    }

    public function index() {
        return $foods = $this->model->getAllFoods();
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ biểu mẫu
            $name = $_POST['name'];
            $description = $_POST['description'];

            // Thêm món ăn vào cơ sở dữ liệu
            $this->model->addFood($name, $description);
        }

        // Chuyển hướng về trang danh sách món ăn
        header('Location: index.php');
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $id = $_GET['id'];

            // Lấy thông tin món ăn dựa trên ID từ Model
            $food = $this->model->getFoodById($id);

            // Hiển thị View với biểu mẫu sửa món ăn
            require 'edit_food_view.php';
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ biểu mẫu
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];

            // Cập nhật thông tin món ăn trong cơ sở dữ liệu
            $this->model->updateFood($id, $name, $description);

            // Chuyển hướng về trang danh sách món ăn
            header('Location: index.php');
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $id = $_GET['id'];

            // Xóa món ăn khỏi cơ sở dữ liệu
            $this->model->deleteFood($id);

            // Chuyển hướng về trang danh sách món ăn
            header('Location: index.php');
        }
    }
}

// Khởi tạo đối tượng Controller và xử lý yêu cầu từ người dùng
// $controller = new Food_Controller();

// if (isset($_GET['action'])) {
//     $action = $_GET['action'];
//     if ($action === 'add') {
//         $controller->add();
//     } elseif ($action === 'edit') {
//         $controller->edit();
//     } elseif ($action === 'delete') {
//         $controller->delete();
//     }
// } else {
//     $controller->index();
// }
// ?>