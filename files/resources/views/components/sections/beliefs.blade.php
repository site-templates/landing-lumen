@props([
    'cardOneTitle' => 'Measure before you automate',
    'cardOneBody' => "If you can't say what \"better\" means in numbers, you're not ready to buy AI — and we'll help you get ready instead of selling you some.",
    'cardTwoTitle' => 'People keep the judgment',
    'cardTwoBody' => 'Assistants draft, summarize, and route. Humans decide. Every deployment ships with clear escalation paths and a visible off switch.',
    'cardThreeTitle' => 'Leave teams stronger',
    'cardThreeBody' => "Success is your team running the system without us. Documentation and training aren't add-ons; they're the deliverable.",
])
    <section class="py-16">
        <div class="mx-auto max-w-7xl px-6">
            <dl class="grid gap-8 md:grid-cols-3">
                <div class="rounded-2xl bg-[#f3f7f4] p-8">
                    <p class="text-sm font-medium text-[#35705a] tabular-nums">01</p>
                    <dt class="mt-8 text-lg font-semibold">{{ $cardOneTitle }}</dt>
                    <dd class="mt-2 text-base/7 text-pretty text-[#0f231d]/60 sm:text-sm/6">{{ $cardOneBody }}</dd>
                </div>
                <div class="rounded-2xl bg-[#f3f7f4] p-8">
                    <p class="text-sm font-medium text-[#35705a] tabular-nums">02</p>
                    <dt class="mt-8 text-lg font-semibold">{{ $cardTwoTitle }}</dt>
                    <dd class="mt-2 text-base/7 text-pretty text-[#0f231d]/60 sm:text-sm/6">{{ $cardTwoBody }}</dd>
                </div>
                <div class="rounded-2xl bg-[#f3f7f4] p-8">
                    <p class="text-sm font-medium text-[#35705a] tabular-nums">03</p>
                    <dt class="mt-8 text-lg font-semibold">{{ $cardThreeTitle }}</dt>
                    <dd class="mt-2 text-base/7 text-pretty text-[#0f231d]/60 sm:text-sm/6">{{ $cardThreeBody }}</dd>
                </div>
            </dl>
        </div>
    </section>
