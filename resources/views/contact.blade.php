@extends('users.main')
@section('content')
    <div class="w-full px-6 py-8 mx-auto">
        <div class="px-16">
            <div class="my-3 p-10 bg-white rounded-lg shadow-lg">
                <h1 class="text-3xl font-bold mb-4">Hubungi Kami</h1>
                <p class="mb-4">
                    Kami sangat menghargai masukan dan pertanyaan dari pengguna kami. Jika Anda memiliki pertanyaan,
                    saran,
                    atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui informasi kontak di bawah ini.
                </p>
                <p class="mb-4">
                    <strong>Email:</strong> support@kualitasudara.com<br>
                    <strong>Telepon:</strong> +62 812 3456 7890<br>
                    <strong>Alamat:</strong> Jl. Banjarsari Selatan No.11 ,Pedalangan, Banyumanik, Semarang
                </p>
            </div>

            <div class="my-3 p-10 bg-white rounded-lg shadow-lg  flex flex-col justify-center">
                <p class="mb-4">
                    Atau Anda dapat mengisi formulir kontak di bawah ini dan kami akan segera menghubungi Anda.
                </p>
                <form action="{{ route('contact.send') }}" method="POST" class="w-full max-w-lg">
                    @csrf
                    <div class="mb-4 w-full">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan:</label>
                        <textarea id="message" name="message"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            rows="4" required></textarea>
                    </div>
                    <div class="mb-4">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Kirim
                        </button>
                    </div>
                </form>
                @if (session('success'))
                    <p>{{ session('success') }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
