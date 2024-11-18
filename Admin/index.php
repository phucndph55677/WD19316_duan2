<?
//commons
require_once 'commons/function.php';
require_once 'commons/env.php';
//Controllers
require_once 'Admin/Controller/CateAdminController.php';
require_once 'Admin/Controller/ProductAdminController.php';
//Models
require_once 'Admin/Models/CateAdmin.php';
require_once 'Admin/Models/ProductAdmin.php';

//Route
$act = $_GET['act'] ?? '/';

match ($act) {
   "cate" => (new CateAdminController())->listCate(),
   "product" => (new ProductAdminController())->listProduct(),
};