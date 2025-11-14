<?php
// index.php – EDM Hub 2030
// Simple PHP only for dynamic year etc.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EDM VERSEX | Fresh Electronic Dance Music, News & Live Streams</title>

    <!-- Viewport / mobile web app -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="theme-color" content="#020617">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=no">

    <!-- SEO basics -->
    <meta name="description" content="EDM VERSEX brings you the freshest EDM releases, producer news, playlists and live sets in one ad-optimized, mobile-first experience.">
    <meta name="keywords" content="EDM, electronic dance music, house, trance, techno, SoundCloud, DJ mixes, producer news, 2030, playlists">
    <meta name="author" content="EDM VERSEX">

    <!-- Open Graph -->
    <meta property="og:title" content="EDM VERSEX | Fresh Electronic Dance Music">
    <meta property="og:description" content="Scroll the freshest EDM drops, trending mixes and producer news in a smooth mobile-first interface.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://edmversex.com/">
    <meta property="og:image" content="https://edmversex.com/edm-hub-2030-preview.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EDM VERSEX | Fresh Electronic Dance Music">
    <meta name="twitter:description" content="SoundCloud drops, EDM headlines and curated playlists in one place.">

    <!-- Icons (replace with your own paths) -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/icon-32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/icon-180.png">

    <!-- Google AdSense (global) -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4201977277980522"
        crossorigin="anonymous"></script>

    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'edm-bg': '#020617',
                        'edm-panel': 'rgba(15,23,42,0.84)',
                        'edm-glass': 'rgba(15,23,42,0.72)',
                        'edm-accent': '#22c55e',
                        'edm-accent-soft': '#4ade80',
                        'edm-highlight': '#38bdf8'
                    },
                    boxShadow: {
                        'edm-soft': '0 18px 45px rgba(15,23,42,0.85)'
                    },
                    backdropBlur: {
                        'xs': '2px'
                    }
                }
            }
        }
    </script>

    <!-- Custom styles -->
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            background: radial-gradient(circle at top, #0f172a 0, #020617 50%, #000 100%);
        }

        body:focus-visible {
            outline: none;
        }

        @media (min-width: 1024px) {
            main[data-layout="grid"] {
                display: grid;
                grid-template-columns: minmax(0, 2fr) minmax(0, 1.4fr);
                gap: 1.75rem;
            }
        }

        /* Simple focus style override for better accessibility */
        :focus-visible {
            outline: 2px solid #22c55e;
            outline-offset: 3px;
        }
    </style>

    <!-- Structured data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "EDM VERSEX",
      "url": "https://edmversex.com/",
      "description": "Fresh EDM releases, mixes and producer news.",
      "inLanguage": "en",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://edmversex.com/?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
</head>
<body class="min-h-screen text-slate-50 antialiased overflow-x-hidden relative">

    <!-- Skip to content -->
    <a href="#main-content"
       class="sr-only focus:not-sr-only focus:fixed focus:z-50 focus:top-3 focus:left-3 focus:px-4 focus:py-2 focus:rounded-full focus:bg-slate-950 focus:text-emerald-400">
        Skip to main content
    </a>

    <!-- Header / top nav -->
    <header class="sticky top-0 z-40 backdrop-blur-xl bg-slate-950/80 border-b border-slate-800">
        <nav class="mx-auto max-w-5xl px-4 py-3 flex items-center gap-3">
            <a href="#top"
               class="flex items-center gap-2"
               aria-label="Go to EDM VERSEX home">
                <span class="inline-flex h-8 w-8 rounded-full bg-gradient-to-tr from-emerald-500 via-sky-500 to-fuchsia-500 shadow-lg items-center justify-center">
                    <span class="h-3 w-3 rounded-full bg-slate-950"></span>
                </span>
                <span class="flex flex-col leading-tight">
                    <span class="text-sm font-semibold tracking-[0.18em] uppercase text-emerald-400">EDM VERSEX</span>
                    <span class="text-xs text-slate-300/90">Future sound feed</span>
                </span>
            </a>

            <section class="ml-auto flex items-center gap-2">
                <!-- Search (frontend only; hook to internal search later) -->
                <form class="hidden sm:flex items-center rounded-full bg-slate-900/70 border border-slate-700/80 px-3 py-1.5 text-xs gap-2"
                      role="search" aria-label="Search EDM content">
                    <span class="inline-flex min-w-[16px]" aria-hidden="true">🔎</span>
                    <label class="sr-only" for="search-input">Search releases or artists</label>
                    <input id="search-input"
                           name="q"
                           class="bg-transparent border-none outline-none text-slate-200 placeholder:text-slate-500 w-32"
                           placeholder="Search tracks, artists"
                           type="search" />
                </form>

                <!-- Compact search icon for phones -->
                <button type="button"
                        class="flex sm:hidden items-center justify-center h-9 w-9 rounded-full bg-slate-900/80 border border-slate-700/80"
                        aria-label="Open search">
                    🔎
                </button>

                <!-- Light/dark toggle placeholder -->
                <button type="button"
                        class="hidden sm:inline-flex items-center justify-center h-9 w-9 rounded-full bg-slate-900/80 border border-slate-700/80"
                        aria-label="Toggle theme">
                    ☾
                </button>
            </section>
        </nav>

        <!-- Top ad slot (above the fold) -->
        <section class="mx-auto max-w-5xl px-4 pb-3">
            <section class="rounded-2xl border border-slate-800/80 bg-slate-900/70 p-2 flex items-center justify-center">
                <!-- Google AdSense top banner -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-4201977277980522"
                     data-ad-slot="TOP_BANNER_SLOT_ID"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </section>
        </section>
    </header>

    <!-- Main layout -->
    <main id="main-content"
          data-layout="grid"
          class="mx-auto max-w-5xl px-4 pt-4 pb-24 lg:pb-28 space-y-4 lg:space-y-0">

        <!-- Left column: SoundCloud releases and playlists -->
        <section aria-labelledby="releases-heading" class="space-y-4 lg:space-y-5">
            <!-- Hero / featured release -->
            <section class="rounded-3xl bg-edm-panel border border-slate-800 shadow-edm-soft p-4 sm:p-5">
                <header class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                    <section>
                        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-emerald-400 mb-1">
                            Fresh today
                        </p>
                        <h1 class="text-xl sm:text-2xl font-semibold text-slate-50">
                            The freshest EDM drops, live every day.
                        </h1>
                        <p class="mt-1.5 text-sm text-slate-300/90">
                            Scroll new SoundCloud releases, trending mixes and global EDM headlines in one ultra-fast feed.
                        </p>
                    </section>
                    <section class="flex items-center gap-2 mt-3 sm:mt-0">
                        <span class="inline-flex h-8 px-3 rounded-full bg-slate-900/80 border border-slate-700/70 items-center gap-1.5 text-[11px] text-slate-300">
                            <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            Live feed
                        </span>
                        <button type="button"
                                class="hidden sm:inline-flex items-center justify-center px-3 py-1.5 rounded-full bg-emerald-500 text-slate-950 text-[11px] font-semibold tracking-wide hover:bg-emerald-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500">
                            Submit your track
                        </button>
                    </section>
                </header>

                <!-- Featured SoundCloud player placeholder -->
                <section class="mt-4">
                    <section class="relative overflow-hidden rounded-2xl border border-slate-800 bg-gradient-to-tr from-slate-950 via-slate-900 to-slate-950">
                        <section class="aspect-[16/9] sm:aspect-[21/9] flex flex-col sm:flex-row">
                            <figure class="relative sm:w-1/3 flex items-center justify-center bg-gradient-to-br from-emerald-500/20 via-sky-500/15 to-fuchsia-500/25">
                                <section class="absolute inset-6 rounded-full bg-gradient-to-tr from-emerald-500 via-sky-500 to-fuchsia-500 blur-3xl opacity-40"></section>
                                <section class="relative flex items-center justify-center h-full">
                                    <button type="button"
                                            class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-slate-950/90 border border-emerald-400 shadow-lg shadow-emerald-500/40"
                                            aria-label="Play featured SoundCloud track">
                                        ▶
                                    </button>
                                </section>
                            </figure>
                            <article class="sm:w-2/3 p-4 sm:p-5 flex flex-col justify-between">
                                <section>
                                    <p class="text-[11px] uppercase tracking-[0.25em] text-slate-400">
                                        Featured on SoundCloud
                                    </p>
                                    <h2 class="mt-1 text-lg sm:text-xl font-semibold text-slate-50" id="featured-track-title">
                                        Midnight Skyline (Future Rave Edit)
                                    </h2>
                                    <p class="mt-1 text-xs sm:text-sm text-slate-300/90" id="featured-track-meta">
                                        by NovaPulse · 128 BPM · Future Rave · 4:39
                                    </p>
                                </section>
                                <section class="mt-3 flex flex-wrap items-center gap-2">
                                    <a href="#soundcloud-feed"
                                       class="inline-flex items-center justify-center px-3 py-1.5 rounded-full bg-emerald-500 text-slate-950 text-[11px] font-semibold tracking-wide hover:bg-emerald-400">
                                        Jump to full release feed
                                    </a>
                                    <p class="text-[11px] text-slate-400">
                                        Powered by SoundCloud API · Key configurable in code
                                    </p>
                                </section>
                            </article>
                        </section>
                    </section>
                </section>
            </section>

            <!-- SoundCloud release feed -->
            <section aria-labelledby="soundcloud-heading"
                     class="rounded-3xl bg-edm-glass border border-slate-800/80 backdrop-blur-xl p-4 sm:p-5">
                <header class="flex items-center justify-between gap-2 mb-2">
                    <section>
                        <h2 id="soundcloud-heading" class="text-sm font-semibold tracking-[0.25em] uppercase text-emerald-400">
                            Latest SoundCloud drops
                        </h2>
                        <p class="mt-1 text-xs text-slate-300/90">
                            Auto-updated via SoundCloud API. Tap a card to open on SoundCloud.
                        </p>
                    </section>
                    <button type="button"
                            class="inline-flex items-center justify-center px-3 py-1.5 rounded-full border border-slate-700/80 bg-slate-900/70 text-[11px] text-slate-200">
                        Refresh
                    </button>
                </header>

                <section id="soundcloud-feed"
                         class="space-y-3"
                         aria-live="polite"
                         aria-busy="false">
                    <!-- Example static items. JS will replace these with live data. -->
                    <article class="rounded-2xl border border-slate-800 bg-slate-950/80 p-3 flex gap-3 sm:gap-4">
                        <section class="flex flex-col justify-between">
                            <section>
                                <p class="text-[11px] text-sky-400 uppercase tracking-[0.22em]">
                                    Progressive House
                                </p>
                                <a href="#"
                                   class="block mt-0.5 text-sm font-semibold text-slate-50 hover:text-emerald-400">
                                    Neon Horizons (Extended Mix)
                                </a>
                                <p class="mt-0.5 text-[11px] text-slate-400">
                                    by Aurora Lines · 7:21 · 126 BPM
                                </p>
                            </section>
                            <section class="mt-2 flex items-center gap-2 text-[11px] text-slate-400">
                                <span>🔥 12.4k plays</span>
                                <span aria-hidden="true">•</span>
                                <span>⏱ 3 hours ago</span>
                            </section>
                        </section>
                        <section class="ml-auto flex flex-col justify-between items-end text-right">
                            <button type="button"
                                    class="inline-flex items-center justify-center px-2.5 py-1 rounded-full border border-emerald-500/80 text-[11px] text-emerald-400">
                                Play
                            </button>
                            <button type="button"
                                    class="inline-flex items-center justify-center px-2 py-1 rounded-full bg-slate-900/80 text-[10px] text-slate-300 mt-2">
                                + Playlist
                            </button>
                        </section>
                    </article>

                    <article class="rounded-2xl border border-slate-800 bg-slate-950/80 p-3 flex gap-3 sm:gap-4">
                        <section class="flex flex-col justify-between">
                            <section>
                                <p class="text-[11px] text-fuchsia-400 uppercase tracking-[0.22em]">
                                    Melodic Techno
                                </p>
                                <a href="#"
                                   class="block mt-0.5 text-sm font-semibold text-slate-50 hover:text-emerald-400">
                                    Echoes of Tomorrow (Live Edit)
                                </a>
                                <p class="mt-0.5 text-[11px] text-slate-400">
                                    by Kinetic Dunes · 6:05 · 124 BPM
                                </p>
                            </section>
                            <section class="mt-2 flex items-center gap-2 text-[11px] text-slate-400">
                                <span>🎧 9.1k plays</span>
                                <span aria-hidden="true">•</span>
                                <span>⏱ 7 hours ago</span>
                            </section>
                        </section>
                        <section class="ml-auto flex flex-col justify-between items-end text-right">
                            <button type="button"
                                    class="inline-flex items-center justify-center px-2.5 py-1 rounded-full border border-emerald-500/80 text-[11px] text-emerald-400">
                                Play
                            </button>
                            <button type="button"
                                    class="inline-flex items-center justify-center px-2 py-1 rounded-full bg-slate-900/80 text-[10px] text-slate-300 mt-2">
                                + Playlist
                            </button>
                        </section>
                    </article>
                </section>

                <!-- Inline ad between cards -->
                <section class="mt-3 rounded-2xl border border-slate-800 bg-slate-950/80 p-2">
                    <!-- Google AdSense in-feed unit -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4201977277980522"
                         data-ad-slot="IN_FEED_SLOT_ID"
                         data-ad-format="fluid"
                         data-ad-layout-key="-fb+5w+4e-db+86"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </section>
            </section>
        </section>

        <!-- Right column: EDM news, charts and newsletter -->
        <aside aria-label="EDM news and extras"
               class="space-y-4 lg:space-y-5">
            <!-- News section -->
            <section class="rounded-3xl bg-edm-panel border border-slate-800 shadow-edm-soft p-4 sm:p-5">
                <header class="flex items-center justify-between gap-2 mb-2">
                    <section>
                        <h2 class="text-sm font-semibold tracking-[0.25em] uppercase text-emerald-400" id="news-heading">
                            Global EDM headlines
                        </h2>
                        <p class="mt-1 text-xs text-slate-300/90">
                            Auto-updated from curated EDM RSS feeds. No clickbait, just what matters.
                        </p>
                    </section>
                    <button type="button"
                            class="inline-flex items-center justify-center px-3 py-1.5 rounded-full border border-slate-700/80 bg-slate-900/70 text-[11px] text-slate-200">
                        Refresh
                    </button>
                </header>

                <section id="news-feed"
                         class="space-y-3"
                         role="list"
                         aria-labelledby="news-heading"
                         aria-live="polite"
                         aria-busy="false">
                    <!-- Static example items. JS will replace with RSS content. -->
                    <article role="listitem"
                             class="rounded-2xl border border-slate-800 bg-slate-950/80 p-3">
                        <a href="#"
                           class="block group">
                            <p class="text-[11px] text-sky-400 uppercase tracking-[0.22em]">
                                Label spotlight
                            </p>
                            <h3 class="mt-1 text-sm font-semibold text-slate-50 group-hover:text-emerald-400">
                                Rising labels shaping the 2030 EDM festival circuit
                            </h3>
                            <p class="mt-1 text-[11px] text-slate-400">
                                A look at new imprints redefining melodic techno, future rave and hyper-house.
                            </p>
                            <p class="mt-1 text-[10px] text-slate-500">
                                EDM Insider · 2 hours ago
                            </p>
                        </a>
                    </article>

                    <article role="listitem"
                             class="rounded-2xl border border-slate-800 bg-slate-950/80 p-3">
                        <a href="#"
                           class="block group">
                            <p class="text-[11px] text-fuchsia-400 uppercase tracking-[0.22em]">
                                Producer interview
                            </p>
                            <h3 class="mt-1 text-sm font-semibold text-slate-50 group-hover:text-emerald-400">
                                Inside the hybrid studio of a 2030 chart-topping EDM producer
                            </h3>
                            <p class="mt-1 text-[11px] text-slate-400">
                                AI-assisted sound design, live modular racks and how to stay original.
                            </p>
                            <p class="mt-1 text-[10px] text-slate-500">
                                Beat Architect · 5 hours ago
                            </p>
                        </a>
                    </article>

                    <!-- Inline own sponsored card (ei AdSense, oma myynti) -->
                    <article role="listitem"
                             class="rounded-2xl border border-emerald-500/40 bg-slate-950/90 p-3">
                        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-emerald-400">
                            Sponsored
                        </p>
                        <p class="mt-1 text-sm text-slate-50">
                            Promote your label, festival or merch to highly targeted EDM fans worldwide.
                        </p>
                        <p class="mt-1 text-[11px] text-slate-400">
                            Contact: <span class="underline">ads@yourdomain.com</span>
                        </p>
                    </article>
                </section>
            </section>

            <!-- Charts / trending tags -->
            <section class="rounded-3xl bg-edm-glass border border-slate-800/80 backdrop-blur-xl p-4 sm:p-5">
                <header class="flex items-center justify-between gap-2 mb-2">
                    <section>
                        <h2 class="text-sm font-semibold tracking-[0.25em] uppercase text-emerald-400">
                            Trending sounds
                        </h2>
                        <p class="mt-1 text-xs text-slate-300/90">
                            Popular genres and moods across our feed.
                        </p>
                    </section>
                </header>
                <section class="flex flex-wrap gap-2">
                    <button type="button"
                            class="px-3 py-1.5 rounded-full bg-slate-950/90 border border-emerald-500/70 text-[11px] text-emerald-400">
                        Future Rave
                    </button>
                    <button type="button"
                            class="px-3 py-1.5 rounded-full bg-slate-950/90 border border-slate-700/80 text-[11px] text-slate-200">
                        Melodic Techno
                    </button>
                    <button type="button"
                            class="px-3 py-1.5 rounded-full bg-slate-950/90 border border-slate-700/80 text-[11px] text-slate-200">
                        Drum &amp; Bass
                    </button>
                    <button type="button"
                            class="px-3 py-1.5 rounded-full bg-slate-950/90 border border-slate-700/80 text-[11px] text-slate-200">
                        Vocal Trance
                    </button>
                    <button type="button"
                            class="px-3 py-1.5 rounded-full bg-slate-950/90 border border-slate-700/80 text-[11px] text-slate-200">
                        Tech House
                    </button>
                </section>
            </section>

            <!-- Newsletter / owner benefits -->
            <section class="rounded-3xl bg-emerald-500 bg-gradient-to-br from-emerald-500 via-sky-500 to-fuchsia-500 text-slate-950 p-4 sm:p-5 shadow-edm-soft">
                <header>
                    <h2 class="text-sm font-semibold tracking-[0.25em] uppercase">
                        Stay ahead of the drop
                    </h2>
                    <p class="mt-1 text-xs">
                        A weekly email with curated tracks, tools and insights for producers and DJs.
                    </p>
                </header>
                <form class="mt-3 space-y-2" aria-label="Newsletter signup form">
                    <section class="flex flex-col gap-2">
                        <label for="newsletter-email" class="text-[11px] font-semibold uppercase tracking-[0.18em]">
                            Email
                        </label>
                        <input id="newsletter-email"
                               type="email"
                               required
                               class="w-full rounded-full px-3 py-2 text-sm text-slate-950 border border-slate-900/30 placeholder:text-slate-500"
                               placeholder="you@example.com" />
                    </section>
                    <button type="submit"
                            class="w-full inline-flex items-center justify-center px-3 py-2 rounded-full bg-slate-950 text-emerald-400 text-[11px] font-semibold tracking-[0.18em] uppercase">
                        Join free newsletter
                    </button>
                    <p class="text-[10px] text-slate-900/90 mt-1">
                        By subscribing, you agree to receive EDM Hub 2030 emails. You can unsubscribe anytime.
                    </p>
                </form>
            </section>
        </aside>
    </main>

    <!-- Sticky bottom ad + nav -->
    <footer class="fixed bottom-0 left-0 right-0 z-40">
        <section class="mx-auto max-w-5xl px-4 pb-[env(safe-area-inset-bottom)]">
            <section class="rounded-3xl bg-slate-950/95 border border-slate-800/90 backdrop-blur-xl shadow-edm-soft px-3 py-2">
                <section class="flex items-center gap-3">
                    <!-- Bottom ad (small banner) -->
                    <section class="flex-1">
                        <!-- Google AdSense bottom banner -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-4201977277980522"
                             data-ad-slot="BOTTOM_BANNER_SLOT_ID"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </section>

                    <!-- Quick nav buttons -->
                    <nav aria-label="Quick navigation" class="flex items-center gap-1.5 text-[11px]">
                        <a href="#soundcloud-feed"
                           class="inline-flex flex-col items-center px-2 py-1 rounded-2xl bg-slate-900/80 border border-slate-700/80 text-slate-200">
                            <span aria-hidden="true">🎵</span>
                            <span class="text-[9px] mt-0.5">Releases</span>
                        </a>
                        <a href="#news-heading"
                           class="inline-flex flex-col items-center px-2 py-1 rounded-2xl bg-slate-900/80 border border-slate-700/80 text-slate-200">
                            <span aria-hidden="true">📰</span>
                            <span class="text-[9px] mt-0.5">News</span>
                        </a>
                        <a href="#top"
                           class="inline-flex flex-col items-center px-2 py-1 rounded-2xl bg-slate-900/80 border border-slate-700/80 text-slate-200">
                            <span aria-hidden="true">⬆</span>
                            <span class="text-[9px] mt-0.5">Top</span>
                        </a>
                    </nav>
                </section>
                <section class="mt-1 flex justify-between items-center text-[9px] text-slate-500">
                    <p>&copy; <?php echo date('Y'); ?> EDM Hub 2030 · All rights reserved.</p>
                    <a href="#"
                       class="underline">
                        Privacy &amp; cookies
                    </a>
                </section>
            </section>
        </section>
    </footer>

    <!-- Simple EU cookie / consent banner (can be expanded into full CMP) -->
    <section id="cookie-banner"
             class="fixed inset-x-3 bottom-20 sm:bottom-24 z-50 max-w-xl mx-auto rounded-2xl bg-slate-950/95 border border-slate-700/80 px-4 py-3 text-xs text-slate-100 shadow-edm-soft hidden">
        <section class="flex flex-col gap-2">
            <p class="font-semibold text-[11px] tracking-[0.18em] uppercase text-emerald-400">
                Cookies &amp; personalisation
            </p>
            <p class="text-[11px] text-slate-200">
                We use cookies to personalise content and ads, to provide social media features and to analyse our traffic.
            </p>
            <section class="flex flex-wrap gap-2 mt-1">
                <button type="button"
                        id="cookie-accept-all"
                        class="inline-flex items-center justify-center px-3 py-1.5 rounded-full bg-emerald-500 text-slate-950 text-[11px] font-semibold">
                    Accept all
                </button>
                <button type="button"
                        id="cookie-settings"
                        class="inline-flex items-center justify-center px-3 py-1.5 rounded-full border border-slate-700/80 bg-slate-900/80 text-[11px] text-slate-100">
                    Manage choices
                </button>
            </section>
        </section>
    </section>

    <!-- No-JS message for accessibility -->
    <noscript>
        <section class="mx-auto max-w-5xl mt-4 px-4">
            <section class="rounded-2xl bg-red-900/80 text-red-100 p-3 text-xs">
                JavaScript is disabled in your browser. Live SoundCloud feeds and automatic news updates will not work.
            </section>
        </section>
    </noscript>

    <!-- App logic: placeholders for SoundCloud and RSS integrations -->
    <script>
        (function () {
            "use strict";

            // ---- CONFIGURE THESE BEFORE GOING LIVE ----
            const SOUNDCLOUD_CLIENT_ID = "YOUR_SOUNDCLOUD_CLIENT_ID_HERE";
            const SOUNDCLOUD_USER_ID = "YOUR_SOUNDCLOUD_USER_ID_OR_PLAYLIST_ID";
            const RSS_FEEDS = [
                "https://your-edm-rss-feed-1.xml",
                "https://your-edm-rss-feed-2.xml"
            ];
            // -------------------------------------------

            const soundcloudFeed = document.getElementById("soundcloud-feed");
            const newsFeed = document.getElementById("news-feed");

            // Demo data while API keys are not set
            const demoTracks = [
                {
                    title: "Solar Echoes",
                    artist: "Luna Cypher",
                    genre: "Tech House",
                    plays: "8.2k",
                    timeAgo: "1 hour ago",
                    bpm: "125",
                    length: "6:12",
                    url: "#"
                },
                {
                    title: "Night Drive in Neo Tokyo",
                    artist: "Chrome City",
                    genre: "Synthwave",
                    plays: "10.7k",
                    timeAgo: "4 hours ago",
                    bpm: "115",
                    length: "5:48",
                    url: "#"
                }
            ];

            const demoNews = [
                {
                    title: "How AI tools are reshaping EDM production workflows in 2030",
                    category: "Production",
                    summary: "From stem separation to arrangement suggestions, AI is now a creative partner.",
                    source: "Producer Journal",
                    timeAgo: "3 hours ago",
                    link: "#"
                },
                {
                    title: "Top 10 festival stages with immersive 3D audio this season",
                    category: "Festivals",
                    summary: "A new wave of multi-layered sound systems changes how crowds feel drops.",
                    source: "Festival Radar",
                    timeAgo: "9 hours ago",
                    link: "#"
                }
            ];

            function renderTracks(tracks) {
                if (!soundcloudFeed) return;
                soundcloudFeed.setAttribute("aria-busy", "true");

                soundcloudFeed.innerHTML = tracks.map(function (track) {
                    return (
                        '<article class="rounded-2xl border border-slate-800 bg-slate-950/80 p-3 flex gap-3 sm:gap-4">' +
                            '<section class="flex flex-col justify-between">' +
                                '<section>' +
                                    '<p class="text-[11px] text-emerald-400 uppercase tracking-[0.22em]">' +
                                        escapeHtml(track.genre || "EDM") +
                                    "</p>" +
                                    '<a href="' + escapeAttribute(track.url || "#") + '" target="_blank" rel="noopener noreferrer"' +
                                       ' class="block mt-0.5 text-sm font-semibold text-slate-50 hover:text-emerald-400">' +
                                       escapeHtml(track.title || "Untitled Track") +
                                    "</a>" +
                                    '<p class="mt-0.5 text-[11px] text-slate-400">' +
                                        "by " + escapeHtml(track.artist || "Unknown Artist") +
                                        " · " + escapeHtml(track.length || "") +
                                        (track.bpm ? " · " + escapeHtml(track.bpm) + " BPM" : "") +
                                    "</p>" +
                                "</section>" +
                                '<section class="mt-2 flex items-center gap-2 text-[11px] text-slate-400">' +
                                    '<span>🎧 ' + escapeHtml(track.plays || "") + " plays</span>" +
                                    '<span aria-hidden="true">•</span>' +
                                    "<span>⏱ " + escapeHtml(track.timeAgo || "") + "</span>" +
                                "</section>" +
                            "</section>" +
                            '<section class="ml-auto flex flex-col justify-between items-end text-right">' +
                                '<a href="' + escapeAttribute(track.url || "#") + '" target="_blank" rel="noopener noreferrer"' +
                                   ' class="inline-flex items-center justify-center px-2.5 py-1 rounded-full border border-emerald-500/80 text-[11px] text-emerald-400">' +
                                   "Play" +
                                "</a>" +
                                '<button type="button"' +
                                        ' class="inline-flex items-center justify-center px-2 py-1 rounded-full bg-slate-900/80 text-[10px] text-slate-300 mt-2">' +
                                    "+ Playlist" +
                                "</button>" +
                            "</section>" +
                        "</article>"
                    );
                }).join("");

                soundcloudFeed.setAttribute("aria-busy", "false");
            }

            function renderNews(newsItems) {
                if (!newsFeed) return;
                newsFeed.setAttribute("aria-busy", "true");

                const sponsoredCard = newsFeed.querySelector("[role='listitem']:nth-child(3)");
                newsFeed.innerHTML = "";

                newsItems.forEach(function (item) {
                    const html =
                        '<article role="listitem" class="rounded-2xl border border-slate-800 bg-slate-950/80 p-3">' +
                            '<a href="' + escapeAttribute(item.link || "#") + '" target="_blank" rel="noopener noreferrer" class="block group">' +
                                '<p class="text-[11px] text-sky-400 uppercase tracking-[0.22em]">' +
                                    escapeHtml(item.category || "EDM") +
                                "</p>" +
                                '<h3 class="mt-1 text-sm font-semibold text-slate-50 group-hover:text-emerald-400">' +
                                    escapeHtml(item.title || "Untitled Article") +
                                "</h3>" +
                                '<p class="mt-1 text-[11px] text-slate-400">' +
                                    escapeHtml(item.summary || "") +
                                "</p>" +
                                '<p class="mt-1 text-[10px] text-slate-500">' +
                                    escapeHtml(item.source || "Unknown Source") +
                                    " · " +
                                    escapeHtml(item.timeAgo || "") +
                                "</p>" +
                            "</a>" +
                        "</article>";

                    newsFeed.insertAdjacentHTML("beforeend", html);
                });

                // Re-append sponsored card placeholder if it existed
                if (sponsoredCard) {
                    newsFeed.insertAdjacentElement("beforeend", sponsoredCard);
                }

                newsFeed.setAttribute("aria-busy", "false");
            }

            // Very small helpers to avoid XSS when inserting HTML from APIs
            function escapeHtml(str) {
                return String(str)
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            }

            function escapeAttribute(str) {
                return String(str).replace(/"/g, "&quot;");
            }

            // Cookie banner basic behaviour
            const cookieBanner = document.getElementById("cookie-banner");
            const cookieAccept = document.getElementById("cookie-accept-all");

            function shouldShowCookieBanner() {
                try {
                    return !localStorage.getItem("edmhub_cookie_consent");
                } catch (e) {
                    return true;
                }
            }

            function hideCookieBanner() {
                if (cookieBanner) {
                    cookieBanner.classList.add("hidden");
                }
            }

            function initCookieBanner() {
                if (!cookieBanner || !cookieAccept) return;
                if (shouldShowCookieBanner()) {
                    cookieBanner.classList.remove("hidden");
                }
                cookieAccept.addEventListener("click", function () {
                    try {
                        localStorage.setItem("edmhub_cookie_consent", "all");
                    } catch (e) {}
                    hideCookieBanner();
                });
            }

            // Initial render with demo data
            renderTracks(demoTracks);
            renderNews(demoNews);
            initCookieBanner();

            // ---- HOW TO HOOK REAL APIs (high-level) ----
            // 1) SoundCloud:
            //    Use SoundCloud's official API with your CLIENT_ID and USER_ID / playlist ID.
            //    Fetch latest tracks in JS and map them into the "renderTracks" function above.
            //
            // 2) RSS feeds:
            //    For production you typically proxy RSS through your own backend (PHP) to avoid
            //    CORS issues, then expose a clean JSON endpoint for this page to consume.
            //
            //    Example PHP idea:
            //    - fetch RSS XML on server
            //    - parse items
            //    - convert to JSON
            //    - call that JSON from JS and pass to renderNews().
        })();
    </script>
</body>
</html>
