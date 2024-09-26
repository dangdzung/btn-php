<?php
ob_start();
include 'header.php';
// $conn = new Mysqli('localhost','root','','project_1');
if($customer){
    $customer_id = $customer->id;
    $product_id = !empty($_GET['id']) ? (int)$_GET['id'] : 0;
    $quantity = !empty($_GET['quantity']) ? (int)$_GET['quantity'] : 1;
    $action = !empty($_GET['action']) ? $_GET['action'] : 'add';

    if($action=='add'){
        $checkE = checkExists($product_id,$customer_id,$conn);
        if($checkE){
            $qtt = $checkE->quantity;
            $newQTT = $qtt + $quantity;
            $sqlCheck = "UPDATE cart set quantity = $newQTT  where id = {$checkE -> id}";
            $conn->query($sqlCheck);
        }else{
            $sqlCheck = "SELECT price from product where id = $product_id";
            $query = $conn->query($sqlCheck);
            if($query->num_rows > 0){
                $product = $query->fetch_object();
                $price = $product->price;
                $sqlInsert = "INSERT INTO cart(customer_id, product_id, quantity, price) values($customer_id,$product_id, $quantity, $price)";
                $conn->query($sqlInsert);
                
            }  
        }
        header('location: cart-view.php');
    }
    if($action == 'delete'){
        $cart_id = !empty($_GET['cart_id']) ? (int)$_GET['cart_id'] : 0;
        $conn -> query("DELETE FROM cart WHERE id = $cart_id");
        header('location: cart-view.php');
    }
    if($action == 'update'){
        $cart_id = !empty($_GET['cart_id']) ? (int)$_GET['cart_id'] : 0;
        $conn -> query("UPDATE cart set quantity = $quantity where id = $cart_id");
        header('location: cart-view.php');

    }
        
}
else{
    header('location: login.php');
}

function checkExists($product_id,$customer_id,$conn){
    $sqlCheckE = "SELECT * FROM cart where product_id = $product_id and customer_id = $customer_id";
    $queryE = $conn -> query($sqlCheckE);
    if($queryE ->num_rows > 0){
        return $queryE -> fetch_object();
    }
    return false;
}

?>