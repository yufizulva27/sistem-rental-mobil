<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rental Mobil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landingpage/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Rental<span>Mobil</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Cars</a></li>
                    <li class="nav-item active"><a href="{{ url('registrasi') }}" class="nav-link">Register</a></li>
                    <li class="nav-item active"><a href="{{ url('login') }}" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Modal untuk Buy Now -->
    <div class="modal fade" id="buyNowModal" tabindex="-1" aria-labelledby="buyNowModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buyNowModalLabel">Buy Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="bookingForm" action="{{ route('cars.bookNow') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="mobil_id" id="mobil_id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="start_date" class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="end_date" class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="total_days" class="form-label">Total Hari</label>
                            <input type="number" class="form-control" id="total_days" name="total_days" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="jarak" class="form-label">Opsi Jarak</label>
                            <select class="form-control" id="jarak" name="jarak" required>
                                <option value="" selected disabled><-- Pilih opsi --></option>
                                <option value="1">Dalam Kota</option>
                                <option value="0">Luar Kota</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="delivery_option" class="form-label">Opsi Pengiriman</label>
                            <select class="form-control" id="delivery_option" name="delivery_option" required>
                                <option value="" selected disabled><-- Pilih opsi --></option>
                                <option value="1">Pengantaran</option>
                                <option value="0">Penjemputan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name_driver" class="form-label">Pilih Driver</label>
                            <select class="form-control" id="name_driver" name="name_driver" required>
                                <option value="" selected disabled>-- Pilih Driver --</option>
                                @foreach ($drivers as $driver)
                                    <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="payment_option" class="form-label">Jenis Pembayaran</label>
                            <select class="form-control" id="payment_option" name="payment_option" required>
                                <option value="" selected disabled><-- Pilih jenis pembayaran --></option>
                                <option value="cash">Cash</option>
                                <option value="transfer">Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="bookNowButton">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Payment Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('cars.completeBooking') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="mobil_id" id="payment_mobil_id">
                        <input type="hidden" name="name" id="payment_name">
                        <input type="hidden" name="alamat" id="payment_alamat">
                        <input type="hidden" name="no_telp" id="payment_no_telp">
                        <input type="hidden" name="email" id="payment_email">
                        <input type="hidden" name="start_date" id="payment_start_date">
                        <input type="hidden" name="end_date" id="payment_end_date">
                        <input type="hidden" name="total_days" id="payment_total_days">
                        <input type="hidden" name="jarak" id="payment_jarak">
                        <input type="hidden" name="delivery_option" id="payment_delivery_option">
                        <input type="hidden" name="name_driver" id="payment_name_driver">
                        <input type="hidden" name="payment_option" id="payment_payment_option">
    
                        <div class="mb-3">
                            <label for="total_amount" class="form-label">Total Biaya</label>
                            <input type="text" class="form-control" id="total_amount" name="total_amount" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="bank_account" class="form-label">No Rekening</label>
                            <p id="bank_account">1234567890 (Bank Dummy)</p>
                        </div>
                        <div class="mb-3">
                            <label for="payment_receipt" class="form-label">Upload Bukti Transfer</label>
                            <input type="file" class="form-control" id="payment_receipt" name="payment_receipt" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Complete Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="{{ asset('assets/landingpage/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/aos.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets/landingpage/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/landingpage/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Hilangkan alert success setelah 3 detik
            setTimeout(function() {
                $('#alert-success').fadeOut('fast');
            }, 3000);

            // Hilangkan alert error setelah 3 detik
            setTimeout(function() {
                $('#alert-error').fadeOut('fast');
            }, 3000);

            // Set mobil_id saat modal ditampilkan
            $('#buyNowModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var mobilId = button.data('mobil-id');
                var modal = $(this);
                modal.find('.modal-body #mobil_id').val(mobilId);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const startDateInput = document.getElementById('start_date');
            const endDateInput = document.getElementById('end_date');
            const totalDaysInput = document.getElementById('total_days');

            function calculateTotalDays() {
                const startDate = new Date(startDateInput.value);
                const endDate = new Date(endDateInput.value);
                
                if (startDate && endDate && startDate <= endDate) {
                    const timeDiff = endDate - startDate;
                    const daysDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24)) + 1; // Including both start and end date
                    totalDaysInput.value = daysDiff;
                } else {
                    totalDaysInput.value = '';
                }
            }

            startDateInput.addEventListener('change', calculateTotalDays);
            endDateInput.addEventListener('change', calculateTotalDays);
        });

        document.getElementById('bookNowButton').addEventListener('click', function() {
            var paymentOption = document.getElementById('payment_option').value;
            if (paymentOption === 'transfer') {
                // Get form data
                var mobil_id = document.getElementById('mobil_id').value;
                var name = document.getElementById('name').value;
                var alamat = document.getElementById('alamat').value;
                var no_telp = document.getElementById('no_telp').value;
                var email = document.getElementById('email').value;
                var start_date = document.getElementById('start_date').value;
                var end_date = document.getElementById('end_date').value;
                var total_days = document.getElementById('total_days').value;
                var jarak = document.getElementById('jarak').value;
                var delivery_option = document.getElementById('delivery_option').value;
                var name_driver = document.getElementById('name_driver').value;

                // Calculate total amount
                var harga_sewa_perhari = 100000; // Contoh harga sewa per hari
                var total_amount = total_days * harga_sewa_perhari;
                if (jarak == '0') {
                    total_amount += total_amount * 0.2; // Tambah 20% jika luar kota
                }

                // Set data to payment modal
                document.getElementById('payment_mobil_id').value = mobil_id;
                document.getElementById('payment_name').value = name;
                document.getElementById('payment_alamat').value = alamat;
                document.getElementById('payment_no_telp').value = no_telp;
                document.getElementById('payment_email').value = email;
                document.getElementById('payment_start_date').value = start_date;
                document.getElementById('payment_end_date').value = end_date;
                document.getElementById('payment_total_days').value = total_days;
                document.getElementById('payment_jarak').value = jarak;
                document.getElementById('payment_delivery_option').value = delivery_option;
                document.getElementById('payment_name_driver').value = name_driver;
                document.getElementById('payment_payment_option').value = paymentOption;
                document.getElementById('total_amount').value = total_amount;

                // Show payment modal
                var paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'), {
                    keyboard: false
                });
                paymentModal.show();
            } else {
                document.getElementById('bookingForm').submit();
            }
        });
    </script>

</body>
</html> 
