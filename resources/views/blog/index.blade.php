@extends('template.blog')
@section('header')
<header class="position-fixed w-100 transition text-white">
    <div class="d-flex p-4 container">
        <a href="{{route('blog.index')}}" class="d-flex text-decoration-none">
            <h3 class="my-auto text-white">ScarWash</h3>
        </a>

        <!-- RIGHT MENU -->
        <div class="ms-auto d-lg-flex d-none gap-2">
            <a href="{{route('blog.index')}}" class="btn text-white">
                Blog
            </a>
            <a href="{{route('location.index')}}" class="btn text-white">
                Location
            </a>
            <a href="{{route('gallery.index')}}" class="btn text-white">
                Gallery
            </a>
            <a href="{{route('pricelist.index')}}" class="btn btn-dark">
                Price List
            </a>
            <a href="{{ route('login.index') }}" class="btn text-white">
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
        <a href="{{route('blog.index')}}" class="btn text-white">
            Blog
            <hr />
        </a>
        <a href="{{route('location.index')}}" class="btn text-white">
            Location
            <hr />
        </a>
        <a href="{{route('gallery.index')}}" class="btn text-white">
            Gallery
            <hr />
        </a>
        <div>
            <a href="/yes-blog/price" class="btn btn-light w-100">PRICE LIST</a>
        </div>
        <a href="{{route('gallery.index')}}" class="btn text-white">
            Login
            <hr />
        </a>
    </div>
</header>
@endsection

@section('section')
    <!-- SECTION TYPE 1 : HERO -->
    <section class="app-section-hero">
        <div class="container">
            <div class="row">
                <!-- LEFT IMAGE -->
                <div class="col-lg-4 col-12">
                    <img class="w-100 app-hero-img"
                    src="{{asset('yesblog')}}/Logo.JPG">
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 col-12 my-auto d-grid gap-4">
                    <div class="d-grid gap-4 app-hero-first-content">
                        <h1 class="mt-5">ScarWash Blog</h1>
                        <div>
                            ScarWash merupakan Shoes laundry No. 1 di Surabaya yang berdiri Tahun 2016.
                            Kami sudah mempunyai 5 cabang di Surabaya dan 2 cabang di Sidoarjo. Kami menangani perawatan sepatu, tas, topi, helm, sarung tangan motor.
                            Kami melakukan perawatan secara profesional dengan teknik khusus serta menggunakan alat dan
                            bahan premium.
                        </div>
                        <div>
                            <form class="d-flex gap-2">
                                <input class="app-input flex-grow-1" placeholder="Enter your email">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <b>ScarWash Telah Melayani Pelanggan di Kota Surabaya dan Sidoarjo </b>
                        <div class="row gap-4 mt-4">
                            <div class="col">
                                <b>Free Pick Up & Delivery</b>
                                <p>Memberikan layanan pick up dan delivery secara free di hampir seluruh Kota Surabaya dan Sidoarjo</p>
                            </div>
                            <div class="col">
                                <b>Berbagai macam layanan</b>
                                <p>Tersedia berbagai macam layanan laudry dan repair</p>
                            </div>
                            <div class="col">
                                <b>7 Cabang di Kota Surabaya dan Sidoarjo</b>
                                <p>Cabang tersedia diberbagai wilayah kota Surabaya maupun Sidoarjo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 2 -->
    <section class="bg-black text-white py-5">
        <div class="container">
            <div class="d-flex">
                <h1>Promo ScarWash</h1>
            </div>
            <div class="row mt-4 gy-4">
                <div class="row mt-4 gy-4">

                    @foreach ($posts as $post)
                    <div class="col-lg-3 col-12 rounded-3">
                        @if ($post->banner_image)
                        <div>
                        <img class="w-100 object-cover" src="{{ asset('uploads/' . $post->banner_image) }}">
                        </div>
                        @endif
                        <div class="p-4 bg-secondary d-grid gap-4" style="height: 280px; object-fit:contain;">
                            <h5><b>{{$post->title}}</b></h5>
                            <p style="font-size: 13px;">Posted by {{$post->user->name}} on {{$post->created_at}}</p>
                            <a href="{{ route('blog.show',['slug'=>$post->slug])}}">
                            <a class="btn btn-light" href="{{ route('blog.show',['slug'=>$post->slug])}}">LIHAT PROMO</a>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-center py-2">
                        <a class="btn btn-light">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 3 -->
    <section class="container py-5 container d-grid gap-4 text-center">
        <div class="row">
            <div class="col">
                <h2>Our Gallery</h2>
            </div>
        </div>

        <div class="row g-5">
                <div class="row gx-4 mt-4">
                    <img style="height:300px;" class="col-2 object-fit-cover"
                        src="{{asset('yesblog')}}/Free delivery.PNG">
                    <img style="height:300px;" class="col-3 object-fit-cover"
                        src="{{asset('yesblog')}}/Foto Parfume.PNG">
                    <img style="height:300px;" class="col-3 object-fit-cover"
                        src="{{asset('yesblog')}}/IMG_1544.PNG">
                    <img style="height:300px;" class="col-3 object-fit-cover"
                        src="{{asset('yesblog')}}/IMG_1978.PNG">
                    <img style="height:300px;" class="col-1 object-fit-cover"
                        src="{{asset('yesblog')}}/1981.PNG">
                </div>
            </div>
        </div>

    </section>

    <!-- SECTION TYPE 4 -->
    <section class="container py-5">
        <div class="text-center">
            <h1>Layanan ScarWash</h1>
            <p>Kami memberikan berbagai macam layanan untuk perawatan barang kesayangan anda yang akan dikerjakan
                oleh tim kami yang sudah berpengalaman dan professional</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/fast cleaning.JPG">
                <div class="py-2 d-grid gap-2">
                    <h2>Fast Cleaning</h2>
                    <p>Fast cleaning merupakan pencucian instan pada bagian luar Midsole dan Upper yang bisa di tunggu selama 15-30 menit</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/repair.JPG">
                    <div class="py-2 d-grid gap-2">
                    <h2>Repair/Reglue</h2>
                    <p>Repair/Reglue merupakan memperbaiki/mengelem ulang sepatu yang lekang atau yang sudah lepas</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/unyellowing.JPG">
                    <div class="py-2 d-grid gap-2">
                    <h2>Unyellowing</h2>
                    <p>Unyellowing merupakan menghilangkan noda kuning pada Midsole hingga menjadi putih kembali
                        (tidak bisa untuk sole berbahan Boots atau Busa)</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/repaint.JPG">
                    <div class="py-2 d-grid gap-2">
                    <h2>Repaint/Change Color</h2>
                    <p>Repaint/Change Color merupakan mewarnai ulang atau mengubah warna sepatu (Sudah termasuk Deep Cleaning)</p>
                </div>
            </div>

           <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/deep cleaning.JPG">
                    <div class="py-2 d-grid gap-2">
                    <h2>Deep Cleaning</h2>
                    <p>Deep Cleaning merupakan mencuci seluruh bagian sepatu. Mulai dari Upper, Laces, Insole, Midsole,
                        Outsole dan lain-lain (+ Parfum Anti Bacterial)
                    </p>
                </div>
            </div>

              <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{asset('yesblog')}}/leather.JPG">
                    <div class="py-2 d-grid gap-2">
                    <h2>Leather Care</h2>
                    <p>Leather Care merupakan mencuci seluruh bagian sepatu berbahan kulit (Leather) dan dipoles Leather Wax
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center py-2">
            <a class="btn btn-dark">READ MORE</a>
        </div>
    </section>

    <!-- SECTION TYPE 5 : EMBED MAP -->
    <section class="bg-black py-5 text-center">
        <div class="text-white">
            <h1>OUR LOCATION</h1>
        </div>
        <div class="container">
            <div>
                <iframe class="rounded-3 w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.962455232647!2d112.7355958220893!3d-7.24511289276129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93fc001bc5d%3A0x110e38d8a6c23fbe!2sMonumen%20Tugu%20Pahlawan%20dan%20Museum%20Sepuluh%20Nopember%20Surabaya!5e0!3m2!1sen!2sid!4v1689251639326!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="text-center py-2">
            <a href = "{{route('location.index')}}"class="btn btn-dark">Find us at here</a>
        </div>
    </section>
@endsection
