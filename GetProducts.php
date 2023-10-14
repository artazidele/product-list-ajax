<?php
include_once 'controller/ProductController.php';

// if(isset( $_GET['getdata'] )) {
$controller = new ProductController();
$result = $controller->getAllProducts();
    // echo "<h1>".sizeof($result)."</h1>";
// echo $result;
showProducts($result);
    // https://codingstatus.com/how-to-fetch-data-from-database-using-ajax-in-php/
// // }

function showProducts($productArray) {
    $count = 0;
    foreach ($productArray as $product) {
        echo "<div class='row'>";
        $count += 1;
        echo "<div class='col-md-3'>";
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<input class='delete-checkbox form-check-input' name='checkboxDelete[]' type='checkbox' value='<?php echo $product->getId();?>'/>";
        echo "<h6 class='text-center'>".$product->getSKU()."</h6>";
        echo "<h6 class='text-center'>".$product->getName()."</h6>";
        echo "<h6 class='text-center'>".$product->getPrice()."$</h6>";
        echo "<h6 class='text-center'>".$product->getSpecial()."</h6>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        if ($count == 4) {
            echo "<div class='w-100 mt-3'></div>";
            $count = 0;
        }
    }
}
?>