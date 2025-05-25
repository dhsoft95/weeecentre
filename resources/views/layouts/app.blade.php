<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', config('app.name', 'WEEE Centre Tanzania – E-Waste Recycling'))</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#10b981">

    <!-- Preload Critical Resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" as="script">
    <link rel="preload" href="@yield('hero_image', '/assets/img/hero.webp')" as="image">
    <link rel="preconnect" href="https://cdn.tailwindcss.com">

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'WEEE Centre Tanzania provides environmentally responsible e-waste recycling services. Join us in promoting a circular economy and sustainable future across Tanzania.')" />
    <meta name="keywords" content="@yield('meta_keywords', 'WEEE Centre Tanzania, e-waste recycling Tanzania, electronic waste disposal, circular economy Tanzania, secure data destruction, Dar es Salaam recycling')" />
    <meta name="author" content="WEEE Centre Tanzania" />
    <meta name="robots" content="@yield('robots', 'index, follow')" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@yield('og_title', 'WEEE Centre Tanzania – E-Waste Recycling')" />
    <meta property="og:description" content="@yield('og_description', 'Safely manage your electronic waste with WEEE Centre Tanzania, promoting sustainable recycling and environmental conservation.')" />
    <meta property="og:image" content="@yield('og_image', 'https://www.weeecentre.co.tz/assets/img/og-image.webp')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="@yield('og_type', 'website')" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="WEEE Centre Tanzania" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('twitter_title', 'WEEE Centre Tanzania – E-Waste Recycling')" />
    <meta name="twitter:description" content="@yield('twitter_description', 'Join WEEE Centre Tanzania in promoting a sustainable future through safe electronic waste disposal and recycling.')" />
    <meta name="twitter:image" content="@yield('twitter_image', 'https://www.weeecentre.co.tz/assets/img/twitter-card.webp')" />
    <meta name="twitter:site" content="@theweeecentre" />

    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "WEEE Centre Tanzania",
          "url": "https://www.weeecentre.co.tz/",
          "logo": "https://www.weeecentre.co.tz/assets/img/logo.webp",
          "description": "WEEE Centre Tanzania provides environmentally responsible e-waste recycling services, promoting a circular economy and sustainable practices across Tanzania.",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "@yield('street_address', '')",
        "addressLocality": "Dar es Salaam",
        "addressRegion": "Dar es Salaam",
        "postalCode": "@yield('postal_code', '')",
        "addressCountry": "TZ"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+255 701 819559",
        "contactType": "Customer Service",
        "email": "info@weeecentre.co.tz"
      },
      "sameAs": [
        "https://www.facebook.com/WEEECentre/",
        "https://www.instagram.com/weeecentre/",
        "https://twitter.com/theweeecentre",
        "https://www.linkedin.com/company/weee-centre/"
      ]
    }
    </script>

    <!-- Structured Data - LocalBusiness -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "WEEE Centre Tanzania",
          "image": "https://www.weeecentre.co.tz/assets/img/facility.webp",
          "priceRange": "$$",
          "telephone": "+255 701 819559",
          "email": "info@weeecentre.co.tz",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "@yield('street_address', '')",
        "addressLocality": "Dar es Salaam",
        "addressRegion": "Dar es Salaam",
        "postalCode": "@yield('postal_code', '')",
        "addressCountry": "TZ"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-6.8235",
        "longitude": "39.2695"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "08:00",
          "closes": "17:00"
        }
      ],
      "sameAs": [
        "https://www.facebook.com/WEEECentre/",
        "https://www.instagram.com/weeecentre/",
        "https://twitter.com/theweeecentre",
        "https://www.linkedin.com/company/weee-centre/"
      ]
    }
    </script>

    <!-- Additional Structured Data -->
    @yield('structured_data')

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#10b981',
                        secondary: '#3b82f6',
                    }
                }
            }
        }
    </script>

    <!-- Hreflang Tags for Multilingual Support -->
    <link rel="alternate" hreflang="en" href="https://www.weeecentre.co.tz/" />
    <link rel="alternate" hreflang="sw" href="https://www.weeecentre.co.tz/sw/" />
    <link rel="alternate" hreflang="x-default" href="https://www.weeecentre.co.tz/" />

    @yield('styles')
</head>

<body class="bg-gray-50">
<div id="app" x-data="{ mobileMenuOpen: false, activeSection: 'home' }">
    <!-- Skip to content link for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:p-4 focus:text-white focus:bg-primary">
        Skip to main content
    </a>

    <!-- Include the navigation -->
    @include('partials.navigation')

    <!-- Main Content -->
    <main id="main-content" class="pt-19"> <!-- Adjust for fixed navbar -->
        @yield('content')
    </main>

    <!-- Include the footer -->
    @include('partials.footer')
</div>

<!-- JavaScript for scrolling and section detection -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Helper function to check if element is in viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Update active section on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            let currentSection = 'home';

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.offsetHeight;
                const scrollPosition = window.scrollY;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    currentSection = section.getAttribute('id');
                    if (window.Alpine) {
                        document.querySelector('#app').__x.$data.activeSection = currentSection;
                    }

                    // Update URL hash for better analytics tracking
                    if (history.replaceState) {
                        history.replaceState(null, null, '#' + currentSection);
                    }
                }
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 64,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Lazy loading images
        if ('loading' in HTMLImageElement.prototype) {
            // Browser supports native lazy loading
            document.querySelectorAll('img[data-src]').forEach(img => {
                img.setAttribute('loading', 'lazy');
                img.src = img.dataset.src;
            });
        } else {
            // Fallback for browsers that don't support lazy loading
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
            document.body.appendChild(script);
        }
    });
</script>

@yield('scripts')

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX', { 'anonymize_ip': true });
</script>
</body>
</html>
