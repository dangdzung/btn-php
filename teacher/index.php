<?php include 'header.php';  ?>

<section class="teacher-main">
    <div class="container">
        <div class="inner-wrap">
            <div class="d-flex">
                <!-- Sidebar -->
                <div class="sidebar p-3">
                    <div class="menu-item p-2" onclick="showContent('personal-management')">
                        <i class="bi bi-person"></i> Quản Lý Cá Nhân
                    </div>
                    <div class="menu-item p-2" onclick="toggleAccountMenu(),showContent('info')">
                        <i class=" bi bi-person"></i> Tài Khoản
                    </div>
                    <ul class="list-group" id="account-submenu" style="display: none;">
                        <li class="list-group-item" onclick="showContent('info')">
                            Thông tin cá nhân
                        </li>
                        <li class="list-group-item" onclick="showContent('password')">
                            Đổi mật khẩu
                        </li>
                        <li class="list-group-item" onclick="showContent('logout')">
                            Đăng xuất
                        </li>
                    </ul>
                </div>

                <!-- Main content -->
                <div class="" style="flex-grow: 1">
                    <!-- Quản lý cá nhân -->
                    <div id="personal-management" class="content-section">
                        <h2>Quản Lý Cá Nhân</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-secondary" onclick="showSubContent('student-exchange')">
                                    Trao đổi Học Viên
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-secondary" onclick="showSubContent('documents')">
                                    Tài Liệu
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-secondary" onclick="showSubContent('students')">
                                    Sinh Viên
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-secondary" onclick="showSubContent('tests')">
                                    Kiểm Tra
                                </button>
                            </div>
                        </div>

                        <!-- Phần nội dung phụ -->
                        <div id="student-exchange" class="sub-content mt-4">
                            <div class="student-list">
                                <div class="student-limit">
                                    <p>Hiển thị</p>
                                    <select name="" id="input" required="required">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                    </select>
                                </div>
                                <form method="POST">
                                    <div class="student-search">
                                        <input type="text" name="searchQuery" placeholder="Tìm kiếm sinh viên">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th>Mã ID</th>
                                        <th>Họ và Tên</th>
                                        <th>Giới Tính</th>
                                        <th>Lớp Theo Học</th>
                                        <th>SDT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>012</td>
                                        <td>Nguyễn Văn Long</td>
                                        <td>Nam</td>
                                        <td>QTKD-12</td>
                                        <td>0997652492</td>
                                    </tr>
                                    <tr>
                                        <td>314</td>
                                        <td>Chu Quang Vinh</td>
                                        <td>Nam</td>
                                        <td>KDNN-C1</td>
                                        <td>0337654454</td>
                                    </tr>
                                    <tr>
                                        <td>231</td>
                                        <td>Lê Văn Đốc</td>
                                        <td>Nam</td>
                                        <td>LKT-23</td>
                                        <td>0982334452</td>
                                    </tr>
                                    <tr>
                                        <td>435</td>
                                        <td>Nguyễn Kiên</td>
                                        <td>Nam</td>
                                        <td>LKT-23</td>
                                        <td>0937657482</td>
                                    </tr>
                                    <tr>
                                        <td>092</td>
                                        <td>Đỗ Tiến Văn</td>
                                        <td>Nữ</td>
                                        <td>KDNN-C1</td>
                                        <td>0387654452</td>
                                    </tr>
                                    <tr>
                                        <td>234</td>
                                        <td>Trịnh Văn Giang</td>
                                        <td>Nữ</td>
                                        <td>QTKD-12</td>
                                        <td>0887659952</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="documents" class="sub-content mt-4" style="display: none">
                            <h3>Tài Liệu</h3>
                            <p>Nội dung tài liệu sẽ hiển thị ở đây.</p>
                        </div>

                        <div id="students" class="sub-content mt-4" style="display: none">
                            <h3>Sinh Viên</h3>
                            <p>Nội dung về sinh viên sẽ hiển thị ở đây.</p>
                        </div>

                        <div id="tests" class="sub-content mt-4" style="display: none">
                            <h3>Kiểm Tra</h3>
                            <p>Nội dung kiểm tra sẽ hiển thị ở đây.</p>
                        </div>

                        <!-- Bảng dữ liệu học viên -->
                    </div>

                    <!-- Quản lý tài khoản -->
                    <div id="account-management" class="content-section" style="display: none"></div>

                    <!-- Thông tin cá nhân -->
                    <div id="info" class="content-section teacher-content__section" style="display: none">
                        <h2>Thông tin cá nhân</h2>
                        <img src="https://via.placeholder.com/150" class="rounded-circle" alt="Avatar" />

                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="">Tên: </label>
                                <input type="text" id="" placeholder="Nguyễn Quốc Dũng">
                            </div>
                            <div class="form-group">
                                <label for="">Email: </label>
                                <input type="email" id="" placeholder="dung211224@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="">Điện thoại: </label>
                                <input type="text" id="" placeholder="0392392938">
                            </div>
                            <div class="form-group">
                                <label for="">Chức danh: </label>
                                <input type="text" id="" placeholder="Tổ trưởng">
                            </div>
                            <button type="submit" class="btn btn-primary">Chính sửa</button>
                        </form>
                    </div>

                    <!-- Đổi mật khẩu -->
                    <div id="password" class="content-section" style="display: none">
                        <h2>Đổi mật khẩu</h2>
                        <form class="change-password">
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Mật khẩu hiện tại</label>
                                <div><input type="password" id="currentPassword" /><i class="fa-regular fa-eye-slash "
                                        id="toggleCurrentPassword"></i>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Mật khẩu mới</label>
                                <div><input type="password" id="newPassword" /><i class="fa-regular fa-eye-slash"
                                        id="toggleNewPassword"></i></div>
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Xác nhận mất khẩu</label>
                                <div><input type="password" id="checkPassword" /><i class="fa-regular fa-eye-slash"
                                        id="toggleCheckPassword"></i></div>
                            </div><button type="submit" class="btn btn-danger">
                                Hủy
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Lưu thay đổi
                            </button>
                        </form>
                    </div>

                    <!-- Đăng xuất -->
                    <div id="logout" class="content-section" style="display: none">
                        <h2>Đăng xuất</h2>
                        <p>Bạn có chắc chắn muốn đăng xuất?</p>
                        <button class="btn btn-danger">Đăng xuất</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>