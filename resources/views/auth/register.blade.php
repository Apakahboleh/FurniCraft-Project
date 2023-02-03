<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi Customer FurniCraft</title>
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
        <div class="container mt-3">
            <div class="row">
                <div class="col col-lg-5 px-5 mt-3" data-aos="fade-right" data-aos-easing="ease-in-cubic" data-aos-duration="500" style="box-shadow: 10px 10px 10px -2px rgba(0, 0, 0, 0.3)">
                    <form method="post" action="/account/create/store-signUp">
                        @csrf
                        <div class="row">
                            <div class="col-sm-9 offset-sm-1 text-center">
                                <h1 class="font-weight-bold">Register</h1>
                                <p>Daftarkan Dirimu</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-9 offset-sm-1">
                                <input class="input mb-4 mt-3 form-control" type="text" name="name" id="name" type="text" required autocomplete="name" autofocus placeholder="Username">
                            </div>

                            <div class="form-group col-sm-9 offset-sm-1 mb-4">
                                 <input class="input form-control" name="no_hp" id="no_hp" type="no_hp" required autocomplete="no_hp" autofocus placeholder="No Handphone">

                                 {{-- <i class="@error('error') is-invalid @enderror"></i> --}}
                                 @if (session('error'))
                                     <small>
                                         <strong class="text-danger mb-5">{{ session('error') }}</strong>
                                         <br><br>
                                     </small>
                                 @endif
                            </div>

                            <div class="form-group col-sm-9 offset-sm-1 mb-4">
                                <input name="password" id="password" type="password" required autocomplete="password" autofocus placeholder="Password" class="input form-control">

                                <i class="@error('password') is-invalid @enderror"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-9 offset-sm-1 mb-3">
                                <input name="password_confirmation" id="password" type="password" required autocomplete="password" placeholder="Konfirmasi Password" class="input form-control"><br>
                            </div>

                            <div class="form-group col-sm-9 offset-sm-1">
                                <button type="submit" class="successDaftar form-control button">
                                    Lanjutkan
                                </button>
                                <a href="/account/login/" class="mb-3 button-login btn form-control">Login!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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
        AOS.init();
    </script>

</body>

</html>
