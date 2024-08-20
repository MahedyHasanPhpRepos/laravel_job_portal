<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>

<body class="global_font">
    <header class="md:absolute bg-green-200 w-full z-10 bg-white md:bg-transparent">
        <div class="md:text-white md:bg-transparent w-[90%] mx-auto flex justify-between py-2 px-5">
            <div class="min-[100px] text-xl">
                Laravel
            </div>
            <!-- <div class=""> -->
            <ul id='menu' class="z-10  duration-200 md:bg-transparent flex items-center justify-end absolute  flex-col  top-[-100%] z-100 bg-white  w-[80%] space-y-3 py-5 md:top-0  md:relative md:space-x-5 md:flex-row md:right-0 md:py-0 md:space-y-0 md:p-0 md:bg-tranparent md:grow">
                <li class="menu_hover">
                    <a href="#">Home</a>
                </li>
                <li class="menu_hover">
                    <a href="#">About</a>
                </li>
                <li class="menu_hover">
                    <a href="#">Pricing</a>
                </li>
                <li class="menu_hover">
                    <a href="#">Blog</a>
                </li>
                <li class="menu_hover">
                    <a href="#">Contact</a>
                </li>
            </ul>
            <div class="md:hidden hover:cursor-pointer">
                <ion-icon id='menuToggle' name="apps-outline"></ion-icon>
            </div>
            <!-- </div> -->
        </div>
    </header>

    <section class="relative w-full h-[300px] bg-top bg-no-repeat bg-cover" style="background-image: url('{{asset('assets/images/hero.jpg')}}')">
        <div class="absolute inset-0 bg-emerald-900/90"></div>
        <div class="z-9 text-4xl text-white absolute w-full h-full flex items-center justify-center">
            Job Vacancies
        </div>
    </section>


    {{ $slot }}


    <footer class="relative bg-slate-900 dark:bg-slate-800">
        <div class="w-[90%] mt-10 mx-auto">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="relative py-12">
                        <!-- Subscribe -->
                        <div class="relative w-full">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="md:col-span-3">
                                    <a href="#" class="flex justify-center md:justify-start focus:outline-none text-3xl text-white">
                                        <!-- <img src="assets/images/logo-light.png" class="" alt=""> -->
                                        Laravel
                                    </a>
                                </div><!--end col-->

                                <div class="md:col-span-9">
                                    <ul class="list-disc footer-list md:text-end text-center space-x-3">
                                        <li class="inline-block"><a href="index.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Home</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="services.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">About</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Pricing</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="aboutus.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Blog</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="contact.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Contact</a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                        <!-- Subscribe -->
                    </div>
                </div>
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
                <div class="container text-center">
                    <div class="grid md:grid-cols-2 items-center gap-6">
                        <div class="md:text-start text-center">
                            <p class="mb-0 text-gray-300 font-medium"> <script>
                                    document.write(new Date().getFullYear())
                                </script>2024 Laravel. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="" target="_blank" class="text-reset">Mhdy Hasan</a>.</p>
                        </div>

                        <ul class="list-none md:text-end text-center space-x-0.5">
                            <li class="inline"><a href="" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                            <li class="inline"><a href="" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                            <li class="inline"><a href="" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-behance" title="Behance"></i></a></li>
                            <li class="inline"><a href="" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                            <li class="inline"><a href="" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="inline"><a href="" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="inline"><a href="" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                            <li class="inline"><a href="" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </div>

    </footer>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        menuToggle.addEventListener('click', () => {
            const menu = document.getElementById('menu');

            menu.classList.toggle('top-[20%]')
        });
    </script>

</body>

</html>