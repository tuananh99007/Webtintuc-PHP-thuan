<?php
include_once "BaseModel.php";

class PostModel extends BaseModel
{
    // khai báo tên bảng gán vào $table
    protected $table = "posts";

    // In dữ iệu vào trong talbe
    public function insertPost($request)
    {
        $sql = "insert into $this->table (title,content,post_time,user_id, image) values (?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $request["title"]);
        $stmt->bindParam(2, $request["content"]);
        $stmt->bindParam(3, $request["post_time"]);
        $stmt->bindParam(4, $request["user_id"]);
        $stmt->bindParam(5, $request["image"]);
        $stmt->execute();
    }

    // update dữ liệu vào table theo id
    public function updatePost($request)
    {
        $sql = "update $this->table set title=? ,content=?, post_time=?,user_id=?, image=? where id=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $request["title"]);
        $stmt->bindParam(2, $request["content"]);
        $stmt->bindParam(3, $request["post_time"]);
        $stmt->bindParam(4, $request["user_id"]);
        $stmt->bindParam(5, $request["image"]);
        $stmt->bindParam(6, $request["id"]);
        $stmt->execute();
    }

    // Lấy dữ liệu từ table theo user_id người dùng
    public function getPostData($user_id)
    {
        $sql = "select * from $this->table where user_id=" . $user_id;
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }




}
