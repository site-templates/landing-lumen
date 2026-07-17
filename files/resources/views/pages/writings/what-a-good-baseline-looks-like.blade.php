<!-- Writing — served at "/writings/what-a-good-baseline-looks-like". -->
<x-layouts.post
    title="What a Good Baseline Looks Like"
    description="You can't improve a number you never wrote down. The four measurements we take before any AI touches a workflow — and the one everyone forgets."
    category="Measurement"
    date="Jun 24, 2026"
    readTime="6 min read"
    author="Priya Nair"
    authorImage="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=200&h=200&auto=format&fit=crop&crop=faces"
    image="https://assets.ui.sh/wallpapers/landscapes.webp?variant=valley"
    imageAlt="">

    <p class="lead">Every disappointing AI project we've been called in to rescue shares one trait: nobody wrote anything down before it started. The team feels like things got better, the invoice says things got expensive, and there is no third column. A baseline is the third column. Here's how we build one in the two weeks before a pilot.</p>

    <h2>The four numbers we always take</h2>

    <ol>
        <li>Volume — how many of this task arrive per week, and how spiky the arrival is</li>
        <li>Touch time — minutes of human attention per item, measured, not estimated</li>
        <li>Quality — whatever the team already trusts: CSAT, error rate, reopen rate</li>
        <li>Latency — how long the requester waits, wall-clock, including the queue</li>
    </ol>

    <p>None of these are exotic. The discipline is in taking them <strong>before</strong> the pilot, over a long enough window to smooth out a bad week, and agreeing in writing which one the pilot exists to move.</p>

    <h2>The one everyone forgets</h2>

    <p>Exception rate: what fraction of items are weird — missing context, angry customer, three intertwined questions, policy edge case. This number decides your ceiling. If 30% of tickets are exceptions, no assistant will safely touch more than the other 70%, and your business case has to survive that arithmetic from day one.</p>

    <blockquote>
        <p>The baseline isn't there to prove the AI worked. It's there to make it impossible to lie to yourself about whether it did.</p>
    </blockquote>

    <h2>Measured, not remembered</h2>

    <p>When we ask a support lead how long a ticket type takes, the answer is usually half the measured figure. Not dishonesty — memory compresses the tab-switching, the lookup in the second system, the interruption in the middle. So we time real work: a week of it, sampled across the team and across the day. The gap between remembered and measured time is often the single biggest correction to the business case, in either direction.</p>

    <h2>Keep it boring, keep it small</h2>

    <p>A baseline that takes a quarter to assemble is a project of its own, and it will die of scope. Ours fit on one page: four numbers plus the exception rate, each with a date range and a source. If a stakeholder can't glance at that page and say "yes, that's our workflow," it isn't done. When the pilot ends, the same page gains a second column — and the decision to scale or stop mostly makes itself.</p>

</x-layouts.post>
