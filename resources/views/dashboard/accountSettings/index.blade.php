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

        <h1 class="h3 mb-3">Account Settings</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Account Users</h5>
                        <a href="{{ url('dashboard/account/create') }}" class="btn btn-primary mt-3">Tambah</a>
                        <div class="card-body">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        {{-- <th>Alamat</th> --}}
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $s)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $s->name }}</td>
                                            {{-- <td>{{ $s->address }}</td> --}}
                                            <td>{{ $s->phone_number }}</td>
                                            <td>{{ $s->email }}</td>
                                            <td>{{ $s->role }}</td>
                                                <td>
                                                    <a href="{{ route('dashboard.account.show', $s->id) }}" class="btn btn-sm btn-info">Show</a>
                                                    <a href="{{ route('dashboard.account.edit', $s->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('dashboard.account.destroy', $s->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
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

    </div>
</main>

@endsection
