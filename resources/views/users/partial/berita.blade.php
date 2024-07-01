<div class="flex flex-wrap mt-6 -mx-3">
    <div class="grid lg:grid-cols-3 gap-6 px-3 md:grid-cols-2">
        @foreach ($news['articles'] as $article)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="md:flex">
                    <div class="p-8">
                        <img class="h-48 w-full object-cover md:w-48 items-center justify-center rounded-lg shadow-md"
                            src="{{ $article['image'] }}" alt="{{ $article['title'] }}">

                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                            {{ $article['title'] }}</div>
                        <p class="mt-2 text-gray-500 text-wrap">{{ $article['description'] }}</p>
                        <a href="{{ $article['url'] }}" class="block mt-4 text-blue-500 hover:text-blue-700">Read
                            more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
