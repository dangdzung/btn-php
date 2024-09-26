<?php include 'header.php'; 
$error = ''; 
if(isset($_POST['name'])){ 
    $name = $_POST['name']; 
    $status = $_POST['status']; 
    if($name == ''){ $error = 'Tên danh mục không được trống'; } 
    $query = $conn->query("SELECT * FROM category where name='$name'"); 
    if( $query->num_rows>0){ $error=  'Tên danh mục đã được sử dụng'; } 
    if(!$error){ $sql = "INSERT INTO category (name,status) values('$name','$status')"; if($conn->query($sql)){ header('location: category.php'); } else{ $error = 'Thêm mới không thành công!'; } } } ?>
<div class="content-wrapper teacher">
    <section class="content-header d-flex justify-content-between">
        <h1> Teacher </h1>
        <a class="btn btn-primary">+ Teacher</a>
    </section> <!-- Main content -->
    <section class="content-header d-flex justify-content-between ">
        <select name="" id="input" required="required">
            <option value="">Sắp xếp</option>
            <option value="">1</option>
            <option value="">1</option>
            <option value="">1</option>
        </select>
        <div class="teacher-input">
            <label for="">Tìm kiếm</label>
            <input type="text" name="" id="">
        </div>
    </section>
    <hr>
    <section class="content">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tên </th>
                    <th>Email</th>
                    <th>Chức danh</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Phan Đăng Dũng</td>
                    <td>pdd@gmail.com</td>
                    <td>Học sinh</td>
                    <td><a class="btn btn-primary">Sửa</a></td>
                </tr>
                <tr>
                    <td>Phan Đăng Dũng</td>
                    <td>pdd@gmail.com</td>
                    <td>Học sinh</td>
                    <td><a class="btn btn-primary">Sửa</a></td>
                </tr>
                <tr>
                    <td>Phan Đăng Dũng</td>
                    <td>pdd@gmail.com</td>
                    <td>Học sinh</td>
                    <td><a class="btn btn-primary">Sửa</a></td>
                </tr>
                <tr>
                    <td>Phan Đăng Dũng</td>
                    <td>pdd@gmail.com</td>
                    <td>Học sinh</td>
                    <td><a class="btn btn-primary">Sửa</a></td>
                </tr>
            </tbody>
        </table>


    </section>
</div> <?php include 'footer.php' ?>