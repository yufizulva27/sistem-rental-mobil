@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Detail Data Sewa</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Detail Data Sewa</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <strong>Nama Penyewa:</strong> {{ $dataSewa->name }}
                                </div>
                                <div class="mb-3">
                                    <strong>Alamat:</strong> {{ $dataSewa->alamat }}
                                </div>
                                <div class="mb-3">
                                    <strong>No Telp:</strong> {{ $dataSewa->no_telp }}
                                </div>
                                <div class="mb-3">
                                    <strong>Email:</strong> {{ $dataSewa->email }}
                                </div>
                                <div class="mb-3">
                                    <strong>Tanggal Mulai:</strong> {{ $dataSewa->start_date }}
                                </div>
                                <div class="mb-3">
                                    <strong>Tanggal Selesai:</strong> {{ $dataSewa->end_date }}
                                </div>
                                <div class="mb-3">
                                    <strong>Total Hari:</strong> {{ $dataSewa->total_days }} hari
                                </div>
                                <div class="mb-3">
                                    <strong>Jarak:</strong> {{ $dataSewa->jarak ? 'Luar Kota' : 'Dalam Kota' }}
                                </div>
                                <div class="mb-3">
                                    <strong>Jenis Pengiriman:</strong> {{ $dataSewa->delivery_option ? 'Penjemputan' : 'Pengantaran' }}
                                </div>
                                <div class="mb-3">
                                    <strong>Nama Supir:</strong> {{ $dataSewa->driver->name }}
                                </div>
                                @if ($dataSewa->payment_receipt)
                                <div class="mb-3">
                                    <strong>Jenis Pembayaran:</strong> Transfer
                                </div>
                                @else
                                <div class="mb-3">
                                    <strong>Jenis Pembayaran:</strong> Cash
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <strong>Nama Mobil:</strong> {{ $dataSewa->mobil->name }}
                                </div>
                                <div class="mb-3">
                                    <strong>No Pol:</strong> {{ $dataSewa->mobil->nopol }}
                                </div>
                                <div class="mb-3">
                                    <strong>Merk Mobil:</strong> {{ $dataSewa->mobil->brand }}
                                </div>
                                <div class="mb-3">
                                    <strong>Harga Sewa per Hari:</strong> Rp. {{ $dataSewa->mobil->price }}
                                </div>
                                <div class="mb-3">
                                    <strong>Total Biaya Sewa:</strong> Rp. {{ $dataSewa->total_amount }}
                                </div>
                                <div class="mb-3">
                                    <small class="form-text text-muted">* Biaya sewa luar kota ditambah 20%</small>
                                </div>
                            </div>
                        </div>
                        <button onclick="history.back()" class="btn btn-primary">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>

@endsection
