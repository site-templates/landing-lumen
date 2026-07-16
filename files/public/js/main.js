/*
    Lumen — header state and current-page marking.

    Everything here is a progressive enhancement: with JavaScript off, the
    header simply keeps its resting size and the page stays fully usable.
*/

document.addEventListener('DOMContentLoaded', function () {
    stickyHeader();
    markCurrentMenuItem();
    closeMobileMenuOnNavigate();
});

/*
    The header is roomy and flush while the page is at the top. Once content
    starts passing underneath it, data-scrolled trims the padding and fades in
    the hairline + shadow — the transitions live in the markup and site.css.
*/
function stickyHeader() {
    const header = document.getElementById('header');

    if (!header) {
        return;
    }

    function evaluate() {
        header.toggleAttribute('data-scrolled', window.scrollY > 0);
    }

    evaluate();
    window.addEventListener('scroll', evaluate, { passive: true });
}

/*
    aria-current tells screen readers which page you are on, and styles the
    active link. Section pages like /writings/some-post light up /writings too.
*/
function markCurrentMenuItem() {
    document.querySelectorAll('header nav a').forEach(function (link) {
        const path = window.location.pathname;

        if (link.pathname !== '/' && (path === link.pathname || path.startsWith(link.pathname + '/'))) {
            link.setAttribute('aria-current', 'page');
        }
    });
}

/*
    The mobile menu is a <details>; close it after tapping a link so in-page
    anchors like /#services don't leave the panel hanging open.
*/
function closeMobileMenuOnNavigate() {
    document.querySelectorAll('details.menu a').forEach(function (link) {
        link.addEventListener('click', function () {
            link.closest('details').removeAttribute('open');
        });
    });
}
