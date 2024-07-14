@extends('layouts.appCar')

@section('content')

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 112px">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">Detail Mobil Sewaan</h2>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-center justify-content-center" style="background-image: url({{ asset($mobil->image) }}); background-size: contain; background-repeat: no-repeat; background-position: center; height: 400px;">
                        </div>
                        <div class="text p-4">
                            <h1 class="mb-0 text-center">{{ $mobil->name }}</h1>
                            <div class="d-flex mb-3 justify-content-center">
                                <p class="price ml-2">Rp. {{ $mobil->price }} <span>/day</span></p>
                            </div>
                            <p><strong>Brand:</strong> {{ $mobil->brand }}</p>
                            <p><strong>Nomor Polisi:</strong> {{ $mobil->nopol }}</p>
                            <p><strong>Tersedia:</strong> {{ $mobil->tersedia ? 'Ya' : 'Tidak' }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <div class="btn-group">
                                    @if(Auth::check())
                                        <button type="button" class="btn btn-primary py-2 mr-2 rounded" data-bs-toggle="modal" data-bs-target="#buyNowModal" data-mobil-id="{{ $mobil->id }}">Book now</button>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary py-2 mr-2 rounded">Book now</a>
                                    @endif
                                    <a href="{{ url('/') }}" class="btn btn-secondary py-2 rounded">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
