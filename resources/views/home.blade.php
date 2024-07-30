@extends('templates.mainTemplates')

@section('container')
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Pemesanan Bengkel</h1>
                            <p class="lead fw-normal text-bloat mb-5">Pemesanan Bengkel solusi dari semua permasalahan. Ada Pemesanan Bengkel yang bisa jadi sahabat memodifikasi kendaraan anda!</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen">
                                        <img src="/img/logo.png" style="width: 180%; height: 100%;" alt="hero">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 dispay-1 text-white mb-3">"Solusi tepat untuk anda terbebas Kebingungan anda dalam peralatan yang diperlukan untuk modifikasi!"</div>
                </div>
            </div>
        </div>
    </aside>
@endsection
