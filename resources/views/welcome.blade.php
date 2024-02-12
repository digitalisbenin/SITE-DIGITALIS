<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DIGITALIS | Meilleure agence de marketing digital du Bénin</title>
    <link rel="icon" href="favicon.ico">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b eh': darkMode === true }">
    <!-- ===== Header Start ===== -->
    <div class="h-9 bg-green-600  hidden md:flex">
        <div class="mx-16 flex mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>

            <p class="text-white text-sm ml-2">+229 97 82 58 20 / 94 86 37 86</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-white ml-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>

            <p class="text-white text-sm ml-2">info@digitalis-benin.com </p>

        </div>
        <div class="ml-auto mt-2">
            <p class="text-white text-sm mr-24">Abomey-Calavi/Togoudo, Bénin </p>
        </div>
    </div>
    <header class="g s  r vd ya cj " :class="{ 'hh sm _k dj bl  ll': stickyMenu }"
        @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">

        <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i lg:mt-6">
            <div class="vd to/4 tc wf yf">

                <a href="/">
                    <img class="om h-7 lg:h-16" src="images/logoDigitalis.png" alt="Logo Light" />

                </a>

                <!-- Hamburger Toggle BTN -->
                <button class="po rc" @click="navigationOpen = !navigationOpen">
                    <span class="rc i pf re pd">
                        <span class="du-block h q vd yc">
                            <span class="rc i r s eh um tg te rd eb ml jl dl"
                                :class="{ 'ue el': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl fl"
                                :class="{ 'ue qr': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl gl"
                                :class="{ 'ue hl': !navigationOpen }"></span>
                        </span>
                        <span class="du-block h q vd yc lf">
                            <span class="rc eh um tg ml jl el h na r ve yc"
                                :class="{ 'sd dl': !navigationOpen }"></span>
                            <span class="rc eh um tg ml jl qr h s pa vd rd"
                                :class="{ 'sd rr': !navigationOpen }"></span>
                        </span>
                    </span>
                </button>
                <!-- Hamburger Toggle BTN -->
            </div>

            <div class="vd wo/4 sd  qo f ho oo wf yf" :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }">
                <nav>
                    <ul class="tc _o sf yo cg ep">
                        <li><a href="/"
                                class=" text-black text-2xl  xl hover:text-orange-500  {{ request()->is('/') ? 'text-blue-700' : '' }}  ">Acceuil</a>
                        </li>

                        <li class="c i" x-data="{ dropdown: false }">
                            <a href="/solutions-numeriques"
                                class="tc wf yf bg text-2xl xl text-black hover:text-orange-500 {{ request()->is('solutions-numeriques') ? 'text-blue-700' : '' }} ">
                                Nos Services

                                <svg :class="{ 'wh': dropdown }" class="th mm we fd pf"
                                    @click.prevent="dropdown = !dropdown" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                                </svg>
                            </a>

                            <!-- Dropdown Start -->
                            <ul class="a" :class="{ 'tc': dropdown }">
                                <li><a href="/creation-site-web"
                                        class="xl text-black hover:text-orange-500 {{ request()->is('creation-site-web') ? 'text-blue-700' : '' }}">Ingénierie
                                        Informatique</a></li>
                                <li><a href="/gestion-medias-sociaux"
                                        class="xl text-black hover:text-orange-500 {{ request()->is('gestion-medias-sociaux') ? 'text-blue-700' : '' }}">Maintenance
                                        & Réseaux</a>
                                </li>
                                <li><a href="/conception-graphique"
                                        class="xl text-black hover:text-orange-500 {{ request()->is('conception-graphique') ? 'text-blue-700' : '' }}">Conception
                                        graphique</a></li>
                                <li><a href="/production-vidéo"
                                        class="xl text-black hover:text-orange-500 {{ request()->is('production-vidéo') ? 'text-blue-700' : '' }}">Communication
                                        et Marketing digital</a></li>
                                <li><a href="/redaction-web"
                                        class="xl text-black hover:text-orange-500 {{ request()->is('redaction-web') ? 'text-blue-700' : '' }}">Formations
                                        & divers</a></li>
                            </ul>
                            <!-- Dropdown End -->
                        </li>
                        <li><a href="/a-propos"
                                class=" text-2xl xl text-black hover:text-orange-500 {{ request()->is('a-propos') ? 'text-blue-700' : '' }} ">A
                                propos</a></li>
                        <li><a href="/contact"
                                class="xl text-2xl  text-black hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">Contact</a>
                        </li>
                    </ul>
                </nav>

                <div class="tc wf ig pb no">

                    <ul class="tc wf cg">
                        <li>
                            <a href="https://web.facebook.com/numev.marketing.digital" target="_blank">
                                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_48_1499)">
                                        <path
                                            d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                                            fill="" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1499">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/numev/" target="_blank">
                                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_48_1505)">
                                        <path
                                            d="M6.94 5.00002C6.93974 5.53046 6.72877 6.03906 6.35351 6.41394C5.97825 6.78883 5.46944 6.99929 4.939 6.99902C4.40857 6.99876 3.89997 6.78779 3.52508 6.41253C3.1502 6.03727 2.93974 5.52846 2.94 4.99802C2.94027 4.46759 3.15124 3.95899 3.5265 3.5841C3.90176 3.20922 4.41057 2.99876 4.941 2.99902C5.47144 2.99929 5.98004 3.21026 6.35492 3.58552C6.72981 3.96078 6.94027 4.46959 6.94 5.00002ZM7 8.48002H3V21H7V8.48002ZM13.32 8.48002H9.34V21H13.28V14.43C13.28 10.77 18.05 10.43 18.05 14.43V21H22V13.07C22 6.90002 14.94 7.13002 13.28 10.16L13.32 8.48002Z"
                                            fill="" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1505">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="https://www.instagram.com/numev_marketing_digital/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" class="vh ul cl il" width="20"
                                    height="20" viewBox="0 0 24 24"" viewBox="0 0 24 24">

                                    <g clip-path="url(#clip0_48_1505)">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_1505">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>


                    </ul>
                    <a href="#" class="inline-block ek xj kk wm"> +229 97 82 58 20 / 94 86 37 86 </a>
                </div>
            </div>
        </div>
    </header>

    <!-- ===== Header End ===== -->

    <main>
        <!-- ===== Hero Start ===== -->
        <section class="mt-24 justify-start ">

            <img class="w-full" src="images/numev-marketing-digital.jpg" alt="numev-marketing-digital">



        </section>
        <!-- ===== Hero End ===== -->

        <!-- ===== Small Features End ===== -->

        <!-- ===== About Start ===== -->


        <div class="flex"> <!-- ===== About End ===== -->
            <div class="lg:w-[75%]">
                <section class="pb-20 bg-gray-300 lg:-mt-12">
                    <div class="container mx-auto px-4">
                        <div class="flex flex-wrap">
                            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                    <div class="px-4 py-5 flex-auto">
                                        <div
                                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                            <i class="fas fa-award"></i>
                                        </div>
                                        <h6 class="text-xl font-semibold">Agence récompensée</h6>
                                        <p class="mt-2 mb-4 text-gray-600">
                                            Notre agence a l'honneur d'être récompensée pour son excellence dans le
                                            domaine .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-4/12 px-4 text-center">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                    <div class="px-4 py-5 flex-auto">
                                        <div
                                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                            <i class="fas fa-retweet"></i>
                                        </div>
                                        <h6 class="text-xl font-semibold">Révisions gratuites</h6>
                                        <p class="mt-2 mb-4 text-gray-600">
                                            Chez nous, la satisfaction de nos clients est une priorité absolue. C'est
                                            pourquoi nous offrons des révisions gratuites.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                    <div class="px-4 py-5 flex-auto">
                                        <div
                                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                            <i class="fas fa-fingerprint"></i>
                                        </div>
                                        <h6 class="text-xl font-semibold">Entreprise vérifiée</h6>
                                        <p class="mt-2 mb-4 text-gray-600">
                                            Notre entreprise est fière d'être une entreprise vérifiée, un gage de
                                            fiabilité pour nos clients.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mt-32">
                            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                                <div
                                    class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                                    <i class="fas fa-user-friends text-xl"></i>
                                </div>
                                <h3 class="text-3xl mb-2 font-semibold leading-normal">
                                    Travailler avec nous est un plaisir
                                </h3>
                                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                                    Travailler avec nous est bien plus qu'une collaboration professionnelle, c'est une
                                    expérience enrichissante où l'excellence rencontre la passion. Chez DIGITALIS, nous
                                    croyons en la force d'une équipe unie et déterminée à atteindre l'excellence
                                    ensemble.
                                </p>
                                <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                                    Si vous recherchez un environnement de travail où l'épanouissement professionnel va
                                    de pair avec une culture d'entreprise exceptionnelle, [Nom de l'Entreprise] est
                                    l'endroit idéal pour vous. Ensemble, construisons un avenir brillant et partageons
                                    la joie de réussir.

                                    Rejoignez-nous. Travailler avec nous est un plaisir, et l'aventure ne fait que
                                    commencer
                                </p>

                            </div>
                            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                                    <img alt="..."
                                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                                        class="w-full align-middle rounded-t-lg" />
                                    <blockquote class="relative p-8 mb-4">
                                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                            style="height: 95px; top: -94px;">
                                            <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                            </polygon>
                                        </svg>
                                        <h4 class="text-xl font-bold text-white">
                                            Top Notch Services
                                        </h4>
                                        <p class="text-md font-light mt-2 text-white">
                                            The Arctic Ocean freezes every winter and much of the
                                            sea-ice then thaws every summer, and that process will
                                            continue whatever happens.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="relative py-20">
                    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                        style="height: 80px;">
                        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                            <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                        </svg>
                    </div>
                    <div class="container mx-auto px-4">
                        <div class="items-center flex flex-wrap">
                            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                                <img alt="..." class="max-w-full rounded-lg shadow-lg"
                                    src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" />
                            </div>
                            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                                <div class="md:pr-12">
                                    <div
                                        class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                        <i class="fas fa-rocket text-xl"></i>
                                    </div>
                                    <h3 class="text-3xl font-semibold">Une entreprise en pleine croissance</h3>
                                    <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                        Une entreprise en pleine croissance est comme une graine qui prend racine et
                                        s'épanouit dans le sol fertile des opportunités. C'est un parcours passionnant
                                        où chaque étape est marquée par de nouveaux défis et de grandes réalisations
                                    </p>
                                    <ul class="list-none mt-6">
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                            class="fas fa-fingerprint"></i></span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">
                                                        Composants soigneusement conçus
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                            class="fab fa-html5"></i></span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">Exemples d'efficacité</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                            class="far fa-paper-plane"></i></span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">Equipe dynamiques</h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" relative block bg-gray-900">
                    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                        style="height: 80px;">
                        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                            <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                        </svg>
                    </div>
                    <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                        <div class="flex flex-wrap text-center justify-center">
                            <div class="w-full lg:w-6/12 px-4">
                                <h2 class="text-4xl font-semibold text-white">SERVICES</h2>
                                <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                                    DIGITALIS dispose d'une game de services variés.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap mt-12 justify-center">
                            <div class="w-full lg:w-3/12 px-4 text-center">
                                <div
                                    class="text-gray-900 p-3 w-24 h-24 shadow-lg  inline-flex items-center justify-center">
                                    <img src="images/linformatique.png"
                            alt="marketing-digital-service-création-de-site-web" >
                                </div>
                                <h6 class="text-xl mt-5 font-semibold text-white">
                                    Ingénierie Informatique
                                </h6>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Développement web et mobile Intégration des solutions de gestion
                                </p>
                            </div>
                            <div class="w-full lg:w-3/12 px-4 text-center">
                                <div
                                    class="text-gray-900 p-3 w-24 h-24 shadow-lg  inline-flex items-center justify-center">
                                    <img src="images/ingenieur.png"
                            alt="marketing-digital-service-création-de-site-web" >
                                </div>
                                <h5 class="text-xl mt-5 font-semibold text-white">
                                    Maintenance & Réseaux
                                </h5>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Maintenance Informatique Câblage & administration réseaux
                                </p>
                            </div>
                            <div class="w-full lg:w-3/12 px-4 text-center">
                                <div
                                    class="text-gray-900 p-3 w-24 h-24 shadow-lg  inline-flex items-center justify-center">
                                    <img src="images/designer-graphique.png"
                            alt="marketing-digital-service-création-de-site-web" >
                                </div>
                                <h5 class="text-xl mt-5 font-semibold text-white">Conception graphique</h5>
                                <p class="mt-2 mb-4 text-gray-500">
                                    On ne peut parler de visibilité sans visuel.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap mt-12 justify-center">
                            <div class="w-full lg:w-3/12 px-4 text-center">
                                <div
                                class="text-gray-900 p-3 w-24 h-24 shadow-lg  inline-flex items-center justify-center">
                                <img src="images/agence-digitale.png"
                        alt="marketing-digital-service-création-de-site-web" >
                            </div>
                                <h6 class="text-xl mt-5 font-semibold text-white">
                                    Communication et Marketing numérique
                                </h6>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Réalisations graphisme Audiovisuelles Gestion des réseaux sociaux & Marketing
                                </p>
                            </div>
                            <div class="w-full lg:w-3/12 px-4 text-center">
                                <div
                                class="text-gray-900 p-3 w-24 h-24 shadow-lg  inline-flex items-center justify-center">
                                <img src="images/documents.png"
                        alt="marketing-digital-service-création-de-site-web" >
                            </div>
                                <h5 class="text-xl mt-5 font-semibold text-white">
                                    Formations & Divers
                                </h5>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Ingénierie Informatique Graphisme Marketing digital Logiciels de gestion
                                </p>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
            <div class="w-[25%] pb-20  -mt-12 hidden lg:block">
                <img src="images/3e6b6611-b596-4f1a-ab02-522c6635b07e.png"
                    alt="marketing-digital-service-création-de-site-web" class="mb-9">
                    <img src="images/3c696b81-79cc-4a46-afd0-d6c65b90b5ea.png"
                    alt="marketing-digital-service-création-de-site-web" class="mt-4">
            </div>
        </div>

        <!-- ===== CTA End ===== -->

    </main>
    <!-- ===== Footer Start ===== -->
    <footer class=" bg-green-600 ">

        <!-- Footer Top -->

        <div class="tc uf ap gg fp lg:mx-44  ">
            <div class=" mt-6  lg:mb-4 flex flex-col ml-12 lg:ml-0">
                <h4 class="text-white   text-xl text-left font-bold ">Menu</h4>
                <a class=" text-gray-200 text-lg  text-left mt-6" href="/">Accueil

                </a>
                <a class="text-gray-200  text-lg  text-left mt-2" href="/services">Nos prestations

                </a>
                <a class="text-gray-200 text-lg  text-left mt-2" href="/a-propos">A propos</a>
                <a class="text-gray-200 text-lg  text-left mt-2" href="/projet">Contactez-nous

                </a>

            </div>

            <div class=" lg:flex   md:flex">

                <div class="mr-0 flex flex-col mt-6 ">
                    <h4 class="text-white text-xl ml-12 text-left font-bold">Nos services</h4>
                    <a class=" text-gray-200 text-lg ml-12 text-left mt-6" href="/creation-site-web">Ingénierie
                        Informatique</a>
                    <a class="text-gray-200  text-lg ml-12 text-left mt-2" href="/gestion-medias-sociaux">Maintenance &
                        Réseaux
                        bâtiment et route</a>
                    <a class="text-gray-200 text-lg ml-12 text-left mt-2" href="/conception-graphique">Conception graphique</a>
                    <a class="text-gray-200 text-lg ml-12 text-left mt-2" href="/production-vidéo">Communication et
                        Marketing digital</a>
                    <a class="text-gray-200 text-lg ml-12 text-left mt-2" href="/redaction-web">Formations &
                        divers</a>

                </div>


                <div class=" mt-6  lg:mb-4 flex flex-col ml-12  lg:ml-44">
                    <h4 class="text-white   text-xl text-left font-bold ">Pour plus d’infos</h4>
                    <a class=" text-gray-200 text-lg  text-left mt-6">+229 97 82 58 20 / 94 86 37 86

                    </a>
                    <a class="text-gray-200  text-lg  text-left mt-2">info@digitalis-benin.com 

                    </a>
                    <a class="text-gray-200 text-lg  text-left mt-2">Lundi au vendredi : 08h à 18h</a>

                    <a class="text-gray-200 text-lg  text-left mt-2" href="/digitalis"><svg class="vh ul cl il"
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_48_1499)">
                                <path
                                    d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                                    fill="" />
                            </g>
                            <defs>
                                <clipPath id="clip0_48_1499">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg></a>
                </div>

            </div>
        </div>


        </div>
        <div class=" h-5">
    </footer>
    <!-- Footer Top -->

    <div class=" h-5 bg-white">

    </div>
    <!-- Footer Bottom -->

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button class="xc wf xf ie ld vg sr gh tr g sa ta _a bg-orange-500 mb-9 mr-6 lg:mr-0 "
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ 'uc': scrollTop }">
        <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>



</html>
<!-- ====== Back To Top End ===== -->

<script>
    //  Pricing Table
    const setup = () => {
        return {
            isNavOpen: false,
            showModalModele: false,

            billPlan: 'monthly',

            plans: [{
                    name: 'Starter',
                    price: {
                        monthly: 29,
                        annually: 29 * 12 - 199,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Growth Plan',
                    price: {
                        monthly: 59,
                        annually: 59 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Business',
                    price: {
                        monthly: 139,
                        annually: 139 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
            ],
        };
    };
    toggleModalModele() {
        this.showModalModele = !this.showModalModele;
    },
</script>
<script defer src="js/bundle.js"></script>
</body>

</html>
