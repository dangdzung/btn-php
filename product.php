<?php include 'header.php';
$id = !empty($_GET['id']) ? (int)$_GET['id']:0;
$query = $conn -> query("SELECT *,price - (price * sale)/100 as salePrice FROM product where id = $id");
$product = $query->fetch_Object();
?>
<!-- about section -->

<section class="about_section layout_padding">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="upload/<?php echo $product->image;?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            <?php echo $product->name;?>
                        </h2>
                    </div>
                    <p> <?php echo substr(strip_tags($product->description),0,500);?></p>
                    <?php if($customer) : ?>
                    <form action="cart-process.php" method="GET" role="form" class="form-inline">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $product->id ?>"
                                placeholder="Input field">
                            <input type="number" class="form-control" name="quantity" value="1" id=""
                                placeholder=" Input field">
                        </div>
                        <button type="submit" class="btn btn-success ml-1"><i class="fa fa-shopping-cart"></i> Add To
                            Cart</button>
                    </form>
                    <?php else :?>
                    <form action="" method="POST" role="form" class="form-inline">
                        <div class="form-group"> <input type="number" class="form-control" id=""
                                placeholder="Input field">
                        </div>
                        <a href="login.php" onclick="alert('Bạn cần phải đăng nhập')">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </form>
                    <?php endif;?>



                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h4>Product details</h4>
                <?php echo $product->description?>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<!-- footer section -->
<?php include 'footer.php'  ?>