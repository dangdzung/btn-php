<?php 
ob_start();
include 'header.php';
if($customer){
    header('location: index.php');
}
$errors = [];
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == ''){
        $errors['email'] = 'Email không được để trống';
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email không đúng định dạng';
    }

    if($password == ''){
        $errors['password'] = 'Mật khẩu không được để trống';
    }else if(strlen($password) < 4){
        $errors['password'] = 'Mật khẩu tối thiểu 4 ký tự';
    }
    
    if(!$errors){
        $sql = "SELECT * FROM customer WHERE email = '$email'";
        $query = $conn->query($sql);
        if($query->num_rows == 1){
            $customer = $query->fetch_object();
            if(password_verify($password, $customer->password)){
                $_SESSION['cur_login'] = $customer;
                header('location: index.php');
            }
            else{
                $errors['failed'] = 'Mật khẩu không chính xác';
            }
        }else{
            $errors['failed'] = 'Tài khoản hoặc mật khẩu không chính xác';
        }
    }
}
?>

<!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Login
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php if($errors):?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php foreach($errors as $error) : ?>
                    <li><?php echo $error?></li>
                    <?php endforeach;?>
                </div>
                <?php endif;?>
                <div class="form_container">
                    <form action="" method="POST">
                        <div>
                            <input type="email" class="form-control" placeholder="Your Email" name="email" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Your Password" />
                        </div>
                        <div class="btn_box">
                            <button>
                                Login now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <img width="100%"
                    src="https://www.vib.com.vn/wps/wcm/connect/07bafcaa-77ec-42f6-b36b-dc61ebedad11/token.png.webp?MOD=AJPERES&CACHEID=ROOTWORKSPACE-07bafcaa-77ec-42f6-b36b-dc61ebedad11-oKoX88E"
                    alt="">
            </div>
        </div>
    </div>
</section>
<!-- end book section -->

<!-- footer section -->
<?php include 'footer.php'?>