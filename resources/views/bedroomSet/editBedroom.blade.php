@can('admin')
    @include('partials.navbarAuth')
        <link rel="stylesheet" href="/css/image_button.css">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <center>
                        <h1>Edit Kategori Bedroom Set</h1>
                        <p>Edit / Update Bedroom Set dan Kategori FurniCraft</p>
                    </center>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row g-0">
                <div class="col-sm-5">
                    <img src="/image/items/{{ $bedroomSets->image }}" width="500px" class="rounded" alt="">
                </div>

                <div class="col-sm-6 offset-sm-1">
                    <form action="/categories/bedroomSet/{{ $bedroomSets->id }}/edit-furniture/store" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                        <h3>Nama Bedroom Set</h3>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $bedroomSets->nama }}">
                        </div>
                        <hr style="height:0.5px; color:rgb(92, 88, 88); background-color:rgb(107, 104, 104);">

                        <h3>Ukuran Bedroom Set</h3>
                        <div class="mb-3">
                            <label for="panjang" class="form-label">Panjang</label>
                            <input type="text" name="panjang" class="form-control" id="panjang" value="{{ $bedroomSets->panjang }}">
                        </div>

                        <div class="mb-3">
                            <label for="tinggi" class="form-label">Tinggi</label>
                            <input type="text" name="tinggi" class="form-control" id="tinggi" value="{{ $bedroomSets->tinggi }}">
                        </div>

                        <div class="mb-3">
                            <label for="lebar" class="form-label">Lebar</label>
                            <input type="text" name="lebar" class="form-control" id="lebar" value="{{ $bedroomSets->lebar }}">
                        </div>
                        <hr style="height:0.5px; color:#333; background-color:#333;">

                        <h3>Deskripsi & Harga Bedroom Set</h3>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            {{-- <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $bedroomSets->deskripsi }}"> --}}
                            <textarea name="deskripsi" id="deskripsi" style="width: 100%; height: 100px;">{{ $bedroomSets->deskripsi }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="{{ $bedroomSets->harga }}">
                        </div>
                        <hr style="height:0.5px; color:#333; background-color:#333;">

                        <h3>Gambar Bedroom Set</h3>
                        <div class="mb-3">
                            <label for="image" class="form-label mx-4 text-center"><img src="/image/items/{{ $bedroomSets->image }}" width="100px" class="rounded shadow bg-white" alt="">
                                <div class="icon-btn add-btn mx-5">
                                    <div class="add-icon"></div>
                                    <div class="btn-txt mt-3">
                                        <input type="file" name="image" class="form-control" id="image" style="display: none;">Add Photo
                                    </div>
                                </div>
                            </label>

                            <label for="image2" class="form-label mx-4 text-center"><img src="/image/items/{{ $bedroomSets->image2 }}" width="100px" class="rounded shadow bg-white" alt="">
                                <div class="icon-btn add-btn mx-5">
                                    <div class="add-icon"></div>
                                    <div class="btn-txt mt-3">
                                        <input type="file" name="image2" class="form-control" id="image2" style="display: none;">Add Photo
                                    </div>
                                </div>
                            </label>

                            <label for="image3" class="form-label mx-4 text-center"><img src="/image/items/{{ $bedroomSets->image3 }}" width="100px" class="rounded shadow bg-white" alt="">
                                <div class="icon-btn add-btn mx-5">
                                    <div class="add-icon"></div>
                                    <div class="btn-txt mt-3">
                                        <input type="file" name="image3" class="form-control" id="image3" style="display: none;">Add Photo
                                    </div>
                                </div>
                            </label>
                        </div>
                        <hr style="height:0.5px; color:#333; background-color:#333;">

                        <button class="btn btn-lg btn-success mb-4" name="edit" id="edit" type="submit">
                            Edit Bedroom Set
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
