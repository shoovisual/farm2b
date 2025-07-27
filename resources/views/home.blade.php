@extends('layouts.app')
@section('title', 'Home')
@section('content')
    
    <!-- Hero Section -->
    <section id="home" class="hero-gradient hero-bg min-h-screen flex items-center pt-16">
        <div class="overlay"></div>
        <div class="max-w-7xl mx-auto px-4 z-20 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-white col-span- floating-2 bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/30 animate-fade-in">
                    <h1 class="text-5xl lg:text-5xl regular mb-6 leading-tight"> Empowering Africa's Agriculture through <span
                            class="text-[#fff]">Inclusion & Innovation</span>
                    </h1>
                    <p class="text-lg max-w-lg mb-8 text-white leading-relaxed"> FARM2B is driving inclusive industrialization and agricultural
                        transformation across Sub-Saharan Africa. </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#about"
                            class="bg-[#EF9829] group text-white px-6 py-3 rounded-full font-regular hover:bg-[#EF9829] transition-colors text-center">
                            Learn More <i class="bi bi-chevron-right ml-3 group-hover:ml-5 transition-al duration-300"></i> </a>
                        <a href="#contact"
                            class="border border-white group text-white px-6 py-3 rounded-full font-regular hover:bg-white hover:text-emerald-600 transition-colors text-center">
                            Partner With Us <i class="bi bi-chevron-right ml-3 group-hover:ml-5 transition-al duration-300"></i> </a>
                    </div>
                </div>
                <!-- <div class="floating">
                    <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/30">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="text-3xl mb-2">🌱</div>
                                <div class="text-emerald-200 font-semibold">Founded</div>
                                <div class="text-white text-xl">2020</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl mb-2">📍</div>
                                <div class="text-emerald-200 font-semibold">HQ</div>
                                <div class="text-white text-sm">Dar es Salaam</div>
                            </div>
                            <div class="text-center col-span-2">
                                <div class="text-3xl mb-2">🌍</div>
                                <div class="text-emerald-200 font-semibold">Serving</div>
                                <div class="text-white text-lg">Sub-Saharan Africa</div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">About FARM2B</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto"> A dynamic agribusiness company revolutionizing agriculture in
                    Sub-Saharan Africa through inclusive growth and innovation. </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <div class="card-hover cursor-pointer bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 text-center border border-emerald-100">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed"> To be Africa's leading inclusive agribusiness catalyst, transforming
                        agriculture into a modern, equitable, and prosperous sector. </p>
                </div>
                <div class="card-hover cursor-pointer bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 text-center border border-blue-100">
                    <div class="text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed"> To industrialize agriculture by including smallholder farmers in ownership,
                        delivering end-to-end agribusiness solutions. </p>
                </div>
                <div class="card-hover cursor-pointer bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 text-center border border-purple-100">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Our Approach</h3>
                    <p class="text-gray-600 leading-relaxed"> Unique equity-sharing model including smallholder farmers, local councils, and
                        private founders for shared prosperity. </p>
                </div>
            </div>
            <!-- Equity Structure -->
            <div class="bg-gray-50 rounded-3xl p-8 lg:p-12">
                <h3 class="text-3xl font-bold text-center mb-8 text-gray-900">Inclusive Ownership Structure</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div
                            class="bg-emerald-500 text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            35%</div>
                        <h4 class="font-semibold text-gray-900">Smallholder Farmers</h4>
                        <p class="text-sm text-gray-600 mt-2">Empowering local communities</p>
                    </div>
                    <div class="text-center">
                        <div
                            class="bg-blue-500 text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            5%</div>
                        <h4 class="font-semibold text-gray-900">Municipal Councils</h4>
                        <p class="text-sm text-gray-600 mt-2">Local government partnership</p>
                    </div>
                    <div class="text-center">
                        <div
                            class="bg-purple-500 text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            40%</div>
                        <h4 class="font-semibold text-gray-900">Co-Founders</h4>
                        <p class="text-sm text-gray-600 mt-2">Mahmoud & Ibrahim</p>
                    </div>
                    <div class="text-center">
                        <div
                            class="bg-orange-500 text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            20%</div>
                        <h4 class="font-semibold text-gray-900">Strategic Partners</h4>
                        <p class="text-sm text-gray-600 mt-2">Future collaborations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">What We Do</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto"> Comprehensive agricultural solutions from farm to market, empowering
                    communities and driving sustainable growth. </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                    <div class="text-4xl mb-4">🏭</div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Inclusive Industrialization</h3>
                    <p class="text-gray-600 mb-4">Empowering farmers and communities through ownership and shared prosperity.</p>
                    <div class="text-emerald-600 font-medium">Learn More →</div>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                    <div class="text-4xl mb-4">🛒</div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Agricultural Trading</h3>
                    <p class="text-gray-600 mb-4">High-impact agricultural products and technologies at affordable rates.</p>
                    <div class="text-emerald-600 font-medium">Learn More →</div>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                    <div class="text-4xl mb-4">📦</div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Produce Off-taking</h3>
                    <p class="text-gray-600 mb-4">Guaranteed markets through strategic agreements, reducing post-harvest losses.</p>
                    <div class="text-emerald-600 font-medium">Learn More →</div>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                    <div class="text-4xl mb-4">🌾</div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Agricultural Inputs</h3>
                    <p class="text-gray-600 mb-4">From fertilizers to machinery, building sustainable value chains across borders.</p>
                    <div class="text-emerald-600 font-medium">Learn More →</div>
                </div>
            </div>
            <!-- Impact Goals -->
            <div class="mt-16 bg-white rounded-3xl p-8 lg:p-12 shadow-sm">
                <h3 class="text-3xl font-bold text-center mb-8 text-gray-900">Our Impact Goals</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl mb-4">🌾</div>
                        <h4 class="font-semibold text-gray-900 mb-2">Rural Employment</h4>
                        <p class="text-sm text-gray-600">Increase employment via agri-industrial hubs</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">📈</div>
                        <h4 class="font-semibold text-gray-900 mb-2">Farmer Income</h4>
                        <p class="text-sm text-gray-600">Boost smallholder farmer yields and incomes</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🥘</div>
                        <h4 class="font-semibold text-gray-900 mb-2">Food Security</h4>
                        <p class="text-sm text-gray-600">Strengthen security through regional value chains</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🌿</div>
                        <h4 class="font-semibold text-gray-900 mb-2">Climate-Smart</h4>
                        <p class="text-sm text-gray-600">Promote resilient farming practices</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section -->
    <section id="team" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Leadership</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto"> With wealth of experience in agribusiness development, supply chain
                    strategy, and inclusive growth. </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-4xl mx-auto">
                <div class="card-hover text-center bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 border border-emerald-100">
                    <div
                        class="w-32 h-32 bg-gradient-to-br from-emerald-400 to-teal-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-white text-3xl font-bold">MS</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Mahmoud Shoo</h3>
                    <p class="text-emerald-600 font-semibold mb-4">Founder & CEO</p>
                    <p class="text-gray-600 leading-relaxed"> Leading the vision of inclusive agricultural transformation with extensive
                        experience in agribusiness development and strategic growth. </p>
                </div>
                <div class="card-hover text-center bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100">
                    <div
                        class="w-32 h-32 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-white text-3xl font-bold">IM</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Ibrahim Msuya</h3>
                    <p class="text-blue-600 font-semibold mb-4">Co-Founder & CCO</p>
                    <p class="text-gray-600 leading-relaxed"> Driving commercial operations and partnerships with deep expertise in supply
                        chain strategy and inclusive business models. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto"> Ready to partner with us or learn more about our agricultural
                    transformation initiatives? </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-emerald-100 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Address</h4>
                                <p class="text-gray-600">SENGA ROAD MIKOCHENI<br>DAR ES SALAAM, TANZANIA</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-emerald-100 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <p class="text-gray-600">info@farm2b.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-emerald-100 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Phone</h4>
                                <p class="text-gray-600">+255 XXX XXX XXX</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <select
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                <option>Partnership Opportunity</option>
                                <option>Investment Inquiry</option>
                                <option>General Information</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-[#EF9829] text-white py-3 px-6 rounded-lg hover:bg-emerald-700 transition-colors font-semibold">
                            Send Message </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-[#197040] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="logo mb-3">
                        <img src="{{ asset('img/logo-white.svg') }}" width="200" alt="Logo">
                    </div>
                    <p class="text-white mb-4 max-w-md"> Empowering Africa's agriculture through inclusion and innovation. Building a
                        more equitable and prosperous agricultural sector across Sub-Saharan Africa. </p>
                    <div class="flex gap-x-4 text-lg">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-white transition-colors">Our Services</a></li>
                        <li><a href="#team" class="text-gray-300 hover:text-white transition-colors">Leadership</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><span class="text-gray-300">Inclusive Industrialization</span></li>
                        <li><span class="text-gray-300">Agricultural Trading</span></li>
                        <li><span class="text-gray-300">Produce Off-taking</span></li>
                        <li><span class="text-gray-300">Agricultural Inputs</span></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-100 mt-8 pt-8 text-center">
                <p class="text-gray-300"> &copy; 2024 FARM2B Limited. All rights reserved. | <a href="#"
                        class="hover:text-white transition-colors">Privacy Policy</a> | <a href="#"
                        class="hover:text-white transition-colors">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button -->
    <button id="scrollToTop"
        class="fixed bottom-8 right-8 bg-emerald-600 text-white p-3 rounded-full shadow-lg hover:bg-emerald-700 transition-colors opacity-0 invisible">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>
    