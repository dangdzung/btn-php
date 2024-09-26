<?php include 'header.php';

$id =!empty($_GET['id'])?(int)$_GET['id']:0;
$error = '';
if($id){
    $query = $conn->query("SELECT * FROM product where category_id = '$id'");
    if($query->num_rows>0){
        $error= 'Danh mục này đang có sản phẩm không thể xóa!';
    }    
    else{
        if($conn->query("DELETE from category where id='$id'")){
            header('location: category.php');
        }else{
            $error = 'Bạn xóa không thành công';
        }
    }
}else{
    $error = 'Bạn chưa chọn danh mục để xóa';
}
 ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Delete Category
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
                <a href="category.php" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> Quay lại</a>
            </div>

        </div>
    </section>
</div>

<?php include 'footer.php' ?>