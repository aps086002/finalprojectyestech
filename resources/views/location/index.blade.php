@extends('template.blog')
@section('header')
<head>
    <link rel="stylesheet" href="{{asset('yesblog')}}/style.css" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .debug {
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <!-- WHITE HAEDER -->
    <header class="position-fixed w-100 transition">
        <div class="d-flex p-4 container">
            <a href="{{route('blog.index')}}" class="d-flex text-decoration-none">
                <h3 class="my-auto text-black">ScarWash</h3>
            </a>

            <!-- RIGHT MENU -->
            <div class="ms-auto d-lg-flex d-none gap-2">
                <a href="{{ route('blog.index') }}" class="btn">
                    Blog
                </a>
                <a href="{{ route('location.index') }}" class="btn">
                    Location
                </a>
                <a href="{{route('gallery.index')}}" class="btn">
                    Gallery
                </a>
                <a href="{{ route('pricelist.index') }}" class="btn btn-dark">
                    PRICE LIST
                </a>
                <a href="{{ route('login.index') }}" class="btn">
                    Login
                </a>
            </div>

            <!-- RIGHT MOBILE MENU ICON -->
            <div class="d-lg-none d-flex ms-auto" onclick="showMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="pointer bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                </svg>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="menu" class="hide p-4 position-fixed left-0 top-0 w-100 h-100 bg-black d-flex flex-column">
            <div onclick="showMenu()" class="pointer ms-auto">
                X
            </div>

            <!-- MENU -->
            <a href="{{ route('blog.index') }}" class="btn text-white">
                Blog
                <hr />
            </a>
            <a href="{{ route('location.index') }}" class="btn text-white">
                Location
                <hr />
            </a>
            <a href="{{route('gallery.index')}}" class="btn text-white">
                Gallery
            </a>
            <div>
                <a href="{{ route('pricelist.index')}}" class="btn btn-light w-100">PRICE LIST</a>
            </div>
            <a href="{{ route('login.index')}}" class="btn text-white">
                Login
            </a>
        </div>
    </header>

    <!-- SECTION SEARCH -->
    <section class="container" style="padding-top:100px;">
        <div class="text-center">
        <h1>Lokasi Toko Kami</h1>
        <b>5 Cabang di Kota Surabaya dan 2 Cabang di Sidoarjo</b>

        <div class="d-flex mt-4">
            <input class="app-input flex-grow-1 p-2" placeholder="find us">
        </div>
    </div>

        <div class="row gx-2 gy-2 mt-2">
            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Selatan</span>
                    </div>
                    <h1>Jl. Manunggal Kebonsari No. 05 Jambangan Surabaya</h1>
                    <p>
                        Monday - Sunday (9AM - 8PM)
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Pusat</span>
                    </div>
                    <h1>Jl. Dharmahusada Stand No. 14 </h1>
                    <p>
                        Monday - Sunday (9AM - 8PM)
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Barat</span>
                    </div>
                    <h1>Jl. Ruko Northwest bouvardnv1 No 23 Citraland</h1>
                    <p>
                        Monday - Sunday (9AM - 8PM)
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Barat</span>
                    </div>
                    <h1>Jl. Raya Lidah Wetan No. 5</h1>
                    <p>
                        Monday - Sunday (9AM - 8PM)
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya Timur</span>
                    </div>
                    <h1>Jl. Gebang Lor No. 74 Sukolilo</h1>
                    <p>
                        Monday - Sunday (9AM - 8PM)
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Sidoarjo</span>
                    </div>
                    <h1>Jl. Pecantingan No. 74 Sekardangan</h1>
                    <p>
                        Monday - Sunday (9AM - 8PM)
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Sidoarjo</span>
                    </div>
                    <h1>Jl. Raya Wadung Asri No. 26 Waru</h1>
                    <p>
                        Monday - Sunday (9AM - 8PM)
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <!-- FOOTER -->
    <footer class="py-5 container">
        <div class="row">
            <div class="col-lg-4">
                <b> Contact Us:</b>
                <p> </p>
                <b>Line:</b>
                <p>@scarwash</p>
                <b>Instagram</b>
                <p>@scar.wash</p>
                <b>Email</b>
                <p>scar.wash17@gmail.com</p>
            </div>


            <div class="col-lg-8">
                <b>Store Surabaya</b>
                <p>Store 1 (Surabaya Selatan) : Jl. Manunggal Kebonsari No. 05 Jambangan</p>
                <p>Store 2 (Surabaya Pusat) : Jl. Dharmahusada Stand No. 14</p>
                <p>Store 3 (Surabaya Barat) : Jl. Ruko Northwest bouvardnv1 No 23 Citraland</p>
                <p>Store 4 (Surabaya Barat) : Jl. Raya Lidah Wetan No. 5</p>
                <p>Store 5 (Surabaya Timur) : Jl. Gebang Lor No. 74 Sukolilo</p>

                <b>Store Sidoarjo</b>
                <p>Store 6 (Sidoarjo) : Jl Pecantingan No. 74 Sekardangan</p>
                <p>Store 7 (Sidoarjo) : Jl Raya Wadung Asri No. 26 Waru</p>
            </div>
        </div>
        <hr />
        <div class="text-center">
            Copyright © 2023 Manda
        </div>
    </footer>

    <script>
        /**
         * SCRIPT TO CHANGE HEADER BACKGROUND
         **/
        const header = document.querySelector('header');

        // Listen for the scroll event
        window.addEventListener('scroll', function () {
            // Check the scroll position
            const scrollPosition = window.scrollY;

            // Change the background color if scroll position is 100 or more
            if (scrollPosition >= 100) {
                header.style.backgroundColor = 'white'; // Change the color to your desired value
            } else {
                header.style.backgroundColor = 'transparent'; // Change the color to your desired value
            }
        });

        /**
         * SCRIPT TO SHOW MOBILE MENU
         **/
        const menu = document.getElementById('menu')

        function showMenu() {
            if (menu.classList.contains('show')) {
                menu.classList.remove("show")
                menu.classList.add("hide")
            } else {
                menu.classList.remove("hide")
                menu.classList.add("show")
            }
        }

    </script>
</body>

</html>
@endsection
