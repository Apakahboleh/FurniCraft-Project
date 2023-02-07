@if (Auth::check())
    @include('partials.navbarAuth')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Fab-Rics Butik Terpercaya</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <style>
        .swal2-container {
            z-index: 9999;

        }
        .swal2-popup  {
            background: #7971ea;
            opacity: 93%;
        }
    </style>

    <body>
        @if ( $kitchenSets->isEmpty() && $bedroomSets->isEmpty() && $livingRooms->isEmpty() && $office_furnitures->isEmpty() )
        <div class="container text-center mt-5">
            <h3 class="">No Furniture found</h3>
            <img src="/image/notFound.gif" alt="">
        </div>
        @else
        <div class="site-section site-blocks-2 block-1 bg-light">
            <div class="container mt-2 mb-4">
                <div class="row">
                        @foreach ($kitchenSets as $furniture)
                            <div class="col-lg-4" data-aos="fade" data-aos-delay="100">
                                <div class="item mb-4">
                                    <div class="block-4 text-center">
                                        <a class="block-2-item" href="/categories/kitchenSet/{{ Crypt::encrypt($furniture->id) }}/detail">
                                            <figure class="block-4-image image mb-3">
                                                <img src="/image/items/{{ $furniture->image }}" alt="Image placeholder"
                                                    class="img-fluid">
                                            </figure>
                                        </a>

                                        @can('admin')
                                            <a href="/categories/kitchenSet/{{ Crypt::encrypt($furniture->id) }}/edit"
                                                class="btn btn-primary card-link mx-4">Edit</a>
                                            <a href="/categories/kitchenSet/{{ Crypt::encrypt($furniture->id) }}/delete"
                                                class="deleteKitchen btn btn-danger card-link" data-id-kitchen="{{ Crypt::encrypt($furniture->id) }}">Hapus</a>
                                        @endcan
                                        <div class="block-4-text p-4">
                                            <h3><a href="/categories/kitchenSet/{{ Crypt::encrypt($furniture->id) }}/detail">{{ $furniture->nama }}</a></h3>
                                            <p class="mb-0">
                                                <?php
                                                $text = $furniture['deskripsi'];
                                                if (strlen($text) > 5) {
                                                    $text = substr($text, 0, 30) . '...';
                                                    echo $text;
                                                }
                                                ?>

                                            </p>
                                            <h6 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($furniture->harga, '2' ,'.', '.') }}0 </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @foreach ($livingRooms as $furniture)
                        <div class="col-lg-4" data-aos="fade" data-aos-delay="200">
                            <div class="item mb-4">
                                <div class="block-4 text-center">
                                    <a class="block-2-item" href="/categories/livingRoom/{{ Crypt::encrypt($furniture->id) }}/detail">
                                        <figure class="block-4-image image mb-3">
                                            <img src="/image/items/{{ $furniture->image }}" alt="Image placeholder"
                                                class="img-fluid">
                                        </figure>
                                    </a>

                                    @can('admin')
                                        <a href="/categories/livingRoom/{{ Crypt::encrypt($furniture->id) }}/edit"
                                            class="btn btn-primary card-link mx-4">Edit</a>
                                        <a href="/categories/livingRoom/{{ Crypt::encrypt($furniture->id) }}/delete"
                                            class="deleteLivingRoom btn btn-danger card-link" data-id-livingRoom="{{ Crypt::encrypt($furniture->id) }}">Hapus</a>
                                    @endcan
                                    <div class="block-4-text p-4">
                                        <h3><a href="/categories/livingRoom/{{ Crypt::encrypt($furniture->id)  }}/detail">{{ $furniture->nama }}</a></h3>
                                        <p class="mb-0">
                                            <?php
                                            $text = $furniture['deskripsi'];
                                            if (strlen($text) > 5) {
                                                $text = substr($text, 0, 30) . '...';
                                                echo $text;
                                            }
                                            ?>
                                        </p>
                                        <h6 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($furniture->harga, '2' ,'.', '.') }}0 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    @foreach ($bedroomSets as $furniture)
                        <div class="col-lg-4" data-aos="fade" data-aos-delay="300">
                            <div class="item">
                                <div class="block-4 text-center">
                                    <a class="block-2-item" href="/categories/bedroomSet/{{ Crypt::encrypt($furniture->id) }}/detail">
                                        <figure class="block-4-image image mb-3">
                                            <img src="/image/items/{{ $furniture->image }}" alt="Image placeholder"
                                                class="img-fluid">
                                        </figure>
                                    </a>

                                    @can('admin')
                                        <a href="/categories/bedroomSet/{{ Crypt::encrypt($furniture->id) }}/edit"
                                            class="btn btn-primary card-link mx-4">Edit</a>
                                        <a href="/categories/bedroomSet/{{ Crypt::encrypt($furniture->id) }}/delete"
                                            class="deleteBedroom btn btn-danger card-link" data-id-bedroom="{{ Crypt::encrypt($furniture->id) }}">Hapus</a>
                                    @endcan
                                    <div class="block-4-text p-4">
                                        <h3><a href="/categories/bedroomSet/{{ Crypt::encrypt($furniture->id) }}/detail">{{ $furniture->nama }}</a></h3>
                                        <p class="mb-0">
                                            <?php
                                            $text = $furniture['deskripsi'];
                                            if (strlen($text) > 5) {
                                                $text = substr($text, 0, 30) . '...';
                                                echo $text;
                                            }
                                            ?>

                                        </p>
                                        <h6 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($furniture->harga, '2' ,'.', '.') }}0 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($office_furnitures as $furniture)
                    <div class="col-lg-4" data-aos="fade" data-aos-delay="300">
                        <div class="item">
                            <div class="block-4 text-center">
                                <a class="block-2-item" href="/categories/office_furnitures/{{ Crypt::encrypt($furniture->id) }}/detail">
                                    <figure class="block-4-image image mb-3">
                                        <img src="/image/items/{{ $furniture->image }}" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                </a>

                                @can('admin')
                                    <a href="/categories/office_furnitures/{{ Crypt::encrypt($furniture->id) }}/edit"
                                        class="btn btn-primary card-link mx-4">Edit</a>
                                    <a href="/categories/office_furnitures/{{ Crypt::encrypt($furniture->id) }}/delete"
                                        class="deleteOffice btn btn-danger card-link" data-id-office="{{ Crypt::encrypt($furniture->id) }}">Hapus</a>
                                @endcan
                                <div class="block-4-text p-4">
                                    <h3><a href="/categories/office_furnitures/{{ Crypt::encrypt($furniture->id) }}/detail">{{ $furniture->nama }}</a></h3>
                                    <p class="mb-0">
                                        <?php
                                        $text = $furniture['deskripsi'];
                                        if (strlen($text) > 5) {
                                            $text = substr($text, 0, 30) . '...';
                                            echo $text;
                                        }
                                        ?>
                                    </p>
                                    <h6 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($furniture->harga, '2' ,'.', '.') }}0 </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

                {{-- <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            {{ $kitchenSets->links(), $office_furnitures->links(), $livingRooms->links() }}
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        @endif
    </body>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        $('.deleteKitchen').click(function (e) {
            var kitchenSet = $(this).attr('data-id-kitchen');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Ntar Ribet Kalo Mau Nambah Barang Lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/categories/kitchenSet/'+kitchenSet+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Kitchen Set Berhasil Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

        $('.deleteLivingRoom').click(function (e) {
            var furnitureAnak = $(this).attr('data-id-livingRoom');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Ntar Ribet Kalo Mau Nambah Barang Lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/categories/livingRoom/'+furnitureAnak+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Baju Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

        $('.deleteBedroom').click(function (e) {
            var furnitureBedroom = $(this).attr('data-id-bedroom');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Ntar Ribet Kalo Mau Nambah Barang Lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = ' /categories/bedroomSet/'+furnitureBedroom+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Bedroom Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

        $('.deleteOffice').click(function (e) {
            var furnitureOffice = $(this).attr('data-id-office');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Ntar Ribet Kalo Mau Nambah Barang Lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = ' /categories/office_furnitures/'+furnitureOffice+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Bedroom Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

    </script>

    </html>
@else
    @include('partials.navbarGuest')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Fab-Rics Butik Terpercaya</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <style>
        .swal2-container {
            z-index: 9999;

        }
        .swal2-popup  {
            background: #7971ea;
            opacity: 93%;
        }
    </style>

    <body>
        @if ( $kitchenSets->isEmpty() && $bedroomSets->isEmpty() && $livingRooms->isEmpty() && $office_furnitures->isEmpty() )
        <div class="container text-center mt-5">
            <h3 class="">No Furniture found</h3>
            <img src="/image/notFound.gif" alt="">
        </div>
        @else
        <div class="site-section site-blocks-2 block-1 bg-light">
            <div class="container mt-2 mb-4">
                <div class="row">
                        @foreach ($kitchenSets as $furniture)
                            <div class="col-lg-4" data-aos="fade" data-aos-delay="100">
                                <div class="item mb-4">
                                    <div class="block-4 text-center">
                                        <a class="block-2-item" href="/categories/kitchenSet/{{ Crypt::encrypt($furniture->id) }}/detail">
                                            <figure class="block-4-image image mb-3">
                                                <img src="/image/items/{{ $furniture->image }}" alt="Image placeholder"
                                                    class="img-fluid">
                                            </figure>
                                        </a>

                                        @can('admin')
                                            <a href="/categories/kitchenSet/{{ Crypt::encrypt($furniture->id) }}/edit"
                                                class="btn btn-primary card-link mx-4">Edit</a>
                                            <a href="/categories/kitchenSet/{{ Crypt::encrypt($furniture->id) }}/delete"
                                                class="deleteKitchen btn btn-danger card-link" data-id-kitchen="{{ Crypt::encrypt($furniture->id) }}">Hapus</a>
                                        @endcan
                                        <div class="block-4-text p-4">
                                            <h3><a href="/categories/kitchenSet/{{ Crypt::encrypt($furniture->id) }}/detail">{{ $furniture->nama }}</a></h3>
                                            <p class="mb-0">
                                                <?php
                                                $text = $furniture['deskripsi'];
                                                if (strlen($text) > 5) {
                                                    $text = substr($text, 0, 30) . '...';
                                                    echo $text;
                                                }
                                                ?>

                                            </p>
                                            <h6 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($furniture->harga, '2' ,'.', '.') }}0 </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @foreach ($livingRooms as $furniture)
                        <div class="col-lg-4" data-aos="fade" data-aos-delay="200">
                            <div class="item mb-4">
                                <div class="block-4 text-center">
                                    <a class="block-2-item" href="/categories/livingRoom/{{ Crypt::encrypt($furniture->id)  }}/detail">
                                        <figure class="block-4-image image mb-3">
                                            <img src="/image/items/{{ $furniture->image }}" alt="Image placeholder"
                                                class="img-fluid">
                                        </figure>
                                    </a>

                                    @can('admin')
                                        <a href="/categories/livingRoom/{{ Crypt::encrypt($furniture->id) }}/edit"
                                            class="btn btn-primary card-link mx-4">Edit</a>
                                        <a href="/categories/livingRoom/{{ Crypt::encrypt($furniture->id) }}/delete"
                                            class="deleteLivingRoom btn btn-danger card-link" data-id-livingRoom="{{ Crypt::encrypt($furniture->id) }}">Hapus</a>
                                    @endcan
                                    <div class="block-4-text p-4">
                                        <h3><a href="/categories/livingRoom/{{ Crypt::encrypt($furniture->id) }}/detail">{{ $furniture->nama }}</a></h3>
                                        <p class="mb-0">
                                            <?php
                                            $text = $furniture['deskripsi'];
                                            if (strlen($text) > 5) {
                                                $text = substr($text, 0, 30) . '...';
                                                echo $text;
                                            }
                                            ?>
                                        </p>
                                        <h6 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($furniture->harga, '2' ,'.', '.') }}0 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    @foreach ($bedroomSets as $furniture)
                        <div class="col-lg-4" data-aos="fade" data-aos-delay="300">
                            <div class="item">
                                <div class="block-4 text-center">
                                    <a class="block-2-item" href="/categories/bedroomSet/{{ Crypt::encrypt($furniture->id) }}/detail">
                                        <figure class="block-4-image image mb-3">
                                            <img src="/image/items/{{ $furniture->image }}" alt="Image placeholder"
                                                class="img-fluid">
                                        </figure>
                                    </a>

                                    @can('admin')
                                        <a href="/categories/bedroomSet/{{ Crypt::encrypt($furniture->id) }}/edit"
                                            class="btn btn-primary card-link mx-4">Edit</a>
                                        <a href="/categories/bedroomSet/{{ Crypt::encrypt($furniture->id) }}/delete"
                                            class="deleteBedroom btn btn-danger card-link" data-id-bedroom="{{ Crypt::encrypt($furniture->id) }}">Hapus</a>
                                    @endcan
                                    <div class="block-4-text p-4">
                                        <h3><a href="/categories/bedroomSet/{{ Crypt::encrypt($furniture->id) }}/detail">{{ $furniture->nama }}</a></h3>
                                        <p class="mb-0">
                                            <?php
                                            $text = $furniture['deskripsi'];
                                            if (strlen($text) > 5) {
                                                $text = substr($text, 0, 30) . '...';
                                                echo $text;
                                            }
                                            ?>

                                        </p>
                                        <h6 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($furniture->harga, '2' ,'.', '.') }}0 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($office_furnitures as $furniture)
                    <div class="col-lg-4" data-aos="fade" data-aos-delay="300">
                        <div class="item">
                            <div class="block-4 text-center">
                                <a class="block-2-item" href="/categories/office_furnitures/{{ Crypt::encrypt($furniture->id) }}/detail">
                                    <figure class="block-4-image image mb-3">
                                        <img src="/image/items/{{ $furniture->image }}" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                </a>

                                @can('admin')
                                    <a href="/categories/office_furnitures/{{ Crypt::encrypt($furniture->id) }}/edit"
                                        class="btn btn-primary card-link mx-4">Edit</a>
                                    <a href="/categories/office_furnitures/{{ Crypt::encrypt($furniture->id) }}/delete"
                                        class="deleteOffice btn btn-danger card-link" data-id-office="{{ Crypt::encrypt($furniture->id) }}">Hapus</a>
                                @endcan
                                <div class="block-4-text p-4">
                                    <h3><a href="/categories/office_furnitures/{{ Crypt::encrypt($furniture->id) }}/detail">{{ $furniture->nama }}</a></h3>
                                    <p class="mb-0">
                                        <?php
                                        $text = $furniture['deskripsi'];
                                        if (strlen($text) > 5) {
                                            $text = substr($text, 0, 30) . '...';
                                            echo $text;
                                        }
                                        ?>
                                    </p>
                                    <h6 class="text-primary mt-2 font-weight-bold"> Rp{{ number_format($furniture->harga, '2' ,'.', '.') }}0 </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

                {{-- <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            {{ $kitchenSets->links(), $office_furnitures->links(), $livingRooms->links() }}
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        @endif
    </body>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        $('.deleteKitchen').click(function (e) {
            var kitchenSet = $(this).attr('data-id-kitchen');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Ntar Ribet Kalo Mau Nambah Barang Lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/categories/kitchenSet/'+kitchenSet+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Kitchen Set Berhasil Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

        $('.deleteLivingRoom').click(function (e) {
            var furnitureAnak = $(this).attr('data-id-livingRoom');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Ntar Ribet Kalo Mau Nambah Barang Lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/categories/livingRoom/'+furnitureAnak+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Baju Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

        $('.deleteBedroom').click(function (e) {
            var furnitureBedroom = $(this).attr('data-id-bedroom');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Ntar Ribet Kalo Mau Nambah Barang Lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = ' /categories/bedroomSet/'+furnitureBedroom+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Bedroom Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

        $('.deleteOffice').click(function (e) {
            var furnitureOffice = $(this).attr('data-id-office');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Ntar Ribet Kalo Mau Nambah Barang Lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = ' /categories/office_furnitures/'+furnitureOffice+'/delete'
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Bedroom Telah Di Hapus',
                    'BERHASIL'
                    )
                }
            })
        });

    </script>

    </html>
@endif
