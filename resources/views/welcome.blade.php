<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        الجابر الخليجية
    </title>
    <meta name="description" content="الجابر الخليجية" />
    <meta name="keywords" content="الجابر الخليجية" />
    <meta name="author" content="الجابر الخليجية" />
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" /> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        *{
            font-family: 'Cairo', sans-serif;
            scroll-behavior: smooth;
        }
        .gradient {
            background: linear-gradient(90deg, #2882c360 0%, #2882c3 100%);
            /* background: linear-gradient(90deg, #d53369 0%, #daae51 100%); */
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    @include('includes.nav')
    @include('includes.hero')
    @include('includes.about')
    @include('includes.vision')
    @include('includes.sections')
    @include('includes.clients')
    @include('includes.contact')

    {{-- <section class="container mx-auto text-center py-6 mb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
            Call to Action
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <h3 class="my-4 text-3xl leading-tight">
            Main Hero Message to sell yourself!
        </h3>
        <button
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Action!
        </button>
    </section> --}}
    <!--Footer-->
    {{-- <footer class="bg-white">
        <div class="container mx-auto px-8">
            <div class="w-full flex flex-col md:flex-row py-6">
                <div class="flex-1 mb-6 text-black">
                    <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                        href="#">
                        <!--Icon from: http://www.potlabicons.com/ -->
                        <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512.005 512.005">
                            <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502"
                                transform="matrix(1,0,0,1,0,0)" />
                            <path class="plane-take-off"
                                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                        </svg>
                        LANDING
                    </a>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Links</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Social</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Company</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official
                                Blog</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">Background vector
            created by freepik - www.freepik.com</a>
    </footer> --}}
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
        // var scrollpos = window.scrollY;
        // var header = document.getElementById("header");
        // var navcontent = document.getElementById("nav-content");
        // var navaction = document.getElementById("navAction");
        // var brandname = document.getElementById("brandname");
        // var toToggle = document.querySelectorAll(".toggleColour");

        // document.addEventListener("scroll", function() {
        //     /*Apply classes for slide in bar*/
        //     scrollpos = window.scrollY;

        //     if (scrollpos > 10) {
        //         header.classList.add("bg-white");
        //         navaction.classList.remove("bg-white");
        //         navaction.classList.add("gradient");
        //         navaction.classList.remove("text-gray-800");
        //         navaction.classList.add("text-white");
        //         //Use to switch toggleColour colours
        //         for (var i = 0; i < toToggle.length; i++) {
        //             toToggle[i].classList.add("text-gray-800");
        //             toToggle[i].classList.remove("text-white");
        //         }
        //         header.classList.add("shadow");
        //         navcontent.classList.remove("bg-gray-100");
        //         navcontent.classList.add("bg-white");
        //     } else {
        //         header.classList.remove("bg-white");
        //         navaction.classList.remove("gradient");
        //         navaction.classList.add("bg-white");
        //         navaction.classList.remove("text-white");
        //         navaction.classList.add("text-gray-800");
        //         //Use to switch toggleColour colours
        //         for (var i = 0; i < toToggle.length; i++) {
        //             toToggle[i].classList.add("text-white");
        //             toToggle[i].classList.remove("text-gray-800");
        //         }

        //         header.classList.remove("shadow");
        //         navcontent.classList.remove("bg-white");
        //         navcontent.classList.add("bg-gray-100");
        //     }
        // });
    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
</body>

</html>
