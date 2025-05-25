<!-- Enhanced Fixed Navigation -->
<nav class="bg-gradient-to-r from-gray-900 to-gray-800 text-white fixed w-full z-50 top-0 border-b border-gray-700 shadow-md transition-all duration-300"
     x-data="{
         open: false,
         active: 'home',
         scrolled: false,
         showDropdown: false
     }"
     x-init="
       window.addEventListener('scroll', () => {
         // Update scrolled state for styling changes
         scrolled = window.scrollY > 20;

         // Update active section based on scroll position
         const sections = document.querySelectorAll('section[id]');
         let found = false;

         sections.forEach(section => {
           const sectionTop = section.offsetTop - 100;
           const sectionHeight = section.offsetHeight;

           if (!found && window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
             active = section.getAttribute('id');
             found = true;
           }
         });
       });
     "
     :class="{'py-1 shadow-md': scrolled, 'py-3': !scrolled}">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Logo -->
        <a href="#home" class="flex items-center space-x-3 transition duration-300 hover:opacity-90">
            <div class="flex items-center">
                <!-- Logo with subtle animation on hover -->
                <div class="overflow-hidden rounded-lg transition-all duration-300 transform hover:scale-105">
                    <!-- Desktop logo -->
                    <img src="{{ asset('assets/images/logo.png') }}" alt="WeeeCenter Logo" class="hidden md:block h-10 w-auto object-contain">
                    <!-- Mobile logo (smaller version) -->
                    <img src="{{ asset('assets/images/logo.png') }}" alt="WeeeCenter Logo" class="block md:hidden h-9 w-auto object-contain">
                </div>

                <!-- Brand name with gradient effect -->
                <div class="ml-2.5 flex flex-col justify-center">
                    <span class="text-xl md:text-2xl font-bold tracking-tight relative group">
                        <span class="text-green-400 group-hover:text-green-300 transition-colors duration-300">Weee</span><span class="text-white">Centre</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-green-500 group-hover:w-full transition-all duration-300"></span>
                    </span>
                    <!-- Tagline with animated typing effect -->
                    <span class="hidden sm:block text-xs text-gray-300 -mt-0.5 font-light">
                        Manage e-waste for safe environment
                    </span>
                </div>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex md:space-x-1 lg:space-x-2">
            <a href="#home"
               @click.prevent="active = 'home'; document.querySelector('#home').scrollIntoView({behavior: 'smooth'})"
               :class="active === 'home' ? 'text-green-400 after:w-full' : 'text-gray-300 hover:text-green-400 after:w-0 hover:after:w-full'"
               class="py-2 px-3 font-medium relative transition-all duration-300 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-green-500 after:transition-all after:duration-300">
                Home
            </a>
            <a href="#about"
               @click.prevent="active = 'about'; document.querySelector('#about').scrollIntoView({behavior: 'smooth'})"
               :class="active === 'about' ? 'text-green-400 after:w-full' : 'text-gray-300 hover:text-green-400 after:w-0 hover:after:w-full'"
               class="py-2 px-3 font-medium relative transition-all duration-300 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-green-500 after:transition-all after:duration-300">
                About Us
            </a>
            <a href="#services"
               @click.prevent="active = 'services'; document.querySelector('#services').scrollIntoView({behavior: 'smooth'})"
               :class="active === 'services' ? 'text-green-400 after:w-full' : 'text-gray-300 hover:text-green-400 after:w-0 hover:after:w-full'"
               class="py-2 px-3 font-medium relative transition-all duration-300 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-green-500 after:transition-all after:duration-300">
                Services
            </a>

            <!-- Services Dropdown -->
            <div class="relative" @mouseleave="showDropdown = false">
                <a href="#events"
                   @mouseover="showDropdown = true"
                   @click.prevent="active = 'events'; document.querySelector('#events').scrollIntoView({behavior: 'smooth'})"
                   :class="active === 'events' ? 'text-green-400 after:w-full' : 'text-gray-300 hover:text-green-400 after:w-0 hover:after:w-full'"
                   class="py-2 px-3 font-medium relative transition-all duration-300 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-green-500 after:transition-all after:duration-300 flex items-center">
                    Events
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <!-- Dropdown Menu with Animation -->
                <div x-show="showDropdown"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-2"
                     class="absolute left-0 mt-1 w-48 bg-gray-800 rounded-md shadow-lg py-1 z-50 border border-gray-700">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-green-400">Upcoming Events</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-green-400">Past Events</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-green-400">Community Drives</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-green-400">Workshops</a>
                </div>
            </div>

            <a href="#projects"
               @click.prevent="active = 'projects'; document.querySelector('#projects').scrollIntoView({behavior: 'smooth'})"
               :class="active === 'projects' ? 'text-green-400 after:w-full' : 'text-gray-300 hover:text-green-400 after:w-0 hover:after:w-full'"
               class="py-2 px-3 font-medium relative transition-all duration-300 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-green-500 after:transition-all after:duration-300">
                Projects
            </a>
        </div>

        <!-- Contact Us Button & Mobile Menu Toggle -->
        <div class="flex items-center">
            <!-- Button with hover effect -->
            <a href="#contact"
               @click.prevent="document.querySelector('#contact').scrollIntoView({behavior: 'smooth'})"
               class="hidden md:flex items-center text-white bg-gradient-to-r from-green-600 to-green-500 hover:from-green-700 hover:to-green-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-3 transition-all duration-300 transform hover:scale-105 group">
                <span>Contact Us</span>
                <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>

            <!-- Mobile menu button with animation -->
            <button @click="open = !open"
                    class="md:hidden p-2 text-gray-300 hover:bg-gray-700 rounded-lg transition-colors duration-200 focus:outline-none">
                <div class="w-6 h-5 relative flex flex-col justify-between overflow-hidden">
                    <span class="w-full h-0.5 bg-gray-300 transform transition-all duration-300"
                          :class="open ? 'rotate-45 translate-y-1.5' : ''"></span>
                    <span class="w-full h-0.5 bg-gray-300 transition-all duration-300"
                          :class="open ? 'opacity-0' : 'opacity-100'"></span>
                    <span class="w-full h-0.5 bg-gray-300 transform transition-all duration-300"
                          :class="open ? '-rotate-45 -translate-y-2' : ''"></span>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile menu with improved animation -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-4"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-4"
         class="md:hidden bg-gray-800 border-b border-gray-700 shadow-inner"
         @click.away="open = false">
        <div class="px-3 py-4 space-y-1.5">
            <a href="#home"
               @click="active = 'home'; open = false; document.querySelector('#home').scrollIntoView({behavior: 'smooth'})"
               :class="active === 'home' ? 'text-white bg-gradient-to-r from-green-600 to-green-500 border-green-500' : 'text-gray-700 hover:bg-gray-50 border-transparent hover:border-gray-200'"
               class="flex items-center px-4 py-2.5 rounded-lg border transition-all duration-200">
                <svg class="w-5 h-5 mr-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="active === 'home' ? 'text-white' : 'text-green-600'">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Home
            </a>
            <a href="#about"
               @click="active = 'about'; open = false; document.querySelector('#about').scrollIntoView({behavior: 'smooth'})"
               :class="active === 'about' ? 'text-white bg-gradient-to-r from-green-600 to-green-500 border-green-500' : 'text-gray-700 hover:bg-gray-50 border-transparent hover:border-gray-200'"
               class="flex items-center px-4 py-2.5 rounded-lg border transition-all duration-200">
                <svg class="w-5 h-5 mr-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="active === 'about' ? 'text-white' : 'text-green-600'">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                About Us
            </a>
            <a href="#services"
               @click="active = 'services'; open = false; document.querySelector('#services').scrollIntoView({behavior: 'smooth'})"
               :class="active === 'services' ? 'text-white bg-gradient-to-r from-green-600 to-green-500 border-green-500' : 'text-gray-700 hover:bg-gray-50 border-transparent hover:border-gray-200'"
               class="flex items-center px-4 py-2.5 rounded-lg border transition-all duration-200">
                <svg class="w-5 h-5 mr-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="active === 'services' ? 'text-white' : 'text-green-600'">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Services
            </a>

            <!-- Events dropdown in mobile -->
            <div x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen"
                        :class="active === 'events' ? 'text-white bg-gradient-to-r from-green-600 to-green-500 border-green-500' : 'text-gray-700 hover:bg-gray-50 border-transparent hover:border-gray-200'"
                        class="flex items-center justify-between w-full px-4 py-2.5 rounded-lg border transition-all duration-200">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="active === 'events' ? 'text-white' : 'text-green-600'">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Events
                    </div>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="isOpen ? 'transform rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Mobile dropdown content -->
                <div x-show="isOpen"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-2"
                     class="pl-12 pr-4 py-2 space-y-1">
                    <a href="#" @click="open = false" class="block py-2 text-sm text-gray-300 hover:text-green-400">Upcoming Events</a>
                    <a href="#" @click="open = false" class="block py-2 text-sm text-gray-300 hover:text-green-400">Past Events</a>
                    <a href="#" @click="open = false" class="block py-2 text-sm text-gray-300 hover:text-green-400">Community Drives</a>
                    <a href="#" @click="open = false" class="block py-2 text-sm text-gray-300 hover:text-green-400">Workshops</a>
                </div>
            </div>

            <a href="#projects"
               @click="active = 'projects'; open = false; document.querySelector('#projects').scrollIntoView({behavior: 'smooth'})"
               :class="active === 'projects' ? 'text-white bg-gradient-to-r from-green-600 to-green-500 border-green-500' : 'text-gray-700 hover:bg-gray-50 border-transparent hover:border-gray-200'"
               class="flex items-center px-4 py-2.5 rounded-lg border transition-all duration-200">
                <svg class="w-5 h-5 mr-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="active === 'projects' ? 'text-white' : 'text-green-600'">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
                Projects
            </a>

            <div class="mt-6 px-4">
                <a href="#contact"
                   @click="active = 'contact'; open = false; document.querySelector('#contact').scrollIntoView({behavior: 'smooth'})"
                   class="flex items-center justify-center w-full text-white bg-gradient-to-r from-green-600 to-green-500 hover:from-green-700 hover:to-green-600 font-medium rounded-lg px-4 py-3 transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</nav>
