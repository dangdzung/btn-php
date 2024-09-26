<?php include 'header.php' ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Thống kê
        </h1>
    </section>
    <div class="col-md-10 content-area">
        <div class="row mt-4 index">
            <div class="col-md-3">
                <div class="stats-box bg-info p-5 rounded">
                    <h4>15</h4>
                    <p> Lượt mua</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box bg-success  p-5 rounded">
                    <h4>200</h4>
                    <p> Người học</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box bg-warning  p-5 rounded">
                    <h4>50</h4>
                    <p> Giảng viên</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box bg-primary  p-5 rounded">
                    <h4>51</h4>
                    <p> Khóa học</p>
                </div>
            </div>
        </div>

        <!-- Posts Management -->
        <div class="row mt-5 ">
            <div class="col-md-12 d-flex justify-content-between">
                <h5>Bài viết</h5>
                <button class="btn btn-primary">Tạo bài viết</button>
                <div class="index-input"><i class="fa-solid fa-magnifying-glass"></i><input type="text" name=""
                        placeholder="Tìm kiếm"></div>
            </div>

            <!-- Posts Table -->
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tiêu đề</th>
                            <th>Người đăng</th>
                            <th>Thời gian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Xin chào</td>
                            <td>Admin</td>
                            <td>15h30 ngày 23/09/2012</td>
                        </tr>
                        <!-- Thêm các bài viết khác tại đây -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>