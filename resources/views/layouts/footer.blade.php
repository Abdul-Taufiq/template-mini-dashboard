<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

<!-- Icons library -->
<script src="{{ asset('template/plugins/feather.min.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ asset('template/js/script.js') }}"></script>
<script src="{{ asset('template/js/darkmode-boostrap.js') }}"></script>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


{{-- for livewire --}}
@stack('scripts')

{{-- sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- SWA Logout --}}
<script>
    $(function() {
        $(document).on('click', '#logout', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");

            Swal.fire({
                title: 'Apa Anda Yakin?',
                text: "Apakah Anda Ingin Keluar Dari Aplikasi?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya!',
                cancelButtonText: "Tidak"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('logout') }}',
                        type: "POST",
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        success: function() {
                            window.location.href = "/login";
                        }
                    });
                }
            });
        });
    });
</script>

{{-- Sweet Alert Pesan Berhasil --}}
@if (session('AlertSuccess'))
    <script>
        Swal.fire({
            title: 'Sukses!',
            text: '{{ session('AlertSuccess') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif

{{-- Sweet Alert Pesan Gagal --}}
@if (session('AlertFail'))
    <script>
        Swal.fire({
            title: 'Failed!',
            text: '{{ session('AlertFail') }}',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
@endif


@yield('script')
