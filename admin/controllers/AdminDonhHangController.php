<?
class AdminDonHangController{
    public $modelDonHang;
    public function __construct(){
        $this->modelDonHang = new AdminDonHang();
    }
    public function danSachDonHang(){   
        $listDonHang = $this->modelDonHang->getAllDonHang();
        require_once('./views/donhang/listDonHang.php');
    }
}