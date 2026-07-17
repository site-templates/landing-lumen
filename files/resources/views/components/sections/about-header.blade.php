@props([
    'eyebrow' => 'About',
    'headingStart' => "We're the calm ones in a",
    'headingAccent' => 'loud',
    'headingEnd' => 'industry',
    'body' => 'Lumen started in 2025 after our founder spent a year watching her support team demo tools that promised everything and shipped confusion. We do the opposite: small pilots, real baselines, honest math, and a hard rule that humans own the judgment calls.',
])
    <section class="relative overflow-hidden">
        <div class="hero-wash pointer-events-none absolute inset-0"></div>
        <div class="relative mx-auto max-w-7xl px-6 pt-24 pb-16 sm:pt-32">
            <p class="fade-up eyebrow">{{ $eyebrow }}</p>
            <h1 class="fade-up font-display mt-4 max-w-[24ch] text-balance text-5xl tracking-tight [animation-delay:50ms] sm:text-6xl">
                {{ $headingStart }} <span class="italic">{{ $headingAccent }}</span> {{ $headingEnd }}
            </h1>
            <p class="fade-up mt-6 max-w-[56ch] text-pretty text-lg text-[#0f231d]/60 [animation-delay:100ms]">
                {{ $body }}
            </p>
        </div>
    </section>
