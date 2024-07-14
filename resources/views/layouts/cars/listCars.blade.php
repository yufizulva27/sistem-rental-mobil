@extends('layouts.appCar')

@section('content')

<section class="ftco-section ftco-no-pt bg-light">
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

        <!-- Menampilkan pesan error -->
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyNowModal" data-mobil-id="{{ $mobil->id }}">Book Now</button>
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
</section>

@endsection

@section('scripts')
<script>
    // Fungsi untuk menyembunyikan pesan sukses setelah 3 detik
    setTimeout(function() {
        $('.alert').fadeOut('fast');
    }, 3000); // Waktu dalam milidetik (3 detik)
</script>

@endsection
