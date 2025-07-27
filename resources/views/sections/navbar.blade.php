<!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/95 backdrop-blur-md shadow-lg z-50" x-data="{ open: false }">
        <div class="top-navbar">
            <div class="bg-off-white flex border-b border-[#C7C7C7] justify-between text-sm font-medium text-black px-4 md:px-6 py-4">
                <div class="flex">
                    <a href="#" class="font-semibold">For Consumer</a>
                    <span class="mx-4">|</span>
                    <a href="/">For Business</a>
                </div>
                <div class="space-x-4 md:space-x-6 hidden sm:flex">
                <a href="#">Career</a>
                <a href="#">Supports</a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('img/logo.svg') }}" width="100" alt="">
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex text-lg items-baseline space-x-8">
                        <a href="#home"
                            class="text-gray-700 hover:text-emerald-600 transition-colors px-3 py-2 text-md font-regular">Home</a>
                        <a href="#about"
                            class="text-gray-700 hover:text-emerald-600 transition-colors px-3 py-2 text-md font-regular">About</a>
                        <a href="#services"
                            class="text-gray-700 hover:text-emerald-600 transition-colors px-3 py-2 text-md font-regular">Services</a>
                        <a href="#team"
                            class="text-gray-700 hover:text-emerald-600 transition-colors px-3 py-2 text-md font-regular">Team</a>
                        <a href="#contact"
                            class="text-gray-700 hover:text-emerald-600 transition-colors px-3 py-2 text-md font-regular">Contact</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button @click="open = !open" class="text-gray-700 hover:text-emerald-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div x-show="open" class="md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-emerald-600">Home</a>
                <a href="#about" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-emerald-600">About</a>
                <a href="#services" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-emerald-600">Services</a>
                <a href="#team" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-emerald-600">Team</a>
                <a href="#contact" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-emerald-600">Contact</a>
            </div>
        </div>
    </nav>