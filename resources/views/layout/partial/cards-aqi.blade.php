<div class="flex flex-wrap my-6 md:my-1 -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-full md:flex-none lg:w-full lg:flex-none">
        @php
            $category = '';
            $bgColor = '';
            $image = '';

            if ($data->aqi <= 50) {
                $category = 'Good';
                $bgColor = 'bg-lime-400/90';
                $bgCard = 'bg-lime-600/50';
                $textColor = 'text-lime-800';
                $image = './assets/img/aqi/good_image.png';
            } elseif ($data->aqi <= 100) {
                $category = 'Moderate';
                $bgColor = 'bg-yellow-300/80';
                $bgCard = 'bg-yellow-400/75';
                $textColor = 'text-yellow-800';
                $image = './assets/img/aqi/moderate_image.png';
            } elseif ($data->aqi <= 150) {
                $category = 'Unhealthy for Sensitive Groups';
                $bgColor = 'bg-orange-400/75';
                $bgCard = 'bg-orange-600/45';
                $textColor = 'text-orange-800';
                $image = './assets/img/aqi/unhealthy_for_sensitive_image.png';
            } elseif ($data->aqi <= 200) {
                $category = 'Unhealthy';
                $bgColor = 'bg-red-500/85';
                $bgCard = 'bg-red-700/55';
                $textColor = 'text-red-800';
                $image = './assets/img/aqi/unhealthy_image.png';
            } elseif ($data->aqi <= 300) {
                $category = 'Very Unhealthy';
                $bgColor = 'bg-fuchsia-600/60';
                $bgCard = 'bg-fuchsia-700/80';
                $textColor = 'text-fuchsia-800';
                $image = './assets/img/aqi/very_unhealthy_image.png';
            } else {
                $category = 'Hazardous';
                $bgColor = 'bg-red-900/85';
                $bgCard = 'bg-red-950/50';
                $textColor = 'text-red-950';
                $image = './assets/img/aqi/hazardous_image.png';
            }
        @endphp
        <div class="p-6 rounded-lg shadow-md {{ $bgColor }}">
            <div class="flex">
                <div class="text-center w-1/5">
                    <div class="flex flex-col p-3 {{ $bgCard }} text-white/85 rounded-md">
                        <p class="text-xl text-start font-mono font-thin">AQI</p>
                        <p class="text-5xl font-serif font-medium">{{ $data->aqi }}</p>
                    </div>
                </div>
                <div class="w-3/5">
                    <div class="flex flex-col p-3 px-5 {{ $textColor }}">
                        <p class="text-xl font-semibold font-mono">AQI CATEGORY</p>
                        <p class="lg:text-4xl text-3xl -my-4 font-bold">{{ $category }}</p>
                    </div>
                </div>
                <div class="flex w-1/5">
                    <img src="{{ $image }}" alt="{{ $category }}" class="h-30 w-32 mx-auto">
                </div>
            </div>
        </div>
    </div>
</div>