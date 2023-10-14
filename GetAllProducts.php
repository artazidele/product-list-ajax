<?php
include_once 'controller/ProductController.php';
$controller = new ProductController();
if(isset($_POST['delete']))
{
    $idArray = [];
    $checkbox = $_POST['checkboxDelete'];
    foreach ($checkbox as $box) {
        array_push($idArray, $box);
    }
    $productController->deleteProducts($idArray);
}

// $products = $controller->getAllProducts();
// showProducts($products);

// function showProducts($productArray) {
    echo "<form id='productForm' method='POST'>";
    echo "<div class='row mt-4'>";
    echo "<div class='col-md-8'>";
    echo "<h2>Product List</h2>";
    echo "</div>";
    echo "<div class='col-md-4 float-end'>";
    echo "<div class='float-end'>";
    echo "<a href='http://localhost/12-10-2023/add-product' class='btn btn-primary me-4' id='add_btn'>ADD</a>";
    echo "<input type='submit' class='btn btn-danger' name='delete' value='MASS DELETE' id='delete_btn'/>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<hr class='border border-2 border-dark'>";
    echo "<div>";
    $products = $productController->getAllProducts();
    if ($products) {
    echo "<div class='row'>";
    $count = 0;
    foreach ($productArray as $product) {
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
    echo "</div>";
    echo "</div>";
}
    echo "</form>";
// }
?>