
@extends('LayoutRTB.ProfileRTB')

@section('content')
    <div class="profile-header">

    </div>

    {{-- <h2 class="mb-4">Selamat datang {{ $user->name }}</h2> --}}
    <div class="profile-greeting">
        <img src="{{ asset('images/profile.png') }}" alt="Profile Image">

        <div class="profile-data">
            <h3 class="mb-0">Diva</h3>
            <p class="text-secondary mb-0">alexarawles@gmail.com</p>
        </div>
    </div>
    <div class="profile-container">
                {{-- Form Dinamis yg nanti di pake kalo udah ada database --}}
                {{-- <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">No. Telepon</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ $user->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ $user->address }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" disabled>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form> --}}
    
                {{-- Form Statis cmn buat liat halaman aja --}}
                <form method="POST" action="#" class="overflow-hidden">
                    @csrf
                    <div class="row pb-0">
                        <div class="mb-3 col-6">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" value="" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="phone" class="form-label">No. Telepon</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" name="address" id="address" class="form-control" value="">
                        </div>
                        <div class="mb-3 hidden">
                            <label for="email" class="form-label">Email</label>
                            <input type="hidden" name="email" id="email" class="form-control" value="" disabled>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary edit-button w-25">Edit</button>
                </form>

                <div class="profile-email">
                    <h6 class="fs-5">My Email Address</h6>

                    <div class="data">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>
                            <p class="mb-0">alexarawles@gmail.com</p>
                            <p class="text-secondary mb-0">1 Month Ago</p>
                        </div>
                    </div>
                </div>
    </div>

@endsection
