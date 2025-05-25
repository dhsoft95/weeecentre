<section id="home" class="min-h-screen flex items-center py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Slider -->
        <div x-data="{
            activeSlide: 0,
            slides: [
                {
                    title: 'Responsible E-Waste Recycling',
                    subtitle: 'Protecting Our Planet, One Device at a Time',
                    description: 'Join our mission to reduce electronic waste and promote sustainable technology lifecycles.',
                    image: '/assets/images/slider/ewaste-recycling.jpg',
{{--                    bgColor: 'from-green-600/90 to-emerald-500/90',--}}
                    icon: 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z'
                },
                {
                    title: 'Give Your Electronics a Second Life',
                    subtitle: 'Recycle, Refurbish, Repurpose',
                    description: 'From smartphones to servers, we ensure your old tech is properly recycled or given new purpose.',
                    image: '/assets/images/slider/electronics-repair.jpg',
{{--                    bgColor: 'from-blue-500/90 to-cyan-400/90',--}}
                    icon: 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'
                },
                {
                    title: 'Certified E-Waste Management',
                    subtitle: 'Environmentally Compliant Solutions',
                    description: 'Our certified processes ensure hazardous materials are properly handled and valuable resources recovered.',
                    image: '/assets/images/slider/certified-management.jpg',
{{--                    bgColor: 'from-amber-500/90 to-orange-400/90',--}}
                    icon: 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'
                }
            ]
        }"
             x-init="setInterval(function() { activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1 }, 6000)"
             class="relative rounded-xl overflow-hidden shadow-2xl">

            <!-- Slides -->
            <div class="relative h-96 md:h-[32rem] w-full">
                <!-- Template for slides -->
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index"
                         x-transition:enter="transition ease-out duration-700"
                         x-transition:enter-start="opacity-0 transform translate-x-full"
                         x-transition:enter-end="opacity-100 transform translate-x-0"
                         x-transition:leave="transition ease-in duration-700"
                         x-transition:leave-start="opacity-100 transform translate-x-0"
                         x-transition:leave-end="opacity-0 transform -translate-x-full"
                         class="absolute inset-0 flex">

                        <!-- Background Image (Each slide has its own image) -->
                        <div class="absolute inset-0 z-0">
                            <img :src="slide.image" :alt="slide.title" class="object-cover w-full h-full" />
                            <!-- Gradient Overlay that matches slide theme -->
                            <div :class="'absolute inset-0 bg-gradient-to-r ' + slide.bgColor"></div>
                        </div>

                        <!-- Text Content -->
                        <div class="w-full md:w-1/2 flex flex-col justify-center p-8 md:p-12 text-white z-10 backdrop-blur-sm bg-black/10 rounded-r-xl">
                            <span x-text="slide.subtitle" class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium mb-4"></span>
                            <h2 x-text="slide.title" class="text-3xl md:text-5xl font-bold mb-4 leading-tight"></h2>
                            <p x-text="slide.description" class="text-base md:text-lg opacity-90 mb-8"></p>
                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                                <a href="#services" class="px-6 py-3 bg-white text-green-600 font-medium rounded-md shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-1 inline-flex items-center justify-center">
                                    <span>Our Services</span>
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </a>
                                <a href="#drop-off" class="px-6 py-3 border-2 border-white text-white font-medium rounded-md hover:bg-white hover:text-green-600 transition transform hover:-translate-y-1 inline-flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Drop-off Locations</span>
                                </a>
                            </div>
                        </div>

                        <!-- Icon -->
                        <div class="absolute right-12 md:right-24 bottom-0 top-0 flex items-center justify-center">
                            <svg class="w-48 h-48 md:w-64 md:h-64 text-white opacity-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="slide.icon"></path>
                            </svg>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Slider Indicators - IMPROVED for better visibility while keeping original style -->
            <div class="absolute bottom-8 left-0 right-0 flex justify-center z-20">
                <div class="flex items-center justify-center space-x-3 px-4 py-2 bg-black/40 backdrop-blur-sm rounded-full shadow-xl">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="activeSlide = index"
                                :class="{
                                    'ring-2 ring-white scale-110 z-10 shadow-lg': activeSlide === index,
                                    'opacity-70 hover:opacity-100 hover:scale-105': activeSlide !== index
                                }"
                                class="w-14 h-14 rounded-full overflow-hidden focus:outline-none transition duration-300 transform relative">
                            <img :src="slide.image" :alt="'Thumbnail ' + (index + 1)" class="w-full h-full object-cover" />
                            <!-- Color overlay matching slide theme -->
                            <div :class="'absolute inset-0 ' + (activeSlide === index ? slide.bgColor.replace('90', '30') : 'bg-black/40')"
                                 class="transition duration-300"></div>
                            <!-- Slide number indicator -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span :class="{'text-white font-bold text-lg': activeSlide === index, 'text-white/80 text-base': activeSlide !== index}"
                                      class="transition duration-300">
                                    <span x-text="index + 1" class="bg-black/50 w-6 h-6 flex items-center justify-center rounded-full"></span>
                                </span>
                            </div>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Previous/Next Buttons - Enhanced with better visibility -->
            <button @click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 w-14 h-14 flex items-center justify-center bg-black/60 backdrop-blur-sm rounded-full shadow-xl hover:bg-black/80 focus:outline-none transition duration-300 hover:scale-110 z-20 border border-white/30">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button @click="activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 w-14 h-14 flex items-center justify-center bg-black/60 backdrop-blur-sm rounded-full shadow-xl hover:bg-black/80 focus:outline-none transition duration-300 hover:scale-110 z-20 border border-white/30">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Slide Counter - New Feature -->
            <div class="absolute bottom-4 right-4 bg-black/60 text-white px-4 py-2 rounded-full backdrop-blur-sm text-sm font-medium z-20 border border-white/20">
                <span x-text="activeSlide + 1"></span> / <span x-text="slides.length"></span>
            </div>
        </div>

        <!-- Features Section Below Slider - Enhanced for better alignment with slider -->
        <div class="mt-24">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 border-t-4 border-green-600">
                    <div class="h-14 w-14 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center mb-5 shadow-lg">
                        <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Convenient Drop-off</h3>
                    <p class="text-gray-600">
                        Multiple drop-off locations throughout the city make recycling your e-waste quick and easy.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 border-t-4 border-blue-600">
                    <div class="h-14 w-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mb-5 shadow-lg">
                        <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Data Security</h3>
                    <p class="text-gray-600">
                        All devices undergo secure data wiping procedures, ensuring your personal information remains protected.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 border-t-4 border-amber-500">
                    <div class="h-14 w-14 bg-gradient-to-br from-amber-500 to-amber-700 rounded-xl flex items-center justify-center mb-5 shadow-lg">
                        <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Environmental Certification</h3>
                    <p class="text-gray-600">
                        Our recycling processes are certified and comply with all environmental regulations and standards.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
