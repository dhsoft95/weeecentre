<section id="home" class="relative min-h-screen bg-black overflow-hidden">
    <!-- Background Gradient - Subtle dark green undertone -->
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-gray-900 to-black z-0"></div>

    <!-- Apple-style hero slider with fluid container -->
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
            this.autoplayInterval = setInterval(() => {
                this.activeSlide = (this.activeSlide + 1) % this.slides.length;
            }, 8000);

            this.$watch('activeSlide', () => {
                // Reset interval when slide changes
                clearInterval(this.autoplayInterval);
                this.autoplayInterval = setInterval(() => {
                    this.activeSlide = (this.activeSlide + 1) % this.slides.length;
                }, 8000);
            });
        }
    }" class="relative h-screen">
        <!-- Main Content Container -->
        <div class="absolute inset-0 z-10 overflow-hidden">
            <!-- Slides Container -->
            <div class="h-full relative">
                <!-- Template for slides -->
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index"
                         x-transition:enter="transition ease-out duration-1500"
                         x-transition:enter-start="opacity-0 transform scale-105"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         x-transition:leave="transition ease-in duration-1000"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="absolute inset-0 flex flex-col md:flex-row items-center">

                        <!-- Text Content (Left Column) -->
                        <div class="w-full md:w-1/2 h-full flex flex-col justify-center px-8 md:px-20 lg:px-32 z-20 py-12 md:py-0 relative">
                            <!-- Subtle green radial glow behind text -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full max-w-xl max-h-xl rounded-full bg-green-900/10 blur-3xl"></div>

                            <div class="space-y-6 relative"
                                 x-show="activeSlide === index"
                                 x-transition:enter="transition ease-out delay-500 duration-1000"
                                 x-transition:enter-start="opacity-0 transform translate-y-12"
                                 x-transition:enter-end="opacity-100 transform translate-y-0">
                                <!-- Subtitle with accent color -->
                                <h2 x-text="slide.subtitle"
                                    class="text-lg md:text-xl font-medium tracking-wide text-green-400"></h2>

                                <!-- Main Title -->
                                <h1 x-text="slide.title" class="text-4xl md:text-6xl lg:text-7xl font-bold text-white leading-tight"></h1>

                                <!-- Description -->
                                <p x-text="slide.description" class="text-lg md:text-xl text-gray-300 max-w-lg"></p>

                                <!-- Call to Action Buttons -->
                                <div class="flex flex-col sm:flex-row sm:items-center space-y-3 sm:space-y-0 sm:space-x-5 mt-6"
                                     x-show="activeSlide === index"
                                     x-transition:enter="transition ease-out delay-700 duration-1000"
                                     x-transition:enter-start="opacity-0 transform translate-y-12"
                                     x-transition:enter-end="opacity-100 transform translate-y-0">
                                    <a href="#services"
                                       class="inline-flex items-center justify-center px-8 py-3 rounded-full text-white text-lg font-medium transition-all duration-300 transform hover:scale-105 bg-green-600 hover:bg-green-700 shadow-lg hover:shadow-green-600/20">
                                        Learn more
                                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                    <a href="#drop-off" class="inline-flex items-center justify-center px-8 py-3 rounded-full text-white text-lg font-medium border-2 border-white/70 bg-transparent hover:bg-white hover:text-green-900 transition-all duration-300 transform hover:scale-105 backdrop-blur-sm">
                                        Find drop-off locations
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Image (Right Column) -->
                        <div class="w-full md:w-1/2 h-full relative overflow-hidden">
                            <!-- Background Image with Parallax Effect -->
                            <div class="absolute inset-0 h-full w-full overflow-hidden transform transition-transform duration-[2000ms]"
                                 :style="activeSlide === index ? 'transform: scale(1.05); transition-timing-function: cubic-bezier(0.33, 1, 0.68, 1);' : 'transform: scale(1); transition-timing-function: cubic-bezier(0.32, 0, 0.67, 0);'">
                                <img :src="slide.image" :alt="slide.title" class="w-full h-full object-cover object-center" />

                                <!-- Image Overlay - Softer Gradient -->
                                <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent md:via-black/40 md:to-transparent opacity-90"></div>

                                <!-- Subtle Green Overlay -->
                                <div class="absolute inset-0 bg-green-900/20 mix-blend-soft-light"></div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            <!-- Slide Pagination - Green-themed -->
            <div class="absolute bottom-10 left-0 right-0 flex justify-center space-x-3 z-20">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index"
                            :class="{
                                'w-12 bg-green-500': activeSlide === index,
                                'w-3 bg-gray-400 hover:bg-green-300': activeSlide !== index
                            }"
                            class="h-2 rounded-full transition-all duration-500 focus:outline-none"></button>
                </template>
            </div>
        </div>

        <!-- Scroll Down Indicator - Enhanced animation -->
        <div class="absolute bottom-14 left-1/2 transform -translate-x-1/2 z-20"
             x-data="{ hover: false }"
             @mouseenter="hover = true"
             @mouseleave="hover = false">
            <div class="flex flex-col items-center justify-center text-white/70 hover:text-green-400 transition-colors duration-300 cursor-pointer group">
                <span class="text-sm mb-2 font-light">Scroll</span>
                <div class="relative h-10 w-6 border-2 border-white/50 group-hover:border-green-400 rounded-full flex justify-center transition-colors duration-300">
                    <div class="absolute top-1 w-1 h-1 bg-white/80 group-hover:bg-green-400 rounded-full animate-scrollDown transition-colors duration-300"></div>
                </div>
            </div>
        </div>

        <!-- Side patterns/decoration - Subtle patterns on sides -->
        <div class="absolute inset-y-0 right-0 w-32 z-0 overflow-hidden opacity-20 pointer-events-none">
            <div class="absolute right-0 top-1/3 h-64 w-64 rounded-full border border-green-500/40 transform translate-x-1/2"></div>
            <div class="absolute right-0 bottom-1/4 h-96 w-96 rounded-full border border-green-500/20 transform translate-x-1/3"></div>
        </div>
    </div>

    <!-- Impact Statistics Section - Green Dominant Theme -->
    <div class="relative z-10 bg-white py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our Impact</h2>
                <p class="mt-4 text-xl text-gray-500 max-w-3xl mx-auto">Making a measurable difference in electronic waste management and environmental preservation.</p>
            </div>

            <!-- Animated Counter Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <!-- Stat 1 -->
                <div class="p-6 transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="inline-flex items-center justify-center h-20 w-20 rounded-full bg-green-100 mb-6 shadow-lg shadow-green-100/50">
                        <svg class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>
                    </div>
                    <div class="text-5xl font-bold text-gray-900 mb-2">12K+</div>
                    <p class="text-lg text-gray-600">Tons of e-waste processed annually</p>
                </div>

                <!-- Stat 2 -->
                <div class="p-6 transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="inline-flex items-center justify-center h-20 w-20 rounded-full bg-green-100 mb-6 shadow-lg shadow-green-100/50">
                        <svg class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div class="text-5xl font-bold text-gray-900 mb-2">100%</div>
                    <p class="text-lg text-gray-600">Certified data destruction success rate</p>
                </div>

                <!-- Stat 3 -->
                <div class="p-6 transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="inline-flex items-center justify-center h-20 w-20 rounded-full bg-green-100 mb-6 shadow-lg shadow-green-100/50">
                        <svg class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-5xl font-bold text-gray-900 mb-2">92%</div>
                    <p class="text-lg text-gray-600">Materials recovery rate from e-waste</p>
                </div>

                <!-- Stat 4 -->
                <div class="p-6 transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="inline-flex items-center justify-center h-20 w-20 rounded-full bg-green-100 mb-6 shadow-lg shadow-green-100/50">
                        <svg class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="text-5xl font-bold text-gray-900 mb-2">50K+</div>
                    <p class="text-lg text-gray-600">Customers served across the country</p>
                </div>
            </div>

            <!-- Environmental Achievement Cards -->
            <div class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Achievement 1 -->
                <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-lg flex flex-col md:flex-row transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="md:w-2/5 bg-green-600 p-8 text-white flex flex-col justify-center">
                        <h3 class="text-2xl font-bold mb-3">Carbon Reduction</h3>
                        <p class="text-white/80">Our e-waste recycling efforts have reduced carbon emissions equivalent to taking 3,000 cars off the road annually.</p>
                    </div>
                    <div class="md:w-3/5 p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 h-12 w-12 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-900">15,000 Tons</h4>
                                <p class="text-gray-600">CO₂ emissions prevented</p>
                            </div>
                        </div>
                        <a href="#carbon-impact" class="inline-flex items-center text-green-600 font-medium">
                            Learn about our carbon program
                            <svg class="ml-1 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Achievement 2 -->
                <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-lg flex flex-col md:flex-row transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="md:w-2/5 bg-green-600 p-8 text-white flex flex-col justify-center">
                        <h3 class="text-2xl font-bold mb-3">Water Conservation</h3>
                        <p class="text-white/80">Our recycling processes use advanced water conservation technologies to minimize environmental impact.</p>
                    </div>
                    <div class="md:w-3/5 p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 h-12 w-12 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-900">5.2 Million</h4>
                                <p class="text-gray-600">Gallons of water saved annually</p>
                            </div>
                        </div>
                        <a href="#water-conservation" class="inline-flex items-center text-green-600 font-medium">
                            View our conservation efforts
                            <svg class="ml-1 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
