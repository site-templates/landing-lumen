@props(['title' => '', 'description' => '', 'category' => '', 'date' => '', 'readTime' => '', 'author' => '', 'authorImage' => '', 'image' => '', 'imageAlt' => ''])
<!--
    The shared chrome for a writing: a centered editorial header — category,
    title, byline — then the lead image and your words. Write the body as plain
    HTML in the slot; resources/css/site.css styles it via the .prose class.
-->
<x-layouts.main :title="$title" :description="$description">

    <article class="pt-10 pb-20 sm:pt-14 sm:pb-28">
        <div class="mx-auto max-w-3xl px-6">

            <div class="fade-up text-center">
                <a href="/writings" class="group inline-flex items-center gap-1.5 text-sm font-medium text-[#0f231d]/50 hover:text-[#0f231d]">
                    <svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" class="size-4 shrink-0 transition-transform group-hover:-translate-x-0.5">
                        <path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/>
                    </svg>
                    All writings
                </a>
            </div>

            <div class="fade-up mt-10 text-center [animation-delay:75ms] sm:mt-12">
                <p class="eyebrow">{{ $category }}</p>
                <h1 class="font-display mx-auto mt-4 max-w-[24ch] text-balance text-5xl tracking-tight sm:text-6xl">{{ $title }}</h1>
                <p class="mx-auto mt-6 max-w-[52ch] text-pretty text-lg text-[#0f231d]/60">{{ $description }}</p>

                <!-- The byline — one of the four people from the team collection -->
                <div class="mt-8 flex items-center justify-center gap-3">
                    <img src="{{ $authorImage }}" alt="" class="size-7 rounded-full object-cover outline-1 -outline-offset-1 outline-black/10">
                    <p class="text-sm"><span class="font-medium">{{ $author }}</span> <span class="text-[#0f231d]/25">·</span> <span class="text-[#0f231d]/50">{{ $date }} · {{ $readTime }}</span></p>
                </div>
            </div>

            <img src="{{ $image }}" alt="{{ $imageAlt }}" class="fade-up mt-12 aspect-16/9 w-full rounded-3xl object-cover outline-1 -outline-offset-1 outline-black/5 [animation-delay:150ms] sm:mt-16">

            <div class="prose mx-auto mt-14 max-w-[68ch] sm:mt-20">
                {{ $slot }}
            </div>

            <!-- Closing CTA on the same soft-green well the homepage cards use -->
            <div class="mx-auto mt-16 max-w-[68ch] rounded-2xl bg-[#f3f7f4] p-8">
                <p class="text-base/7 text-pretty text-[#0f231d]/70">
                    Lumen helps support and operations teams put AI to work — one
                    measured pilot at a time. If any of this sounds like your team,
                    <a href="mailto:hello@example.com" class="hover-line font-medium text-[#0f231d]">book a call</a>.
                </p>
            </div>

        </div>
    </article>

</x-layouts.main>
