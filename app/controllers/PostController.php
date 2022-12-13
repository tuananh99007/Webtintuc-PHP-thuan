<?php
include_once "app/models/PostModel.php";

class PostController
{
    // khai báo postModel
    protected $postModel;

    // khởi tạo hàm để lấy giá trị trong class PostModel gán vào postModel
    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    // giao diện trang post-list
    public function list()
    {
        // kiểm tra xem có thông tin người dùng đăng nhập lấy thông tin đó hiển thị ra bài viết người dùng
        if (isset($_SESSION['user'])) {
            $posts = $this->postModel->getPostData($_SESSION['user']->id);
            include_once "app/views/post/list.php";
        }
    }

    // giao diện trang thêm
    public function add()
    {
        include_once "app/views/post/add.php";
    }

    // thêm dữ liệu vào DB
    public function postAdd()
    {
        // kiểm tra xem có file ảnh ko
        if (isset($_FILES["fileUpToLoad"])) {
            $targetFolder = "upload/";
            // trả lại thời gian hiện tại + ảnh theo đường dẫn 
            $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
            // lồng tên file kèm ảnh 
            $targetFile = $targetFolder . $nameImage;
            // nếu ảnh đã dc lưu trong file thì gửi về thông báo
            if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                // echo "upload thanh cong";
                $_REQUEST["image"] = $nameImage;
            } else {
                echo "upload khong thanh cong";
            }
            $_REQUEST["image"] = $nameImage;
        }
        // in dữ liệu vào table
        $this->postModel->insertPost($_REQUEST);
        header("location:index.php?page=post-list");
    }

    // hiển thị giao diện update theo id post
    public function update()
    {
        if (isset($_REQUEST['id'])) {
            $post = $this->postModel->getId($_REQUEST['id']);
            include_once "app/views/post/update.php";
        }
    }


    public function postUpdate()
    {
        $post = $this->postModel->getId($_REQUEST["id"]);
        $_REQUEST["image"] = $post->image;
        // nếu có ảnh mới thì lưu ảnh mới vào file và xóa ảnh cũ theo đường link ở trên
        if (isset($_FILES["fileUpToLoad"])) {
            $targetFolder = "upload/";
            $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
            $targetFile = $targetFolder . $nameImage;
            if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                unlink('upload/' . $post->image);
                // echo "upload thanh cong";
                $_REQUEST["image"] = $nameImage;
            } else {
                echo "upload khong thanh cong";
            }
        }
        // lưu giá trị mới kèm ảnh vào trong bảng
        $this->postModel->updatePost($_REQUEST);
        header("location:index.php?page=post-list");
    }


    // xóa bài viết theo id post
    public function delete()
    {
        $this->postModel->deleteId($_REQUEST['id']);
        header("location:index.php?page=post-list");
    }

    // hiển thị chi tiết bài viết theo id 
    public function detail()
    {
        $post = $this->postModel->getId($_REQUEST['id']);
        include_once "app/views/post/detail.php";
    }
}
