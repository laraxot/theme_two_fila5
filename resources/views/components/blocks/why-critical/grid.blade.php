@props([
    'pre_title' => 'Sicurezza e Compliance',
    'title' => '',
    'subtitle' => '',
    'points' => [],
])

@php
    $iconBgs = ['bg-red-500/20', 'bg-blue-500/20', 'bg-green-500/20', 'bg-yellow-500/20'];
    $iconTexts = ['text-red-400', 'text-blue-400', 'text-green-400', 'text-yellow-400'];
@endphp

<section class="py-20 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white scroll-mt-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <p class="text-sm font-semibold uppercase tracking-widest text-brand-green mb-3">{{ $pre_title }}</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ $title }}</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($points as $i => $point)
            @php $ci = $i % 4; @endphp
            <div class="bg-white/5 p-6 rounded-xl border border-white/10 hover:bg-white/10 transition-all duration-300">
                <div class="w-12 h-12 {{ $iconBgs[$ci] }} rounded-lg flex items-center justify-center mb-5">
                    @if(!empty($point['icon']))
                        <x-filament::icon :name="$point['icon']" class="w-6 h-6 {{ $iconTexts[$ci] }}" />
                    @else
                        <svg class="w-6 h-6 {{ $iconTexts[$ci] }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    @endif
                </div>

                <h4 class="text-xl font-bold mb-3">{{ $point['title'] ?? '' }}</h4>
                <p class="text-gray-300 leading-relaxed">{{ $point['description'] ?? '' }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>