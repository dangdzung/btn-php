<?php 
include 'header.php';
if(!$customer){
    header('location: login.php');
}
$customer_id = $customer -> id;
$sql = "SELECT c.id, c.price, c.quantity, SUM(c.price * c.quantity) as sub_total, p.name, p.image, c.product_id from cart c join product p on p.id = c.product_id where c.customer_id = $customer_id group by c.id";
$query = $conn->query($sql);
?>

<section class="food_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="checkout-process.php" method="POST" role="form">
                    <div class="heading_container heading_center">
                        <h2>
                            Checkout Form
                        </h2>
                    </div>
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $customer->name;?>"
                            placeholder="Input field">
                    </div>

                    <div class="form-group">
                        <label for="">Điên thoại</label>
                        <input type="text" name="phone" class="form-control" value="<?php echo $customer->phone ?>"
                            placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $customer->address ?>"
                            placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $customer->email ?>"
                            placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Ghi chú đơn hàng</label>

                        <textarea name="order_note" class="form-control" placeholder="Ghi chú yêu cầu"></textarea>

                    </div>


                    <button type="submit" class="btn btn-success">Đặt hàng</button>
                </form>

            </div>
            <div class="col-md-8">
                <div class="heading_container heading_center">
                    <h2>
                        Shopping cart
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
                                    <input type="number" name="quantity"
                                        style="width:80px; text-align:center;font-weight:bold;"
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
                </div>
            </div>
        </div>

    </div>
</section>


<?php include 'footer.php'; ?>