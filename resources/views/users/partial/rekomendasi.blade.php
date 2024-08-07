<div class="w-full bg-white rounded-lg">
    <div class="flex flex-wrap">
        <div class="w-full max-w-full mt-0 mb-6 md:mb-0 md:w-full md:flex-none lg:w-full lg:flex-none">
            @php
                $bgColor = '';
                $textColor = '';
                $recommendations = [];

                if ($data->aqi <= 50) {
                    $bgColor = 'bg-lime-400/90';
                    $textColor = 'text-lime-800';
                    $recommendations = [
                        [
                            'icon' => 'ic-health-sport-green.svg',
                            'text' => 'Nikmati aktivitas luar ruangan',
                        ],
                        [
                            'icon' => 'ic-health-window-green.svg',
                            'text' => 'Buka jendela anda untuk membawa udara bersih dan segar ke dalam ruangan',
                        ],
                    ];
                } elseif ($data->aqi <= 100) {
                    $bgColor = 'bg-yellow-300/80';
                    $textColor = 'text-yellow-800';
                    $recommendations = [
                        [
                            'icon' => 'ic-health-sport-yellow.svg',
                            'text' => 'Kelompok sensitif sebaiknya mengurangi aktivitas luar ruangan',
                        ],
                        [
                            'icon' => 'ic-health-window-yellow.svg',
                            'text' => 'Tutup jendela untuk menghindari udara luar yang kotor',
                        ],
                        [
                            'icon' => 'ic-health-mask-yellow.svg',
                            'text' => 'Kelompok sensitif sebaiknya memakai masker ketika keluar',
                        ],
                        [
                            'icon' => 'ic-health-airpurifier-yellow.svg',
                            'text' => 'Kelompok sensitif harus mulai menyalakan penyaring udara',
                        ],
                    ];
                } elseif ($data->aqi <= 150) {
                    $bgColor = 'bg-orange-400/75';
                    $textColor = 'text-orange-800';
                    $recommendations = [
                        [
                            'icon' => 'ic-health-sport-orange.svg',
                            'text' => 'Kurangi aktivitas luar ruangan',
                        ],
                        [
                            'icon' => 'ic-health-window-orange.svg',
                            'text' => 'Tutup jendela untuk menghindari udara luar yang kotor',
                        ],
                        [
                            'icon' => 'ic-health-mask-orange.svg',
                            'text' => 'Kelompok sensitif sebaiknya memakai masker ketika keluar',
                        ],
                        [
                            'icon' => 'ic-health-airpurifier-orange.svg',
                            'text' => 'Nyalakan penyaring udara',
                        ],
                    ];
                } elseif ($data->aqi <= 200) {
                    $bgColor = 'bg-red-500/85';
                    $textColor = 'text-red-800';
                    $recommendations = [
                        [
                            'icon' => 'ic-health-sport-red.svg',
                            'text' => 'Hindari aktivitas luar ruangan',
                        ],
                        [
                            'icon' => 'ic-health-window-red.svg',
                            'text' => 'Tutup jendela untuk menghindari udara luar yang kotor',
                        ],
                        [
                            'icon' => 'ic-health-mask-red.svg',
                            'text' => 'Kenakan masker ketika keluar',
                        ],
                        [
                            'icon' => 'ic-health-airpurifier-red.svg',
                            'text' => 'Nyalakan penyaring udara',
                        ],
                    ];
                } elseif ($data->aqi <= 300) {
                    $bgColor = 'bg-fuchsia-600/60';
                    $textColor = 'text-fuchsia-800';
                    $recommendations = [
                        [
                            'icon' => 'ic-health-sport-purple.svg',
                            'text' => 'Hindari semua aktivitas luar ruangan',
                        ],
                        [
                            'icon' => 'ic-health-window-purple.svg',
                            'text' => 'Tutup jendela untuk menghindari udara luar yang kotor',
                        ],
                        [
                            'icon' => 'ic-health-mask-purple.svg',
                            'text' => 'Kenakan masker ketika keluar',
                        ],
                        [
                            'icon' => 'ic-health-airpurifier-purple.svg',
                            'text' => 'Nyalakan penyaring udara',
                        ],
                    ];
                } else {
                    $bgColor = 'bg-red-900/85';
                    $textColor = 'text-red-950';
                    $recommendations = [
                        [
                            'icon' => 'ic-health-sport-maroon.svg',
                            'text' => 'Tetap di dalam ruangan',
                        ],
                        [
                            'icon' => 'ic-health-window-maroon.svg',
                            'text' => 'Tutup jendela untuk menghindari udara luar yang kotor',
                        ],
                        [
                            'icon' => 'ic-health-mask-maroon.svg',
                            'text' => 'Kenakan masker ketika keluar',
                        ],
                        [
                            'icon' => 'ic-health-airpurifier-maroon.svg',
                            'text' => 'Nyalakan penyaring udara',
                        ],
                    ];
                }
            @endphp
            <div class="p-4 rounded-lg shadow-md">
                <div class="mt-4 p-4 {{ $textColor }}">
                    <p class="text-base font-bold">REKOMENDASI KESEHATAN</p>
                    <div class="flex flex-wrap mt-4">
                        @foreach ($recommendations as $recommendation)
                            <div class="w-full md:w-1/2 p-2 flex items-center">
                                <div class="w-14 h-14 flex items-center justify-center bg-white">
                                    <img src="{{ asset('assets/rekomendasi/' . $recommendation['icon']) }}"
                                        alt="Icon" class="w-14 h-w-14">
                                </div>
                                <div class="ml-5 items-center">
                                    <p class="my-auto">{{ $recommendation['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
