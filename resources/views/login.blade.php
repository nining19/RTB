@extends('LayoutRTB.loginRTB')

@section('title', 'Login - Road to Bhakti')

@section('background', '{{ asset("images/login_image.avif") }}')

@section('content')
<div class="container">
    <h1>Road To Bhakti</h1>
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Masuk</button>
    </form>
    <p>Belum daftar? <a href="{{ route('register') }}">Daftar</a></p>
</div>
@endsection
