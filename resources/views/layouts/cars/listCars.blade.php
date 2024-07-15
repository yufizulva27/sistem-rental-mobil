@extends('layouts.appCar')

@section('content')

<style>
    .hero-wrap {
        position: relative;
        background-image: url('{{ asset('assets/landingpage/images/bg_1.jpg') }}');
        background-size: cover;
        background-position: center;
        data-stellar-background-ratio: 0.5;
    }
    
    .hero-wrap::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Warna hitam dengan transparansi 50% */
        z-index: 1;
    }
    </style>
    

    <div class="hero-wrap " style="background-image: url({{ asset('assets/landingpage/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    {{-- <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4 text-center">Better Way to Rent Your Perfect Cars</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Select the Best Deal</h3>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                                <p class="text-center"><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    

  <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
          <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">What we offer</span>
          <h2 class="mb-2">Feeatured Vehicles</h2>
        </div>
      </div>
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
                                        <a href="{{ route('login') }}" class="btn btn-primary">Book Now</a>
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

  <section class="ftco-section ftco-about">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('assets/landingpage/images/about.jpg') }});">
                  </div>
                  <div class="col-md-6 wrap-about ftco-animate">
            <div class="heading-section heading-section-white pl-md-5">
                <span class="subheading">About us</span>
              <h2 class="mb-4">Welcome to RENTALMOBIL</h2>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><a href="#" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
            </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-section">
          <div class="container">
              <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
          <h2 class="mb-3">Our Latest Services</h2>
        </div>
      </div>
              <div class="row">
                  <div class="col-md-3">
                      <div class="services services-2 w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
              <div class="text w-100">
              <h3 class="heading mb-2">Wedding Ceremony</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
                  </div>
                  <div class="col-md-3">
                      <div class="services services-2 w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
              <div class="text w-100">
              <h3 class="heading mb-2">City Transfer</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
                  </div>
                  <div class="col-md-3">
                      <div class="services services-2 w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
              <div class="text w-100">
              <h3 class="heading mb-2">Airport Transfer</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
                  </div>
                  <div class="col-md-3">
                      <div class="services services-2 w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
              <div class="text w-100">
              <h3 class="heading mb-2">Whole City Tour</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
                  </div>
              </div>
          </div>
      </section>

  <section class="ftco-counter ftco-section img bg-light" id="section-counter">
          <div class="overlay"></div>
      <div class="container">
          <div class="row">
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="15">0</strong>
              <span>Year <br>Experienced</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="241">0</strong>
              <span>Total <br>Cars</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="500">0</strong>
              <span>Happy <br>Customers</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text d-flex align-items-center">
              <strong class="number" data-number="35">0</strong>
              <span>Total <br>Branches</span>
            </div>
          </div>
        </div>
      </div>
      </div>
  </section>

{{-- <section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 112px">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">List Mobil Sewaan</h2>
            </div>
        </div>

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
                                            <a href="{{ route('login') }}" class="btn btn-primary">Book Now</a>
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
    </div>
</section> --}}

@endsection

@section('scripts')
<script>
    // Fungsi untuk menyembunyikan pesan sukses setelah 3 detik
    setTimeout(function() {
        $('.alert').fadeOut('fast');
    }, 3000); // Waktu dalam milidetik (3 detik)
</script>
@endsection
