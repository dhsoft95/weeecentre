<section id="projects" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <!-- Section Header - Apple-inspired minimal style with green accent -->

        <div class="relative text-center mb-20">
{{--            <span class="inline-block px-3 py-1 text-xs font-semibold text-green-700 tracking-wider uppercase bg-green-100 rounded-full mb-3">Our Amazing Team</span>--}}
            <h2 class="text-4xl md:text-5xl font-bold leading-tight bg-gradient-to-r from-green-600 to-teal-400 bg-clip-text text-transparent mb-4">Our Projects</h2>
            <p class="max-w-2xl mx-auto text-xl text-gray-600">Innovative solutions for electronic waste management and sustainability.</p>
            <div class="mt-10 h-1 w-24 bg-gradient-to-r from-green-400 to-teal-500 mx-auto rounded-full"></div>
        </div>

        <!-- Projects Slider - Apple-inspired clean design with green accent -->
        <div x-data="{
            activeSlide: 0,
            totalSlides: 2,
            autoplay: true,
            autoplaySpeed: 7000,
            init() {
                if (this.autoplay) {
                    this.autoplayInterval = setInterval(() => {
                        this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                    }, this.autoplaySpeed);
                }
            }
        }" class="relative">
            <!-- Clean, borderless slider container -->
            <div class="overflow-hidden">
                <!-- Main Slider -->
                <div class="flex transition-all duration-1000 ease-out"
                     :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">

                    <!-- Slide 1 (Projects 1-3) -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <!-- Project 1 - Clean Apple design with green accent -->
                            <div class="transition-all duration-500 ease-out hover:opacity-90">
                                <div class="relative aspect-[4/3] overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/images/projects/project1.jpg') }}" alt="E-Waste Collection Hub" class="w-full h-full object-cover">
                                </div>
                                <div class="mt-5">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg font-medium text-gray-900">E-Waste Collection Hub</h3>
                                        <span class="text-xs font-medium text-green-600 border border-green-600 rounded-full px-2 py-0.5">Completed</span>
                                    </div>
                                    <p class="mt-2 text-gray-500 text-sm">A centralized facility streamlining electronic waste collection from communities.</p>
                                    <a href="#" class="mt-3 inline-flex items-center text-sm font-medium text-green-600">
                                        Learn more
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Project 2 - Clean Apple design with green accent -->
                            <div class="transition-all duration-500 ease-out hover:opacity-90">
                                <div class="relative aspect-[4/3] overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/images/projects/project1.jpg') }}" alt="Recycling Automation System" class="w-full h-full object-cover">
                                </div>
                                <div class="mt-5">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg font-medium text-gray-900">Recycling Automation System</h3>
                                        <span class="text-xs font-medium text-emerald-600 border border-emerald-600 rounded-full px-2 py-0.5">In Progress</span>
                                    </div>
                                    <p class="mt-2 text-gray-500 text-sm">AI and robotics system automating the sorting and processing of electronic components.</p>
                                    <a href="#" class="mt-3 inline-flex items-center text-sm font-medium text-green-600">
                                        Learn more
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Project 3 - Clean Apple design with green accent -->
                            <div class="transition-all duration-500 ease-out hover:opacity-90">
                                <div class="relative aspect-[4/3] overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/images/projects/project1.jpg') }}" alt="Community Education Program" class="w-full h-full object-cover">
                                </div>
                                <div class="mt-5">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg font-medium text-gray-900">Community Education Program</h3>
                                        <span class="text-xs font-medium text-teal-600 border border-teal-600 rounded-full px-2 py-0.5">Ongoing</span>
                                    </div>
                                    <p class="mt-2 text-gray-500 text-sm">Educational initiatives raising awareness about e-waste management and sustainability.</p>
                                    <a href="#" class="mt-3 inline-flex items-center text-sm font-medium text-green-600">
                                        Learn more
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 (Projects 4-6) -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <!-- Project 4 - Clean Apple design with green accent -->
                            <div class="transition-all duration-500 ease-out hover:opacity-90">
                                <div class="relative aspect-[4/3] overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/images/projects/project1.jpg') }}" alt="Material Recovery Facility" class="w-full h-full object-cover">
                                </div>
                                <div class="mt-5">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg font-medium text-gray-900">Material Recovery Facility</h3>
                                        <span class="text-xs font-medium text-green-600 border border-green-600 rounded-full px-2 py-0.5">Completed</span>
                                    </div>
                                    <p class="mt-2 text-gray-500 text-sm">State-of-the-art facility extracting valuable materials from e-waste for recycling.</p>
                                    <a href="#" class="mt-3 inline-flex items-center text-sm font-medium text-green-600">
                                        Learn more
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Project 5 - Clean Apple design with green accent -->
                            <div class="transition-all duration-500 ease-out hover:opacity-90">
                                <div class="relative aspect-[4/3] overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/images/projects/project1.jpg') }}" alt="Corporate E-Waste Partnership" class="w-full h-full object-cover">
                                </div>
                                <div class="mt-5">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg font-medium text-gray-900">Corporate E-Waste Partnership</h3>
                                        <span class="text-xs font-medium text-emerald-600 border border-emerald-600 rounded-full px-2 py-0.5">In Progress</span>
                                    </div>
                                    <p class="mt-2 text-gray-500 text-sm">Collaborative initiative with corporations implementing sustainable e-waste practices.</p>
                                    <a href="#" class="mt-3 inline-flex items-center text-sm font-medium text-green-600">
                                        Learn more
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Project 6 - Clean Apple design with green accent -->
                            <div class="transition-all duration-500 ease-out hover:opacity-90">
                                <div class="relative aspect-[4/3] overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/images/projects/project1.jpg') }}" alt="Renewable Energy from E-Waste" class="w-full h-full object-cover">
                                </div>
                                <div class="mt-5">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg font-medium text-gray-900">Renewable Energy from E-Waste</h3>
                                        <span class="text-xs font-medium text-amber-600 border border-amber-600 rounded-full px-2 py-0.5">Planning</span>
                                    </div>
                                    <p class="mt-2 text-gray-500 text-sm">Research project exploring methods to convert e-waste components into renewable energy.</p>
                                    <a href="#" class="mt-3 inline-flex items-center text-sm font-medium text-green-600">
                                        Learn more
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Apple-style minimal pagination with green accent -->
            <div class="flex justify-center mt-12 space-x-2">
                <template x-for="(slide, index) in totalSlides" :key="index">
                    <button @click="activeSlide = index; clearInterval(autoplayInterval);"
                            :class="{'bg-green-600': activeSlide === index, 'bg-gray-300': activeSlide !== index}"
                            class="w-2 h-2 rounded-full focus:outline-none transition-all duration-300"></button>
                </template>
            </div>
        </div>

        <!-- Apple-style minimal button with green accent -->
        <div class="mt-16 text-center">
            <a href="#" class="inline-flex items-center justify-center px-5 py-2 text-sm font-medium text-green-600 hover:text-green-700 transition-colors">
                View all projects
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
