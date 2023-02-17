@if (Auth::check())
    @include('partials.navbarAuth')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <div class="container">
        <div class="row">
            <div class="col text-right">
                @can('admin')
                    <a href="/categories/bedroomSet/add-furniture" class="btn btn-lg">
                        Add Bedroom Set_ <span class="icon icon-plus"></span>
                    </a>
                @endcan
            </div>
        </div>

        <div class="row text-center mb-3">
            <div class="col">
                <h1 style="font-size: 40px; font-weight:500;">Bedroom Set</h1>
            </div>
        </div>
    </div>

    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
                <div class="col">
                    <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark relative"
                        data-bs-ride="carousel">
                        <!-- Indicators -->
                        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="1"
                                aria-label="Slide 1"></button>
                            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="2"
                                aria-label="Slide 1"></button>
                        </div>

                        <!-- Inner -->
                        <div class="carousel-inner relative w-full overflow-hidden">
                            <!-- Single item -->
                            <div class="carousel-item active relative float-left w-full">
                                <img src="/image/carousel/Bedroom-1.png"
                                    class="block w-full" alt="Bedroom Set 1" />
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item relative float-left w-full">
                                <img src="/image/carousel/Bedroom-2.png"
                                    class="block w-full" alt="Bedroom Set 2" />
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item relative float-left w-full">
                                <img src="/image/carousel/Bedroom-3.png"
                                    class="block w-full" alt="Bedroom Set 3" />
                            </div>
                        </div>
                        <!-- Inner -->

                        <!-- Controls -->
                        <button
                            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                            type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon inline-block bg-no-repeat"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                            type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
                            <span class="carousel-control-next-icon inline-block bg-no-repeat"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="site-section site-blocks-2 block-1 bg-light">
        <div class="container mt-2 mb-4">
            <div class="row">
                @foreach ($bedroomSets as $bedroomSet)
                    <div class="col-lg-4" data-aos="fade-down" data-aos-delay="200">
                        <div class="item mb-4">
                            <div class="block-4 text-center">
                                <a class="block-2-item" href="/categories/bedroomSet/{{ Crypt::encrypt($bedroomSet->id) }}/detail">
                                    <figure class="block-4-image image mb-3">
                                        <img src="/image/items/{{ $bedroomSet->image }}" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                </a>

                                @can('admin')
                                    <a href="/categories/bedroomSet/{{ Crypt::encrypt($bedroomSet->id) }}/edit" class="btn btn-dark card-link mx-4"><span class="icon icon-edit"></span> Edit </a>
                                    <a href="/categories/bedroomSet/{{ Crypt::encrypt($bedroomSet->id) }}/delete" class="delete btn btn-danger card-link" data-id="{{ $bedroomSet->id }}"><span class="icon icon-trash"></span> Hapus </a>
                                @endcan
                                <div class="block-4-text p-4 text-left">
                                    <h3><a href="/categories/bedroomSet/{{ Crypt::encrypt($bedroomSet->id) }}/detail">{{ $bedroomSet->nama }}</a></h3>
                                    <p class="mb-0">
                                        <?php
                                        $text = $bedroomSet['deskripsi'];
                                        if (strlen($text) > 5) {
                                            $text = substr($text, 0, 30) . '...';
                                            echo $text;
                                        }
                                        ?>
                                        <br>
                                    </p>
                                    <br>
                                    <h5>Bisa Custom Ukuran</h5>
                                        Ukuran Saat Ini : <br>
                                        Panjang : {{ $bedroomSet->panjang }} <br>
                                        Lebar : {{ $bedroomSet->lebar }} <br>
                                        Tinggi : {{ $bedroomSet->tinggi }} <br>
                                    </p>
                                    <h4 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($bedroomSet->harga, '2' ,'.', '.') }}0 </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function () {
            setTimeout(() => {
                $(".loader").fadeOut(1000)
            }, 1000);
        });
    </script>

@else
    @include('partials.navbarGuest')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <div class="container">
        <div class="row">
            <div class="col text-right">
                @can('admin')
                    <a href="/categories/bedroomSet/add-furniture" class="btn btn-lg">
                        Add Bedroom Set_ <span class="icon icon-plus"></span>
                    </a>
                @endcan
            </div>
        </div>

        <div class="row text-center mb-3">
            <div class="col">
                <h1 style="font-size: 40px; font-weight:500;">Bedroom Set</h1>
            </div>
        </div>
    </div>

    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
                <div class="col">
                    <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark relative"
                        data-bs-ride="carousel">
                        <!-- Indicators -->
                        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="1"
                                aria-label="Slide 1"></button>
                            <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="2"
                                aria-label="Slide 1"></button>
                        </div>

                        <!-- Inner -->
                        <div class="carousel-inner relative w-full overflow-hidden">
                            <!-- Single item -->
                            <div class="carousel-item active relative float-left w-full">
                                <img src="/image/carousel/Bedroom-1.png"
                                    class="block w-full" alt="Bedroom Set 1" />
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item relative float-left w-full">
                                <img src="/image/carousel/Bedroom-2.png"
                                    class="block w-full" alt="Bedroom Set 2" />
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item relative float-left w-full">
                                <img src="/image/carousel/Bedroom-3.png"
                                    class="block w-full" alt="Bedroom Set 3" />
                            </div>
                        </div>
                        <!-- Inner -->

                        <!-- Controls -->
                        <button
                            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                            type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon inline-block bg-no-repeat"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                            type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
                            <span class="carousel-control-next-icon inline-block bg-no-repeat"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="site-section site-blocks-2 block-1 bg-light">
        <div class="container mt-2 mb-4">
            <div class="row">
                @foreach ($bedroomSets as $bedroomSet)
                    <div class="col-lg-4" data-aos="fade-down" data-aos-delay="200">
                        <div class="item mb-4">
                            <div class="block-4 text-center">
                                <a class="block-2-item" href="/categories/bedroomSet/{{ Crypt::encrypt($bedroomSet->id) }}/detail">
                                    <figure class="block-4-image image mb-3">
                                        <img src="/image/items/{{ $bedroomSet->image }}" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                </a>

                                @can('admin')
                                    <a href="/categories/bedroomSet/{{ Crypt::encrypt($bedroomSet->id) }}/edit" class="btn btn-dark card-link mx-4"><span class="icon icon-edit"></span> Edit </a>
                                    <a href="/categories/bedroomSet/{{ Crypt::encrypt($bedroomSet->id) }}/delete" class="delete btn btn-danger card-link" data-id="{{ $bedroomSet->id }}"><span class="icon icon-trash"></span> Hapus </a>
                                @endcan
                                <div class="block-4-text p-4 text-left">
                                    <h3><a href="/categories/bedroomSet/{{ Crypt::encrypt($bedroomSet->id) }}/detail">{{ $bedroomSet->nama }}</a></h3>
                                    <p class="mb-0">
                                        <?php
                                        $text = $bedroomSet['deskripsi'];
                                        if (strlen($text) > 5) {
                                            $text = substr($text, 0, 30) . '...';
                                            echo $text;
                                        }
                                        ?>
                                        <br>
                                    </p>
                                    <br>
                                    <h5>Bisa Custom Ukuran</h5>
                                        Ukuran Saat Ini : <br>
                                        Panjang : {{ $bedroomSet->panjang }} <br>
                                        Lebar : {{ $bedroomSet->lebar }} <br>
                                        Tinggi : {{ $bedroomSet->tinggi }} <br>
                                    </p>
                                    <h4 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($bedroomSet->harga, '2' ,'.', '.') }}0 </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endif
