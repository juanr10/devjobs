<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    @yield('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="leading-normal tracking-normal gradient bg-gray-200" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{ url('/') }}">
            <!--Icon from: http://www.potlabicons.com/ -->
            <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
              <path
                class="plane-take-off"
                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
              />
            </svg>
            {{ config('app.name', 'Laravel') }}
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-white hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>devJobs</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-gray-700 lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul id="navElement" class="list-reset lg:flex justify-end flex-1 items-center text-white">
            @guest
                <li class="mr-3">
                    <a class="inline-block no-underline hover:text-gray-400 hover:text-underline py-2 px-4" href="{{ route('login') }}">Contacto</a>
                </li>
                @if (Route::has('register'))
                <li class="mr-3">
                    <a class="inline-block no-underline hover:text-gray-400 hover:text-underline py-2 px-4 mb-3 lg:mb-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
            @else
                <li class="mr-3">
                    <a class="inline-block no-underline hover:text-gray-400 hover:text-underline py-2 px-4" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
                <li class="mr-3">
                    <span class="inline-block no-underline hover:text-gray-400 hover:text-underline py-2 px-4"> {{ Auth::user()->name }} <a href={{ route('notifications') }} class="bg-teal-500 rounded-full px-1 mr-2 font-semibold text-sm text-white">{{ Auth::user()->unreadNotifications->count() }}</a> </span>
                </li>
                <li>
                    <form class="inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-1 " id="logout-form" action="{{ route('logout') }}" method="POST" class="display:none">
                        @csrf
                    </form>
                </li>
            </ul>
            @endguest
          <a
            id="navAction"
            class="mx-auto no-underline lg:mx-0 bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-2 px-6 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            href="{{ auth()->check() ? route('vacants.index') : route('login') }}"
            >
            {{ auth()->check() ? 'Mis vacantes' : __('Login') }}
          </a>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    <div id="app">
        <div style="padding-top: 4.5rem;" class="bg-gray-700">
            <nav class="container mx-auto flex flex-col text-center md:flex-row space-x-1">
                @yield('navigation')
            </nav>
        </div>

        <main class="mt-10 container mx-auto py-4">
            @yield('content')
        </main>
    </div>

    @yield('scripts')

    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navelement = document.getElementById("navElement");
      var navaction = document.getElementById("navAction");
      var navToggle = document.getElementById("nav-toggle");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("bg-black");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          navElement.classList.remove("text-white");
          navElement.classList.add("text-black");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-700");
          navcontent.classList.add("bg-white");
          navToggle.classList.remove("text-white");
          navToggle.classList.add("text-black");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("bg-black");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          navElement.classList.remove("text-black");
          navElement.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }
          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-700");
          navToggle.classList.remove("text-black");
          navToggle.classList.add("text-white");
        }
      });
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
