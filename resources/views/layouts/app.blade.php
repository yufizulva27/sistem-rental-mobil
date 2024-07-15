<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Dashboard</title>

	<link href="{{ asset('assets/staticAdminDashboard/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">  
    

</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<span class="sidebar-brand align-middle">Sistem Rental Mobil</span>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Master Data
					</li>

					<li class="sidebar-item {{ request()->segment(2) == 'dataSewa' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/dataSewa') }}">
							<i class="align-middle" data-feather="archive"></i> <span class="align-middle">Data Sewa</span>
						</a>
					</li>
					{{-- <li class="sidebar-item {{ request()->segment(2) == 'kwitansi' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/kwitansi') }}">
							<i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Kwitansi</span>
						</a>
					</li> --}}

					<li class="sidebar-item {{ request()->segment(2) == 'dataMobil' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/dataMobil') }}">
							<i class="align-middle" data-feather="database"></i> <span class="align-middle">Data Mobil</span>
						</a>
					</li>

					<li class="sidebar-item {{ request()->segment(2) == 'dataDriver' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/dataDriver') }}">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Data Driver</span>
						</a>
					</li>

					<li class="sidebar-item {{ request()->segment(2) == 'dataPenyewa' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/dataPenyewa') }}">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Data Penyewa</span>
						</a>
					</li>
					
					<li class="sidebar-header">
						Laporan
					</li>
					
					{{-- <li class="sidebar-item {{ request()->segment(2) == 'laporanDataSewa' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/laporanDataSewa') }}">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Laporan Data Sewa</span>
						</a>
					</li> --}}
					<li class="sidebar-item {{ request()->segment(2) == 'suratJalan' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/suratJalan') }}">
							<i class="align-middle" data-feather="truck"></i> <span class="align-middle">Surat Jalan</span>
						</a>
					</li>
					
					<li class="sidebar-header">
						Account Settings
					</li>
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ url('dashboard/account') }}">
							<i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Account</span>
						</a>
					</li>
				</ul>
			</div>
			{{-- <div class="dropdown-menu dropdown-menu-end">
				<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"></i> Log out</a>
			</div> --}}
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
			
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="{{ asset('assets/staticAdminDashboard/img/avatars/avatar-6.png') }}" class="avatar img-fluid rounded me-1" alt="User" /> 
								<span class="text-dark">Hi, {{ Auth::user()->name }}</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
									<path d="M14.696 5.204a.5.5 0 0 0-.696-.072L8 10.378 2 5.132a.5.5 0 0 0-.696.072l-.768.91a.5.5 0 0 0 .072.648l7 5.25a.5.5 0 0 0 .624 0l7-5.25a.5.5 0 0 0 .072-.648l-.768-.91z"/>
								</svg>
							</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<li>
									<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>				

            <!-- Main Content -->
            @yield('content')

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="#" target="_blank"><strong>Sistem Rental Mobil</strong></a> - <a class="text-muted" href="#" target="_blank"><strong></strong></a>&copy; <script>document.write(new Date().getFullYear());</script> All rights reserved
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

	<script src="{{ asset('assets/staticAdminDashboard/js/app.js') }}"></script>
	<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

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
		});
	</script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "paging": true, // Aktifkan pagination
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]] // Pilihan jumlah baris per halaman
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
</script>

</body>

</html>
