@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Edit Data Driver</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Form Edit Driver</h5>
                    </div>
                    <div class="card-body">
                        <form id="editForm" action="{{ route('dashboard.dataDriver.update', $dataDriver->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Driver</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $dataDriver->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $dataDriver->phone_number }}" required>
                            </div>                            
                            <div class="mb-3">
                                <label for="tersedia" class="form-label">Tersedia</label>
                                <select class="form-control" id="tersedia" name="tersedia" required>
                                    <option value="1" {{ $dataDriver->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ $dataDriver->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ url('dashboard/dataDriver') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection