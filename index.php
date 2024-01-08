<?php
require './Core/Database.php';
require './Controllers/BaseController.php';
require './Models/BaseModel.php';
$controllerName=(ucfirst(strtolower($_REQUEST['controller']??'Product'))).'Controller';
// $controllerName='ProductController';
// $actionName='index';
/* lấy tên của action trong controller */
$actionName=strtolower($_REQUEST['action']??'index');
// echo $controllerName;
require "./Controllers/{$controllerName}.php";
$controllerObject=new $controllerName;
// sử dụng các hàm trong controller
$controllerObject->$actionName();
?>