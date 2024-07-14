@extends('layouts.app')

@section('content')

<!-- Menampilkan pesan success -->
@if(session('success'))
    <div id="alert-success" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Menampilkan pesan error -->
@if(session('error'))
    <div id="alert-error" class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data Driver</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Data Driver</h5>
                        <a href="{{ url('dashboard/dataDriver/create') }}" class="btn btn-primary mt-3">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Phone Number</th>
                                    <th>Tersedia</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($driver as $drivers)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $drivers->name }}</td>
                                        <td>{{ $drivers->phone_number }}</td>                                 
                                        <td>{{ $drivers->tersedia ? 'Ya' : 'Tidak' }}</td>
                                        <td>
                                            <a href="{{ route('dashboard.dataDriver.edit', $drivers->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('dashboard.dataDriver.destroy', $drivers->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                            </form>
                                        </td>                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection