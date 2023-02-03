<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Customer FurniCraft</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mystyle.css">
    <link rel="stylesheet" href="/css/input.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        body {
            background-image: url('/image/auth.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            background-color: #857568;
        }

        form {
            display: block;
        }

        .col {
            background: white;
            border-radius: 30px;
        }

        .img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        h1 {
            font-weight: 400;
            text-shadow: 2px 5px 10px #000000;
        }

        @media (max-width: 768px) {
            .body {
                background-size: contain;
            }
        }
    </style>
</head>

<body>
    <section class="img-fluid">
        <div class="container">
            <div class="row mt-5">
                <div class="col col-lg-5 px-5 mt-5" data-aos="fade-right" data-aos-easing="ease-in-cubic" data-aos-duration="500" style="box-shadow: 10px 10px 10px -2px rgba(0, 0, 0, 0.3)">
                    <form method="post" action="/account/login/store-login">
                        @csrf
                        <div class="row">
                            <div class="col-sm-9 offset-sm-1 text-center">
                                <h1 class="font-weight-bold">Login</h1>
                                <p>Masuk dan Jelajahi Rumahmu</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-9 offset-sm-1">
                                 <input class="input mb-4 form-control" name="no_hp" id="no_hp" type="no_hp" required autocomplete="no_hp" autofocus placeholder="No HP">

                                 <i class="@error('error') is-invalid @enderror"></i>

                                 @if (session('error'))
                                     <small>
                                         <strong class="text-danger">{{ session('error') }}</strong>
                                     </small>
                                 @endif
                            </div>

                            <div class="form-group col-sm-9 offset-sm-1">
                                <input type="password" class="@error('password') is-invalid @enderror input mb-4 form-control" name="password" id="password" type="password" required autocomplete="password" placeholder="password">

                                <i class="@error('password') is-invalid @enderror"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-9 offset-sm-1">
                                <button type="submit" class="mb-3 form-control button">
                                    Lanjutkan
                                </button>
                                <a href="/account/create" class="mb-3 button-login btn form-control">Daftar!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if (Session::has('wrongLogin'))
        toastr.error('Nomor HP / Passwordmu Tidak Sesuai')
    @endif
</script>

<script>
    @if (Session::has('passwordUpdate'))
        toastr.success('Password Kamu Sukses Di Rubah. Gunakan Dengan Sebaik Mungkin🥰')
    @endif
</script>
