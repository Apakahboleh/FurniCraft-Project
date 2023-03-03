<?php

use App\Models\Pesanan;

$count_pesanan = Pesanan::where("user_id", Auth::user()->id)->count()

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FurniCraft - Custom Furniture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="/css/style1.css">

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/navbar.css">
</head>

<body>
    <div class="site-wrap">
        <div id="loader" class="loader">
            <img src="/image/bars.svg" alt="tidak ada"><br>
            <img src="/image/loading.png" alt="">
        </div>

        <!-- HEADER START  -->
        <header class="header-nav fixed-top">
            <div class="logo">
                <img class="img-navbar" src="/image/logoFurniCraft.png" width="100px" alt="">
            </div>
            <input type="checkbox" id="nav_check" hidden>
            <nav>
                <div class="logo">
                    <img src="/image/logoFurniCraft.png" width="100px" alt="">
                </div>
                <ul type="none">
                    <li><a href="/categories/kitchenSet" class="active">Kitchen Set</a></li>
                    <li><a href="/categories/bedroomSet">Bedroom Set</a></li>
                    <li><a href="/categories/livingRoom">Living Room</a></li>
                    <li><a href="/categories/officeFurniture">Office Furniture</a></li>
                </ul>
            </nav>

            <img class="userPic" onclick="toggleMenu()" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random&color=28a745" alt="">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img class="userPic" onclick="toggleMenu()" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random&color=28a745" alt="">
                        <h2>{{ Auth::user()->name }}</h2>
                    </div>
                    <hr>

                    <a href="/account/ubah-password" class="sub-menu-link">
                        <img src="/image/password.png">
                        <p>Ubah Password</p>
                        <span>></span>
                    </a>
                    <a href="/pesanan" class="sub-menu-link">
                        <img src="/image/order.png">
                        <p>Cek Order</p>
                        <span>></span>
                    </a>
                    <a href="/account/logout" class="sub-menu-link">
                        <img src="/image/logout.png">
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>

            <label for="nav_check" class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </label>
        </header>
        <header class="site-navbar ftco-section" role="banner">
            <div class="container-fluid px-md-5">
                <div class="row justify-content-between">
                    <div class="col-md-8 order-md-last">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <a class="navbar-brand text-success text-capitalize" style="font-size: 30px" href="/Furnicraft/home">FurniCraft <span>Simple and Comfortable</span></a>
                                <div class="container ">
                                    <div class="text-center d-flex justify-content-center mb-lg-0 mb-0 shadow p-3 mb-5">
                                        <ul class="list-inline mb-5 mx-auto" style="font-size: 20px;">
                                            <li class="list-inline-item"><a class="text-success" href="/Furnicraft/home">HOME</a></li>
                                            <li class="list-inline-item"><a class="text-success" href="/furnicraft/catalogue">CATALOGUE</a></li>
                                            <li class="list-inline-item mt-4"><a class="text-success" href="/furnicraft/tentang-kami">TENTANG KAMI</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                                <form action="/furnicraft/catalogue" class="searchform order-lg-last">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control pl-3" placeholder="Search" name="search" value="{{ request('search') }}">
                                        <a type="submit" placeholder="" class="btn form-control search"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="site-navigation justify-content-start text-left">
                            <div class="site-top-icons">
                                <ul class="site-menu js-clone-nav d-none d-md-block">
                                    <li class="has-children active">
                                        <a href="#"><span class="icon icon-person text-success">{{ Auth::user()->name }}</span></a>
                                        <ul class="dropdown">
                                            <li><a href="/account/ubah-password">Ubah Password</a></li>
                                            <li><a href="/account/logout">Logout</a></li>
                                            <li><a href="/pesanan">Cek Order</a></li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="/pesanan" class="btn btn-lg site-cart">Cek Order
                                            <span class="btn icon icon-shopping"></span>
                                            <span class="count">{{ $count_pesanan }}</span>
                                        </a>
                                    </li>

                                    @can('admin')
                                    <li>
                                        <a href="/admin/checks/pesanan" class="site-cart">
                                            <span class="btn icon icon-check"></span>
                                        </a>
                                    </li>
                                    @endcan
                                </ul>

                                <div class="text-right site-top-icons">
                                    <li class="d-inline-block d-md-none ml-md-0">
                                        <a href="#" class="site-menu-toggle js-menu-toggle btn btn-lg">{{ Auth::user()->name }} Menu
                                            <span class="icon-menu"></span>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    @yield('content')

    <script>
        $(function () {
            setTimeout(() => {
                $(".loader").fadeOut(1000)
            }, 1000);
        });
    </script>

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>

    <script src="/js/main.js"></script>

    <script src="/js/jquery.min.js"></script>
	<script src="/js/popper.js"></script>
	<script src="/js/bootstrap1.min.js"></script>
	<script src="/js/main1.js"></script>
    <script>
        const checkbox = document.getElementById("nav_check");
        const nav = document.querySelector("nav");

        document.addEventListener("click", function(event) {
            if (event.target.closest("nav") === null && event.target !== checkbox) {
                checkbox.checked = false;
            }
        });
    </script>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>
