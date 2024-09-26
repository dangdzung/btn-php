<?php include('header.php');
$cats = $conn->query("SELECT id,name FROM category Order By name ASC");
$products = $conn -> query("SELECT *,price - (price * sale)/100 as salePrice FROM product Order By id DESC");
$category='';
if(!empty($_GET['cat'])){
    $catId = $_GET['cat'];
    $products = $conn -> query("SELECT *,price - (price * sale)/100 as salePrice FROM product where category_id = $catId Order By id DESC");
    $catQuery = $conn->query("SELECT id, name FROM category WHERE id = $catId");
    if($catQuery->num_rows>0){
        $category=$catQuery->fetch_Object();
    }
}
?>
<!-- end header section -->
</div>

<!-- food section -->

<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                <?php if($category) : ?>
                <?php echo $category->name?>
                <?php else : ?>
                Our Product
                <?php endif;?>
            </h2>
        </div>

        <ul class="filters_menu">
            <li class=""><a href="menu.php">All</a></li>
            <?php while($cat=$cats->fetch_Object()) : ?>
            <li class="<?php echo $cat->id == $catId ? 'active' : '' ;?>">
                <a href="menu.php?cat=<?php echo $cat->id?>"><?php echo $cat->name?></a>
            </li>
            <?php endwhile;?>
        </ul>

        <div class=" row grid">
            <?php while( $prod = $products->fetch_Object()) :?>
            <div class="col-sm-6 col-lg-4 all product-item">

                <?php if($prod->sale>0):?>
                <span class="sale-notification"><?php echo $prod->sale;?>%</span>
                <?php endif;?>
                <div class="box">
                    <div>
                        <div class="img-box">
                            <img src="upload/<?php echo $prod->image;?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                <a href="product.php?id=<?php echo $prod->id;?>"><?php echo $prod->name;?></a>
                            </h5>
                            <p>
                                <?php echo substr(strip_tags($prod->description),0,200)?>
                            </p>
                            <div class="options">
                                <h6>
                                    <s><?php echo number_format($prod->price)?> vnd</s>
                                    <?php echo number_format($prod->salePrice)?> vnd
                                </h6>
                                <a href="">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- end food section -->

<!-- footer section -->
<?php include('footer.php')?>