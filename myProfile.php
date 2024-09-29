<?php include 'header.php'; ?>

<section class="my-profile">
    <div class="container">
        <div class="inner-wrap">
            <div class="row my-profile__row">
                <!-- Sidebar Menu -->

                <div class="col-md-2 ">
                    <div class="my-profile__img"><img src="./images/ava2.jpg" alt=""></div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-account-tab" data-bs-toggle="pill"
                            href="#v-pills-account" role="tab" aria-controls="v-pills-account"
                            aria-selected="true">Thông tin tài khoản</a>
                        <a class="nav-link" id="v-pills-courses-tab" data-bs-toggle="pill" href="#v-pills-courses"
                            role="tab" aria-controls="v-pills-courses" aria-selected="false">Khóa học của tôi</a>
                        <a class="nav-link" id="v-pills-cart-tab" data-bs-toggle="pill" href="#v-pills-cart" role="tab"
                            aria-controls="v-pills-cart" aria-selected="false">Giỏ hàng</a>
                        <a class="nav-link" id="v-pills-history-tab" data-bs-toggle="pill" href="#v-pills-history"
                            role="tab" aria-controls="v-pills-history" aria-selected="false">Lịch sử giao dịch</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false">Cài đặt</a>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="col-md-6 my-profile__right">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- Account Information -->
                        <div class="tab-pane fade show active" id="v-pills-account" role="tabpanel"
                            aria-labelledby="v-pills-account-tab">
                            <h3 class="my-profile__title">Thông tin tài khoản</h3>
                            <p class="my-profile__info">Thông tin chung</p>
                            <form action="" method="POST" role="form" class="my-profile__form">
                                <div class="form-group">
                                    <label for="">Họ tên</label>
                                    <input type="text" id="">
                                </div>
                                <div class="form-check">
                                    <label for="">Giới tính</label>
                                    <div>
                                        <input type="radio" id="male" name="gender" value="male">
                                        <label for="male">Nam</label>
                                        <input type="radio" id="female" name="gender" value="female">
                                        <label for="female">Nữ</label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Tỉnh/TP:</label>
                                    <input type="text" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Quận/Huyện :</label>
                                    <input type="text" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Phường/Xã :</label>
                                    <input type="text" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ cụ thể :</label>
                                    <input type="text" id="">
                                </div>
                                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                            </form>

                            <!-- Avatar Update -->
                            <div>
                                <h5>Ảnh đại diện</h5>
                                <img src="https://via.placeholder.com/150" alt="Avatar" class="rounded-circle" />
                                <form>
                                    <input type="file" class="form-control mt-2" />
                                    <button type="submit" class="btn btn-primary mt-2">
                                        Tải ảnh mới lên
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- My Courses -->
                        <div class="tab-pane fade my-profile__myCourses" id="v-pills-courses" role="tabpanel"
                            aria-labelledby="v-pills-courses-tab">
                            <h3>Khóa học của tôi</h3>



                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pending-tab" data-bs-toggle="tab"
                                        data-bs-target="#pending" type="button" role="tab" aria-controls="pending"
                                        aria-selected="true">
                                        Đơn hàng chờ thanh toán
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="completed-tab" data-bs-toggle="tab"
                                        data-bs-target="#completed" type="button" role="tab" aria-controls="completed"
                                        aria-selected="false">
                                        Đơn hàng đã thanh toán
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="cancelled-tab" data-bs-toggle="tab"
                                        data-bs-target="#cancelled" type="button" role="tab" aria-controls="cancelled"
                                        aria-selected="false">
                                        Đơn hàng đã hủy
                                    </button>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content my-profile__courses" id="myTabContent">
                                <!-- Đơn hàng chờ thanh toán -->

                                <a type="submit" class="btn btn-primary">Thêm môn học</a>

                                <div class="tab-pane fade show active my-profile__courses-tab" id="pending"
                                    role="tabpanel" aria-labelledby="pending-tab">

                                    <div class="card course-card">
                                        <div class="my-profile__courses-img">
                                            <img src="https://via.placeholder.com/300x150"
                                                class="card-img-top course-img" alt="Course Image" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Khoa học máy tính</h5>
                                            <p class="card-text">Prof. Jane Smith</p>

                                            <!-- Dropdown Menu -->
                                            <div class="dropdown text-end">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-three-dots"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Danh sách</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Tạo danh sách mới</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Yêu thích</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger"
                                                            href="delete_course.php?id=1">Xóa</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Progress Bar -->
                                            <div class="progress my-3">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    40%
                                                    <!-- <?php echo $progress; ?>% -->
                                                </div>
                                            </div>

                                            <!-- Start Course Button -->
                                            <a href="#" class="btn btn-primary w-100 mt-3">Bắt đầu khóa học</a>
                                        </div>
                                    </div>
                                    <div class="card course-card">
                                        <div class="my-profile__courses-img">
                                            <img src="https://via.placeholder.com/300x150"
                                                class="card-img-top course-img" alt="Course Image" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Khoa học máy tính</h5>
                                            <p class="card-text">Prof. Jane Smith</p>

                                            <!-- Dropdown Menu -->
                                            <div class="dropdown text-end">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-three-dots"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Danh sách</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Tạo danh sách mới</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Yêu thích</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger"
                                                            href="delete_course.php?id=1">Xóa</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Progress Bar -->
                                            <div class="progress my-3">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    40%
                                                    <!-- <?php echo $progress; ?>% -->
                                                </div>
                                            </div>

                                            <!-- Start Course Button -->
                                            <a href="#" class="btn btn-primary w-100 mt-3">Bắt đầu khóa học</a>
                                        </div>
                                    </div>
                                    <div class="card course-card">
                                        <div class="my-profile__courses-img">
                                            <img src="https://via.placeholder.com/300x150"
                                                class="card-img-top course-img" alt="Course Image" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Khoa học máy tính</h5>
                                            <p class="card-text">Prof. Jane Smith</p>

                                            <!-- Dropdown Menu -->
                                            <div class="dropdown text-end">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-three-dots"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Danh sách</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Tạo danh sách mới</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Yêu thích</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger"
                                                            href="delete_course.php?id=1">Xóa</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Progress Bar -->
                                            <div class="progress my-3">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    40%
                                                    <!-- <?php echo $progress; ?>% -->
                                                </div>
                                            </div>

                                            <!-- Start Course Button -->
                                            <a href="#" class="btn btn-primary w-100 mt-3">Bắt đầu khóa học</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Đơn hàng đã thanh toán -->
                                <div class="tab-pane fade p-3" id="completed" role="tabpanel"
                                    aria-labelledby="completed-tab">
                                    <p>Hiện tại bạn không có đơn hàng đã thanh toán.</p>
                                </div>

                                <!-- Đơn hàng đã hủy -->
                                <div class="tab-pane fade p-3" id="cancelled" role="tabpanel"
                                    aria-labelledby="cancelled-tab">
                                    <p>Hiện tại bạn không có đơn hàng đã hủy.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Cart -->
                        <div class="tab-pane fade" id="v-pills-cart" role="tabpanel" aria-labelledby="v-pills-cart-tab">
                            <h3>Giỏ hàng</h3>
                            <p>Chưa có sản phẩm trong giỏ hàng.</p>
                        </div>

                        <!-- Transaction History -->
                        <div class="tab-pane fade my-profile__transaction" id="v-pills-history" role="tabpanel"
                            aria-labelledby="v-pills-history-tab">
                            <h2 class="text-primary">Lịch sử giao dịch</h2>
                            <!-- Tab Navigation -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pending-tab" data-bs-toggle="tab"
                                        data-bs-target="#pending" type="button" role="tab" aria-controls="pending"
                                        aria-selected="true">
                                        Đơn hàng chờ thanh toán
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="completed-tab" data-bs-toggle="tab"
                                        data-bs-target="#completed" type="button" role="tab" aria-controls="completed"
                                        aria-selected="false">
                                        Đơn hàng đã thanh toán
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="cancelled-tab" data-bs-toggle="tab"
                                        data-bs-target="#cancelled" type="button" role="tab" aria-controls="cancelled"
                                        aria-selected="false">
                                        Đơn hàng đã hủy
                                    </button>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content" id="myTabContent">
                                <!-- Đơn hàng chờ thanh toán -->
                                <div class="tab-pane fade show active p-3" id="pending" role="tabpanel"
                                    aria-labelledby="pending-tab">
                                    <p>Hiện tại bạn không có đơn hàng chờ thanh toán.</p>
                                </div>

                                <!-- Đơn hàng đã thanh toán -->
                                <div class="tab-pane fade p-3" id="completed" role="tabpanel"
                                    aria-labelledby="completed-tab">
                                    <p>Hiện tại bạn không có đơn hàng đã thanh toán.</p>
                                </div>

                                <!-- Đơn hàng đã hủy -->
                                <div class="tab-pane fade p-3" id="cancelled" role="tabpanel"
                                    aria-labelledby="cancelled-tab">
                                    <p>Hiện tại bạn không có đơn hàng đã hủy.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Settings -->
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <h3>Cài đặt</h3>
                            <p>Thông tin đăng nhập</p>
                            <form action="" method="POST" role="form" class="my-profile__form">
                                <div class="form-group">
                                    <label for="">Tên đăng nhập</label><br>
                                    <input type="text" id="" value="">
                                </div>


                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <br>
                                    <input type="text" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" id="" value="">
                                </div>
                                <div class="form-group">
                                    <label for="">Tỉnh/TP:</label>
                                    <input type="text" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Quận/Huyện :</label>
                                    <input type="text" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Phường/Xã :</label>
                                    <input type="text" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ cụ thể :</label>
                                    <input type="text" id="">
                                </div>
                                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                            </form>

                            <form action="" method="POST" role="form" class=" change-pass">
                                <p>Đổi mật khẩu</p>
                                <div class="form-group">
                                    <label for="">Mật khẩu cũ</label><br>
                                    <input type="password" id="" value="">
                                </div>
                                <div class="form-group">
                                    <label for="">Mật khẩu mới</label><br>
                                    <input type="password" id="" value="">
                                </div>
                                <div class="form-group">
                                    <label for=""> Nhập lại mật khẩu mới</label><br>
                                    <input type="password" id="" value="">
                                </div>
                                <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>