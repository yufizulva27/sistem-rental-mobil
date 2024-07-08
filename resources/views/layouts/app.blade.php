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
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<!-- CDN Datatables -->
	<link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/autofill/2.7.0/css/autoFill.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/colreorder/2.0.3/css/colReorder.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/datetime/1.5.2/css/dataTables.dateTime.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/fixedcolumns/5.0.1/css/fixedColumns.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/fixedheader/4.0.1/css/fixedHeader.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/keytable/2.12.1/css/keyTable.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/rowgroup/1.5.0/css/rowGroup.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/scroller/2.4.3/css/scroller.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/searchbuilder/1.7.1/css/searchBuilder.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/searchpanes/2.3.1/css/searchPanes.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/select/2.0.3/css/select.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/staterestore/1.4.1/css/stateRestore.dataTables.min.css" rel="stylesheet">


	<title>Dashboard</title>

	<link href="{{ asset("assets/staticAdminDashboard/css/app.css") }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">Sistem Rental Mobil</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Master Data
					</li>

					<li class="sidebar-item {{ request()->segment(2) == 'dataSewa' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/dataSewa') }}">
							<i class="align-middle" data-feather="archive"></i> <span class="align-middle">Data Sewa</span>
						</a>
					</li>
					<li class="sidebar-item {{ request()->segment(2) == 'kwitansi' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/kwitansi') }}">
							<i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Kwitansi</span>
						</a>
					</li>
					
					<li class="sidebar-header">
						Laporan
					</li>
					
					<li class="sidebar-item {{ request()->segment(2) == 'laporanDataSewa' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/laporanDataSewa') }}">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Laporan Data Sewa</span>
						</a>
					</li>
					<li class="sidebar-item {{ request()->segment(2) == 'suratJalan' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('dashboard/suratJalan') }}">
							<i class="align-middle" data-feather="truck"></i> <span class="align-middle">Surat Jalan</span>
						</a>
					</li>					
				</ul>
			</div>
			<div class="dropdown-menu dropdown-menu-end">
				<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"></i> Log out</a>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="{{ asset("assets/staticAdminDashboard/img/avatars/avatar-6.png") }}" class="avatar img-fluid rounded me-1" alt="User" /> <span class="text-dark">Hi, User</span>
							</a>
							
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"></i> Log Out</a>
							</div>
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

	<script src="{{ asset("assets/staticAdminDashboard/js/app.js") }}"></script>

</body>

</html>