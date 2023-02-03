@extends('partials.navbarAuth')

@section('content')
    <link rel="stylesheet" href="/css/alamat.css">
    <div class="site-section site-blocks-2 block-1 bg-white">
        <div class="container mb-5">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-primary">Pesanan Belanja</h1>
                </div>
            </div>
        </div>
        
        <div class="container mt-2 mb-4">
            <div class="row">
                @if ( $pesanan->isEmpty() )
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <h1 class="mt-5 text-primary mb-5">Kamu Belum Pesan Apapun Nih. <br> Mulai Borongin Yuk {{ Auth::user()->name }}</h1>
                                <img src="/image/shopping.gif" class="" alt="" >
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
                                        @can('admin')
                                        <div class="container text-right mt-3">
                                            <form action="/adminCheck/{{ $order->id }}/status-check" method="post" class="d-block">
                                                @csrf
                                                @method('put')
                                                <select name="status" id="status" class="d-inline-block form-control mb-3">
                                                    <option @if ($order->status === "decline") selected @endif value="decline">Decline</option>
                                                    <option @if ($order->status === "accept") selected @endif value="accept">Accept</option>
                                                </select>
                                                <div class="">
                                                    <button name="update" class="w-100 btn btn-primary mb-3">Sahkan</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endcan
                                        <p class="text-primary">
                                            @foreach ( $datas as $data )
                                            @if ( $data->id == $order->user_id )
                                            Nama : {{ $data->name }} <br>
                                            Alamat : {{ $data->alamat }} <br>
                                            No HP : {{ $data->no_hp }} <br>
                                            @endif
                                            @endforeach
                                            Belanja : {{ $order->created_at->format('d F, Y') }}
                                        </p>

                                        <h3><a href="#">{{ $order->nama }}</a></h3>
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

    @include('partials.footer')
@endsection
