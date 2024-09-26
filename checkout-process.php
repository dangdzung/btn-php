<?php 
session_start();
include 'connect.php';
if(!empty($_SESSION['cur_login'])){
    $customer = $_SESSION['cur_login'];
    $customer_id = $customer ->id;
    $sql1 = "SELECT c.price, c.quantity, c.product_id  FROM cart c where c.customer_id = $customer_id";
    $query = $conn->query($sql1);

    
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $order_note = $_POST['order_note'];

        if($query->num_rows>0){
            $sql = "INSERT INTO orders(name, email, phone, address, order_note, customer_id) VALUES ('$name', '$email', '$phone', '$address', '$order_note', '$customer_id')";
            if($conn->query($sql)){
                $order_id = $conn ->insert_id;
                
                while($cart = $query->fetch_object()){
                    $product_id = $cart->product_id;
                    $quantity = $cart->quantity;
                    $price = $cart->price; 
                    $sqlDetail = "INSERT INTO order_detail(order_id, product_id, price, quantity) VALUES('$order_id', '$product_id', '$price', '$quantity')";
                    $conn->query($sqlDetail);
                }
                header('location: checkout-success.php');
            }else{
                header('location: checkout-error.php');
            }
            
        }else{
            header('location: checkout.php');
        }
    }
}else{
    header('location: login.php');
    
}




echo '<pre>';
print_r($_POST);
?>