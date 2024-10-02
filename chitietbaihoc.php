<?php include 'header.php'; ?>

<section class="chitietbaihoc">
    <div class="container">
        <main class="main-content">
            <aside class="sidebar">
                <!-- Chương 1 -->
                <div class="chapter">
                    <h2>Chương 1: Làm quen với khóa học PHP</h2>
                    <ul class="lesson-list">
                        <li>
                            <a href="#" data-lesson="0" class="active">Bài 1: Giới thiệu</a>
                        </li>
                        <li>
                            <a href="#" data-lesson="1">Bài 2: Cấu trúc của PHP</a>
                        </li>
                        <li>
                            <a href="#" data-lesson="2">Bài 3: Cách sử dụng biến trong PHP</a>
                        </li>
                        <li>
                            <a href="#" data-lesson="3">Bài 4: Câu lệnh điều kiện trong PHP</a>
                        </li>
                    </ul>
                </div>

                <!-- Chương 2 -->
                <div class="chapter">
                    <h2>Chương 2: Các hàm và vòng lặp trong PHP</h2>
                    <ul class="lesson-list">
                        <li>
                            <a href="#" data-lesson="4">Bài 1: Giới thiệu về hàm</a>
                        </li>
                        <li>
                            <a href="#" data-lesson="5">Bài 2: Hàm có tham số</a>
                        </li>
                        <li>
                            <a href="#" data-lesson="6">Bài 3: Vòng lặp for và while</a>
                        </li>
                        <li>
                            <a href="#" data-lesson="7">Bài 4: Sử dụng foreach</a>
                        </li>
                    </ul>
                </div>

                <!-- Chương 3 -->
                <div class="chapter">
                    <h2>Chương 3: Làm việc với cơ sở dữ liệu</h2>
                    <ul class="lesson-list">
                        <li>
                            <a href="#" data-lesson="8">Bài 1: Kết nối cơ sở dữ liệu MySQL</a>
                        </li>
                        <li>
                            <a href="#" data-lesson="9">Bài 2: Truy vấn dữ liệu</a>
                        </li>
                        <li>
                            <a href="#" data-lesson="10">Bài 3: Thêm, sửa, xóa dữ liệu</a>
                        </li>
                        <li>
                            <a href="#" data-lesson="11">Bài 4: Sử dụng PDO trong PHP</a>
                        </li>
                    </ul>
                </div>
            </aside>

            <section class="content">
                <!-- <h1>Giới thiệu về PHP</h1>
                        <div class="section">
                            <h2>Những điều bạn nên biết</h2>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                            </ul>
                            <p>
                                Nếu bạn muốn học những môn này trước, hãy tìm hướng
                                dẫn trên <a href="#">Trang chủ</a> của chúng tôi.
                            </p>
                        </div> -->

                <div class="section" id="lesson-content">
                    <!-- The content will be dynamically changed here -->
                    <p>Content of the selected lesson will appear here.</p>
                </div>

                <div class="buttons">
                    <button class="previous">Bài trước</button>
                    <button class="next">Bài kế tiếp</button>
                </div>
            </section>
        </main>
    </div>
</section>

<?php include 'footer.php'; ?>