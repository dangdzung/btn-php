<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

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
                                Về chúng tôi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="chuongTrinhHocDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Chương trình cử </a>
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
                                <li>
                                    <a class="dropdown-item" href="#">Chương trình thạc sĩ</a>
                                    <ul class="dropdown-menu header-dropdown">
                                        <li><a class="dropdown-item" href="#">Thạc sĩ Quản trị kinh doanh</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Chương trình thạc sĩ</a>
                                    <ul class="dropdown-menu header-dropdown">
                                        <li><a class="dropdown-item" href="#">Thạc sĩ Quản trị kinh doanh</a></li>
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
                                Ngành học
                            </a>
                            <ul class="dropdown-menu dropdown-teacher" aria-labelledby="giangVienDropdown"
                                style="padding: 0;">
                                <li>
                                    <ul class="dropdown-teacher__1">
                                        <li><a class="dropdown-item" href="#">Khoa học công nghệ </a></li>
                                        <li><i class="fa-solid fa-chevron-right"></i></li>
                                        <li><a class="dropdown-item" href="#">Công
                                                nghệ thông tin</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-teacher__1">
                                        <li><a class="dropdown-item" href="#">Khoa học công nghệ </a></li>
                                        <li><i class="fa-solid fa-chevron-right"></i></li>
                                        <li><a class="dropdown-item" href="#">Công
                                                nghệ thông tin</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-teacher__1">
                                        <li><a class="dropdown-item" href="#">Khoa học công nghệ </a></li>
                                        <li><i class="fa-solid fa-chevron-right"></i></li>
                                        <li><a class="dropdown-item" href="#">Công
                                                nghệ thông tin</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-teacher__1">
                                        <li><a class="dropdown-item" href="#">Khoa học công nghệ </a></li>
                                        <li><i class="fa-solid fa-chevron-right"></i></li>
                                        <li><a class="dropdown-item" href="#">Công
                                                nghệ thông tin</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-teacher__1">
                                        <li><a class="dropdown-item" href="#">Khoa học công nghệ </a></li>
                                        <li><i class="fa-solid fa-chevron-right"></i></li>
                                        <li><a class="dropdown-item" href="#">Công
                                                nghệ thông tin</a></li>
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

                    <div class="header-button__register">
                        <button class="btn btn-register">Đăng ký </button>
                        <button class="btn btn-primary btn-login">Đăng nhập</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>