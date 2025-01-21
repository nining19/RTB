@extends('LayoutRTB.loginRTB')

@section('title', 'Login - Road to Bhakti')

@section('background', '{{ asset("images/login_image.png") }}')

@section('content')
<div class="container">
    <h1>Road To Bhakti</h1>
    <h2 style="font-family: Arial, Helvetica, sans-serif">Login</h2>


    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Masuk</button>
    </form>
    <p style="font-family: Arial, Helvetica, sans-serif">Belum daftar? <a href="{{ route('register') }}">Daftar</a></p>
    
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
</div>
@endsection
