@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Surat Jalan</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Detail Sewa</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.suratJalan.search') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama penyewa, nomor telepon, atau tanggal mulai sewa (format: YYYY-MM-DD)">
                                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                            </div>
                        </form>

                        @if(isset($dataSewa) && count($dataSewa) > 0)
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Penyewa</th>
                                        <th>No. Telepon</th>
                                        <th>Tanggal Mulai Sewa</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dataSewa as $sewa)
                                    <tr>
                                        <td>{{ $sewa->name }}</td>
                                        <td>{{ $sewa->no_telp }}</td>
                                        <td>{{ $sewa->start_date }}</td>
                                        <td>
                                            <a href="{{ route('dashboard.suratJalan.show', $sewa->id) }}" class="btn btn-primary">View Surat Jalan</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                            <p>Tidak ada hasil pencarian.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
