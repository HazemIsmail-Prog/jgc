<section id="sections" class="bg-white min-h-screen flex items-center border-b py-28">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-primary">
            {{ __('messages.sections') }}
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        @foreach (config('sections') as $section)
            <div class="w-full md:w-1/2 lg:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white p-6 rounded-lg overflow-hidden shadow-lg border">
                    <div class="w-full font-bold text-xl text-primary mb-6">
                        {{ $section['title_' . app()->getLocale()] }}
                    </div>
                    <div class="text-gray-800 text-base">
                        <div>{{ $section['body_' . app()->getLocale()] }}</div>
                        @if ($section['list'])
                            <ul class="mt-4 ms-10 list-disc">
                                @foreach ($section['list'] as $item)
                                    <li>{{ $item[app()->getLocale()] }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
