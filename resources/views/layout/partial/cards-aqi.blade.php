<div class="flex flex-wrap">
    <div
        class="w-full max-w-full mt-0 mb-6 lg:rounded-tl-lg rounded-t-lg md:mb-0 md:w-full md:flex-none lg:w-full lg:flex-none overflow-hidden">
        @php
            $category = '';
            $bgColor = '';
            $image = '';

            if ($data->aqi <= 50) {
                $category = 'Baik';
                $bgColor = 'bg-lime-400/90';
                $bgCard = 'bg-lime-600/50';
                $textColor = 'text-lime-800';
                $image = './assets/img/aqi/good_image.png';
            } elseif ($data->aqi <= 100) {
                $category = 'Sedang';
                $bgColor = 'bg-yellow-300/80';
                $bgCard = 'bg-yellow-400/75';
                $textColor = 'text-yellow-800';
                $image = './assets/img/aqi/moderate_image.png';
            } elseif ($data->aqi <= 150) {
                $category = 'Tidak sehat bagi kelompok sensitif';
                $bgColor = 'bg-orange-400/75';
                $bgCard = 'bg-orange-600/45';
                $textColor = 'text-orange-800';
                $image = './assets/img/aqi/unhealthy_for_sensitive_image.png';
            } elseif ($data->aqi <= 200) {
                $category = 'Tidak Sehat';
                $bgColor = 'bg-red-500/85';
                $bgCard = 'bg-red-700/55';
                $textColor = 'text-red-800';
                $image = './assets/img/aqi/unhealthy_image.png';
            } elseif ($data->aqi <= 300) {
                $category = 'Sangat tidak sehat';
                $bgColor = 'bg-fuchsia-600/60';
                $bgCard = 'bg-fuchsia-700/80';
                $textColor = 'text-fuchsia-800';
                $image = './assets/img/aqi/very_unhealthy_image.png';
            } else {
                $category = 'Berbahaya';
                $bgColor = 'bg-red-900/85';
                $bgCard = 'bg-red-950/50';
                $textColor = 'text-red-950';
                $image = './assets/img/aqi/hazardous_image.png';
            }
        @endphp
        <div class="p-4 shadow-md {{ $bgColor }}">
            <div class="flex">
                <div class="text-center w-1/5">
                    <div class="flex flex-col p-2 {{ $bgCard }} text-white/85 rounded-md">
                        <p class="text-lg text-start font-mono font-thin">AQI</p>
                        <p class="text-4xl font-serif font-medium">{{ $data->aqi }}</p>
                    </div>
                </div>
                <div class="w-3/5 md:w-auto">
                    <div class="flex flex-col p-2 px-6 {{ $textColor }}">
                        <p class="text-xl font-semibold font-mono">AQI CATEGORY</p>
                        <p class="lg:text-3xl text-2xl -my-4 font-bold">{{ $category }}</p>
                    </div>
                </div>
                <div class="flex w-1/5">
                    <img src="{{ $image }}" alt="{{ $category }}" class="h-30 w-30 mx-auto">
                </div>
            </div>
        </div>
    </div>
</div>
