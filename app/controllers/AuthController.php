<?php
include_once "app/models/UserModel.php";

class AuthController
{
    // khai báo 
    protected $userModel;

    // khởi tao để lấy giá trị trong class UsersModel rồi gán vào userModel
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // vào giao diện trang đăng nhập
    public function login()
    {
        // kiểm tra xem người đùng đã đăng nhập chưa nếu có thì cho quay lại trang list
        if (isset($_SESSION['user'])) {
            header("location:index.php?page=user-list");
        }
        // nếu ko cho đăng nhập
        include_once "app/views/auth/login.php";
    }

    // check đăng nhập
    public function postlogin($request)
    {
        $email = $request['email'];
        $password = $request['password'];
        // nếu người dùng đã đăng nhập đúng thì lấy dữ liệu theo email người dùng để hiện thị trang post của người dùng
        if ($this->userModel->checkLogin($email, $password)) {
            $user = $this->userModel->getEmail($email);
            $_SESSION['user'] = $user;
            header("location:index.php?page=post-list");
        } else {
            header("location:index.php?page=login");
        }
    }

    // đăng xuất xóa session
    public function logout()
    {
        session_destroy();
        header("location:index.php?page=login");
    }
}
