@props([
    'ctaText' => 'Book a call',
    'ctaLink' => 'mailto:hello@example.com',
])
<!-- Global nav. Rendered on every page by the layout. -->
<!--
    The header sits flush and roomy while the page is at the top. Once you scroll
    a little, public/js/main.js sets data-scrolled and the header eases into its
    slimmer state and fades in its hairline + shadow (one box-shadow, see site.css).
-->
<header id="header" class="group/header sticky top-0 z-50 bg-white/85 backdrop-blur-md transition-shadow duration-300 ease-out data-scrolled:shadow-header">
    <nav class="relative mx-auto flex max-w-7xl items-center justify-between gap-6 px-6 pt-6 pb-7 transition-[padding] duration-300 ease-out group-data-scrolled/header:py-4">
        <a href="/" aria-label="Homepage" class="flex shrink-0 items-center gap-1.5">
            <x-logo />
        </a>

        <div class="flex items-center gap-8 text-sm font-medium text-[#0f231d]/60 max-sm:hidden">
            <a href="/#services" class="hover-line hover:text-[#0f231d]">Services</a>
            <a href="/#process" class="hover-line hover:text-[#0f231d]">Process</a>
            <a href="/#results" class="hover-line hover:text-[#0f231d]">Results</a>
            <a href="/writings" class="hover-line hover:text-[#0f231d] aria-[current=page]:text-[#0f231d]">Writings</a>
            <a href="/about" class="hover-line hover:text-[#0f231d] aria-[current=page]:text-[#0f231d]">About</a>
        </div>

        <div class="flex shrink-0 items-center gap-3">
            <!-- On hover the two tones swap and the arrow flies out of the circle, returning from the left. -->
            <a href="{{ $ctaLink }}" class="group/cta flex shrink-0 items-center gap-2.5 rounded-full bg-[#1e4038] py-1.5 pr-1.5 pl-4 text-sm font-medium text-white inset-ring inset-ring-transparent transition-colors duration-300 hover:bg-white hover:text-[#0f231d] hover:inset-ring-[#0f231d]/15 active:scale-[0.98]">
                {{ $ctaText }}
                <span class="grid size-6 shrink-0 place-items-center overflow-hidden rounded-full bg-white text-[#1e4038] transition-colors duration-300 group-hover/cta:bg-[#1e4038] group-hover/cta:text-white">
                    <svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" class="ease-soft col-start-1 row-start-1 size-4 shrink-0 transition-transform duration-350 group-hover/cta:translate-x-[150%]">
                        <path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/>
                    </svg>
                    <svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" class="ease-soft col-start-1 row-start-1 size-4 shrink-0 -translate-x-[150%] transition-transform duration-350 group-hover/cta:translate-x-0">
                        <path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/>
                    </svg>
                </span>
            </a>

            <!-- Mobile menu — a plain <details>, so it needs no JavaScript to open. -->
            <details class="menu group/menu sm:hidden">
                <summary class="relative flex items-center text-[#0f231d]" aria-label="Open menu">
                    <span class="absolute top-1/2 left-1/2 size-[max(100%,3rem)] -translate-1/2 pointer-fine:hidden" aria-hidden="true"></span>
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" aria-hidden="true" class="stroke-current size-6 shrink-0 group-open/menu:hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" aria-hidden="true" class="stroke-current size-6 shrink-0 group-not-open/menu:hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </summary>

                <!-- The panel shares the header's box-shadow so its edge matches. -->
                <div class="shadow-header absolute inset-x-0 top-full bg-white p-6">
                    <div class="flex flex-col gap-1 text-base font-medium text-[#0f231d]">
                        <a href="/#services" class="-mx-3 rounded-lg px-3 py-2 hover:bg-[#0f231d]/5">Services</a>
                        <a href="/#process" class="-mx-3 rounded-lg px-3 py-2 hover:bg-[#0f231d]/5">Process</a>
                        <a href="/#results" class="-mx-3 rounded-lg px-3 py-2 hover:bg-[#0f231d]/5">Results</a>
                        <a href="/writings" class="-mx-3 rounded-lg px-3 py-2 hover:bg-[#0f231d]/5">Writings</a>
                        <a href="/about" class="-mx-3 rounded-lg px-3 py-2 hover:bg-[#0f231d]/5">About</a>
                    </div>
                </div>
            </details>
        </div>
    </nav>
</header>
