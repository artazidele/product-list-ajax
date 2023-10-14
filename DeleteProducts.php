<?php
include_once 'controller/ProductController.php';
$productController = new ProductController();
if(isset($_POST['delete']))
{
    $idArray = [];
    $checkbox = $_POST['checkboxDelete'];
    foreach ($checkbox as $box) {
        array_push($idArray, $box);
    }
    $productController->deleteProducts($idArray);
}
?>