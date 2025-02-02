@extends('layouts.appCar')

@section('content')

        @if(session('success'))
            <div id="alert-success" class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div id="alert-error" class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('assets/landingpage/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Choose Your Car</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($mobils as $mobil)
                @if($mobil->tersedia)
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset($mobil->image) }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="{{ route('cars.show', $mobil->id) }}">{{ $mobil->name }}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">{{ $mobil->brand }}</span>
                                    <p class="price ml-auto">Rp. {{ $mobil->price }} <span>/day</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block">
                                    @if(Auth::check())
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyNowModal" data-mobil-id="{{ $mobil->id }}">Book Now</button>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary py-2 mr-1">Book now</a>
                                    @endif
                                        <a href="{{ route('cars.show', $mobil->id) }}" class="btn btn-secondary py-2 ml-1">Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
  </section>

@endsection