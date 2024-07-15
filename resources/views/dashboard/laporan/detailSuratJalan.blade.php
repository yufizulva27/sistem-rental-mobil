@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Detail Surat Jalan</h1>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Detail Sewa</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Nama Penyewa:</strong> {{ $dataSewa->name }}</p>
                        <p><strong>No. Telepon:</strong> {{ $dataSewa->no_telp }}</p>
                        <p><strong>Email:</strong> {{ $dataSewa->email }}</p>
                        <p><strong>Mobil:</strong> {{ $dataSewa->mobil->name }}</p>
                        <p><strong>No. Polisi:</strong> {{ $dataSewa->mobil->nopol }}</p>
                        <p><strong>Tanggal Mulai:</strong> {{ $dataSewa->start_date }}</p>
                        <p><strong>Tanggal Selesai:</strong> {{ $dataSewa->end_date }}</p>
                        <p><strong>Total Hari:</strong> {{ $dataSewa->total_days }} hari</p>
                        <p><strong>Opsi Jarak:</strong> {{ $dataSewa->jarak ? 'Dalam Kota' : 'Luar Kota' }}</p>
                        <p><strong>Opsi Pengiriman:</strong> {{ $dataSewa->delivery_option ? 'Pengantaran' : 'Penjemputan' }}</p>
                        <p><strong>Driver:</strong> {{ $dataSewa->driver->name }}</p>
                        <hr>
                        @if($dataSewa->delivery_option)
                            <p><strong>Alamat Pengantaran:</strong> {{ $dataSewa->alamat ?: '-' }}</p>
                        @else
                            <p><strong>Alamat Penjemputan:</strong> {{ $dataSewa->alamat ?: '-' }}</p>
                        @endif
                        <hr>
                        <p><strong>Catatan:</strong> {{ $dataSewa->notes ?: '-' }}</p>
                        <hr>
                        <button onclick="history.back()" class="btn btn-primary">Kembali</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
