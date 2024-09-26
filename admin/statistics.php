<?php include 'header.php';
?>

<div class="content-wrapper subject">
    <section class="content-header">
        <h1>
            Thống kê tổng quan
        </h1>

    </section>

    <!-- Main content -->

    <hr class="border border-3 bg-primary">
    <div class="statistics">
        <div class="statistics-list">
            <div class="statistics-item">
                <span>1</span>
                <p><i class="fa-solid fa-user"></i> Học viên</p>
            </div>
            <div class="statistics-item">
                <span>1</span>
                <p><i class="fa-solid fa-cart-shopping"></i> Đơn hàng </p>
            </div>
            <div class="statistics-item">
                <span>1</span>
                <p><i class="fa-solid fa-tag"></i>Doanh thu</p>
            </div>
            <div class="statistics-item">
                <span>1</span>
                <p><i class="fa-solid fa-camera"></i>User Active</p>
            </div>

        </div>

        <h2>Xếp hạng khóa học</h2>
        <form action="" method="POST" role="form">
            <select name="" id="input" required="required">
                <option value="">Theo tổng số đơn hàng</option>
            </select>
        </form>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Khóa học</th>
                    <th>Đơn hàng</th>
                    <th>Doanh thu</th>
                    <th>UserActive</th>
                    <th>Số lần học</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>


<?php include 'footer.php' ?>