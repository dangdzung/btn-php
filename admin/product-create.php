<?php include 'header.php';
 $errors = []; 
 $image='';
 $cats = $conn->query("SELECT id,name FROM category Order By name ASC");
 if(!empty($_FILES['img']['name'])){
    $image = time().'-'.$_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp_name,'../upload/'.$image);
 }
 if(isset($_POST['name'])){ 
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sale =!empty($_POST['sale']) ? $_POST['sale'] : 0;
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $status = $_POST['status']; 
    if($name == ''){ 
        $errors['name'] = 'Tên sản phẩm không được trống'; 
    }
    if($category_id == ''){ 
        $errors['category_id'] = 'Danh mục sản phẩm không được trống'; 
    }
    if($image == ''){ 
        $errors['image'] = 'Ảnh danh mục sản phẩm không được trống'; 
    }

    if($price == ''){ 
        $errors['price'] = 'Giá sản phẩm không được trống'; 
    }else if(!is_numeric($price)){
        $errors['price'] = 'Giá sản phẩm phải là số'; 
    }

    if($sale == '' && !is_numeric($sale)){ 
        $errors['sale'] = 'Khuyến mãi phải là số'; 
    }else if($sale < 0|| $sale > 100){
        $errors['sale'] = 'Tỉ lệ khuyến mãi từ 0 đến 100'; 
    }
    
    $query = $conn->query("SELECT * FROM product where name='$name'"); 
    if( $query->num_rows>0){ 
        $errors['name']=  'Tên danh mục đã được sử dụng'; 
        } 
    if(!$errors){ 
        $sql = "INSERT INTO product (name,price,sale,image,category_id,description,status) values('$name','$price','$sale','$image','$category_id','$description','$status')"; 
        if($conn->query($sql)){ 
            header('location: product.php'); 
        } 
        else{ $errors['failed'] = 'Thêm mới không thành công!'; 
        } 
    } 
} ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1> Create product </h1>
    </section> <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-body">
                <?php if($errors): ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php foreach ($errors as $error):?>
                    <li><?php echo $error?></li>
                    <?php endforeach?>
                </div>
                <?php endif;?>
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-group"> <label for="">Tên sản phẩm</label> <input type="text"
                                            name="name" class="form-control" id="" placeholder="Input name"> </div>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="">Mô tả sản phẩm</label>
                                        <textarea name="description" id="input" class="form-control description"
                                            placeholder=" Nhập nội dung mô tả" rows=" 8"></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="">Chọn danh mục</label>

                                        <select name="category_id" id="input" class="form-control">
                                            <?php 
                                        while ($cat = $cats->fetch_object()): ?>
                                            <option value="<?php echo $cat->id; ?>">
                                                <?php echo $cat->name; ?>
                                            </option>
                                            <?php endwhile; ?>
                                        </select>


                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group"> <label for="">Giá sản phẩm</label> <input type="number"
                                                name="price" class="form-control" id="" placeholder="Input name">
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group"> <label for="">Giá khuyến mãi</label> <input
                                                type="number" name="sale" class="form-control" id=""
                                                placeholder="Input name"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Trạng thái</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="status" value="1" checked>
                                                Hiển thị
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="status" value="0" checked>
                                                Tạm ẩn
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group"> <label for="">Ảnh đại diện</label>
                                            <input type="file" id="input_img" name=" img" class="form-control"
                                                onchange="SHOW_IMG()">
                                            <img width="100%" id="img">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu
                                        lại</button>
                                    <a href="category.php" class="btn btn-sm btn-warning"><i
                                            class="fa fa-arrow-left"></i> Quay lại</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php' ?>
<script>
function SHOW_IMG() {
    let imgInput = document.getElementById('input_img');
    let img = document.getElementById('img');
    const [file] = imgInput.files
    if (file) {
        img.src = URL.createObjectURL(file);
    }
}
</script>