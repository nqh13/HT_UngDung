<?php
include 'models/category.php';
class Category_Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Category_Model();
    }

    public function index()
    {
        // Lấy danh sách tất cả các danh mục từ Model
        return $categories = $this->model->getAllCategories();

        // Hiển thị View với danh sách danh mục
        // require 'views/category/index.php';
    }

    public function create()
    {
        // Xử lý form thêm danh mục
        if ($this->request->isPost()) {
            $name = $this->request->post('name');
            $description = $this->request->post('description');

            // Thêm danh mục vào cơ sở dữ liệu
            $this->model->addCategory($name, $description);

            // Chuyển hướng đến trang danh sách danh mục
            return redirect()->to('/category');
        }

        // Hiển thị View form thêm danh mục
        require 'views/category/create.php';
    }

    public function edit($id)
    {
        // Lấy thông tin danh mục từ Model
        $category = $this->model->getCategoryById($id);

        // Xử lý form sửa danh mục
        if ($this->request->isPost()) {
            $name = $this->request->post('name');
            $description = $this->request->post('description');

            // Cập nhật thông tin danh mục trong cơ sở dữ liệu
            $this->model->updateCategory($id, $name, $description);

            // Chuyển hướng đến trang danh sách danh mục
            return redirect()->to('/category');
        }

        // Hiển thị View form sửa danh mục
        require 'views/category/edit.php';
    }

    public function delete($id)
    {
        // Xác nhận xóa danh mục
        if ($this->request->isPost()) {
            // Xóa danh mục khỏi cơ sở dữ liệu
            $this->model->deleteCategory($id);

            // Chuyển hướng đến trang danh sách danh mục
            return redirect()->to('/category');
        }

        // Hiển thị View xác nhận xóa danh mục
        require 'views/category/delete.php';
    }
}
