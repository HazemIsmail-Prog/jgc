<!--Nav-->
<nav id="header" class="fixed w-full z-30 top-0 bg-white text-white shadow-lg">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="ps-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                href="#">
                <img src="{{ asset('images/logo.png') }}" class="w-26 h-20" alt="">
            </a>
        </div>
        <div class="block lg:hidden pe-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-primary hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-black no-underline hover:text-primary hover:text-underline" href="#">{{ __('messages.home') }}</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-primary hover:text-underline py-2 px-4"
                        href="#about">{{ __('messages.about') }}</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-primary hover:text-underline py-2 px-4"
                        href="#vision">{{ __('messages.vision') }}</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-primary hover:text-underline py-2 px-4"
                        href="#sections">{{ __('messages.sections') }}</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-primary hover:text-underline py-2 px-4"
                        href="#clients">{{ __('messages.clients') }}</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-primary hover:text-underline py-2 px-4"
                        href="#contact">{{ __('messages.contact_us') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
