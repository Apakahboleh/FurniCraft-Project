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
</head>

<body>
    <div id="loader" class="loader"></div>

    <div class="site-wrap">
        <!-- HEADER START  -->

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-up" data-aos-delay="100">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Categories</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="/categories/kitchenSet">Kitchen Set</a>
                                <a class="dropdown-item" href="/categories/bedroomSet">Bedroom Set</a>
                                <a class="dropdown-item" href="/categories/livingRoom">Living Room</a>
                                <a class="dropdown-item" href="/categories/officeFurniture">Office Furniture</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="/furnicraft/catalogue" class="nav-link">Catalogue</a></li>
                        <li class="nav-item"><a href="/furnicraft/tentang-kami" class="nav-link">Tentang Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="site-navbar ftco-section" role="banner">
            <div class="container-fluid px-md-5">
                <div class="row justify-content-between">
                    <div class="col-md-8 order-md-last">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <a class="navbar-brand text-success text-capitalize" style="font-size: 30px" href="/Furnicraft/home">FurniCraft <span>Simple and Comfortable</span></a>
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
                                            <li><a href="/account/ubah-password ">Ubah Password</a></li>
                                            <li><a href="/account/logout">Logout</a></li>
                                            <li><a href="/pesanan">Cek Order</a>
                                            </li>
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

    <div class="row">
        <div class="col">
            @yield('content')
        </div>
    </div>

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
</body>

</html>
