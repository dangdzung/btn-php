<?php include 'header.php';
$data = $conn->query("SELECT * FROM category Order By id DESC");
if(!empty($_GET['search_key'])){
    $key = $_GET['search_key'];
    $data = $conn->query("SELECT * FROM category where name like '%$key%' Order By id DESC");
}
?>

<div class="content-wrapper subject">
    <section class="content-header">
        <h1>
            Khóa học
        </h1>

    </section>
    <section class="content-header d-flex justify-content-between subject-head">
        <h3>
            Khóa đơn
        </h3>
        <button class="btn btn-primary ">+ Thêm mới khóa học</button>
    </section>

    <!-- Main content -->
    <section class="content subject">
        <div class="box">
            <div class="box-body">
                <form action="" method="GET" class="form-inline">

                    <div class="radio">
                        <label>
                            <input type="radio" name="" id="input" value="" checked="checked">
                            Tất cả
                        </label>
                        <label>
                            <input type="radio" name="" id="input" value="">
                            Hoạt động
                        </label>
                        <label>
                            <input type="radio" name="" id="input" value="">
                            Dừng hoạt động
                        </label>
                    </div>

                    <div class="form-group">
                        <input type="text" name="search_key" class="form-control" id="" placeholder="Tìm kiếm">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </form>
                <p>Danh sách</p>
                <div class="subject-in4">
                    <div class="subject-in4__img">
                        <img src="./dist/img/Nghiên-cứu-khoa-học.jpg" alt="">
                    </div>
                    <p class="subject-in4__desc">Hướng dẫn khởi tạo website</p>
                    <div class="subject-in4__time">
                        <p>HOẠT ĐỘNG</p>
                        <span>CHỈNH SỬA: 9/23/2024</span>
                    </div>
                </div>
                <hr>
                <div class="subject-in4">
                    <div class="subject-in4__img">
                        <img src="./dist/img/Nghiên-cứu-khoa-học.jpg" alt="">
                    </div>
                    <p class="subject-in4__desc">Hướng dẫn khởi tạo website</p>
                    <div class="subject-in4__time">
                        <p>HOẠT ĐỘNG</p>
                        <span>CHỈNH SỬA: 9/23/2024</span>
                    </div>
                </div>
                <hr>
                <div class="subject-in4">
                    <div class="subject-in4__img">
                        <img src="./dist/img/Nghiên-cứu-khoa-học.jpg" alt="">
                    </div>
                    <p class="subject-in4__desc">Hướng dẫn khởi tạo website</p>
                    <div class="subject-in4__time">
                        <p>HOẠT ĐỘNG</p>
                        <span>CHỈNH SỬA: 9/23/2024</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<?php include 'footer.php' ?>