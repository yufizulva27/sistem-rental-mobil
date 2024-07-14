@extends('layouts.appCar')

@section('content')
    <div class="container">
        <h1>Welcome, {{ Auth::user()->name }}</h1>
        <p>This is your profile page.</p>
    </div>
@endsection