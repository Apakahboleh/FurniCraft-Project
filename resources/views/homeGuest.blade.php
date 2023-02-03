@extends('partials.navbarGuest')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>FurniCraft - Rumahmu Jelajahmu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
            @media (max-width: 768px) {
                .site-blocks-cover {
                    background-size: cover;
                }
            }
        </style>
    </head>

    <body>
        <div class="site-wrap">

            <!-- MAIN HERO START  -->
            <div class="site-blocks-cover img-fluid w-100" style="background-image: url(image/hero_1.png);" data-aos="fade">
                <div class="container">
                    <div class="row align-items-start align-items-md-center justify-content-end">
                        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                            <h1 class="mb-2" data-aos="fade-up">Buat Indah Rumahmu</h1>
                            <div class="intro-text text-center text-md-left">
                                <strong>
                                    <p class="mb-4">Pilih Ukuran. Pilih Warna. Sesuai Selera. </p>
                                </strong>
                                <p>
                                    <a href="/furnicraft/catalogue" class="btn btn-sm btn-success">Explore Now!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAIN HERO END  -->


            <!-- PRESENTATION START  -->

            <!-- PRESENTATION END  -->

            <!-- SERVICES START  -->
            <div class="site-section site-section-sm site-blocks-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                            <div class="icon mr-4 align-self-start">
                                <span class="icon-pencil"></span>
                            </div>
                            <div class="text">
                                <h2 class="text-uppercase">Custom Product</h2>
                                <p>Produk akan menyesuaikan keinginan customer. Dari bentuk, ukuran, fungsi, hingga corak dan warna</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon mr-4 align-self-start">
                                <span class="icon-truck"></span>
                            </div>
                            <div class="text">
                                <h2 class="text-uppercase">Gratis Pengiriman!</h2>
                                <p>FurniCraft juga menawarkan pengiriman gratis untuk wilayah kota Semarang. Jadi, konsumen di kota Semarang tidak perlu khawatir tentang biaya tambahan untuk pengiriman produk FurniCraft. </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="icon mr-4 align-self-start">
                                <span class="icon-help"></span>
                            </div>
                            <div class="text">
                                <h2 class="text-uppercase">Customer Support</h2>
                                <p>Kami menyediakan layanan pelanggan yang responsif dan profesional untuk membantu Anda selama proses belanja online.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SERVICES END   -->



            <!-- COLLECTION START  -->
            <div class="site-section site-blocks-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                            <a class="block-2-item" href="/categories/kitchenSet">
                                <figure class="image">
                                    <img src="/image/kitchenset.png" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>Kitchen Set</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                            <a class="block-2-item" href="/categories/bedroomSet">
                                <figure class="image">
                                    <img src="/image/bedroom.png" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>Bedroom Set</h3>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                            <a class="block-2-item" href="/categories/livingRoom">
                                <figure class="image">
                                    <img src="/image/livingRoom.png" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <span class="text-uppercase">Collections</span>
                                    <h3>Living Room</h3>
                                </div>
                            </a>
                        </div>

                        <div class="container">
                            <div class="card mx-auto text-bg-dark mt-5 mb-lg-0">
                                <a class="block-2-item" href="/categories/officeFurniture">
                                    <figure class="image">
                                        <img src="/image/officeFurniture.png" class="card-img" alt="...">
                                    </figure>
                                    <div class="text">
                                        <span class="text-uppercase">Collections</span>
                                        <h3>Office Furnitrue</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COLLECTION END  -->


            <!-- SLIDER START  -->
            <div class="site-section block-3 site-blocks-2 bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 site-section-heading text-center pt-4">
                            <h2>Featured Products</h2>
                        </div>
                    </div>
                    <p class="text-success text-right"><a href="/furnicraft/catalogue">Lihat Semua Produk >></a></p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="nonloop-block-3 owl-carousel">
                                    @foreach ( $livingRooms as $products )
                                        <div class="item">
                                            <div class="block-4 text-center">
                                                <figure class="block-4-image">
                                                    <img src="image/items/{{ $products->image }}" alt="Image placeholder" class="img-fluid">
                                                </figure>
                                                <div class="block-4-text p-4">
                                                    <h3>{{ $products->nama }}</h3>
                                                    <p class="mb-0">
                                                        <?php
                                                        $text = $products['deskripsi'];
                                                        if (strlen($text) > 5) {
                                                            $text = substr($text, 0, 30) . '...';
                                                            echo $text;
                                                        }
                                                        ?></p>
                                                    <p class="text-success font-weight-bold"><a href="/categories/livingRoom/{{ $products->id }}/detail">Tentukan Hargamu</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                    {{-- <div class="row">
                        <div class="col-md-12">
                            <div class="nonloop-block-3 owl-carousel">
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="https://source.unsplash.com/random/900x700/?furniture" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3>Kursi Kayu Kuat</h3>
                                            <p class="mb-0">Dari Kayu Mahoni Indah Dan Langka</p>
                                            <p class="text-success font-weight-bold">Rp50000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="https://source.unsplash.com/random/900x700/?office" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3>Kursi Kayu Kuat</h3>
                                            <p class="mb-0">Dari Kayu Mahoni Indah Dan Langka</p>
                                            <p class="text-success font-weight-bold">Rp100000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="https://source.unsplash.com/random/900x700/?kitchen" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3>Kursi Kayu Kuat</h3>
                                            <p class="mb-0">Dari Kayu Mahoni Indah Dan Langka</p>
                                            <p class="text-success font-weight-bold">69000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="https://source.unsplash.com/random/900x700/?bedroom" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3>Kursi Kayu Kuat</h3>
                                            <p class="mb-0">Dari Kayu Mahoni Indah Dan Langka</p>
                                            <p class="text-success font-weight-bold">Rp70000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                            <img src="https://source.unsplash.com/random/900x700/?wardrobe" alt="Image placeholder" class="img-fluid">
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3>Kursi Kayu Kuat</h3>
                                            <p class="mb-0">Dari Kayu Mahoni Indah Dan Langka</p>
                                            <p class="text-success font-weight-bold">Rp50000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- SLIDER END  -->


            <!-- Offer Start -->
            <div class="container-fluid offer pt-5">
                <div class="row px-xl-5">
                    <div class="col-md-6 pb-4">
                        <div class="position-relative bg-white rounded text-center text-md-left text-white mb-2 py-5 px-5">
                            <div class="position-relative rounded" style="z-index: 1; box-shadow: -15px 21px 9px -3px rgba(0,0,0,0.57);
                            -webkit-box-shadow: -10px 11px 5px -3px rgba(0,0,0,0.57);
                            -moz-box-shadow: 10px 11px 5px -3px rgba(0,0,0,0.57);">
                                <h5 class="text-uppercase text-success mb-3 mt-5 mx-3">3 Bulan Garansi</h5>
                                <h1 class="mb-4 font-weight-semi-bold text-success mt-3 mx-3">Tanpa Insiden Apapun</h1>
                                <a href="/furnicraft/catalogue" class="btn btn-outline-success py-md-2 px-md-3 mb-3 mx-3">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="position-relative bg-white text-center text-md-left text-white mb-2 py-5 px-5">
                            <div class="position-relative" style="z-index: 1; box-shadow: -15px 21px 9px -3px rgba(0,0,0,0.57);
                            -webkit-box-shadow: -10px 11px 5px -3px rgba(0,0,0,0.57);
                            -moz-box-shadow: 10px 11px 5px -3px rgba(0,0,0,0.57);">
                                <h5 class="text-uppercase text-success mb-3 mt-5 mx-3">Gratis Pengiriman</h5>
                                <h1 class="mb-4 font-weight-semi-bold text-success mt-3 mx-3">Wilayah Semarang Kota</h1>
                                <a href="/furnicraft/catalogue" class="btn btn-outline-success py-md-2 px-md-3 mb-3 mx-3">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Offer End -->

            <!-- ABOUT SECTION  -->
            <div class="site-section block-8">
                <div class="container">
                    <div class="row justify-content-center  mb-5">
                        <div class="col-md-7 site-section-heading text-center pt-4">
                            <h2>Who is FurniCraft?</h2>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-7 mb-5">
                            <img src="/image/hero_1.png" alt="Image placeholder"
                                    class="img-fluid rounded">
                        </div>
                        <div class="col-md-12 col-lg-5 text-center pl-md-5">
                            <h2><a href="/furnicraft/tentang-kami">FurniCraft</a></h2>
                            <p>merupakan perusahaan yang berfokus pada bidang interior, mulai dari desain hingga produksi. Dengan kompetensi ini, FurniCraft mampu menghadirkan solusi desain dan produksi interior yang inovatif dan berkualitas.
                            </p>
                            <p><a href="/furnicraft/catalogue" class="btn btn-success btn-sm">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT SECTION  END-->

            {{-- Footer --}}
            @include('partials.footer')
        </div>
    </body>

    </html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        @if (Session::has('logout'))
            toastr.success('Terimakasih Telah Berkunjung. Kita sudah Rindu')
        @endif
    </script>


    <script>
        @if (Session::has('berhasilDaftar'))
            toastr.success('Akunmu Berhasil Di Daftarkan')
        @endif
    </script>

    <script>
        @if (Session::has('berhasilDaftar'))
            toastr.success('Silahkan Login')
        @endif
    </script>

    <script>
        $('.successDaftar').click(function (e) {
            Swal.fire({
                icon: 'success',
                title: "Terimakasih sudah bergabung dengan FurniCraft",
                text: "Silahkan Untuk Melakukan Login",
                button: "Mengerti!",
            })
        });
    </script>

    <script>
        $('.successDaftar').click(function (e) {
            e.preventDefault()
            swal({
            title: "Terimakasih sudah bergabung dengan FurniCraft",
            text: "Silahkan Untuk Melakukan Login",
            icon: "success",
            button: "Mengerti!",
            });
        });
    </script>

    </body>

    </html>
@endsection

</body>

</html>
