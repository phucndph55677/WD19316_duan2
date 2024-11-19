<?
class CateAdmin
{
    public $conn;
    public function __construct(){
        $this->conn = connectDB();
    } 
    public function listAll(){
        try {
        $sql = "SELECT * FROM danh_mucs";
        $result = $this->conn->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    } catch (Exception $e) {
        echo "lỗi" .$e->getMessage();
    }
    }
    public function insertCate($ten_danh_muc,$mo_ta){
        try {
        $sql = "INSERT INTO danh_mucs (ten_danh_muc,mo_ta) VALUES (:ten_danh_muc,:mo_ta) "; ;
        $result = $this->conn->prepare($sql);
        $result->execute(
            [
                'ten_danh_muc' => $ten_danh_muc,
                'mo_ta' => $mo_ta,
            ]
        );
        return true;
    } catch (Exception $e) {
        echo "lỗi" .$e->getMessage();
    }
    }
    public function DeleteCate($id){
        try {
        $sql = "DELETE FROM danh_mucs WHERE id = :id";
        $result = $this->conn->prepare($sql);
        $result->execute(
            [
                'id' => $id,
            ]
        );
        return true;
    } catch (Exception $e) {
        echo "lỗi" .$e->getMessage();
    }
    }
    public function getCate($id){
        try {
        $sql = "SELECT * FROM danh_mucs WHERE id = :id";
        $result = $this->conn->prepare($sql);
        $result->execute(
            [
                'id' => $id,
            ]
        );
        return $result->fetch();
    } catch (Exception $e) {
        echo "lỗi" .$e->getMessage();
    }
    }
    public function updateCate($id,$ten_danh_muc,$mo_ta){
        try {
        $sql = "UPDATE danh_mucs SET ten_danh_muc = :ten_danh_muc,mo_ta = :mo_ta WHERE id = :id";
        $result = $this->conn->prepare($sql);
        $result->execute(
            [
                'id' => $id,
                'ten_danh_muc' => $ten_danh_muc,
                'mo_ta' => $mo_ta,
            ]
        );
        return true;
    } catch (Exception $e) {
        echo "lỗi" .$e->getMessage();
    }
    }
    


}