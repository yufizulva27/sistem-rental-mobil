@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Edit Data Mobil</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Form Edit Data Mobil</h5>
                    </div>
                    <div class="card-body">
                        <form id="editForm" action="{{ route('dashboard.dataMobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Mobil</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $mobil->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="brand" class="form-label">Brand</label>
                                <input type="text" class="form-control" id="brand" name="brand" value="{{ $mobil->brand }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nopol" class="form-label">No. Polisi</label>
                                <input type="text" class="form-control" id="nopol" name="nopol" value="{{ $mobil->nopol }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga Sewa</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $mobil->price }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if ($mobil->image)
                                    <p>Current Image:</p>
                                    <img src="{{ asset($mobil->image) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                                @else
                                    <p>No current image</p>
                                @endif
                            </div>                            
                            <div class="mb-3">
                                <label for="tersedia" class="form-label">Tersedia</label>
                                <select class="form-control" id="tersedia" name="tersedia" required>
                                    <option value="1" {{ $mobil->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ $mobil->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ url('dashboard/dataMobil') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection