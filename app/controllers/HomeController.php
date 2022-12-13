<?php
include_once "app/models/PostModel.php";
include_once "app/models/UserModel.php";
class HomeController
{
    protected $postModel;
    protected $userModel;
    // khởi tạo hàm để lấy giá trị trong class PostModel gán vào UserModel
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        
        $posts = $this->postModel->getAll();
        $users = $this->userModel->getAll();
        
        include_once "app/views/home/index.php";
    }

    public function category()
    {
        $posts = $this->postModel->getAll();
        $users = $this->userModel->getAll();
        include_once "app/views/home/category.php";
    }

    public function detail()
    {
        if (isset($_REQUEST['id'])) {
            $post = $this->postModel->getId($_REQUEST['id']);
            include_once "app/views/home/detail.php";
        }
    }
}
