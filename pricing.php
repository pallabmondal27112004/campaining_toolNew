<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    include("headlink.php")
    ?>

    <title>Document</title>
</head>

<body>
    <?php
    include("nevbar.php")
    ?>
    <main class="flex-1 flex flex-col items-center justify-center py-12 px-4 bg-white">
        <div class="max-w-3xl mx-auto text-center mb-8">
            <p
                data-aos="zoom-out"
                data-aos-anchor="#example-anchor"
                data-aos-offset="500"
                data-aos-duration="1000"
                class="text-emerald-700 font-semibold tracking-widest mb-2">PRICING</p>
            <h2
                data-aos="zoom-out"
                data-aos-anchor="#example-anchor"
                data-aos-offset="500"
                data-aos-duration="1000"
                class="text-4xl font-extrabold text-gray-900 mb-4">Our pricing plans</h2>
            <p
                data-aos="zoom-out"
                data-aos-anchor="#example-anchor"
                data-aos-offset="500"
                data-aos-duration="1000"
                class="text-gray-500 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit dolor posuere vel venenatis eu sit massa volutpat.</p>
            <div class="flex flex-col items-center">
                <span
                    data-aos="zoom-out"
                    data-aos-anchor="#example-anchor"
                    data-aos-offset="500"
                    data-aos-duration="1000"
                    class="mb-2 text-gray-700">Choose your currency</span>
                <div
                    data-aos="zoom-out"
                    data-aos-anchor="#example-anchor"
                    data-aos-offset="500"
                    data-aos-duration="1000"
                    class="relative inline-block text-left">
                    <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none">
                        <span class="flex items-center gap-2">
                            <img src="https://hatscripts.github.io/circle-flags/flags/us.svg" alt="USD" class="w-5 h-5"> USD
                        </span>
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="origin-top-right absolute right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10 hidden group-hover:block">
                        <div class="py-1">
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><img src="https://hatscripts.github.io/circle-flags/flags/us.svg" class="w-5 h-5 mr-2"> USD</a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><img src="https://hatscripts.github.io/circle-flags/flags/eu.svg" class="w-5 h-5 mr-2"> EUR</a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><img src="https://hatscripts.github.io/circle-flags/flags/gb.svg" class="w-5 h-5 mr-2"> GBP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Basic Plan -->
            <div 
             data-aos="fade-left"
           data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
            class="bg-white rounded-2xl shadow p-8 flex flex-col items-center border border-gray-100">
                <div class=" flex justify-center items-center gap-5">
                    <div class="w-15 h-10 rounded-full bg-[#075E54] flex items-center justify-center mb-4">
                        <span class="block w-6 h-6 bg-[conic-gradient(at_top_left,_var(--tw-gradient-stops))] #075E54 #075E54 #075E54 rounded-full"></span>
                        <img src="image/Ellipse 439 (1).svg" alt="" class="">
                    </div>
                    <div class="text-left w-full mb-2">
                        <p class="text-gray-500 text-sm">For individuals</p>
                        <h3 class="text-xl font-bold text-gray-900">Basic</h3>
                    </div>
                </div>
                <p class="text-gray-500 mb-4 text-left w-full">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipisicing elit.</p>
                <div class="flex items-end mb-2 w-full">
                    <span class="text-3xl font-extrabold text-gray-900"><i class="ri-money-rupee-circle-line"></i>99</span>
                    <span class="text-gray-500 ml-1">/monthly</span>
                </div>
                <div class="text-left w-full mb-4">
                    <p class="font-semibold mb-2">What's included</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 bg-emerald-800 rounded-full text-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>All analytics features</li>
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 bg-emerald-800 rounded-full text-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>Up to 250,000 tracked visits</li>
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 bg-emerald-800 rounded-full text-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>Normal support</li>
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 bg-emerald-800 rounded-full text-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>Up to 3 team members</li>
                    </ul>
                </div>
                <button class="mt-auto w-full bg-emerald-700 text-white py-3 rounded-xl font-semibold hover:bg-emerald-800 transition">Get started</button>
            </div>
            <!-- Pro Plan -->
            <div 
             data-aos="zoom-out"
           data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
            class="bg-emerald-800 rounded-2xl shadow p-8 flex flex-col items-center text-white relative border-4 border-emerald-700">
                <div class="flex justify-start items-start w-[100%] gap-3.5">
                    <div class="rounded-[.8rem] bg-white flex items-center justify-center mb-4 p-2">
                        <img src="image/Group 39520.svg" alt="" class=" w-[2.5rem]">
                    </div>
                    <div class="text-left w-full mb-2">
                        <p class="text-emerald-200 text-sm">For startups</p>
                        <h3 class="text-xl font-bold text-white">Pro</h3>
                        <span class="absolute top-6 right-6 bg-emerald-600 text-xs px-3 py-1 rounded-full font-semibold">Popular</span>
                    </div>
                </div>
                <p class="text-emerald-100 mb-4 text-left w-full">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipisicing elit.</p>
                <div class="flex items-end mb-2 w-full">
                    <span class="text-3xl font-extrabold text-white"><i class="ri-money-rupee-circle-line"></i>199</span>
                    <span class="text-emerald-100 ml-1">/monthly</span>
                </div>
                <div class="text-left w-full mb-4">
                    <p class="font-semibold mb-2">What's included</p>
                    <ul class="space-y-2">
                        <li class="flex items-center"><svg class="w-5 h-5 text-emerald-800 rounded-full bg-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>All analytics features</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-emerald-800 rounded-full bg-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>Up to 1,000,000 tracked visits</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-emerald-800 rounded-full bg-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>Premium support</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-emerald-800 rounded-full bg-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>Up to 10 team members</li>
                    </ul>
                </div>
                <button class="mt-auto w-full bg-white text-emerald-800 py-3 rounded-xl font-semibold hover:bg-emerald-100 transition">Get started</button>
            </div>
            <!-- Enterprise Plan -->
            <div 
             data-aos="fade-right"
           data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
            class="bg-white rounded-2xl shadow p-8 flex flex-col items-center border border-gray-100">
                <div class="flex justify-start align-start w-[100%] gap-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center mb-4">
                        <img src="image/Group 39506.svg" alt="">
                    </div>
                    <div class="text-left w-full mb-2">
                        <p class="text-gray-500 text-sm">For big companies</p>
                        <h3 class="text-xl font-bold text-gray-900">Enterprise</h3>
                    </div>
                </div>
                <p class="text-gray-500 mb-4 text-left w-full">Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipisicing elit.</p>
                <div class="flex items-end mb-2 w-full">
                    <span class="text-3xl font-extrabold text-gray-900"><i class="ri-money-rupee-circle-line"></i>399</span>
                    <span class="text-gray-500 ml-1">/monthly</span>
                </div>
                <div class="text-left w-full mb-4">
                    <p class="font-semibold mb-2">What's included</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 bg-emerald-800 rounded-full text-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>All analytics features</li>
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 bg-emerald-800 rounded-full text-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>Up to 5,000,000 tracked visits</li>
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 bg-emerald-800 rounded-full text-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>Dedicated support</li>
                        <li class="flex items-center text-gray-700"><svg class="w-5 h-5 bg-emerald-800 rounded-full text-emerald-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>Up to 50 team members</li>
                    </ul>
                </div>
                <button class="mt-auto w-full bg-emerald-700 text-white py-3 rounded-xl font-semibold hover:bg-emerald-800 transition">Get started</button>
            </div>
        </div>
    </main>
    <?php
    include("footer.php")
    ?>

</body>

</html>