@if (Auth::check())
    @include('partials.navbarAuth')
    <title>FurniCraft - Ubah Password</title>
    <link rel="stylesheet" href="/css/ubahPassword.css">
    <div class="container mt-5">
        <div class="col">
            <div class="row">
                <div class="card mx-auto text-center">
                    <div class="card ">
                        <h3 class="text-success">
                            Ubah Passwordmu
                        </h3>
                        <p>Apabila Lupa Password Atau Merasa Kesulitan Dengan Password  <br>  Sebelumnya Bisa Ganti Dengan Yang Lebih Mudah :D </p>
                        <form action="/account/{{ Auth::user()->id }}/change-password" method="post">
                            @csrf
                            @method("put")
                            <div class="group mt-5  offset-sm-2">
                                <input name="current_password" id="current_password" type="password" class="input @error('current_password') is-invalid @enderror" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="current_password">Password Saat Ini</label>
                                <i class=" @error('current_password') is-invalid @enderror"></i>
                                @if (session('error'))
                                <small>
                                    <strong class="text-danger">{{ session('error') }}</strong>
                                </small>
                                @endif
                            </div>

                            <div class="group mt-5 offset-sm-2">
                                <input name="password" id="password" type="password" class="input form-control @error('password') is-invalid @enderror" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="password">Password</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="group mt-5 offset-sm-2">
                                <input name="password_confirmation" id="password_confirmation" type="password" class="input form-control @error('password') is-invalid @enderror" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="password_confirmation">Konfirmasi Password</label>
                            </div>

                            <div class="offset-sm-2 mt-5">
                                <button name="change_password" class="mb-3 form-control button">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
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

    @include('partials.footer')
@endif
