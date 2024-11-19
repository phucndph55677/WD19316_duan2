<?
class CateAdminController
{
    public $modelcate;
    public function __construct()
    {
        $this->modelcate = new CateAdmin();
    }
    
    public function Homecate()
    {
        $listCate = $this->modelcate->listAll();
        require_once './Views/Cate/listcate.php';
    }
    public function addCate()
    {
        require_once './Views/Cate/Addcate.php';
    }
    public function postAddCate()
    {
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
        $ten_danh_muc = $_POST['ten_danh_muc'];
        $mo_ta = $_POST['mo_ta'];
        
        $errors = [];
        if(empty($ten_danh_muc))
        {
            $errors[] = 'Tên danh mục không được để trống';
        }
        if(empty($errors))
        {

            $this->modelcate->insertCate($ten_danh_muc, $mo_ta);
            header("Location:" .BASE_URL_ADMIN.'?act=cate');
            exit();

        }else{
            require_once './Views/Cate/Addcate.php'; 
        }
        
     }
    }
    public function deleteCate()
    {
        $id = $_GET['id'];
        $this->modelcate->deleteCate($id);
        header('Location:'.BASE_URL_ADMIN.'?act=cate');
        exit();
    }
    public function editCate()
    {
        $id = $_GET['id'];
        $cate = $this->modelcate->getCate($id);
        if($cate){
            require_once './Views/Cate/Editcate.php';
        }else{
            header('Location:'.BASE_URL_ADMIN.'?act=cate');
            exit();
        }
    
    }
    public function postEditCate()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $id = $_POST['id'];
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $mo_ta = $_POST['mo_ta'];
            $errors = [];
            if(empty($ten_danh_muc))
            {
                $errors[] = 'Ten danh muc khong duoc de trong';
            }
            if(empty($errors))
            {
                $this->modelcate->updateCate($id, $ten_danh_muc, $mo_ta);   
                header("Location:".BASE_URL_ADMIN.'?act=cate');
                exit();

            } else {
                $cate = ['id'=>$id,'ten_danh_muc'=>$ten_danh_muc,'mo_ta'=>$mo_ta];
                require_once './Views/Cate/Editcate.php';
            }

            
        }
    }
}