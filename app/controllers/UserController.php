
<?php
include_once "app/models/UserModel.php";

class UserController
{
    // khai báo userModel
    protected $userModel;

    // khởi tạo hàm để lấy giá trị trong class PostModel gán vào UserModel
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // giao diện trang post-list
    public function list()
    {
        $users = $this->userModel->getAll();
        include_once "app/views/user/list.php";
    }

    // giao diện trang thêm
    public function add()
    {
        include_once "app/views/user/add.php";
    }

    // in dữ liệu vào bảng
    public function postAdd()
    {
        // kiểm tra xem có ảnh mới hay ko 
        if (isset($_FILES["fileUpToLoad"])) {
            // lấy đường dẫn file ảnh: time + tên input name của file và đường dẫn ["name"] bắt buộc
            $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
            $targetFolder = "upload/";
            $targetFile = $targetFolder . $nameImage;
            // kiểm tra file đã dc upload chưa 
            if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                // echo "upload thanh cong";
                $_REQUEST["image"] = $nameImage;
            } else {
                echo "upload khong thanh cong";
            }
        }
        // insert giá trị vào DB và quay lại màn hình 
        $this->userModel->insertUsers($_REQUEST);
        header("location:index.php?page=user-list");
    }

    // hiển thị giao diện update theo id
    public function update()
    {
        if (isset($_REQUEST['id'])) {
            $user = $this->userModel->getId($_REQUEST['id']);
            include_once "app/views/user/update.php";
        }
    }

    // update vào bảng
    public function postUpdate()
    {

        $user = $this->userModel->getId($_REQUEST["id"]);
        $_REQUEST["image"] = $user->image;
        // nếu có file ảnh mới thì tiến hành update
        if (isset($_FILES["fileUpToLoad"])) {
            $targetFolder = "upload/";
            $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
            $targetFile = $targetFolder . $nameImage;
            // upload file mới
            if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                // nếu đã có file mới thì ta xóa file ảnh cũ
                unlink('upload/' . $user->image);
                // echo "upload thanh cong";
                $_REQUEST["image"] = $nameImage;
            } else {
                echo "upload khong thanh cong";
            }
        }
        // update dữ liệu
        $this->userModel->updateUsers($_REQUEST);
        header("location:index.php?page=user-list");
    }

    // xóa dữ liệu theo id
    public function delete()
    {
        $this->userModel->deleteId($_REQUEST['id']);
        header("location:index.php?page=user-list");
    }

    // hiển thị chi tiết theo id
    public function detail()
    {

        $this->userModel->getId($_REQUEST['id']);
        include_once "app/views/user/detail.php";
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $users = $this->userModel->search($_REQUEST['search']);
            include_once "app/views/user/list.php";
        }
    }
}
