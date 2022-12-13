<?php
include_once "DBConnect.php";

class BaseModel
{
    protected $dbConnect;
    protected $table;

    // khởi tạo 1 đối tượng 
    public function __construct()
    {
        $db = new DBConnect();
        $this->dbConnect = $db->connect();
    }

    // lấy tất cả dữ liệu theo table
    public function getAll()
    {
        $sql = "select * from $this->table";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // lấy tất cả dữ liệu theo id của table
    public function getId($id)
    {
        $sql = "select * from $this->table where id=" . $id;
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Xóa dữ liệu theo ID của table
    public function deleteID($id)
    {
        $sql = "delete from $this->table where id=" . $id;
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->execute();
    }
}
