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
        <div class="admin-main-content">
            <h1>Quản lý Bài đăng</h1>

            <!-- Nút thêm bài đăng mới -->
            <button class="add-post-button" onclick="openPostForm()">
                Thêm bài đăng mới
            </button>

            <!-- Bảng danh sách bài đăng -->
            <table class="posts-table">
                <thead>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Tác giả</th>
                        <th>Nội dung</th>
                        <th>Ngày đăng</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody id="postList">
                    <tr>
                        <td>Bài đăng 1</td>
                        <td>Admin</td>
                        <td>Nội dung của bài đăng 1</td>
                        <td>28/09/2024</td>
                        <td>
                            <button onclick="editPost(this)">Sửa</button>
                            <button onclick="deletePost(this)">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bài đăng 2</td>
                        <td>Admin</td>
                        <td>Nội dung của bài đăng 2</td>
                        <td>29/09/2024</td>
                        <td>
                            <button onclick="editPost(this)">Sửa</button>
                            <button onclick="deletePost(this)">Xóa</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Form thêm/sửa bài đăng -->
            <div id="postForm" style="display: none">
                <h2 id="formTitle">Thêm bài đăng mới</h2>
                <form>
                    <label for="postTitle">Tiêu đề bài đăng:</label>
                    <input type="text" id="postTitle" name="postTitle"
                        placeholder="Nhập tiêu đề bài đăng" /><br /><br />

                    <label for="postContent">Nội dung bài đăng:</label><br />
                    <textarea id="postContent" rows="6" cols="50"
                        placeholder="Nhập nội dung bài đăng"></textarea><br /><br />

                    <button type="button" onclick="savePost()">
                        Lưu bài đăng
                    </button>
                    <button type="button" onclick="closePostForm()">Hủy</button>
                </form>
            </div>

            <!-- Thông báo -->
            <p id="responseMessage" style="display: none"></p>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>