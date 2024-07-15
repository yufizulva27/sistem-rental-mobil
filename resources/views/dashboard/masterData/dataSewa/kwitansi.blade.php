@extends('layouts.app')

@section('content')

<style>
    /* styles.css */
@media print {
    /* Aturan CSS untuk tampilan pencetakan */
    .hide-on-print {
        display: none; /* Sembunyikan elemen yang tidak ingin dicetak */
    }

    /* Atur ulang tampilan atau tambahkan gaya cetak khusus di sini */
    body {
        font-size: 12pt; /* Ukuran font untuk cetak */
    }

    .container {
        width: 100%; /* Lebar penuh untuk konten cetak */
        margin: 0; /* Hilangkan margin untuk layout cetak yang bersih */
    }
}
</style>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Kwitansi</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Kwitansi</h5>
                    </div>
                    <div class="card-body">
                        <h5>No. Resi: 456787756789657</h5>
                        <h5>Tanggal Sewa: {{ $dataSewa->start_date }}</h5>
                        <h5>Nama Penyewa: {{ $dataSewa->name }}</h5>
                        <h5>Nama Mobil: {{ $dataSewa->mobil->name }}</h5>
                        <h5>No. Polisi: {{ $dataSewa->mobil->nopol }}</h5>
                        <h5>Total Biaya: Rp. {{ $dataSewa->total_amount }}</h5>
                        @if ($dataSewa->payment_receipt)
                        <h5>Jenis Pembayaran: Transfer</h5>
                        @else
                        <h5>Jenis Pembayaran: Cash</h5>
                        @endif
                        @if($dataSewa->jarak)
                        <small class="form-text text-muted">* Biaya sewa luar kota ditambah 20%</small>
                        @endif
                    </div>                    
                </div>
                <button onclick="history.back()" class="btn btn-primary">Kembali</button>
            </div>
        </div>

    </div>
</main>

@endsection;