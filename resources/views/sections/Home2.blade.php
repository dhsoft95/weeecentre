<section id="home" class="relative min-h-screen bg-black overflow-hidden">
    <!-- Background Gradient - Refined dark gradient with subtle green undertones -->
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 via-gray-900/90 to-black z-0"></div>

    <!-- Hero slider with improved animations and Apple-inspired aesthetics -->
    <div x-data="{
        activeSlide: 0,
        slides: [
            {
                title: 'Responsible E‑Waste Recycling',
                subtitle: 'For a greener tomorrow.',
                description: 'Innovative solutions for electronic waste management with environmental compliance.',
                image: '/assets/images/slider/ewaste-recycling.jpg',
                color: 'green'
            },
            {
                title: 'Second Life Technology',
                subtitle: 'Recycle. Refurbish. Reimagine.',
                description: 'From smartphones to servers, we give your old tech a new purpose.',
                image: '/assets/images/slider/electronics-repair.jpg',
                color: 'green'
            },
            {
                title: 'Certified Management',
                subtitle: 'Environmentally compliant solutions.',
                description: 'Proper handling of hazardous materials and recovery of valuable resources.',
                image: '/assets/images/slider/certified-management.jpg',
                color: 'green'
            }
        ],
        init() {
            // Initialize autoplay with better easing
            this.autoplayInterval = setInterval(() => {
                this.goToSlide((this.activeSlide + 1) % this.slides.length);
            }, 8000);

            // Initialize scroll animations
            this.initScrollAnimations();
        },
        goToSlide(index) {
            this.activeSlide = index;

            // Reset interval when slide changes
            clearInterval(this.autoplayInterval);
            this.autoplayInterval = setInterval(() => {
                this.goToSlide((this.activeSlide + 1) % this.slides.length);
            }, 8000);

            // Trigger content animations for new slide
            this.$nextTick(() => {
                this.animateSlideContent();
            });
        },
        initScrollAnimations() {
            // Add initial animations when page loads
            this.animateSlideContent();

            // Stats animations on scroll
            const statsSection = document.querySelector('#impact-stats');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate stats counters when in view
                        document.querySelectorAll('.counter-animate').forEach((counter, index) => {
                            setTimeout(() => {
                                counter.classList.add('animate-in');
                            }, index * 150);
                        });

                        // Animate achievement cards
                        document.querySelectorAll('.achievement-card').forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add('animate-in');
                            }, 300 + index * 200);
                        });

                        // Unobserve after animation begins
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            if (statsSection) observer.observe(statsSection);
        },
        animateSlideContent() {
            // Reset content elements to prepare for animation
            const subtitle = document.querySelector(`.slide-${this.activeSlide} .slide-subtitle`);
            const title = document.querySelector(`.slide-${this.activeSlide} .slide-title`);
            const description = document.querySelector(`.slide-${this.activeSlide} .slide-description`);
            const cta = document.querySelector(`.slide-${this.activeSlide} .slide-cta`);

            // Staggered animations with custom easing
            if (subtitle) subtitle.classList.add('animate-in');
            setTimeout(() => { if (title) title.classList.add('animate-in'); }, 200);
            setTimeout(() => { if (description) description.classList.add('animate-in'); }, 400);
            setTimeout(() => { if (cta) cta.classList.add('animate-in'); }, 600);
        }
    }" class="relative h-screen">

        <!-- Main Content Container -->
        <div class="absolute inset-0 z-10 overflow-hidden">
            <!-- Slides Container -->
            <div class="h-full relative">
                <!-- Template for slides -->
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index"
                         :class="`slide-${index}`"
                         x-transition:enter="transition ease-out duration-1800"
                         x-transition:enter-start="opacity-0 transform scale-105"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         x-transition:leave="transition ease-in duration-1200"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="absolute inset-0 flex flex-col md:flex-row items-center">

                        <!-- Text Content (Left Column) -->
                        <div class="w-full md:w-1/2 h-full flex flex-col justify-center px-8 md:px-16 lg:px-24 z-20 py-12 md:py-0 relative">
                            <!-- Enhanced subtle green glow behind text -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full max-w-2xl max-h-2xl rounded-full bg-green-500/5 blur-3xl"></div>

                            <div class="space-y-6 relative">
                                <!-- Subtitle with enhanced gradient effect -->
                                <h2 x-text="slide.subtitle"
                                    class="slide-subtitle text-lg md:text-xl font-medium tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-300 opacity-0 transform translate-y-8 transition-all duration-1000 ease-out"></h2>

                                <!-- Main Title - Larger and bolder -->
                                <h1 x-text="slide.title"
                                    class="slide-title text-4xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-white leading-none tracking-tight opacity-0 transform translate-y-8 transition-all duration-1000 delay-100 ease-out"></h1>

                                <!-- Description - Improved typography -->
                                <p x-text="slide.description"
                                   class="slide-description text-lg md:text-xl text-gray-200/90 max-w-lg opacity-0 transform translate-y-8 transition-all duration-1000 delay-200 ease-out"></p>

                                <!-- Call to Action Buttons - Apple-inspired styling -->
                                <div class="slide-cta flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-6 mt-8 opacity-0 transform translate-y-8 transition-all duration-1000 delay-300 ease-out">
                                    <a href="#services"
                                       class="group inline-flex items-center justify-center px-8 py-4 rounded-full text-white text-base font-medium transition-all duration-500 bg-white/10 hover:bg-white/20 backdrop-blur-sm transform hover:scale-[1.02]">
                                        <span>Learn more</span>
                                        <svg class="ml-2 w-5 h-5 transition-transform duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                    <a href="#drop-off"
                                       class="group inline-flex items-center justify-center px-8 py-4 rounded-full text-white text-base font-medium border border-white/20 bg-white/5 hover:bg-white/10 transition-all duration-500 transform hover:scale-[1.02] backdrop-blur-md">
                                        <span>Find drop-off locations</span>
                                        <svg class="ml-2 w-5 h-5 opacity-70 transition-transform duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Image (Right Column) - Enhanced parallax and layering -->
                        <div class="w-full md:w-1/2 h-full relative overflow-hidden">
                            <!-- Background Image with Improved Parallax Effect -->
                            <div class="absolute inset-0 h-full w-full overflow-hidden transform transition-all duration-[2500ms] ease-out"
                                 :style="activeSlide === index ? 'transform: scale(1.05); transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);' : 'transform: scale(1); transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);'">
                                <img :src="slide.image" :alt="slide.title" class="w-full h-full object-cover object-center scale-[1.02]" />

                                <!-- Enhanced Image Overlay - More refined gradient -->
                                <div class="absolute inset-0 bg-gradient-to-r from-black via-black/60 to-transparent md:via-black/40 md:to-transparent"></div>

                                <!-- Subtle Green Overlay with better blend mode -->
                                <div class="absolute inset-0 bg-green-900/15 mix-blend-overlay"></div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div class="slider-nav">
                <template x-for="(slide, index) in slides" :key="index">
                    <button
                        @click="goToSlide(index)"
                        :class="{
                            'w-20 bg-white/80': activeSlide === index,
                            'w-3 bg-white/30 hover:bg-white/50': activeSlide !== index
                        }"
                        class="h-1.5 rounded-full transition-all duration-700 ease-out focus:outline-none"></button>
                </template>
            </div>
        </div>

        <!-- Enhanced Scroll Down Indicator - Webflow-inspired smooth animation -->
        <div class="absolute bottom-14 left-1/2 transform -translate-x-1/2 z-20"
             x-data="{ hover: false }"
             @mouseenter="hover = true"
             @mouseleave="hover = false">
            <a href="#impact-stats" class="flex flex-col items-center justify-center text-white/60 hover:text-green-400 transition-colors duration-500 cursor-pointer group">
                <span class="text-xs uppercase tracking-widest mb-2 font-light">Scroll to explore</span>
                <div class="relative h-12 w-7 border border-white/30 group-hover:border-green-400 rounded-full flex justify-center transition-all duration-500">
                    <div class="absolute top-2 w-1.5 h-1.5 bg-white/80 group-hover:bg-green-400 rounded-full animate-bounce-slow transition-colors duration-500"></div>
                </div>
            </a>
        </div>

        <!-- Enhanced decorative elements - Modern subtle geometry -->
        <div class="absolute inset-y-0 right-0 w-full z-0 overflow-hidden opacity-20 pointer-events-none">
            <!-- Floating circles and shapes - Modern style -->
            <div class="absolute right-0 top-1/3 h-64 w-64 rounded-full border border-white/20 transform translate-x-1/2"></div>
            <div class="absolute right-1/4 top-1/4 h-32 w-32 rounded-full border border-white/15 blur-sm"></div>
            <div class="absolute left-1/4 bottom-1/3 h-48 w-48 rounded-full border border-white/10 blur-sm"></div>
            <div class="absolute right-0 bottom-1/4 h-96 w-96 rounded-full border border-white/20 transform translate-x-1/3"></div>

            <!-- Additional geometric elements -->
            <div class="absolute left-10 top-1/4 w-20 h-20 border border-white/10 rounded-full blur-sm"></div>
            <div class="absolute right-1/3 bottom-1/3 w-14 h-14 border border-white/15 rounded-sm rotate-45 blur-sm"></div>
        </div>
    </div>

    <!-- Impact Statistics Section - Enhanced for modern Apple-like aesthetic -->
    <div id="impact-stats" class="relative z-10 bg-white py-24 md:py-32 lg:py-40 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 tracking-tight opacity-0 transform translate-y-8 transition-all duration-1000 ease-out">Our Impact</h2>
                <p class="mt-6 text-xl text-gray-500 max-w-3xl mx-auto opacity-0 transform translate-y-8 transition-all duration-1000 delay-100 ease-out">Making a measurable difference in electronic waste management and environmental preservation.</p>
            </div>

            <!-- Enhanced Counter Statistics with improved animation and layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-12 text-center">
                <!-- Stat 1 - Enhanced with better animations -->
                <div class="counter-animate p-6 rounded-2xl bg-gray-50/50 transform transition-all duration-700 hover:-translate-y-2 hover:shadow-xl hover:shadow-green-100/50 opacity-0 translate-y-8">
                    <div class="inline-flex items-center justify-center h-24 w-24 rounded-full bg-blue-50 mb-6 shadow-xl shadow-blue-50/30">
                        <svg class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="text-6xl font-bold text-gray-900 mb-2 counter">12K+</div>
                        <div class="absolute -top-1 -right-1 h-16 w-16 bg-green-400/10 rounded-full blur-xl"></div>
                    </div>
                    <p class="text-lg text-gray-600">Tons of e-waste processed annually</p>
                </div>

                <!-- Stat 2 -->
                <div class="counter-animate p-6 rounded-2xl bg-gray-50/50 transform transition-all duration-700 hover:-translate-y-2 hover:shadow-xl hover:shadow-green-100/50 opacity-0 translate-y-8">
                    <div class="inline-flex items-center justify-center h-24 w-24 rounded-full bg-green-100 mb-6 shadow-xl shadow-green-100/30">
                        <svg class="h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="text-6xl font-bold text-gray-900 mb-2 counter">100%</div>
                        <div class="absolute -top-1 -right-1 h-16 w-16 bg-green-400/10 rounded-full blur-xl"></div>
                    </div>
                    <p class="text-lg text-gray-600">Certified data destruction success rate</p>
                </div>

                <!-- Stat 3 -->
                <div class="counter-animate p-6 rounded-2xl bg-gray-50/50 transform transition-all duration-700 hover:-translate-y-2 hover:shadow-xl hover:shadow-green-100/50 opacity-0 translate-y-8">
                    <div class="inline-flex items-center justify-center h-24 w-24 rounded-full bg-green-100 mb-6 shadow-xl shadow-green-100/30">
                        <svg class="h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="text-6xl font-bold text-gray-900 mb-2 counter">92%</div>
                        <div class="absolute -top-1 -right-1 h-16 w-16 bg-green-400/10 rounded-full blur-xl"></div>
                    </div>
                    <p class="text-lg text-gray-600">Materials recovery rate from e-waste</p>
                </div>

                <!-- Stat 4 -->
                <div class="counter-animate p-6 rounded-2xl bg-gray-50/50 transform transition-all duration-700 hover:-translate-y-2 hover:shadow-xl hover:shadow-green-100/50 opacity-0 translate-y-8">
                    <div class="inline-flex items-center justify-center h-24 w-24 rounded-full bg-green-100 mb-6 shadow-xl shadow-green-100/30">
                        <svg class="h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="text-6xl font-bold text-gray-900 mb-2 counter">50K+</div>
                        <div class="absolute -top-1 -right-1 h-16 w-16 bg-green-400/10 rounded-full blur-xl"></div>
                    </div>
                    <p class="text-lg text-gray-600">Customers served across the country</p>
                </div>
            </div>

            <!-- Enhanced Achievement Cards - More Apple-like with improved interactions -->
            <div class="mt-24 grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Achievement 1 -->
                <div class="achievement-card bg-gray-50 rounded-3xl overflow-hidden shadow-xl transform transition-all duration-700 hover:-translate-y-3 hover:shadow-2xl opacity-0 translate-y-8">
                    <div class="md:flex">
                        <div class="md:w-2/5 bg-gradient-to-br from-green-600 to-green-700 p-8 text-white flex flex-col justify-center relative overflow-hidden">
                            <!-- Decorative element -->
                            <div class="absolute -bottom-16 -right-16 w-32 h-32 rounded-full bg-white/5 blur-md"></div>
                            <div class="absolute top-8 left-4 w-20 h-20 rounded-full bg-white/5 blur-md"></div>

                            <h3 class="text-2xl font-bold mb-4 relative">Carbon Reduction</h3>
                            <p class="text-white/90 relative">Our e-waste recycling efforts have reduced carbon emissions equivalent to taking 3,000 cars off the road annually.</p>
                        </div>
                        <div class="md:w-3/5 p-8 bg-white">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 h-16 w-16 bg-green-100 rounded-full flex items-center justify-center shadow-lg shadow-green-100/50">
                                    <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                </div>
                                <div class="ml-6">
                                    <h4 class="text-2xl font-semibold text-gray-900">15,000 Tons</h4>
                                    <p class="text-gray-600">CO₂ emissions prevented</p>
                                </div>
                            </div>
                            <a href="#carbon-impact" class="group inline-flex items-center text-green-600 font-medium">
                                Learn about our carbon program
                                <svg class="ml-2 h-5 w-5 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Achievement 2 -->
                <div class="achievement-card bg-gray-50 rounded-3xl overflow-hidden shadow-xl transform transition-all duration-700 hover:-translate-y-3 hover:shadow-2xl opacity-0 translate-y-8">
                    <div class="md:flex">
                        <div class="md:w-2/5 bg-gradient-to-br from-green-600 to-green-700 p-8 text-white flex flex-col justify-center relative overflow-hidden">
                            <!-- Decorative element -->
                            <div class="absolute -bottom-16 -right-16 w-32 h-32 rounded-full bg-white/5 blur-md"></div>
                            <div class="absolute top-8 left-4 w-20 h-20 rounded-full bg-white/5 blur-md"></div>

                            <h3 class="text-2xl font-bold mb-4 relative">Water Conservation</h3>
                            <p class="text-white/90 relative">Our recycling processes use advanced water conservation technologies to minimize environmental impact.</p>
                        </div>
                        <div class="md:w-3/5 p-8 bg-white">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 h-16 w-16 bg-green-100 rounded-full flex items-center justify-center shadow-lg shadow-green-100/50">
                                    <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                    </svg>
                                </div>
                                <div class="ml-6">
                                    <h4 class="text-2xl font-semibold text-gray-900">5.2 Million</h4>
                                    <p class="text-gray-600">Gallons of water saved annually</p>
                                </div>
                            </div>
                            <a href="#water-conservation" class="group inline-flex items-center text-green-600 font-medium">
                                View our conservation efforts
                                <svg class="ml-2 h-5 w-5 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add these styles to your stylesheet -->
<style>
    /* Improved animations */
    @keyframes pulse-slow {
        0%, 100% {
            opacity: 0.7;
            transform: translateY(0);
        }
        50% {
            opacity: 1;
            transform: translateY(4px);
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 2s infinite cubic-bezier(0.45, 0, 0.55, 1);
    }

    /* Component animations */
    .counter-animate, .achievement-card {
        transition: opacity 1s cubic-bezier(0.16, 1, 0.3, 1),
        transform 1s cubic-bezier(0.16, 1, 0.3, 1),
        box-shadow 0.5s ease;
    }

    .counter-animate.animate-in,
    .achievement-card.animate-in,
    .stats__title.animate-in,
    .stats__subtitle.animate-in {
        opacity: 1;
        transform: translateY(0);
    }

    .slide-subtitle.animate-in,
    .slide-title.animate-in,
    .slide-description.animate-in,
    .slide-cta.animate-in {
        opacity: 1;
        transform: translateY(0);
    }

    /* Enhanced counter animation */
    .counter {
        position: relative;
        display: inline-block;
    }

    .counter::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #60a5fa);
        border-radius: 2px;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 1.5s cubic-bezier(0.19, 1, 0.22, 1);
    }

    .counter-animate.animate-in .counter::after {
        transform: scaleX(1);
    }
</style>

<!-- Add this script to your page -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set up intersection observer for animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add animation class when element enters viewport
                    entry.target.classList.add('animate-in');

                    // If this is a counter element, animate the counting
                    if (entry.target.classList.contains('counter-animate')) {
                        // Find all counters within this container
                        const counters = entry.target.querySelectorAll('.counter');
                        counters.forEach(counter => {
                            animateCounter(counter);
                        });
                    }

                    // Unobserve after animation
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all elements that should animate
        document.querySelectorAll('.counter-animate, .achievement-card, .stats__title, .stats__subtitle').forEach(el => {
            observer.observe(el);
        });

        // Function to animate counter numbers
        function animateCounter(counter) {
            const value = counter.innerHTML;

            // Handle percentage or K+ values
            let target = 0;
            let suffix = '';

            if (value.includes('K+')) {
                target = parseInt(value.replace('K+', ''));
                suffix = 'K+';
            } else if (value.includes('%')) {
                target = parseInt(value.replace('%', ''));
                suffix = '%';
            } else {
                target = parseInt(value);
            }

            let count = 0;
            const duration = 2000; // 2 seconds
            const interval = 20; // update every 20ms
            const increment = target / (duration / interval);

            counter.innerHTML = '0' + suffix;

            const timer = setInterval(() => {
                count += increment;
                if (count >= target) {
                    clearInterval(timer);
                    count = target;
                }
                counter.innerHTML = Math.floor(count) + suffix;
            }, interval);
        }

        // Initialize the first slide animation immediately
        document.querySelectorAll('.slide-0 .slide-subtitle, .slide-0 .slide-title, .slide-0 .slide-description, .slide-0 .slide-cta').forEach((el, index) => {
            setTimeout(() => {
                el.classList.add('animate-in');
            }, index * 200);
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.scrollY;
            const parallaxElements = document.querySelectorAll('.hero__decorative-circle');

            parallaxElements.forEach((el, index) => {
                const speed = index * 0.05 + 0.1;
                el.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>

<!-- Additional Apple-inspired UI enhancements -->
<style>
    /* Gradient text effect */
    .gradient-text {
        background: linear-gradient(90deg, #22c55e, #10b981);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    /* Improved focus states for accessibility */
    button:focus, a:focus {
        outline: 2px solid #22c55e;
        outline-offset: 3px;
    }

    /* Enhanced tooltip style */
    .tooltip {
        position: relative;
    }

    .tooltip::before {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%) translateY(-8px);
        padding: 8px 12px;
        background: rgba(0, 0, 0, 0.8);
        color: white;
        font-size: 14px;
        border-radius: 6px;
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s ease;
        white-space: nowrap;
        z-index: 100;
    }

    .tooltip::after {
        content: '';
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        border: 6px solid transparent;
        border-top-color: rgba(0, 0, 0, 0.8);
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .tooltip:hover::before,
    .tooltip:hover::after {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }

    /* Apple-style button press effect */
    .btn {
        transform-style: preserve-3d;
        perspective: 1000px;
    }

    .btn::after {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 50px;
        background: linear-gradient(to bottom, rgba(255,255,255,0.1), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .btn:active {
        transform: scale(0.98) translateY(2px);
    }

    .btn:active::after {
        opacity: 1;
    }

    /* Enhanced image hover effects */
    .hero__image-container:hover .hero__image {
        transform: scale(1.02);
        transition: transform 7s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    /* Scroll-triggered fade-in animations for sections */
    .fade-in-section {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in-section.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Subtle text shadow for hero text */
    .hero__title {
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }

    /* Custom scrollbar for webkit browsers */
    ::-webkit-scrollbar {
        width: 12px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #3b82f6;
        border-radius: 6px;
        border: 3px solid #50eb25;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #50eb25;
    }

    /* Progress indicator for page scrolling - Apple style */
    .scroll-progress {
        position: fixed;
        top: 0;
        left: 0;
        height: 3px;
        background: #3b82f6;
        z-index: 9999;
        width: 0%;
        transition: width 0.1s ease-out;
    }
</style>

<!-- Add this to the top of your body for scroll progress indicator -->
<div class="scroll-progress"></div>
<script>
    // Update scroll progress indicator
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.querySelector('.scroll-progress').style.width = scrolled + '%';
    });
</script>
