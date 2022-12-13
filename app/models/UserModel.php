<?php
include_once "BaseModel.php";

class UserModel extends BaseModel
{
    // khai báo tên bảng gán vào $table
    protected $table = "users";

    // In dữ iệu vào trong talbe
    public function insertUsers($request)
    {
        $sql = "insert into $this->table (name,email,password,birthday,address,image) values (?,?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $request["name"]);
        $stmt->bindParam(2, $request["email"]);
        $stmt->bindParam(3, $request["password"]);
        $stmt->bindParam(4, $request["birthday"]);
        $stmt->bindParam(5, $request["address"]);
        $stmt->bindParam(6, $request["image"]);
        $stmt->execute();
    }

    // update dữ liệu vào table theo id
    public function updateUsers($request)
    {
        $sql = "update $this->table set name=?,email=?,password=?,birthday=?,address=?,image=? where id =? ";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $request["name"]);
        $stmt->bindParam(2, $request["email"]);
        $stmt->bindParam(3, $request["password"]);
        $stmt->bindParam(4, $request["birthday"]);
        $stmt->bindParam(5, $request["address"]);
        $stmt->bindParam(6, $request["image"]);
        $stmt->bindParam(7, $request["id"]);
        $stmt->execute();
    }

    // check đăng nhập có đúng email và pw ko ?
    public function checkLogin($email, $password)
    {
        $sql = "select * from $this->table where email= ? and password = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    // lấy dữ liệu theo email người dùng
    public function getEmail($email)
    {
        $sql = "select * from $this->table where email=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // lấy dữ liệu theo từ khóa tìm kiếm
    public function search($key)
    {
        $sql = "select * from $this->table where name like '%$key%'";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
