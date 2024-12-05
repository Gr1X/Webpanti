<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="overflow-x-hidden">
    <nav class="fixed top-0 z-50 w-full bg-slate-800 shadow-lg">
        <div class="flex justify-between items-center bg-slate-800">
            <!-- Navigation Menu -->
            <ul class="flex mx-4">
                <!-- Home -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="home" class="group-hover:scale-105 group-hover:size-5 size-5 my-1 duration-300"></ion-icon>
                        <p class="font-semibold text-sm">Home</p>
                    </a>
                </li>
            
                <!-- Donation -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="heart" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>
                        <p class="font-semibold text-sm">Donation</p>
                    </a>
                </li>
            
                <!-- Story -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="film" class="group-hover:scale-105 size-5 my-1 duration-300"></ion-icon>                    
                        <p class="font-semibold text-sm">Story</p>
                    </a>
                </li>
            
                <!-- Program -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-6 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="flag" class="group-hover:scale-105 size-5 my-1 duration-500"></ion-icon>                        
                        <p class="font-semibold text-sm">Program</p>
                    </a>
                </li>
            
                <!-- About Us -->
                <li class="text-center group relative flex-shrink-0 px-2 py-2 my-2 hover:scale-105 duration-300">
                    <span class="absolute inset-x-0 top-0 h-0.5 group-hover:bg-indigo-600 w-8 left-1/2 transform -translate-x-1/2"></span>
                    <a href="" class="inline-block flex flex-col items-center group-hover:bg-slate-400 px-4 py-0.5 rounded-xl group-hover:shadow-xl text-slate-100 active:scale-95 duration-300">
                        <ion-icon name="people" class="group-hover:scale-105 size-5 my-1 duration-500"></ion-icon>                  
                        <p class="font-semibold text-sm">About Us</p>
                    </a>
                </li>
            </ul>
            

            <!-- Get Started Button -->
            <div class="mx-4 relative group"> 
                <button class="relative inline-block p-px font-semibold leading-6 text-white bg-gray-800 shadow-2xl cursor-pointer rounded-xl shadow-zinc-900 transition-transform duration-300 ease-in-out hover:scale-105 active:scale-95">
                    <span class="absolute inset-0 rounded-xl bg-gradient-to-r from-slate-100 via-slate-500 to-slate-900 p-[2px] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    </span>

                    <span class="relative z-10 block px-6 py-3 rounded-xl bg-gray-500">
                        <div class="relative z-10 flex items-center space-x-2">
                            <span class="transition-all duration-500 group-hover:translate-x-5 text-slate-100">Get started</span>
                            <svg class="w-6 h-6 transition-transform duration-500 group-hover:translate-x-3 group-hover" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" fill-rule="evenodd"></path>
                            </svg>
                        </div>
                    </span>
                </button>
            </div>   
        </div>

        <header class="bg-slate-100 drop-shadow-xl w-full">
            <div class="mx-2 max-w-7xl px-2 py-4 sm:px-6 lg:px-4">
                <h1 class="lg:text-2xl md:text-lg font-bold tracking-tight text-gray-900">Yayasan Nurul Jadid</h1>
            </div>
        </header>
    </nav>

    <main class="">
        <div class="bg-slate-500 py-32">
            <div class="flex justify-between">
                <div class="self-center ms-10 w-full mt-20 z-10">
                    <div class="items-center mb-12 h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-30 border border-gray-100 p-4 shadow-lg">
                        <p class="text-slate-100 text-sm">Profil</p>
                        <h1 class="text-slate-100 text-3xl font-semibold mb-4">Yayasan Nurul Jadid</h1>
                        <hr class="my-2"/>
                        <p>Nama panti Lorem ipsum dolor sit amet, consectetur adipiscing elit. At et posuere est non vitae enim, sed consectetur. Nullam interdum feugiat nibh lectus viverra sollicitudin.</p>
                    </div>

                    <div class="items-center mb-12 h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 p-4 shadow-lg">
                        <p class="text-slate-100 text-sm">Profil</p>
                        <h1 class="text-slate-100 text-3xl font-semibold mb-4">Visi & Misi</h1>
                        <hr class="my-2"/>
                        <p>Nama panti Lorem ipsum dolor sit amet, consectetur adipiscing elit. At et posuere est non vitae enim, sed consectetur. Nullam interdum feugiat nibh lectus viverra sollicitudin.</p>
                    </div>
                </div>
    
                <div class="py-8 mx-56 gap-2 flex justify-center ">
                    <div class="absolute self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 translate-x-[-400px] translate-y-[-250px] shadow-4xl rotate-[-10deg] drop-shadow-2xl">
                        <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100"></div>
                    </div>

                    <div class="absolute self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 translate-x-[-225px] translate-y-12 z-20 shadow-4xl rotate-[4deg] shadow-2xl">
                        <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100"></div>
                    </div>
                    
                    <div class="self-end w-[26rem] h-[28rem] bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl z-10 rotate-[-2deg]">
                        <div class="duration-500 contrast-50 h-80 bg-black hover:contrast-100"></div>
                    </div>
    
                    <div class="absolute self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl translate-x-[200px] translate-y-16 z-10 shadow-2xl rotate-[-5deg] z-20">
                        <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100"></div>
                    </div> 

                    <div class="absolute self-end w-72 h-72 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl translate-x-[-300px] translate-y-[-200px] shadow-2xl rotate-[5deg]">
                        <div class="duration-500 contrast-50 h-52 bg-black hover:contrast-100"></div>
                    </div> 

                    <div class="absolute self-center w-56 h-56 bg-gray-50 p-3 flex flex-col gap-1 shadow-2xl translate-x-[325px] translate-y-[225px] shadow-4xl rotate-[6deg] shadow-2xl z-10">
                        <div class="duration-500 contrast-50 h-36 bg-black hover:contrast-100"></div>
                    </div>
                </div>    
            </div> 

            <div class="">
                <div class="grid grid-cols-2 gap-10 px-10">
                    <div class="items-center h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-gray-100 p-4 shadow-lg">
                        <p class="text-slate-100 text-sm">Siapa Kami?</p>
                        <h1 class="text-slate-100 text-3xl font-semibold mb-4">Yayasan Nurul Jadid</h1>
                        <hr class="my-2" />
                        <p>Nama panti Lorem ipsum dolor sit amet, consectetur adipiscing elit. At et posuere est non vitae enim, sed consectetur. Nullam interdum feugiat nibh lectus viverra sollicitudin.</p>
                    </div>
    
                    <div class="items-center h-full w-full bg-gray-400 rounded-xl bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-gray-100 p-4 shadow-lg">
                        <p class="text-slate-100 text-sm">Siapa Kami?</p>
                        <h1 class="text-slate-100 text-3xl font-semibold mb-4">Yayasan Nurul Jadid</h1>
                        <hr class="my-2"/>
                        <p>Nama panti Lorem ipsum dolor sit amet, consectetur adipiscing elit. At et posuere est non vitae enim, sed consectetur. Nullam interdum feugiat nibh lectus viverra sollicitudin.</p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="">
            <div class="relative bg-slate-800 text-white">
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img
                        src="your-image-path.jpg"
                        alt="Background"
                        class="w-full h-full object-cover opacity-50"
                    />
                </div>
            
                <!-- Content -->
                <div class="h-full w-full bg-gray-900 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-60 text-center z-10 text-slate-100">
                    <!-- Title Section -->
                    <h2 class="text-5xl font-bold text-white">Berita Panti</h2>
                </div>
            </div>

            <div id="gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96 my-8 mx-20">
                    <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            
            <div class="grid grid-cols-2 gap-6 py-8 px-6">
                <div class="relative flex flex-col md:flex-row w-full bg-white shadow-sm border border-slate-200 rounded-lg w-72">
                    <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                            alt="card-image"
                            class="h-full w-full rounded-md md:rounded-lg object-cover"
                        />
                    </div>
                    <div class="p-8">
                        <h4 class="mb-2 text-slate-800 text-xl font-semibold">
                        Lyft launching cross-platform service this week
                        </h4>
                        <p class="mb-8 text-slate-600 leading-normal font-light">
                            Like so many organizations these days, Autodesk is a company in
                            transition. It was until recently a traditional boxed software company
                            selling licenses. Yet its own business model disruption is only part
                            of the story
                        </p>
                        <div>
                            <a href="#" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                            </a>
                        </div>
                    </div>
                </div> 

                <div class="relative flex flex-col md:flex-row w-full bg-white shadow-sm border border-slate-200 rounded-lg w-72">
                    <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                            alt="card-image"
                            class="h-full w-full rounded-md md:rounded-lg object-cover"
                        />
                    </div>
                    <div class="p-6">
                        <h4 class="mb-2 text-slate-800 text-xl font-semibold">
                        Lyft launching cross-platform service this week
                        </h4>
                        <p class="mb-8 text-slate-600 leading-normal font-light">
                            Like so many organizations these days, Autodesk is a company in
                            transition. It was until recently a traditional boxed software company
                            selling licenses. Yet its own business model disruption is only part
                            of the story
                        </p>
                        <div>
                            <a href="#" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                            </a>
                        </div>
                    </div>
            </div>
        </div>

        <div class="">
            <hr/>

            <div class="flex justify-center">
                <div class="absolute font-semibold">
                    {{-- <h1 class="text-[10rem] text-center text-slate-500">Gallery</h1> --}}
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                </div>
            </div>
        </div>
        
    </main>

    <footer class="bg-white dark:bg-gray-900">
        <div class="w-full px-10 pt-4 pb-2">
            <div class="grid gap-8 pt-8">
                <div class="grid grid-cols-2">
                    <div class="">
                        <div class=""> 
                            <div class="flex justify-between">
                                <span class="text-sky-500 text-3xl font-bold">Yayasan <span class="m-0 p-0 text-3xl font-bold text-slate-100 dark:text-white">Nurul Jadid</span></span>
                            </div>
                            <div class="">
                                <p class="text-slate-100">lorem ipsum mamdnaidnao mandi mandi baka baka baka </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="">
                            <div class="mb-4">
                                <span class="m-0 p-0 text-3xl font-bold text-slate-100 dark:text-white"><span class="text-sky-800">Our </span>Sponsor.</span>
                            </div>

                            <div class="flex justify-start bg-shadow-lg gap-4">
                                <div class="rounded-lg gap-2 bg-slate-500 py-2 mb-4">
                                    <svg class="sm:w-20 w-auto h-24" viewBox="0 0 128 199" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.5187 89.5301H53.5977V80.4489H44.5187V89.5301ZM36.0247 74.5984H45.1068V65.5168H36.0247V74.5984ZM30.478 55.017H39.5555V45.9385H30.478V55.017ZM43.3546 62.3161H52.431V53.2358H43.3546V62.3161ZM61.497 52.3685H70.5786V43.2899H61.497V52.3685ZM48.0411 47.9855H57.1214V38.9044H48.0411V47.9855ZM42.1832 36.0003H51.2635V26.9201H42.1832V36.0003ZM59.1533 27.7879H68.2332V18.7158H59.1533V27.7879ZM16.1237 52.5675C16.1237 49.598 16.4024 46.7 16.9329 43.894H23.7542V34.8168H19.6111C21.125 31.1135 23.1068 27.6413 25.4743 24.4926V29.7499H34.5515V20.674H28.6747C37.2144 11.4892 49.4086 5.75439 62.9386 5.75439C88.7934 5.75439 109.748 26.7097 109.748 52.5675C109.748 78.4197 88.7934 99.3711 62.9386 99.3711C37.0895 99.3711 16.1237 78.4197 16.1237 52.5675Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.1237 133.336V118.226C16.1237 116.943 16.416 115.977 16.9997 115.335C17.5744 114.689 18.3364 114.371 19.2706 114.371C20.2624 114.371 21.0435 114.689 21.6203 115.335C22.1997 115.977 22.4921 116.943 22.4921 118.233V133.707C22.4921 135.463 22.6872 136.935 23.0771 138.113C23.4757 139.293 24.1718 140.208 25.1688 140.862C26.1702 141.508 27.5784 141.837 29.3835 141.837C31.8646 141.837 33.6211 141.173 34.6559 139.857C35.6794 138.527 36.1973 136.519 36.1973 133.831V118.233C36.1973 116.921 36.4874 115.957 37.0568 115.327C37.6233 114.689 38.3909 114.371 39.3476 114.371C40.3031 114.371 41.0759 114.689 41.6722 115.321C42.2651 115.957 42.5591 116.921 42.5591 118.233V133.347C42.5591 135.807 42.3224 137.861 41.8436 139.503C41.3669 141.145 40.4635 142.596 39.1347 143.841C37.9897 144.889 36.6626 145.661 35.1456 146.138C33.6324 146.619 31.8603 146.87 29.8258 146.87C27.4136 146.87 25.3362 146.604 23.5906 146.078C21.8476 145.557 20.4173 144.752 19.3196 143.663C18.2206 142.57 17.4174 141.159 16.8995 139.463C16.3865 137.747 16.1237 135.714 16.1237 133.336Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M59.5887 141.589L54.54 121.565V143.267C54.54 144.459 54.2772 145.369 53.745 145.963C53.2129 146.571 52.5042 146.87 51.6238 146.87C50.769 146.87 50.0768 146.571 49.5347 145.976C48.9974 145.381 48.7272 144.479 48.7272 143.267V118.402C48.7272 117.028 49.0798 116.103 49.801 115.621C50.5071 115.15 51.4664 114.907 52.6838 114.907H54.6476C55.8354 114.907 56.6907 115.023 57.228 115.233C57.7615 115.451 58.1527 115.836 58.419 116.389C58.6723 116.944 58.962 117.851 59.2963 119.11L63.8627 136.319L68.4222 119.11C68.7552 117.851 69.0437 116.944 69.3026 116.389C69.5563 115.836 69.9557 115.451 70.4905 115.233C71.0282 115.023 71.8844 114.907 73.0753 114.907H75.0421C76.256 114.907 77.2145 115.15 77.9327 115.621C78.6517 116.103 79.0065 117.028 79.0065 118.402V143.267C79.0065 144.462 78.735 145.369 78.1977 145.963C77.6725 146.571 76.9556 146.87 76.06 146.87C75.2199 146.87 74.5308 146.571 73.9956 145.963C73.447 145.369 73.188 144.459 73.188 143.267V121.565L68.1442 141.589C67.8098 142.89 67.5396 143.853 67.3362 144.452C67.1215 145.064 66.7386 145.614 66.186 146.113C65.63 146.618 64.8559 146.87 63.8627 146.87C63.125 146.87 62.4896 146.71 61.9701 146.38C61.4579 146.06 61.0606 145.656 60.7778 145.153C60.4881 144.646 60.2613 144.097 60.093 143.49C59.9274 142.881 59.7656 142.25 59.5887 141.589Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M93.4686 118.184L105.717 136.707V118.013C105.717 116.803 105.973 115.889 106.494 115.269C107.015 114.673 107.711 114.371 108.594 114.371C109.505 114.371 110.224 114.673 110.746 115.269C111.268 115.889 111.531 116.803 111.531 118.013V142.724C111.531 145.486 110.392 146.87 108.121 146.87C107.549 146.87 107.038 146.786 106.583 146.619C106.129 146.452 105.694 146.198 105.295 145.837C104.901 145.484 104.529 145.064 104.19 144.585C103.85 144.107 103.506 143.617 103.163 143.112L91.2194 124.822V143.223C91.2194 144.426 90.9341 145.329 90.3763 145.944C89.8238 146.56 89.1065 146.87 88.2321 146.87C87.3379 146.87 86.6053 146.547 86.0662 145.928C85.5176 145.317 85.2518 144.41 85.2518 143.223V118.977C85.2518 117.943 85.3628 117.139 85.5944 116.56C85.8672 115.917 86.3169 115.389 86.9506 114.977C87.5785 114.57 88.2542 114.371 88.9824 114.371C89.5605 114.371 90.0463 114.46 90.4548 114.645C90.8655 114.835 91.2194 115.084 91.5269 115.399C91.8331 115.711 92.1536 116.119 92.4711 116.613C92.7916 117.12 93.1255 117.641 93.4686 118.184Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.1237 155.963H17.2795V161.801C17.2795 162.393 17.4894 162.839 17.9105 163.146C18.3364 163.45 18.7988 163.602 19.3014 163.602C19.814 163.602 20.2807 163.45 20.7109 163.146C21.1403 162.847 21.3502 162.402 21.3502 161.801V155.963H22.5103V161.801C22.5103 162.645 22.1859 163.29 21.5315 163.752C20.8723 164.208 20.1541 164.44 19.3617 164.46H19.3309H19.2971C18.5385 164.46 17.8459 164.245 17.2097 163.823C16.5717 163.4 16.2087 162.729 16.1237 161.801V155.963Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M26.5263 155.963H27.8564L31.9354 162.605V155.963H32.9966V164.196H31.7515L27.5845 157.637V164.196H26.5263V155.963Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M37.0989 155.963H38.1598V164.197H37.0989V155.963Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M41.6623 155.963H42.8068L45.2065 162.872L47.5059 155.963H48.6686L45.7373 164.196H44.5759L41.6623 155.963Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M52.231 155.963H57.902V156.837H53.2962V159.508H57.7376V160.473H53.2962V163.222H58.0816V164.196H52.231V155.963Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M62.007 155.963H66.1865C66.7673 155.963 67.2586 156.151 67.6654 156.525C68.0653 156.898 68.3099 157.42 68.3962 158.082C68.3962 158.22 68.3836 158.365 68.3689 158.52C68.3563 158.676 68.3255 158.831 68.2796 158.988C68.2128 159.197 68.1 159.404 67.9426 159.602C67.7864 159.798 67.5553 159.974 67.243 160.124C67.6542 160.322 67.9213 160.592 68.0428 160.915C68.1538 161.248 68.2184 161.579 68.224 161.927V162V162.074V162.213V162.368C68.2184 162.687 68.2323 162.988 68.2639 163.273C68.2978 163.552 68.427 163.768 68.6651 163.93V164.196H67.3341C67.2795 164.049 67.243 163.898 67.217 163.735C67.1932 163.584 67.1693 163.419 67.1628 163.256C67.1585 163.18 67.1502 163.096 67.1502 163.016C67.1428 162.935 67.1428 162.853 67.1428 162.776V162.722V162.655C67.129 162.181 67.0734 161.744 66.9507 161.365C66.8393 160.98 66.4606 160.745 65.8257 160.651H63.0808V164.196H62.007V155.963ZM65.915 159.67C65.9398 159.683 65.9593 159.684 65.9857 159.684H66.0556C66.3964 159.684 66.6849 159.541 66.9186 159.256C67.1584 158.968 67.2795 158.65 67.2894 158.308V158.298V158.276V158.262V158.243C67.2795 157.937 67.1502 157.647 66.9047 157.385C66.6541 157.117 66.2321 156.966 65.647 156.927H63.0808V159.67H65.915Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M72.9496 161.54C72.9496 162.213 73.1725 162.701 73.6209 163.024C74.0611 163.345 74.5581 163.514 75.0998 163.535H75.1419H75.174C75.6723 163.535 76.1056 163.423 76.5119 163.205C76.9114 162.983 77.143 162.663 77.2028 162.257C77.2098 162.223 77.2154 162.192 77.2154 162.17V162.082C77.2154 161.555 76.9942 161.201 76.5605 161.018C76.1181 160.832 75.6112 160.691 75.0539 160.58C74.9845 160.558 74.9216 160.549 74.8661 160.534C74.8019 160.525 74.742 160.514 74.6809 160.495C74.0134 160.354 73.4136 160.128 72.862 159.818C72.3255 159.511 72.0817 158.903 72.1477 157.999C72.1906 157.42 72.4621 156.918 72.9496 156.495C73.4383 156.078 74.1431 155.865 75.0764 155.865C76.0062 155.865 76.75 156.078 77.3125 156.507C77.8685 156.935 78.1249 157.555 78.0828 158.343H77.0246V158.32V158.276V158.249V158.227C77.0246 157.758 76.8324 157.405 76.4339 157.151C76.037 156.908 75.6081 156.775 75.1376 156.758H75.1055H75.0764C74.6054 156.758 74.1904 156.872 73.8074 157.105C73.4301 157.332 73.231 157.683 73.2115 158.176C73.2688 158.573 73.4956 158.853 73.8898 159.019C74.281 159.178 74.742 159.314 75.2573 159.425C75.3544 159.453 75.4438 159.47 75.5374 159.488C75.6315 159.516 75.7335 159.538 75.831 159.56C76.4365 159.7 77.0051 159.92 77.522 160.207C78.0468 160.495 78.3543 161.003 78.4393 161.726C78.484 162.616 78.1665 163.29 77.4704 163.765C76.7847 164.23 76.0162 164.468 75.1831 164.485H75.1601H75.1419C74.3144 164.485 73.5611 164.245 72.8741 163.765C72.1837 163.29 71.8566 162.546 71.8757 161.54H72.9496Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M82.1877 155.963H83.2533V164.197H82.1877V155.963Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M89.41 156.837H86.6608V155.963H93.1385V156.837H90.5619V164.196H89.41V156.837Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M97.9539 155.963H99.281L102.287 164.196H101.052L100.161 161.801H97.0583L96.2603 164.196H95.0264L97.9539 155.963ZM99.8131 160.829L98.663 157.375L97.3172 160.829H99.8131Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M106.224 161.54C106.224 162.213 106.449 162.701 106.893 163.024C107.342 163.345 107.834 163.514 108.373 163.535H108.402H108.451C108.941 163.535 109.387 163.423 109.787 163.205C110.194 162.983 110.421 162.663 110.48 162.257C110.487 162.223 110.487 162.192 110.487 162.17V162.082C110.487 161.555 110.276 161.201 109.83 161.018C109.394 160.832 108.892 160.691 108.33 160.58C108.264 160.558 108.195 160.549 108.14 160.534C108.075 160.525 108.015 160.514 107.954 160.495C107.293 160.354 106.684 160.128 106.142 159.818C105.597 159.511 105.357 158.903 105.428 157.999C105.472 157.42 105.731 156.918 106.224 156.495C106.713 156.078 107.421 155.865 108.348 155.865C109.282 155.865 110.025 156.078 110.594 156.507C111.15 156.935 111.407 157.555 111.36 158.343H110.299V158.32V158.276V158.249V158.227C110.299 157.758 110.104 157.405 109.708 157.151C109.314 156.908 108.879 156.775 108.411 156.758H108.377H108.342C107.879 156.758 107.465 156.872 107.085 157.105C106.708 157.332 106.502 157.683 106.482 158.176C106.543 158.573 106.771 158.853 107.167 159.019C107.554 159.178 108.011 159.314 108.53 159.425C108.622 159.453 108.713 159.47 108.813 159.488C108.913 159.516 109.008 159.538 109.102 159.56C109.71 159.7 110.276 159.92 110.803 160.207C111.326 160.495 111.63 161.003 111.714 161.726C111.768 162.616 111.438 163.29 110.746 163.765C110.058 164.23 109.291 164.468 108.451 164.485H108.433H108.419C107.593 164.485 106.834 164.245 106.149 163.765C105.464 163.29 105.138 162.546 105.153 161.54H106.224Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.1237 170.65H17.7137L20.0274 177.563L22.3364 170.65H23.9324V178.889H22.7692V172.328L20.5561 178.889H19.4953L17.2795 172.42V178.889H16.1237V170.65Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M28.5677 170.65H29.7153V176.491C29.7153 177.09 29.9256 177.531 30.3463 177.843C30.7653 178.143 31.2393 178.3 31.7376 178.3C32.2529 178.3 32.7169 178.151 33.1428 177.846C33.5774 177.548 33.799 177.091 33.799 176.491V170.65H34.9465V176.491C34.9465 177.332 34.6247 177.984 33.9603 178.444C33.3115 178.905 32.5842 179.135 31.7944 179.15H31.7671H31.7237C30.9761 179.15 30.2865 178.931 29.6416 178.513C29.004 178.092 28.6471 177.41 28.5677 176.491V170.65Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M39.6573 170.65H40.8067V177.911H44.8092V178.889H39.6573V170.65Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M50.3202 171.53H47.5697V170.65H54.0456V171.53H51.466V178.889H50.3202V171.53Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M58.3956 170.65H59.4651V178.889H58.3956V170.65Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M64.3719 170.65H65.9593L68.2644 177.563L70.5747 170.65H72.1763V178.889H71.0136V172.328L68.7978 178.889H67.7405L65.5208 172.42V178.889H64.3719V170.65Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M76.9751 170.65H82.6561V171.53H78.0476V174.199H82.4778V175.168H78.0476V177.911H82.8356V178.889H76.9751V170.65Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M90.8312 170.65C90.9314 170.65 91.0234 170.656 91.1227 170.672C91.2185 170.678 91.3144 170.693 91.4145 170.707C92.0902 170.851 92.7117 171.235 93.2669 171.868C93.8298 172.498 94.1069 173.392 94.1069 174.549C94.1069 174.733 94.0943 174.923 94.09 175.111C94.0679 175.307 94.0471 175.498 94.0137 175.693C93.8883 176.495 93.5848 177.225 93.1042 177.898C92.6142 178.558 91.8565 178.889 90.8312 178.889H87.5403V170.65H90.8312ZM91.0932 177.829C91.6808 177.829 92.1375 177.52 92.4511 176.897C92.759 176.264 92.9121 175.57 92.9121 174.799V174.781V174.697C92.8965 173.928 92.7117 173.217 92.3661 172.58C92.0122 171.937 91.4649 171.618 90.7419 171.618H88.6159V177.829H91.0932Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M98.7271 170.65H99.8009V178.889H98.7271V170.65Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M106.924 170.65H108.246L111.254 178.889H110.016L109.129 176.491H106.029L105.23 178.889H103.997L106.924 170.65ZM108.78 175.523L107.632 172.068L106.289 175.523H108.78Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.1237 185.338H17.4591L21.5367 191.983V185.338H22.6005V193.587H21.3502L17.1889 187.015V193.587H16.1237V185.338Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M27.7654 185.338H28.9116V191.186C28.9116 191.78 29.1259 192.225 29.5522 192.526C29.9716 192.832 30.4391 192.986 30.9422 192.986C31.4518 192.986 31.918 192.838 32.3461 192.533C32.7763 192.234 32.9905 191.784 32.9905 191.186V185.338H34.1511V191.186C34.1511 192.025 33.8206 192.679 33.1619 193.133C32.5061 193.591 31.7831 193.835 30.999 193.844H30.9543H30.9296C30.1776 193.844 29.4867 193.626 28.8474 193.204C28.2082 192.779 27.8447 192.107 27.7654 191.186V185.338Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M40.1119 190.93C40.1119 191.594 40.3287 192.092 40.7815 192.403C41.2299 192.726 41.7187 192.893 42.2647 192.922H42.2929H42.3554C42.8346 192.922 43.2748 192.81 43.6729 192.59C44.0767 192.366 44.3105 192.053 44.3651 191.638C44.376 191.612 44.3786 191.582 44.3786 191.549V191.47C44.3786 190.939 44.16 190.585 43.7159 190.406C43.28 190.216 42.7743 190.074 42.2118 189.96C42.1489 189.943 42.0834 189.931 42.0279 189.914C41.9668 189.91 41.9039 189.892 41.8427 189.882C41.1853 189.74 40.5738 189.508 40.0269 189.207C39.4808 188.893 39.241 188.289 39.3082 187.382C39.3525 186.804 39.6188 186.304 40.1119 185.881C40.5993 185.463 41.305 185.247 42.2357 185.247C43.1716 185.247 43.9123 185.463 44.4735 185.899C45.0347 186.32 45.2911 186.931 45.2481 187.728H44.1851V187.708V187.659V187.636V187.606C44.1851 187.14 43.9904 186.789 43.6001 186.533C43.198 186.288 42.7687 186.159 42.2938 186.142H42.2647H42.2357C41.766 186.142 41.354 186.258 40.971 186.487C40.595 186.717 40.3916 187.072 40.3677 187.561C40.4306 187.954 40.6605 188.237 41.0486 188.405C41.4433 188.556 41.9039 188.696 42.417 188.808C42.5098 188.832 42.6004 188.856 42.698 188.875C42.7943 188.898 42.8958 188.927 42.992 188.945C43.6044 189.087 44.1617 189.307 44.6852 189.588C45.2061 189.882 45.5135 190.384 45.6029 191.109C45.6588 192.003 45.3301 192.68 44.6336 193.145C43.9457 193.605 43.1781 193.85 42.3333 193.862H42.3233H42.3094C41.4836 193.862 40.7242 193.628 40.0351 193.145C39.3499 192.68 39.0242 191.936 39.0406 190.93H40.1119Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M52.6335 185.338H53.9623L56.9717 193.587H55.7348L54.8466 191.186H51.7448L50.9468 193.587H49.709L52.6335 185.338ZM54.4927 190.217L53.3491 186.757L52.0055 190.217H54.4927Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M61.4327 185.338H62.7672L66.8392 191.983V185.338H67.9087V193.587H66.6596L62.4901 187.015V193.587H61.4327V185.338Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M75.1106 186.216H72.3601V185.338H78.8361V186.216H76.2569V193.587H75.1106V186.216Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M84.8866 185.338H86.2224L89.2205 193.587H87.9771L87.0928 191.186H83.9993L83.1987 193.587H81.9592L84.8866 185.338ZM86.7485 190.217L85.597 186.757L84.2599 190.217H86.7485Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M93.8589 185.338H98.0297C98.6161 185.338 99.1036 185.534 99.5086 185.905C99.9141 186.274 100.155 186.805 100.236 187.47C100.236 187.607 100.23 187.748 100.213 187.901C100.205 188.057 100.173 188.217 100.13 188.367C100.06 188.58 99.9462 188.784 99.7914 188.986C99.6327 189.186 99.4028 189.363 99.0949 189.507C99.5034 189.711 99.7719 189.979 99.8851 190.3C99.9991 190.629 100.065 190.963 100.071 191.309V191.381V191.454V191.593V191.753C100.065 192.072 100.081 192.373 100.11 192.654C100.144 192.933 100.278 193.155 100.511 193.316V193.587H99.1786C99.1339 193.43 99.091 193.282 99.0658 193.115C99.0368 192.958 99.0155 192.8 99.0116 192.638C99.0073 192.561 98.9977 192.485 98.9977 192.399C98.9947 192.32 98.9947 192.243 98.9947 192.163V192.097V192.039C98.9756 191.558 98.9114 191.129 98.7956 190.746C98.6898 190.366 98.3099 190.125 97.6745 190.036H94.9271V193.587H93.8589V185.338ZM97.7595 189.061C97.786 189.061 97.8099 189.068 97.8333 189.068H97.8918C98.2444 189.068 98.5242 188.925 98.7679 188.638C99.0073 188.35 99.1339 188.042 99.137 187.695V187.681V187.666V187.65V187.631C99.1339 187.315 98.9977 187.028 98.7466 186.766C98.4964 186.5 98.0731 186.353 97.4933 186.312H94.9271V189.061H97.7595Z" fill="#F0F2F5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M107.538 185.338H108.872L111.876 193.587H110.639L109.748 191.186H106.648L105.846 193.587H104.613L107.538 185.338ZM109.399 190.217L108.247 186.757L106.913 190.217H109.399Z" fill="#F0F2F5"></path></svg>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="my-4 mx-2">

            <div class="my-2 text-center">
                <span class="self-center text-sm text-gray-500 dark:text-gray-300 sm:text-center">
                    ©Yayasan Nurul Jadid 2024. All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>
</body>
</html>
