@props([
    'title' => '',
    'subtitle' => '',
    'primary_cta_label' => '',
    'primary_cta_url' => '#',
    'secondary_cta_label' => '',
    'secondary_cta_url' => '#',
    'image' => '',
    'stats' => [],
])

<section class="relative min-h-screen flex items-center overflow-hidden">
    {{-- Background: photo with dark overlay (like target site) --}}
    <div class="absolute inset-0 z-0">
        @if($image)
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                 style="background-image: url('{{ $image }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
        @else
            <div class="absolute inset-0 bg-gradient-to-br from-[#0f2b46] via-[#1E5A96] to-[#0f2b46]"></div>
        @endif
    </div>

    {{-- Content --}}
    <div class="container mx-auto px-4 relative z-10 py-32">
        <div class="max-w-3xl">
            @if($title)
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">{{ $title }}</h1>
            @endif

            @if($subtitle)
                <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed max-w-2xl">{{ $subtitle }}</p>
            @endif

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 mb-16">
                @if($primary_cta_label)
                    <a href="{{ $primary_cta_url }}"
                       class="inline-flex items-center justify-center font-semibold rounded-lg bg-brand-green hover:bg-brand-green/90 text-white text-lg px-8 py-4 group shadow-xl transition-all hover:-translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                        {{ $primary_cta_label }}
                    </a>
                @endif

                @if($secondary_cta_label)
                    <a href="{{ $secondary_cta_url }}"
                       class="inline-flex items-center justify-center font-semibold rounded-lg bg-white/10 text-white hover:bg-white hover:text-[#1E5A96] border border-white/30 text-lg px-8 py-4 backdrop-blur-sm transition-all shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        {{ $secondary_cta_label }}
                    </a>
                @endif
            </div>

            {{-- Stats bar --}}
            @if(!empty($stats))
                <div class="grid grid-cols-3 gap-8 max-w-xl">
                    @foreach($stats as $stat)
                        <div class="bg-black/30 backdrop-blur-sm rounded-lg px-4 py-3">
                            <div class="text-xl md:text-2xl font-bold text-white">{{ $stat['value'] ?? '' }}</div>
                            <div class="text-xs md:text-sm text-gray-300">{{ $stat['label'] ?? '' }}</div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    {{-- Bottom gradient fade --}}
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent z-10"></div>
</section>
