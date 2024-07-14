@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Tambah Data Mobil</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Form Tambah Data Mobil</h5>
                    </div>
                    <div class="card-body">
                        <form id="createForm" action="{{ route('dashboard.dataMobil.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Mobil</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="brand" class="form-label">Brand</label>
                                <input type="text" class="form-control" id="brand" name="brand" required>
                            </div>
                            <div class="mb-3">
                                <label for="nopol" class="form-label">No. Polisi</label>
                                <input type="text" class="form-control" id="nopol" name="nopol" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga Sewa</label>
                                <input type="number" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                            <div class="mb-3">
                                <label for="tersedia" class="form-label">Tersedia</label>
                                <select class="form-control" id="tersedia" name="tersedia" required>
                                    <option value="" selected disabled><-- Pilih opsi --></option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" onclick="window.location='{{ url('dashboard/dataMobil') }}'">Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
