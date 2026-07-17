@props([
    'eyebrow' => 'How it works',
    'heading' => 'Six weeks, three honest steps',
    'items',
])
    <section id="process" class="border-t border-[#0f231d]/5 py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div>
                <p class="eyebrow">{{ $eyebrow }}</p>
                <h2 class="font-display mt-3 max-w-[30ch] text-balance text-5xl tracking-tight">{{ $heading }}</h2>
            </div>

            <dl class="mt-14 grid gap-8 md:grid-cols-3">
                @foreach ($items as $step)
                    <div class="border-t border-[#0f231d]/10 pt-8">
                        <div class="flex items-baseline justify-between gap-4">
                            <p class="font-display text-4xl text-[#1e4038]/30 tabular-nums">0{{ $loop->iteration }}</p>
                            <p class="text-sm font-medium text-[#35705a]">{{ $step->week }}</p>
                        </div>
                        <dt class="mt-6 text-lg font-semibold">{{ $step->title }}</dt>
                        <dd class="mt-2 text-base/7 text-pretty text-[#0f231d]/60 sm:text-sm/6">{{ $step->description }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>
