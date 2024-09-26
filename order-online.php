<?php 
include 'header.php';
if(!$customer){
    header('location: login.php');
}
$customer = $_SESSION['cur_login'];
$customer_id = $customer -> id;
$sql = "SELECT o.*,SUM(od.quantity) as quantity, SUM(od.price*od.quantity) as total from orders o JOIN order_detail od ON od.order_id  = o.id  where o.customer_id = $customer_id group by o.id order by id desc";
$query = $conn->query($sql);


?>

<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Your Order History
            </h2>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ngày đặt</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Tổng số lượng</th>
                    <th>Tổng tiền</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1; while($od = $query->fetch_object()):?>
                <tr>
                    <td>
                        <?php echo $n; ?>
                    </td>
                    <td>
                        <?php echo $od->order_date; ?>
                    </td>
                    <td>
                        <?php echo $od->name;?></td>
                    <td>
                    </td>
                    <td><?php echo $od->phone;?></td>
                    <td><?php echo $od->quantity;?></td>
                    <td><?php echo number_format($od->total)?> vnđ</td>
                    <td>
                        <a href="order-detail.php?id=<?php echo $od->id;?>" class="btn btn-sm btn-danger">Chi tiết</a>
                    </td>
                </tr>
                <?php $n++; endwhile;?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="index.php" class="btn btn-success">Continue shopping</a>
        </div>

    </div>
</section>


<?php include 'footer.php'; ?>