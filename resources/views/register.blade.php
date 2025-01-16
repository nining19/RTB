@extends('LayoutRTB.registerRTB')

@section('title', 'Register - Road to Bhakti')

@section('background', '{{ asset("images/register_image.png") }}')

@section('content')
<div class="container">
    <h1>Road To Bhakti</h1>
    <h2>Daftar</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
</div>
@endsection
