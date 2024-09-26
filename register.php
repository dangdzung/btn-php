<?php 
ob_start();
include 'header.php';
$errors = [];
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if($name == ''){
        $errors['name'] = 'Họ tên không được để trống';
    }else if(strlen($name) < 3){
        $errors['name'] = 'Họ tên tối thiểu 3 ký tự';
    }
    if($phone == ''){
        $errors['phone'] = 'Số điện thoại không được để trống';
    }else if(strlen($phone) < 10){
        $errors['phone'] = 'Số điện thoại tối thiểu 10 ký tự';
    }
    else{
        $sqlCheckP = "SELECT email from customer where phone = '$phone' AND id != {$customer->id}";
        $queryCheckP = $conn->query($sqlCheckP);
        if($queryCheckP->num_rows > 0){
            $errors['phone'] = 'Số điện thoại này đã được đăng ký, thử số điện thoại khác'; 
        }  
    }
    if($email == ''){
        $errors['email'] = 'Email không được để trống';
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email không đúng định dạng';
   }
    else{
        $sqlCheck = "SELECT email from customer where email = '$email' AND id != {$customer->id}";
        $queryCheck = $conn->query($sqlCheck);
        if($queryCheck->num_rows>0){
            $errors['email'] = 'Email này đã được đăng ký, thử email khác'; 
        }  
    }
    if($address == ''){
        $errors['address'] = 'Địa chỉ nơi ở không được để trống';
    }else if(strlen($address) < 10){
        $errors['address'] = 'Địa chỉ tối thiểu 10 ký tự';
    }
    if($password == ''){
        $errors['password'] = 'Mật khẩu không được để trống';
    }else if(strlen($password) < 4){
        $errors['password'] = 'Mật khẩu tối thiểu 4 ký tự';
    }
    
    if($confirm_password == ''){
        $errors['confirm_password'] = 'Mật khẩu không được để trống';
    }else if($confirm_password!=$password){
        $errors['confirm_password'] = 'Xác nhận mật khẩu không chính xác,hãy nhập lại';
    }
    
    if(!$errors){
        $pass_hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO customer(name, email, phone, address, password) VALUES ('$name','$email','$phone','$address','$pass_hash')";
        if($conn->query($sql)){
            header('location: login.php');
        }else{
            $errors['failed'] = 'Đăng ký không thành công vui lòng thử lại';
        }
    }
}
?>

<!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Register Account
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php if($errors) : ?>
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
                            <input type="text" name="name" class=" form-control" placeholder="Your Name" />
                        </div>
                        <div>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" />
                        </div>
                        <div>
                            <input name="address" class="form-control" placeholder="Your Address" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Your Password" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Confirm Password"
                                name="confirm_password" />
                        </div>

                        <div class="btn_box">
                            <button>
                                Register Now
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
<?php include'footer.php'?>