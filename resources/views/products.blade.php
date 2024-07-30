@extends('templates.mainTemplates')

@section('container')
    <section>
        <div class= "container px-4 px-lg-5 text-center">
            <div class="row justify-content-center">
                <div class="col">
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row gx-5 justify-content-between align-items-center pt-5">
                <p class="text-center mb-5 fs-2 fw-bold"> BARANG & HARGA </p>
                <div class="col-lg-6 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            @foreach ($products as $product)
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">

                                        <img src="/img/{{ $product->image }}" style = "width:120px ; height:120px"alt="">
                                        <h3 class="font-alt">{{ $product->name }}</h3>
                                        <p class="text-muted mb-0 mb-3">Rp. {{ $product->price}}</p>
                                        <form action="/cart" method="post">
                                            @csrf
                                            <input type="hidden" name="id_user" value="@auth {{ Auth::user()->id }} @endauth">
                                            <input type="hidden" name="id_product" value="{{ $product->id }}">
                                            <button class="btn bg-gradient-primary-to-secondary text-light text-center rounded-pill mb-2" type="submit"><i class="bi bi-cart3"></i> Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            
                            </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"></svg>
                        <div class="device-wrapper">
                        <img src="/img/desainbengkel.jpg" style = "width : 400px ; height: 530px">
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Nikmati Layanan Pemesanan</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
            
            </div>
        </div>
    </section>
@endsection