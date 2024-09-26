<?php
include 'header.php';
// $newProduct = $conn -> query("SELECT *,price - (price * sale)/100 as salePrice FROM product Order By id DESC limit 6");
// $saleProduct = $conn -> query("SELECT *,price - (price * sale)/100 as salePrice FROM product where sale > 0 Order By id DESC limit 6");
// $randomProduct = $conn -> query("SELECT *,price - (price * sale)/100 as salePrice FROM product  Order By rand() DESC limit 6");
?>

<section>
    <div class="slogan">
        <img class="slogan-img__one" src="./images/anh1.png" alt="">
        <h1 class="slogan-title">FastLearn</h1>
        <h3 class="slogan-title__two">Nhanh chóng, Hiệu quả, Vươn xa</h3>
        <p class="slogan-desc">Tiệm cận với chi thức là cách để thành công</p>
        <a class="btn btn-primary mt-5">Khám phá các khóa học </a>
        <img class="slogan-img__two" src="./images/anh2.png" alt="">
    </div>
</section>
<section class="course">
    <div class="inner-wrap">
        <div class="container">
            <h1 class="course-title">Các ngành được yêu thích</h1>
            <div class="course-list">
                <div class="course-item">
                    <a href="chitiet.php">
                        <img src="./images/khcn.jpeg" alt="">
                        <p class="course-desc">Khoa học công nghệ</p>
                    </a>
                </div>
                <div class="course-item">
                    <img src="./images/qtkd.jfif" alt="">
                    <p class="course-desc">Quản trị kinh doanh</p>
                </div>
                <div class="course-item">
                    <img src="./images/anhngoaingu.jpg" alt="">
                    <p class="course-desc">Ngoại ngữ</p>
                </div>
                <div class="course-item">
                    <img src="./images/dulich.jpg" alt="">
                    <p class="course-desc">Dịch vụ du lịch</p>
                </div>
            </div>
            <a href="all-courses.php" class="course-all">Xem tất cả các ngành </a>
        </div>
    </div>
</section>
<section class="course-favorite">
    <div class="container">
        <h1>Khóa học nổi bật</h1>
        <div id="featuredCoursesCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                            <a href=""><img src="./images/dulich.jpeg" class="d-block w-100"
                                    alt="Khóa học Data Visualization"></a>
                            <p>Khóa học Data Visualization</p>
                        </div>
                        <div class="col">
                            <a><img src="./images/khcn.jpeg" class="d-block w-100" alt="Khóa học Digital Marketing"></a>
                            <p>Khóa học Digital Marketing</p>
                        </div>
                        <div class="col">
                            <a><img src="./images/khcn.jpeg" class="d-block w-100" alt="IELTS 7.0+"></a>
                            <p>IELTS 7.0+</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <a><img src="./images/khcn.jpeg" class="d-block w-100" alt="Khóa học lập trình Web"></a>
                            <p>Khóa học lập trình Web</p>
                        </div>
                        <div class="col">
                            <a><img src="./images/khcn.jpeg" class="d-block w-100" alt="Khóa học lập trình Python"></a>
                            <p>Khóa học lập trình Python</p>
                        </div>
                        <div class="col">
                            <a> <img src="./images/khcn.jpeg" class="d-block w-100" alt="Khóa học Trí tuệ nhân tạo"></a>
                            <p>Khóa học Trí tuệ nhân tạo</p>
                        </div>
                    </div>
                </div>

                <!-- Add more carousel items as needed -->
            </div>

            <!-- Controls for the carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#featuredCoursesCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featuredCoursesCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container"></div>
</section>
<section class="banner">
    <div class="inner-wrap">
        <img class="banner-img" src="./images/banner.jpg" alt="">
        <p>SALE 30%</p>
        <span>4/10-20/10</span>
    </div>
</section>
<section class="achievement">
    <div class="inner-wrap">
        <div class="container">
            <div class="achievement-top">
                <h1 class="achievement-top__title">Bạn nhận được khi học ở FastLearn</h1>
                <div class="achievement-top__img">
                    <img src="./images/hoc-tap.jpg" alt="">
                    <div class="achievement-top__desc achievement-top__desc-1">Tiến trình theo dõi và đánh giá</div>
                    <div class="achievement-top__desc achievement-top__desc-2">Kiến thức và kỹ năng thực chiến</div>
                    <div class="achievement-top__desc achievement-top__desc-3">Thời gian học tập linh hoạt</div>
                    <div class="achievement-top__desc achievement-top__desc-4">Phương pháp học tiên tiến</div>
                </div>
            </div>
            <div class="achievement-bottom">
                <h1 class="achievement-bottom__title">Các học viên xuất sắc</h1>
                <div class="achievement-bottom__info">
                    <div class="achievement-left">
                        <p>Thành <span>tích</span></p>
                        <p class="achievement-left__desc">Với sự cố gắng không ngừng bạn đã đạt thành tích xuất sắc! Sự
                            nỗ lực của bạn là tấm gương sáng cho mọi người noi theo. Tiếp tục phát huy nhé!</p>
                        <div class="achievement-left__bottom">
                            <div class="achievement-bottom__left">
                                <span>365+</span>
                                <p>
                                    Học viên tốt nghiệp với
                                    thành tích <span>xuất sắc</span></p>
                            </div>
                            <div class="achievement-bottom__right">
                                <span>700+</span>
                                <p>
                                    Học viên tốt nghiệp với
                                    thành tích <span>giỏi</span> trở lên</p>
                            </div>
                        </div>
                    </div>
                    <div class="achievement-right">
                        <img src="./images/ava1.jpg" alt="">
                        <img src="./images/ava2.jpg" alt="">
                        <img src="./images/ava3.jpg" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php')?>