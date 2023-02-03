<!-- FOOTER START  -->
<div class="container-fluid bg-dark text-light mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h1 class="mb-4 display-5 font-weight-semi-bold text-success">
                <span class="text-success font-weight-bold px-3 mr-1"></span>FurniCraft
            </h1>
            <p class="mb-2"><i class="icon icon-home text-success mr-3"></i>Jl. Kaligawe Raya No. 96 B RT001 / RW001
            </p>
            <p class="mb-2"><i class="icon icon-envelope text-success mr-3"></i>Email</p>
            <p class="mb-0"><i class="icon icon-phone text-success mr-3"></i>089667962667</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-light mb-4">Products</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <ul class="list-unstyled text-light footer-link-list">
                            <li class="mb-2"><a class="text-decoration-none" href="/categories/kitchenSet">Kitchen Set</a></li>
                            <li class="mb-2"><a class="text-decoration-none" href="/categories/bedroomSet">Bedroom Set</a></li>
                            <li class="mb-2"><a class="text-decoration-none" href="/categories/livingRoom">Living Room</a></li>
                            <li class="mb-2"><a class="text-decoration-none" href="/categories/officeFurniture">Office Furniture</a></li>
                            <li class="mb-2"><a class="text-decoration-none" href="/furnicraft/catalogue">All Products</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-light mb-4">Supports</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <ul class="list-unstyled text-light footer-link-list">
                            @if ( Auth::check() )
                                <li class="mb-2"><a class="text-decoration-none" href="/Furnicraft/home">Home</a></li>
                            @else
                                <li class="mb-2"><a class="text-decoration-none" href="/">Home</a></li>
                            @endif

                            <li class="mb-2"><a class="text-decoration-none" href="/furnicraft/tentang-kami">About Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center">
                            <span class="icon icon-facebook text-white"><i class="sr-only">Facebook</i></span>
                        <a href="#" class="d-flex align-items-center justify-content-center">
                            <span class="icon icon-twitter text-white"><i class="sr-only">Twitter</i></span></a>
                        <a href="https://www.instagram.com/furni_craft/?hl=id" class="d-flex align-items-center justify-content-center">
                            <span class="icon icon-instagram text-white"><i class="sr-only">Instagram</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            @yield('footer')
        </div>
    </div>
</div>
