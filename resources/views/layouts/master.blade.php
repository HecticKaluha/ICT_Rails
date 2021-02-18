<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .bg-black-alt {
                background: #131313;
            }

            .text-black-alt {
                color: #131313;
            }

            .border-black-alt {
                border-color: #131313;
            }

            /*.bg-gray-900 {*/
            /*    background-color: #2f2f2f;*/
            /*}*/
        </style>
        <script src="https://kit.fontawesome.com/c33e61f09c.js" crossorigin="anonymous"></script>
        @stack('styles')
        @stack('scripts')
    </head>
    <body class="bg-black-alt font-sans leading-normal tracking-normal">
        @include('layouts.menu')
        <div class="container w-full mx-auto pt-20">
            <div class="w-full md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
                <div class="flex flex-row flex-wrap flex-grow mt-2">
                    <div class="w-full md:p-3">
                        @yield('content')
                    </div>
                </div>
                <!--/ Console Content-->
            </div>
        </div>
        @include('layouts.footer')
        <script>


            /*Toggle dropdown list*/
            /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

            var userMenuDiv = document.getElementById("userMenu");
            var userMenu = document.getElementById("userButton");

            var navMenuDiv = document.getElementById("nav-content");
            var navMenu = document.getElementById("nav-toggle");

            document.onclick = check;

            function check(e) {
                var target = (e && e.target) || (event && event.srcElement);

                //User Menu
                if (!checkParent(target, userMenuDiv)) {
                    // click NOT on the menu
                    if (checkParent(target, userMenu)) {
                        // click on the link
                        if (userMenuDiv.classList.contains("invisible")) {
                            userMenuDiv.classList.remove("invisible");
                        } else {
                            userMenuDiv.classList.add("invisible");
                        }
                    } else {
                        // click both outside link and outside menu, hide menu
                        userMenuDiv.classList.add("invisible");
                    }
                }

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
