@extends('layouts.main')
@section('konten')
    @push('styles')
        @livewireStyles
    @endpush

    @push('scripts')
        @livewireScripts
        <script src="{{ asset('script/myprofile/confirm.js') }}"></script>
    @endpush

    <main class="main users chart-page" id="skip-target" style="font-size: 12px;">

        <div class="container" style="margin-top: -10px">
            <div class="stat-cards-item" style="height:  60px; margin-bottom: 10px;">
                <div class="card-body" style="margin-top: -27px;">
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <h2 class="main-title float-sm-start" style="letter-spacing: 2px;">
                                My Profile
                            </h2>
                        </div>
                        <div class="col-sm-6 d-none d-sm-block">
                            <ol class="breadcrumb float-sm-end m-1">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                <li class="breadcrumb-item active">Halaman {{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stat-cards-item mb-1">
                <div class="card-body">
                    <center>
                        <div class="rounded-circle"
                            style="background-color: rgb(240, 240, 240); max-width: 200px; width: 200px; display: flex;  border: 1px solid rgb(161, 161, 161);">
                            <img id="image"
                                src="{{ Auth::user()->profile_image != null
                                    ? asset('images/profile_image/' . Auth::user()->profile_image)
                                    : (Auth::user()->UserDetails->gender == 'Laki-laki'
                                        ? asset('template/img/avatar/avatar-illustrated-02.webp')
                                        : asset('template/img/avatar/avatar-illustrated-01.webp')) }}"
                                alt="Image Profile" class="w-100"
                                style="border-radius: 50%; width: 200px; height: 200px; object-fit: cover;">
                        </div>
                    </center>

                    <center class="mt-2">
                        <label for="gambar">- Ganti Foto Profile -</label>
                    </center>

                    <form action="{{ url('profile/upload/' . $user->id) }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-center mt-2">
                            <div class="col-md-4">
                                <input type="file" name="gambar" id="gambar"
                                    class="form-control @error('gambar') is-invalid @enderror"
                                    accept="image/png, image, image/jpeg" onchange="upload(this);" required>

                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="stat-cards-item">
                <div class="card-body">
                    <table class="table table-borderless table-striped w-100">
                        <tr>
                            <th class="table-primary">My Data </th>
                            <td class="table-primary" colspan="2">
                                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="text-primary">Change Data</i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-sm-3">NIK</th>
                            <td style="width: 1%">:</td>
                            <td>
                                {!! !empty($user->UserDetails->nik) ? $user->UserDetails->nik : '<i>Not Available</i>' !!}
                            </td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>
                                {!! !empty($user->nama) ? $user->nama : '<i>Not Available</i>' !!}
                            </td>
                        </tr>
                        <tr>
                            <th>Jabatan (Role)</th>
                            <td>:</td>
                            <td>
                                {!! !empty($user->role) ? $user->jabatan . ' (' . $user->role . ')' : '<i>Not Available</i>' !!}
                            </td>
                        </tr>
                        <tr>
                            <th>Tempat, Tanggal Lahir</th>
                            <td>:</td>
                            <td>
                                {!! !empty($user->UserDetails->birth_date)
                                    ? $user->UserDetails->place . ', ' . $user->UserDetails->birth_date->translatedFormat('d F Y')
                                    : '<i>Not Available</i>' !!}
                            </td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>
                                {!! !empty($user->UserDetails->gender) ? $user->UserDetails->gender : '<i>Not Available</i>' !!}
                            </td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>
                                {!! !empty($user->UserDetails->address) ? $user->UserDetails->address : '<i>Not Available</i>' !!}
                            </td>
                        </tr>
                        <tr>
                            <th>No. HP</th>
                            <td>:</td>
                            <td>
                                {!! !empty($user->UserDetails->phone_number) ? $user->UserDetails->phone_number : '<i>Not Available</i>' !!}
                            </td>
                        </tr>

                        <tr>
                            <th colspan="3">&nbsp;</th>
                        </tr>

                        <tr>
                            <th class="table-primary">Account </th>
                            <td class="table-primary" colspan="2">
                                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdropAkun">
                                    <i class="text-primary">Change Data</i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td style="width: 1%">:</td>
                            <td>{{ $user->username }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>:</td>
                            <td>
                                {{-- <input class="form-control" type="password" id="pw" value="{{ $user->password_ori }}"
                                    readonly style="width: 100px; height: 5px;"> --}}
                                <label for="showPW" id="pw">**************</label>
                                <button id="showPW" class="ms-4" style="background-color:transparent"
                                    onclick="showPassword()">
                                    <i class="fa-regular fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <input type="hidden" id="true_passord" value="{{ $user->password_ori }}">

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    @livewire('my-profil.profil-livewire', ['user' => $user])
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdropAkun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropAkunLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    @livewire('my-profil.profil-akun-livewire', ['user' => $user])
                </div>
            </div>
        </div>

    </main>
@endsection

@section('script')
    <script>
        // preview images
        function upload(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // show password
        function showPassword() {
            var pw = document.getElementById("pw");
            var true_passord = document.getElementById("true_passord").value;
            if (pw.textContent === "**************") {
                // pw.type = "text";
                pw.textContent = true_passord;
            } else {
                // pw.type = "password";
                pw.textContent = "**************";
            }
        }
    </script>
@endsection
