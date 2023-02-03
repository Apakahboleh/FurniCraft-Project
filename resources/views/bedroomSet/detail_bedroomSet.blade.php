@if (Auth::check())
    @include('partials.navbarAuth')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="apple-touch-icon" href="/detail_furniture/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/detail_furniture/img/favicon.ico">

    <link rel="stylesheet" href="detail_furniture/css/bootstrap.min.css">
    <link rel="stylesheet" href="/detail_furniture/css/templatemo.css">
    <link rel="stylesheet" href="/detail_furniture/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/detail_furniture/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="/detail_furniture/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="/detail_furniture/css/slick-theme.css">
</head>
<body>
        <!-- Open Content -->
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image }}"  alt="Card image cap" id="product-detail">
                        </div>
                        <div class="row">
                            <!--Start Carousel Wrapper-->
                            <div id="multi-item-example" class="col-12 slide carousel-multi-item carousel-related-product" data-bs-ride="carousel">
                                <!--Start Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">
                                    @if ($detail_bedroomSets->image && $detail_bedroomSets->image2 && $detail_bedroomSets->image3)
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image }}" alt="Product Image 1">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image2 }}" alt="Product Image 2">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image3 }}" alt="Product Image 3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($detail_bedroomSets->image && !$detail_bedroomSets->image2 && !$detail_bedroomSets->image3)
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image }}" alt="Product Image 1">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 2">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($detail_bedroomSets->image && $detail_bedroomSets->image2 && !$detail_bedroomSets->image3)
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image }}" alt="Product Image 1">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image2 }}" alt="Product Image 2">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 1">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 2">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <!--/.First slide-->
                                </div>
                                <!--End Slides-->
                            </div>
                            <!--End Carousel Wrapper-->
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2">{{ $detail_bedroomSets->nama }}</h1>
                                <form action="/detail/bedroomSet/update/{{ $detail_bedroomSets->id }}" method="post">
                                    @csrf
                                    @method('put')
                                    <p class="h3 py-2">Harga : Rp{{ number_format($detail_bedroomSets->harga, '2' ,'.', '.') }}0</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Brand: FurniCraft</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong>{{ $detail_bedroomSets->brand }}</strong></p>
                                        </li>
                                    </ul>

                                    <div style="white-space:pre-line" class="mb-3">
                                        <h5>Deskripsi Produk:</h5>
                                        {{ $detail_bedroomSets->deskripsi }}
                                    </div>

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Tersedia Dalam Warna : </h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-success"><strong>Serat Kayu / Solid</strong></p>
                                        </li>
                                    </ul>

                                    <h6>Specification:</h6>

                                    <ul class="list-unstyled pb-3">
                                        <li>
                                            <div class="mb-3 row">
                                                <label for="panjang" class="col-sm-2 col-form-label">Panjang</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" name="panjang" class="form-control col-sm-2 " id="panjang" value="{{ $detail_bedroomSets->panjang }}">
                                                        <div class="input-group-text rounded">m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="mb-3 row">
                                                <label for="lebar" class="col-sm-2 col-form-label">Lebar</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" name="lebar" class="form-control col-sm-2 " id="lebar" value="{{ $detail_bedroomSets->lebar }}">
                                                        <div class="input-group-text rounded">m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="mb-3 row">
                                                <label for="tinggi" class="col-sm-2 col-form-label">Tinggi</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" name="tinggi" class="form-control col-sm-2 " id="tinggi" value="{{ $detail_bedroomSets->tinggi }}">
                                                        <div class="input-group-text rounded">m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <button type="submit" name="update" class="btn btn-success mb-3">Simpan Perubahan</button>
                                </form>

                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        @if ($detail_bedroomSets->panjang == NULL || $detail_bedroomSets->lebar == NULL || $detail_bedroomSets->tinggi == NULL)
                                            <h6 class="text-danger">{{ "Harap Mengisi Panjang, Lebar, Tinggi Agar Dapat Memesan" }}</h6>
                                        @else
                                        <form action="/detail/pesan/{{ $detail_bedroomSets->id }}" method="post">
                                            @csrf
                                            <input type="hidden" name="nama" value="{{ $detail_bedroomSets->nama }}">
                                            <input type="hidden" name="harga" value="{{ $detail_bedroomSets->harga }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="image" value="{{ $detail_bedroomSets->image }}">
                                            <button type="submit" class="w-100 btn btn-success btn-lg" name="pesan" value="pesan">Pesan</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Content -->

        <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

                @foreach ( $bedroomSets as $bedroomSet )
                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="/image/items/{{ $bedroomSet->image }}">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="/categories/bedroomSet/{{ $bedroomSet->id }}/detail"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="h3 text-decoration-none">{{ $bedroomSet->nama }}</h3>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="text-success">Serat Kay / Solid</li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <p>Harga menyesuaikan ukuran yang di pesan</p>
                                </li>
                            </ul>
                            <p style="font-weight: bold;" class="text-center mb-0">Rp{{ number_format($bedroomSet->harga, '2' ,'.', '.') }}0</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Article -->

    {{-- footer --}}
    <section>
        @include('partials.footerDetail')
    </section>

    <!-- Start Script -->
    <script src="/detail_furniture/js/jquery-1.11.0.min.js"></script>
    <script src="/detail_furniture/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/detail_furniture/js/bootstrap.bundle.min.js"></script>
    <script src="/detail_furniture/js/templatemo.js"></script>
    <script src="/detail_furniture/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="/detail_furniture/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
</body>
</html>

@else
    @include('partials.navbarGuest')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="apple-touch-icon" href="/detail_furniture/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/detail_furniture/img/favicon.ico">

    <link rel="stylesheet" href="detail_furniture/css/bootstrap.min.css">
    <link rel="stylesheet" href="/detail_furniture/css/templatemo.css">
    <link rel="stylesheet" href="/detail_furniture/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/detail_furniture/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="/detail_furniture/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="/detail_furniture/css/slick-theme.css">
</head>
<body>
        <!-- Open Content -->
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image }}"  alt="Card image cap" id="product-detail">
                        </div>
                        <div class="row">
                            <!--Start Carousel Wrapper-->
                            <div id="multi-item-example" class="col-12 slide carousel-multi-item carousel-related-product" data-bs-ride="carousel">
                                <!--Start Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">
                                    @if ($detail_bedroomSets->image && $detail_bedroomSets->image2 && $detail_bedroomSets->image3)
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image }}" alt="Product Image 1">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image2 }}" alt="Product Image 2">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image3 }}" alt="Product Image 3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($detail_bedroomSets->image && !$detail_bedroomSets->image2 && !$detail_bedroomSets->image3)
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image }}" alt="Product Image 1">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 2">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($detail_bedroomSets->image && $detail_bedroomSets->image2 && !$detail_bedroomSets->image3)
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image }}" alt="Product Image 1">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/{{ $detail_bedroomSets->image2 }}" alt="Product Image 2">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 1">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 2">
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="/image/items/unknown_bedroomSet.png" alt="Product Image 3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <!--/.First slide-->
                                </div>
                                <!--End Slides-->
                            </div>
                            <!--End Carousel Wrapper-->
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2">{{ $detail_bedroomSets->nama }}</h1>
                                <form action="/detail/bedroomSet/update/{{ $detail_bedroomSets->id }}" method="post">
                                    @csrf
                                    @method('put')
                                    <p class="h3 py-2">Harga : Rp{{ number_format($detail_bedroomSets->harga, '2' ,'.', '.') }}0</p>

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Brand: FurniCraft</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong>{{ $detail_bedroomSets->brand }}</strong></p>
                                        </li>
                                    </ul>

                                    {{-- <input type="hidden" name="satuan" value="{{ $detail_bedroomSets->satuan }}"> --}}
                                    <div style="white-space:pre-line" class="mb-3">
                                        <h5>Deskripsi Produk:</h5>
                                        {{ $detail_bedroomSets->deskripsi }}
                                    </div>

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Tersedia Dalam Warna : </h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-success"><strong>Serat Kayu / Solid</strong></p>
                                        </li>
                                    </ul>

                                    <h6>Specification:</h6>

                                    <ul class="list-unstyled pb-3">
                                        <li>
                                            <div class="mb-3 row">
                                                <label for="panjang" class="col-sm-2 col-form-label">Panjang</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" name="panjang" class="form-control col-sm-2 " id="panjang" value="{{ $detail_bedroomSets->panjang }}">
                                                        <div class="input-group-text rounded">m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="mb-3 row">
                                                <label for="lebar" class="col-sm-2 col-form-label">Lebar</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" name="lebar" class="form-control col-sm-2 " id="lebar" value="{{ $detail_bedroomSets->lebar }}">
                                                        <div class="input-group-text rounded">m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="mb-3 row">
                                                <label for="tinggi" class="col-sm-2 col-form-label">Tinggi</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" name="tinggi" class="form-control col-sm-2 " id="tinggi" value="{{ $detail_bedroomSets->tinggi }}">
                                                        <div class="input-group-text rounded">m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <button type="submit" name="update" class="btn btn-success mb-3">Simpan Perubahan</button>
                                </form>

                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        @if ($detail_bedroomSets->panjang == NULL || $detail_bedroomSets->lebar == NULL || $detail_bedroomSets->tinggi == NULL)
                                            <h6 class="text-danger">{{ "Harap Mengisi Panjang, Lebar, Tinggi Agar Dapat Memesan" }}</h6>
                                        @else
                                        <form action="/detail/pesan/{{ $detail_bedroomSets->id }}" method="post">
                                            @csrf
                                            <input type="hidden" name="nama" value="{{ $detail_bedroomSets->nama }}">
                                            <input type="hidden" name="harga" value="{{ $detail_bedroomSets->harga }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="image" value="{{ $detail_bedroomSets->image }}">
                                            <button type="submit" class="w-100 btn btn-success btn-lg" name="pesan" value="pesan">Pesan</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Content -->

        <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

                @foreach ( $bedroomSets as $bedroomSet )
                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="/image/items/{{ $bedroomSet->image }}">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="/categories/bedroomSet/{{ $bedroomSet->id }}}/detail"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="h3 text-decoration-none">{{ $bedroomSet->nama }}</h3>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="text-success">Serat Kay / Solid</li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <p>Harga menyesuaikan ukuran yang di pesan</p>
                                </li>
                            </ul>
                            <p style="font-weight: bold;" class="text-center mb-0">Rp{{ number_format($bedroomSet->harga, '2' ,'.', '.') }}0</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Article -->

    {{-- footer --}}
    <section>
        @include('partials.footerDetail')
    </section>

    <!-- Start Script -->
    <script src="/detail_furniture/js/jquery-1.11.0.min.js"></script>
    <script src="/detail_furniture/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/detail_furniture/js/bootstrap.bundle.min.js"></script>
    <script src="/detail_furniture/js/templatemo.js"></script>
    <script src="/detail_furniture/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="/detail_furniture/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
</body>
</html>

@endif


