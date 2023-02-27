@if (Auth::check())
    @include('partials.navbarAuth')
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>FurniCraft</title>
            <link rel="stylesheet" href="/css/alamat.css">
        </head>
        <body>
            <div class="site-section site-blocks-2 block-1 bg-white">
                <div class="container mb-5">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center text-primary">Pesanan Belanja</h1>
                        </div>
                    </div>
                </div>

                @if ( Auth::user()->alamat == NULL )
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col">
                                <h5>Alamat Kamu Belum Tercantum Nih, Tambahin Yuk</h5>
                                <form action="/alamat/add/{{ Auth::user()->id }}" method="post">
                                    @csrf
                                    <div class="form mb-3">
                                        <input name="alamat" id="alamat" class="input" placeholder="Example: Jl.Kaligawe Raya No. 96 B" required="" type="text">
                                        <span class="input-border"></span>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success">Tambah Alamat</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="container">
                        <div class="row">
                            {{-- <h1 class="text-success">{{ Auth::user()->alamat }}</h1> --}}
                            <div class="col">
                                <h5>Alamat Kamu Saat Ini</h5>
                                <p class="fs-4 text-success">{{ Auth::user()->alamat }}</p>
                            </div>
                            <form action="/alamat/update/{{ Auth::user()->id }}" method="post">
                                @csrf
                                @method('put')
                                <div class="form mb-3">
                                    <input name="alamat" id="alamat" class="input" placeholder="{{ Auth::user()->alamat }}" required="" type="text">
                                    <span class="input-border"></span>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success">Ubah Alamat</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif


                <div class="container mt-2 mb-4">
                    <div class="row">
                        @if ( $pesanan->isEmpty() )
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="mt-5 text-primary mb-5">Kamu Belum Pesan Apapun Nih. <br> Mulai Borongin Yuk {{ Auth::user()->name }}</h1>
                                        <img src="/image/shopping.gif" class="" width="250px" alt="" >
                                    </div>
                                </div>
                            </div>
                        @else
                            @foreach ($pesanan as $order)
                                <div class="col-sm-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="item mb-4">
                                        <div class="block-4">
                                            <a class="block-2-item" href="#">
                                                <figure class="block-4-image image">
                                                    <img src="/image/items/{{ $order->image }}" alt="Image placeholder"
                                                        class="img-fluid">
                                                </figure>
                                            </a>

                                            <div class="block-4-text p-4">
                                                <h5 class="float-right text-primary">Status : {{ $order->status }}</h5>
                                                <span class="icon-shopping-bag text-primary" style="font-size: 30px;"></span>
                                                <p></p>
                                                <p class="text-primary">
                                                    No Hp : {{ Auth::user()->no_hp }} <br>
                                                    Belanja : {{ $order->created_at->format('d F, Y') }}
                                                </p>

                                                <h3>{{ $order->nama }}</h3>
                                                <p class="mb-3">{{ $order->quantity }} barang</p>

                                                <p class="mb-0">Total Belanja</p>
                                                <h6 class="text-primary font-weight-bold"> Rp{{ $order->harga }}.000</h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </body>
        </html>
        <script>
            $(function () {
                setTimeout(() => {
                    $(".loader").fadeOut(1000)
                }, 1000);
            });
        </script>
    @include('partials.footer')
@endif
