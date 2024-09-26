<?php include 'header.php';
$id = !empty($_GET['id']) ? (int)$_GET['id'] : 0;
$sql = "SELECT od.price, od.quantity, SUM(od.price*od.quantity) as total, p.name FROM order_detail od JOIN product p ON p.id = od.product_id where od.order_id = $id  GROUP BY p.id";
$query = $conn->query($sql);
$orderQuery = $conn->query("SELECT * from orders where id = $id");
$order = $orderQuery->fetch_object();

if(isset($_POST['status'])){
    $status = $_POST['status'];
    $sqlUp = "UPDATE orders set status  = $status where id =$id";
    if($conn->query($sqlUp)){
        header('location: order-detail.php?id='.$id);
    }
}

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Quản lý đơn hàng
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <?php if($order->status!=2):?>
                        <form action="" method="POST" role="form">
                            <legend>Cập nhật trạng thái</legend>
                            <?php if ($order->status == 0) : ?>
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <strong>Trạng thái: Đơn hàng mới!</strong>
                            </div>

                            <?php elseif ($order->status == 1) : ?>
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <strong>Trạng thái: đang giao hàng!</strong>
                            </div>

                            <?php elseif ($order->status == 2) : ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <strong>Trạng thái: đã xong!</strong>
                            </div>

                            <?php else : ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <strong>Trạng thái: đã hủy!</strong>
                            </div>

                            <?php endif; ?>

                            <div class="form-group">
                                <label for="">label</label>
                                <select name="status" class="form-control" required="required"
                                    <?php echo $order->status==2?' disabled':''?>>
                                    <option value="">Chọn trạng thái</option>
                                    <option value="0" <?php echo $order->status==0?'selected':''?>>Đơn hàng mới</option>
                                    <option value="1" <?php echo $order->status==1?'selected':''?>>Đang giao</option>
                                    <option value="2" <?php echo $order->status==2?'selected':''?>>Đã xong</option>
                                    <option value="3" <?php echo $order->status==3?'selected disable':''?>>Đã hủy
                                    </option>
                                </select>

                            </div>
                            <button type="submit" class="btn btn-primary"
                                <?php echo $order->status==2?' disabled':''?>>Submit</button>
                        </form>
                        <?php else : ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Trạng thái: đã xong!</strong>
                        </div>

                        <div class="jumbotron">
                            <div class="container">
                                <h4>Đơn hàng hoàn thành!</h4>
                                <p>Contents ...</p>
                                <p>
                                    <a href="order.php" class="btn btn-primary btn-lg">Vể danh sách</a>
                                </p>
                            </div>
                        </div>

                        <?php endif; ?>
                    </div>
                    <div class="col-md-9">
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
                                <p>Họ tên: <?php echo $order->name?></p>
                                <p>Số ĐT: <?php echo $order->phone?></p>
                            </div>
                            <div class="od-customer">
                                <p>Địa chỉ: <?php echo $order->address?></p>
                                <p>Email: <?php echo $order->email?></p>
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
                    </div>

                </div>


            </div>
        </div>
    </section>
</div>

<?php include 'footer.php' ?>