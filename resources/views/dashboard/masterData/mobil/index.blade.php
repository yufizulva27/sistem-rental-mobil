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

        <h1 class="h3 mb-3">Data Mobil</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Data Mobil</h5>
                        <a href="{{ url('dashboard/dataMobil/create') }}" class="btn btn-primary mt-3">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mobil</th>
                                    <th>Brand</th>
                                    <th>No Pol</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Tersedia</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mobil as $mobilItem)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mobilItem->name }}</td>
                                        <td>{{ $mobilItem->brand }}</td>
                                        <td>{{ $mobilItem->nopol }}</td>
                                        <td>Rp. {{ $mobilItem->price }}</td>
                                        <td>
                                            <img src="{{ asset($mobilItem->image) }}" alt="{{ $mobilItem->name }}" style="max-width: 100px;">
                                        </td>                                         
                                        <td>{{ $mobilItem->tersedia ? 'Ya' : 'Tidak' }}</td>
                                        <td>
                                            <a href="{{ route('dashboard.dataMobil.edit', $mobilItem->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('dashboard.dataMobil.destroy', $mobilItem->id) }}" method="POST" style="display: inline;">
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