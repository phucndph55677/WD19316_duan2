<?
require_once '../commons/env.php';
require_once '../commons/function.php';
//Controllers
require_once './Controller/CateAdminController.php';
require_once './Controller/ProductAdminController.php';
//Models
require_once './Models/CateAdmin.php';
require_once './Models/ProductAdmin.php';

//Route
$act = $_GET['act'] ?? '/';
match ($act) {
   ///cate
   "cate" => (new CateAdminController())->Homecate(),
   "form-add-cate" => (new CateAdminController())->addCate(),
   "add-cate" => (new CateAdminController())->postAddCate(),
   "delete-cate" => (new CateAdminController())->deleteCate(),
   "form-edit-cate" => (new CateAdminController())->editCate(),
   "edit-cate" => (new CateAdminController())->postEditCate(),
   ///product
   "product" => (new ProductAdminController())->listProduct(),
};