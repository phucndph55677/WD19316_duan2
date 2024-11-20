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
    public function detailDonHang(){
        $don_hang_id = $_GET['id_don_hang'];
        $donHang = $this->modelDonHang->getDetailDonHang($don_hang_id);
        $sanPhamDonHang = $this->modelDonHang->getListPDonHang($don_hang_id);
        $listTrangThaiDonHang = $this->modelDonHang->getAllTrangThai();
       
        require_once('./views/donhang/detailDonHang.php');
    }

}