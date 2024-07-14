@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Edit Data Sewa</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Form Edit Data Sewa</h5>
                    </div>
                    <div class="card-body">
                        <form id="editForm" action="{{ route('dashboard.dataSewa.update', $dataSewa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Penyewa</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $dataSewa->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dataSewa->alamat }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">No Telp</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $dataSewa->no_telp }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $dataSewa->email }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $dataSewa->start_date }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="end_date" class="form-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $dataSewa->end_date }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="total_days" class="form-label">Total Hari</label>
                                <input type="number" class="form-control" id="total_days" name="total_days" value="{{ $dataSewa->total_days }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="jarak" class="form-label">Jarak</label>
                                <select class="form-select" id="jarak" name="jarak" required>
                                    <option value="1" {{ $dataSewa->jarak == 1 ? 'selected' : '' }}>Dalam Kota</option>
                                    <option value="0" {{ $dataSewa->jarak == 0 ? 'selected' : '' }}>Luar Kota</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="delivery_option" class="form-label">Jenis Pengiriman</label>
                                <select class="form-select" id="delivery_option" name="delivery_option" required>
                                    <option value="1" {{ $dataSewa->delivery_option == 1 ? 'selected' : '' }}>Pengantaran</option>
                                    <option value="0" {{ $dataSewa->delivery_option == 0 ? 'selected' : '' }}>Penjemputan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ url('dashboard/dataSewa') }}" class="btn btn-danger">Kembali</a>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection