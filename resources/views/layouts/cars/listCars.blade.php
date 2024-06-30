@extends('layouts.appCar');

@section('content');

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 112px">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">List Mobil Sewaan</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-1.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ url('cars/carDetail') }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-2.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Subaru</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-3.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-4.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-5.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Subaru</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-6.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-7.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-8.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Subaru</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-9.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-10.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-11.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Subaru</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset("assets/landingpage/images/car-12.jpg") }});">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection