<?php
//đưa model để các lớp sau sử dụng
include 'helper.php';
include 'models/Model.php';

include 'controllers/ProductController.php';
$objController = new ProductController();

$page = ( isset($_REQUEST['page']) ) ? $_REQUEST['page'] : 'index';

switch ($page) {
    case 'index':
        // vào trang danh sách
        $objController->index();
        break;
    case 'create':
        // vào trang them moi
        $objController->create();
        break;
    case 'edit':
        // vào trang chinh sua
        $objController->edit();
        break;
    case 'show':
        // vào trang chi tiết
        $objController->show();
        break;
    case 'destroy':
        // vào trang chi tiết
        $objController->destroy();
        break;
    default:
        # code...
        break;
}