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

    <section class="relative">
        <div class="w-[90%] md:w-[80%] bg-white border border-emerald-800 mx-auto mt-[-50px] z-10">
            <form action="" method="post">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 py-6 px-2 gap-6">
                    <div class="flex items-center pr-3 py-3  bg-slate-200 rounded">
                        <div class="w-[30px] text-center">
                            <i class="fa-solid fa-server text-slate-600"></i>
                        </div>
                        <div class="grow">
                            <input type="text" class="w-full text-slate-700 bg-transparent px-1 py-1 focus:outline-none" placeholder="search your keyword">
                        </div>
                    </div>
                    <div class="flex items-center pr-3 py-3  bg-slate-200 rounded">
                        <div class="w-[30px] text-center">
                            <i class="fa-solid fa-location-dot text-slate-600"></i>
                        </div>
                        <div class="grow">
                            <input type="text" class="w-full text-slate-700 bg-transparent px-1 py-1 focus:outline-none" placeholder="search your keyword">
                        </div>
                    </div>
                    <div class="flex items-center pr-3 py-3  bg-slate-200 rounded">
                        <div class="w-[30px] text-center">
                            <i class="fa-solid fa-server text-slate-600"></i>
                        </div>
                        <div class="grow">
                            <select name="" id="">
                                <option value="">
                                    
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center pr-3 gap-x-3">
                        <button class="bg-emerald-700 w-full h-[100%] text-white rounded">
                            Apply
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>



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