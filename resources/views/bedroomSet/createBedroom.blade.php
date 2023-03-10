@can('admin')
    @include('partials.navbarAuth')
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <center>
                        <h1>Buat Bedroom Set</h1>
                        <p>Tambahkan Bedroom Set Kedalam Kategori FurniCraft</p>
                    </center>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-9 offset-sm-2">
                    <form action="/categories/bedroomSet/add-furniture/store" enctype="multipart/form-data" method="post">
                        @csrf
                        <h3>Nama Bedroom Set</h3>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <hr style="height:0.5px; color:rgb(92, 88, 88); background-color:rgb(107, 104, 104);">

                        <h3>Ukuran Bedroom Set</h3>
                        <div class="mb-3">
                            <label for="panjang" class="form-label">Panjang</label>
                            <input type="text" name="panjang" class="form-control" id="panjang">
                        </div>

                        <div class="mb-3">
                            <label for="tinggi" class="form-label">Tinggi</label>
                            <input type="text" name="tinggi" class="form-control" id="tinggi">
                        </div>

                        <div class="mb-3">
                            <label for="lebar" class="form-label">Lebar</label>
                            <input type="text" name="lebar" class="form-control" id="lebar">
                        </div>
                        <hr style="height:0.5px; color:#333; background-color:#333;">

                        <h3>Deskripsi & Harga Bedroom Set</h3>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                        </div>
                        <hr style="height:0.5px; color:#333; background-color:#333;">

                        <h3>Gambar Bedroom Set</h3>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <hr style="height:0.5px; color:#333; background-color:#333;">

                        <button class="btn btn-lg btn-success mb-4" name="tambah" id="tambah" type="submit">
                            Tambah Bedroom Set
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <script>
            $(function () {
                setTimeout(() => {
                    $(".loader").fadeOut(1000)
                }, 1000);
            });
        </script>
@endcan
