<?php 
include 'header.php';
if(!$customer){
    header('location: login.php');
}
$customer = $_SESSION['cur_login'];
$customer_id = $customer -> id;
$sql = "SELECT c.id, c.price, c.quantity, SUM(c.price * c.quantity) as sub_total, p.name, p.image, c.product_id from cart c join product p on p.id = c.product_id where c.customer_id = $customer_id group by c.id";
$query = $conn->query($sql);


?>

<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Your shopping cart
            </h2>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Sub total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; while($cart = $query->fetch_object()) : $total+=$cart->quantity*$cart->price ?>
                <tr>
                    <td><img src="upload/<?php echo $cart->image?>" alt="" width="40"></td>
                    <td><?php echo $cart->name;?></td>
                    <td>
                        <form action="cart-process.php" method="get">
                            <input type="hidden" name="cart_id" value="<?php echo $cart->id;?>">
                            <input type="hidden" name="action" value="update">
                            <input type="number" name="quantity" style="width:80px; text-align:center;font-weight:bold;"
                                value="<?php echo $cart->quantity?>">
                            <button>Update</button>
                        </form>
                    </td>
                    <td><?php echo $cart->price;?></td>
                    <td><?php echo $cart->sub_total;?></td>
                    <td><a href="cart-process.php?cart_id=<?php echo $cart->id;?>&action=delete"
                            class="btn btn-sm btn-danger">&times;</a></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
        <div class="text-center">
            <div class="cart-total">
                <h2>Total: <?php echo number_format($total)?> vnđ</h2>
            </div>
            <br>
            <a href="index.php" class="btn btn-success">Continue shopping</a>
            <a href="checkout.php" class="btn btn-danger">Checkout Process</a>
        </div>

    </div>
</section>


<?php include 'footer.php'; ?>