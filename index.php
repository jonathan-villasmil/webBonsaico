<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tailwind/2.1.2/tailwind.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper/6.6.2/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/swiper/customswiper.css">
    <!-- my css custom -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
<div class="flex w-full h-auto">
    <!-- Background image -->
    <div class="container-bg">
            <img class="lg:hidden max-w-full" src="img/img_hero_bkg_mobile.png" alt="">
            <img class="hidden lg:block w-full" src="img/Img_background_hero.png" alt="">
            <div class="degradado w-full h-20 lg:h-96 z-1 "></div>
    </div>

    <!-- Bonsai Tittle -->
    <div class="bontitle absolute top-0 right-0 hidden lg:block z-2">BON</div>
    <div class="saistitle absolute bottom-20 left-0  hidden lg:block z-2">SAIS</div>
</div>

<!-- content gray -->
<div class="container-gray w-full h-96 lg:h-56 "></div>

<div class="container mx-auto absolute inset-x-0 top-0  ">
    <nav class="flex px-2 pt-5 lg:px-20 lg:py-16 items-center justify-between flex-wrap z-40">
        <!-- Logo -->
        <div class="flex pl-3 items-center flex-shrink-0  w-40 h-20">
            <img src="img/ic_logotipo_bonsais.png" alt="">
        </div> 
        <!--End Logo -->

        <!-- Search field -->
        <div class="block lg:ml-80 w-20 lg:w-40 h-20 pt-5">
            <form >
                <label class="hidden" for="search-form">Search</label>
                <input class="bg-transparent border text-white text-center focus:border-gray-200 p-2 rounded-lg shadow-inner w-full" placeholder="Search" type="text">
                <button class="hidden ">Submit</button>
            </form>
        </div>
        <!-- END Search field -->
        
        <!-- Botón responsive -->
        <div class="block lg:hidden ">
            <button id='boton' class="flex items-center px-3 py-2 text-white  hover:text-white">
                <svg class="fill-current h-6 w-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <!--End Botón responsive -->

        <!-- tailwind css navbar -->
        <div id='menu' class="hidden text-center lg:text-right  block flex-grow lg:block lg:items-center z-40">
            <div class="nav-font text-sm lg:flex-grow">                           
                <a href="index.php" class="lista-menu block p-2 lg:inline-block lg:mt-0 text-white hover:text-white hover:underline font-bold">Home</a>

                <a href="#responsive-header" class="lista-menu block p-2 lg:inline-block lg:mt-0 text-white  hover:text-white hover:underline font-bold">Our Mission</a>

                <a href="#responsive-header" class="lista-menu block p-2 lg:inline-block lg:mt-0 text-white hover:text-white hover:underline  font-bold">Catalogue</a>

                <a href="#responsive-header" class="lista-menu block p-2 lg:inline-block lg:mt-0 text-white hover:text-white hover:underline font-bold">Contact</a>

                <!-- Condición registro  -->
                <?php if(!empty($user)): ?>
                <a href="#responsive-header" class="lista-menu block p-2 lg:inline-block lg:mt-0 text-white hover:text-white hover:underline font-bold">Carrito</a>
                <!-- LOGIN  User -->
                <a href="#responsive-header" class="lista-menu block p-2  lg:inline-block lg:mt-0 text-white hover:text-white hover:underline 
                font-bold">LogOut</a>

                <a href="#responsive-header" class="lista-menu block p-2  lg:inline-block lg:mt-0 text-white hover:text-white hover:underline font-bold"><?=$user['email'];?></a>
                <!--END User Login -->
               
                <?php else: ?>
                <a href="#responsive-header" class="lista-menu block p-2 lg:inline-block lg:mt-0 text-white hover:text-white hover:underline  font-bold">SignUp</a>
                    
                <a href="#responsive-header" class="lista-menu block p-2 lg:inline-block lg:mt-0 text-white hover:text-white hover:underline  font-bold">Login</a>
                <?php endif; ?>
                <!-- END Condición registro  -->
            </div>
        </div>
    </nav>
    <!-- End tailwind css navbar -->

    <!-- Content top  -->
    <div class="grid lg:grid-cols-2 p-5 lg:p-20 mt-0">
        <div class="lg:">
            <h1 class="text-6xl text-white">Specialists in bonsai cultivation!</h1>
            <h3 class="text-sm pt-5 lg:text-2xl text-white lg:mt-10">Check out our new products and designs for Bonsai Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum dolorem nisi perspiciatis eius incidunt optio eligendi voluptatum, repudiandae deleniti distinctio ducimus aut, repellendus corrupti dolorum blanditiis consectetur vel, in totam.</h3>  
            <button class="w-full lg:w-2/4 h-12 text-sm p-2 justify-center text-green-900 bg-white font-bold mt-10 lg:mt-20" >Discover now!</button>
        </div>
    </div>
    <!-- Content top  -->

    <!-- contain center  -->
    <!-- Section card -->
    <div class="flex mt-20">
        <div class="grid grid-cols-1 px-10 lg:grid-cols-3 gap-8 ">
            <div class="lg:p-10 mt-10  lg:h-52 text-white">
                <h1 class=" font-bold">Special bonsai design</h1>
                <p class="mt-4">You will get the best product support for improving and caring of your trees, We've been working with the best bonsai designers for more than 10 years.</p>
                <button class="mt-4 text-sm leading-none text-white hover:text-gray-900 underline">Check it!</button>
            </div>

            <div class="lg:p-10 mt-10  lg:h-52 text-white ">
                <h1 class="font-bold">Personalize yours</h1>
                <p class="mt-4">You will get the best product support for improving and caring of your trees, We've been working with the best bonsai designers for more than 10 years.</p>
                <button class="mt-4 text-sm leading-none text-white hover:text-gray-900 underline">Check it!</button>
            </div>

            <div class="boton-verde lg:h-96 mt-10 lg:ml-32 p-10 lg:w-72 text-white">
                <h1 class="font-bold">Huge catalogue</h1>
                <p class="hidden lg:block mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum dolorem nisi perspiciatis eius incidunt optio eligendi voluptatum, repudiandae deleniti distinctio ducimus aut, repellendus corrupti dolorum blanditiis consectetur vel, in totam.</p>
                <p class="block lg:hidden mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum dolorem nisi perspiciatis eius incidunt optio eligendi voluptatum.</p>
                <button class="mt-4 text-sm leading-none text-white hover:text-gray-900 underline">Check it!</button>
            </div>
        </div>
    </div>
    <!-- End section card -->   
</div>
    <!-- Slider con Swiper -->
    <div class="flex flex-col mt-64 lg:mt-10 bg-white">
        <div class="grid grid-row-2  lg:pt-24 lg:px-24 h-auto">
            <div class="grid lg:grid-cols-2 p-4 text-6xl lg:text-8xl text-black">Discover what we can do!</div>
            <h3 class="text-sm text-xl lg:text-2xl p-4 text-black ">Check out our new products and designs for Bonsai</h3>  
        </div> 
        
        <div class="swiper-container ">
            <div class="swiper-wrapper lg:-mt-52">
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img1.jpg)"></div>
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img2.jpg)"></div>
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img3.jpg)"></div>
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img4.jpg)"></div>
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img5.jpg)"></div>
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img6.jpg)"></div>
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img7.jpeg)"></div>
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img8.jpeg)"></div>
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img9.jpg)"></div>
                <div class="swiper-slide border border-gray-400" style="background-image:url(img/img10.jpg)"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>     
    </div>
    <!--End slider con Swiper -->
    <!-- Footer -->
    <div class="flex lg:justify-between lg:pl-20 mt-20 lg:mt-20 bg-black h-auto ">
        <div class="flex  items-center flex-shrink-0  w-40 h-20">
            <img src="img/ic_logotipo_bonsais.png" alt="">+
        </div> 
        <div class="flex items-center lg:pr-20">
            <h1 class="text-xs pl-4 lg:text-2xl font-bold  text-white">All rights reserved Bonsais 2020</h1>
        </div> 
    </div>
    <!-- End Footer -->


         

<script src="js/swiper/6.6.2/swiper-bundle.min.js"></script>
<script src="js/botonresponsive.js"></script>
<script src="js/swiper/customswiper.js"></script>
</body>
</html>