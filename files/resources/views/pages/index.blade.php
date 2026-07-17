<!-- Homepage — served at "/". -->
<x-layouts.main title="Practical AI for teams with real work to do" description="Lumen helps support and operations teams put AI to work — one measured pilot at a time, with honest math and humans in the loop.">

    <!-- ============ Hero ============ -->
    <!-- Near-full-bleed deep-green band, framed by a slim white gutter; the content stays in the page container so it aligns with the nav. -->
    <!-- The partner-logo marquee lives inside the band so the dark green runs from the header down through the logos. -->
    <x-sections.hero />

    <!-- ============ Services ============ -->
    <!-- Four numbered cards from collections/services.json — the loop counter drives the 01–04 labels. -->
    <x-sections.services :items="$services" />

    <!-- ============ Big stats ============ -->
    <!-- Near-full-bleed gray band, framed by a slim white gutter; the content stays in the page container so it aligns with the nav. -->
    <x-sections.stats />

    <!-- ============ Featured quote ============ -->
    <x-sections.quote />

    <!-- ============ Process ============ -->
    <!-- Three steps from collections/steps.json, on a simple week-by-week rail. -->
    <x-sections.process :items="$steps" />

    <!-- ============ Case study spotlight ============ -->
    <!-- Near-full-bleed deep-green band, framed by a slim white gutter; the content stays in the page container so it aligns with the nav. -->
    <x-sections.case-study />

    <!-- ============ Team ============ -->
    <!-- Loops over collections/team.json. -->
    <x-sections.team eyebrow="The people" heading="Four people, no account managers" :items="$team" />

    <!-- ============ FAQ ============ -->
    <!-- Native details/summary accordion — no JavaScript required. -->
    <x-sections.faq :items="$faq" />

</x-layouts.main>
