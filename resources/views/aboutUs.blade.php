@if ( Auth::check() )
    @include('partials.navbarAuth')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FurniCraft - Tentang Kami</title>
    </head>
    <body>
        <div class="container" data-aos-delay="400" data-aos="fade-up">
            <div class="row d-flex">
                <div class="col-md-6 mt-5">
                    <h1 style="font-size: 50px;" class="text-success">Tentang Kami</h1>

                    <h5 class="text-success mb-3">Get in touch with our teams via maps or phone.</h5>
                    <p>Email : @.gmail.com</p>
                    <p>Alamat : Jl.Kaligawe Raya No. 96 B</p>
                    <hr style="height: 10px; margin-left: 0; width: 300px;">
                    <p>Phone : (+62) 667 962 667</p>

                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="/images/about/about_2.jpg" class="rounded" alt="IMG">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <h2>Vision</h2>
                    <p>Menghadirkan ruangan interior yang nyaman, dan unik bagi setiap pelanggan</p>
                    <h2 class="mt-5 text-left">Mission</h2>
                    <ol class="text-left">
                        <li>Memberikan layanan konsultasi gratis kepada setiap pelanggan untuk memahami kebutuhan dan preferensi mereka terhadap ruangan interior yang ingin dibuat.</li>
                        <li>Memberikan solusi yang efektif untuk mengoptimalkan penggunaan ruang yang tersedia dan memastikan kenyamanan penghuni di setiap ruangan.</li>
                        <li>Menciptakan desain interior yang kreatif, fungsional, dan unik yang memperhitungkan kebutuhan dan preferensi pelanggan.</li>
                        <li>Menggunakan bahan dan peralatan berkualitas tinggi yang sesuai dengan anggaran dan preferensi pelanggan.</li>
                    </ol>

                    <p>
                        Dengan menjalankan Visi & Misi ini,
                        FurniCraft dapat memastikan bahwa setiap pelanggan mendapatkan ruangan interior yang unik,
                        nyaman, dan sesuai dengan kebutuhan dan preferensi pelanggan.
                    </p>
                </div>
            </div>
        </div>

        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Our Address</h3>
                        <div class="embed-responsive-16by9" data-aos-delay="400" data-aos="fade-down">
                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4258220532297!2d110.44305521400308!3d-6.958991370065029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f358b052fdb5%3A0x7665aef3345581c2!2sFurniCraft%20Mebel%20Interior!5e0!3m2!1sid!2sid!4v1674830849363!5m2!1sid!2sid" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.footer')
    </body>/

    <script>
        $(function () {
            setTimeout(() => {
                $(".loader").fadeOut(1000)
            }, 1000);
        });
    </script>

    </html>
@else
    @include('partials.navbarGuest')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FurniCraft - Tentang Kami</title>
    </head>
    <body>
        <div class="container" data-aos-delay="400" data-aos="fade-up">
            <div class="row d-flex">
                <div class="col-md-6 mt-5">
                    <h1 style="font-size: 50px;" class="text-success">Tentang Kami</h1>

                    <h5 class="text-success mb-3">Get in touch with our teams via maps or phone.</h5>
                    <p>Email : @.gmail.com</p>
                    <p>Alamat : Jl.Kaligawe Raya No. 96 B</p>
                    <hr style="height: 10px; margin-left: 0; width: 300px;">
                    <p>Phone : (+62) 667 962 667</p>

                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="/images/about/about_2.jpg" class="rounded" alt="IMG">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <h2>Vision</h2>
                    <p>Menghadirkan ruangan interior yang nyaman, dan unik bagi setiap pelanggan</p>
                    <h2 class="mt-5 text-left">Mission</h2>
                    <ol class="text-left">
                        <li>Memberikan layanan konsultasi gratis kepada setiap pelanggan untuk memahami kebutuhan dan preferensi mereka terhadap ruangan interior yang ingin dibuat.</li>
                        <li>Memberikan solusi yang efektif untuk mengoptimalkan penggunaan ruang yang tersedia dan memastikan kenyamanan penghuni di setiap ruangan.</li>
                        <li>Menciptakan desain interior yang kreatif, fungsional, dan unik yang memperhitungkan kebutuhan dan preferensi pelanggan.</li>
                        <li>Menggunakan bahan dan peralatan berkualitas tinggi yang sesuai dengan anggaran dan preferensi pelanggan.</li>
                    </ol>

                    <p>
                        Dengan menjalankan Visi & Misi ini,
                        perusahaan interior dapat memastikan bahwa setiap pelanggan mendapatkan ruangan interior yang unik,
                        nyaman, dan sesuai dengan kebutuhan dan preferensi pelanggan.
                    </p>
                </div>
            </div>
        </div>

        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Our Address</h3>
                        <div class="embed-responsive-16by9" data-aos-delay="400" data-aos="fade-down">
                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4258220532297!2d110.44305521400308!3d-6.958991370065029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f358b052fdb5%3A0x7665aef3345581c2!2sFurniCraft%20Mebel%20Interior!5e0!3m2!1sid!2sid!4v1674830849363!5m2!1sid!2sid" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.footer')
    </body>

    <script>
        $(function () {
            setTimeout(() => {
                $(".loader").fadeOut(1000)
            }, 1000);
        });
    </script>

    </html>
@endif
