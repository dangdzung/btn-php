<?php include 'header.php';
 $cats = $conn->query("SELECT id,name FROM category Order By name ASC");

 
$data = $conn->query("SELECT product.*, category.name as cat_name  FROM product JOIN category ON category.id = product.category_id Order By id DESC");

$key = isset($_GET['search_key'])?$_GET['search_key']:'';
$cat = isset($_GET['cat'])?$_GET['cat']:'';
if(!empty($key) && empty($cat)){
    $key = $_GET['search_key'];
    $data = $conn->query("SELECT product.*, category.name as cat_name  FROM product JOIN category ON category.id = product.category_id where product.name like '%$key%' Order By product.id DESC");
}
else if(empty($key) && !empty($cat)){
    $key = $_GET['search_key'];
    $data = $conn->query("SELECT product.*, category.name as cat_name  FROM product JOIN category ON category.id = product.category_id where product.category_id = $cat Order By product.id DESC");
}
else if(!empty($key) && !empty($cat)){
    $key = $_GET['search_key'];
    $data = $conn->query("SELECT product.*, category.name as cat_name  FROM product JOIN category ON category.id = product.category_id where  product.name like '%$key%' and product.category_id = $cat Order By product.id DESC");
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Product
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form action="" method="GET" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="search_key" class="form-control" id="" placeholder="Input field">
                    </div>

                    <div class="form-group">
                        <select name="cat" class="form-control">
                            <option value="">Danh mục ...</option>
                            <?php 
                            while ($cat = $cats->fetch_object()): ?>
                            <option value="<?php echo $cat->id; ?>">
                                <?php echo $cat->name; ?>
                            </option>
                            <?php endwhile; ?>
                        </select>

                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    <a href="product-create.php" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
                </form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price/ Sale</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($prod = $data->fetch_object()): ?>
                        <tr>
                            <td><?php echo $prod->id;?></td>
                            <td><?php echo $prod->name;?></td>
                            <td><?php echo $prod->cat_name;?></td>
                            <td>
                                <?php echo $prod->price; ?>
                                <span class="badge pull-right">
                                    <?php echo $prod->sale; ?>%
                                </span>
                            </td>
                            <td><?php echo $prod->status == 0 ?'Tạm ẩn':'Hiển thị';?></td>
                            <td><img src="../upload/<?php echo $prod->image?>" alt="" width="40"></td>

                            <td class="text-right">
                                <a href="product-edit.php?id=<?php echo $prod->id;?>" class="btn btn-sm btn-primary"><i
                                        class="fa fa-edit"></i>Edit</a>
                                <a onclick="return confirm('Có muốn xóa không?')"
                                    href="product-delete.php?id=<?php echo $prod->id;?>"
                                    class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</div>

<?php include 'footer.php' ?>