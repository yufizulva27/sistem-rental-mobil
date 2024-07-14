<!-- resources/views/dashboard/accountSettings/show.blade.php -->

@extends('layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Detail Data User</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <dl class="row">
                    <dt class="col-sm-3">Full Name</dt>
                    <dd class="col-sm-9">{{ $user->name }}</dd>

                    <dt class="col-sm-3">Phone Number</dt>
                    <dd class="col-sm-9">{{ $user->phone_number }}</dd>

                    <dt class="col-sm-3">Address</dt>
                    <dd class="col-sm-9">{{ $user->address }}</dd>

                    <dt class="col-sm-3">Username</dt>
                    <dd class="col-sm-9">{{ $user->username }}</dd>

                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9">{{ $user->email }}</dd>

                    {{-- <dt class="col-sm-3">Password</dt>
                    <dd class="col-sm-9">{{ $user->password }}</dd> --}}

                    <dt class="col-sm-3">Role</dt>
                    <dd class="col-sm-9">{{ $user->role }}</dd>
                </dl>
                <div class="mt-3">
                    <a href="{{ route('dashboard.account.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
