<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum IMK TUGAS-4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center text-white">

    <div class="bg-white rounded-2xl shadow-2xl p-10 w-full max-w-md text-center text-gray-800 space-y-4 animate-fadeIn">
        <h1 class="text-3xl font-bold mb-4">PRAKTIKUM IMK TUGAS-4</h1>

        <button 
            onclick="showModal()" 
            class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 shadow">
            Modal Info
        </button>

        <button 
            onclick="showWarning()" 
            class="w-full px-6 py-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-300 shadow">
            Modal Warning
        </button>

        <button 
            onclick="showConfirm()" 
            class="w-full px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300 shadow">
            Modal Konfirmasi
        </button>

        <form method="POST" action="{{ route('welcome') }}">
            @csrf
            <button 
                type="submit" 
                class="w-full px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-300 shadow">
                Simpan Data
            </button>
        </form>

        <button 
            onclick="showError()" 
            class="w-full px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition duration-300 shadow">
            Tampilkan Error
        </button>

        <button 
            onclick="showInfo()" 
            class="w-full px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition duration-300 shadow">
            Tampilkan Info
        </button>
    </div>

    <script>
        function showModal() {
            Swal.fire({
                title: 'Modal info',
                html: 'Nama : Jonathan Del Piero Manik<br>NIM : 231402095',
                icon: 'info',
                confirmButtonText: 'Oke'
            });

        }

        function showWarning() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'contoh modal peringatan.',
                icon: 'warning',
                confirmButtonText: 'Oke'
            });
        }

        function showConfirm() {
            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: "Tindakan ini tidak bisa dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Dihapus!', 'Data telah dihapus.', 'success');
                }
            });
        }

        function showError() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: 'Terjadi kesalahan!',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        }

        function showInfo() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'info',
                title: 'contoh modal informasi tambahan.',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        }
    </script>

    @if(session('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    </script>
    @endif

</body>
</html>
