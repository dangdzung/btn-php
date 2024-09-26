<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/533aad8d01.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="header-img" src="./images/12-removebg-preview.png"
                        alt=""></a>

                <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNavDropdown">
                    <ul class="navbar-nav ">
                        <!-- Dropdown Ngành học -->


                        <!-- Dropdown Chương trình học -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="chuongTrinhHocDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Chương trình học
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="chuongTrinhHocDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Chương trình cử nhân</a>
                                    <ul class="dropdown-menu header-dropdown">
                                        <li><a class="dropdown-item" href="#">Cử nhân Kinh tế</a></li>
                                        <li><a class="dropdown-item" href="#">Cử nhân Công nghệ</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Chương trình thạc sĩ</a>
                                    <ul class="dropdown-menu header-dropdown">
                                        <li><a class="dropdown-item" href="#">Thạc sĩ Quản trị kinh doanh</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Dropdown Giảng viên -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="giangVienDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Giảng viên
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="giangVienDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Giảng viên khoa Kinh tế</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Thạc sĩ Nguyễn Văn A</a></li>
                                        <li><a class="dropdown-item" href="#">Tiến sĩ Trần Thị B</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Giảng viên khoa Công nghệ</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Tiến sĩ Lê Văn C</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Tìm kiếm -->
                    <form class="d-flex header-form" role="search">
                        <input class="form-control " type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>

                    <button class="btn btn-register">Đăng ký </button>
                    <button class="btn btn-primary btn-login">Đăng nhập</button>
                </div>
            </div>
        </nav>
    </header>