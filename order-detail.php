<?php 
include 'header.php';
if(!$customer){
    header('location: login.php');
}
$customer = $_SESSION['cur_login'];
$customer_id = $customer -> id;
$id = !empty($_GET['id']) ? (int)$_GET['id'] : 0;
$sql = "SELECT od.price, od.quantity, SUM(od.price*od.quantity) as total, p.name FROM order_detail od JOIN product p ON p.id = od.product_id where od.order_id = $id  GROUP BY p.id";
$query = $conn->query($sql);


?>

<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Your Order History
            </h2>
        </div>

        <div class="main-order">
            <div class="od-header">
                <h3>TRUNG TÂM THƯƠNG MẠI</h3>
                <p>Chuyên cung cấp các loại bàn ghế nội thất cao cấp</p>
                <p>ĐC: Trung Hòa, Cầu Giấy, Hà Nội</p>
                <p>Số ĐT: 0438943984- 03403403</p>
            </div>
            <div class="od-number">
                <h2>HÓA ĐƠN</h2>
                <h4>Số: <?php echo $id < 10?'0'.$id:$id ?></h4>
            </div>
            <div class="od-customer">
                <p>Họ tên: <?php echo $customer->name?></p>
                <p>Số ĐT: <?php echo $customer->phone?></p>
            </div>
            <div class="od-customer">
                <p>Địa chỉ: <?php echo $customer->address?></p>
                <p>Email: <?php echo $customer->email?></p>
            </div>
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1; $tt=0; while($od = $query->fetch_object()): $tt+=$od->total?>
                    <tr>
                        <td>
                            <?php echo $n; ?>
                        </td>
                        </td>
                        <td><?php echo $od->name;?></td>
                        <td><?php echo $od->quantity;?></td>
                        <td><?php echo number_format($od->price);?> vnđ</td>
                        <td><?php echo number_format($od->total);?> vnđ</td>
                    </tr>
                    <?php $n++; endwhile;?>
                    <tr class="total-money">
                        <th colspan="5">Tổng tiền: <?php echo number_format($tt)?> vnđ</th>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center">
            <a href="index.php" class="btn btn-success">Continue shopping</a>
        </div>

    </div>
</section>


<?php include 'footer.php'; ?>