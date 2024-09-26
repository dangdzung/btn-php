<?php 
include 'header.php';
$id =!empty($_GET['id'])?(int)$_GET['id']:0;
$error = '';
if($id){
    $query = $conn->query("SELECT * FROM category where id='$id'");
    $cat = $query->fetch_object();
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $status = $_POST['status'];
        if($name == ''){
            $error = 'Tên danh mục không được trống';
        }
        if(!$error){
            $sql = "update category set name = '$name', status ='$status' where id = $id";
            if($conn->query($sql)){
                header('location: category.php');
            }
            else{
                $error = 'Cập nhật không thành công, vui lòng thử lại!';
            }
        }
    }
}else{
    $error = 'Bạn chưa chọn danh mục để sửa';  
}


?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit category
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-body">

                <?php 
                    if($error):
                ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Lỗi </strong> <?php echo $error?>
                </div>
                <?php endif;?>
                <form action="" method="POST" role="form">
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="name" class="form-control" id="" value="<?php echo $cat->name; ?>"
                            placeholder="Input name">
                    </div>
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" value="1" <?php echo $cat->status==1?'checked':''?>>
                                Hiển thị
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" value="0" <?php echo $cat->status==0?'checked':''?>>
                                Tạm ẩn
                            </label>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
                    <a href="category.php" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> Quay lại</a>
                </form>

            </div>

        </div>
    </section>
</div>

<?php include 'footer.php' ?>