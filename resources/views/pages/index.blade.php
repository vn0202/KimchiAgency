<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/> @stack("before_styles")
    @stack("preload")
    @vite(['resources/css/app.css','resources/css/themes/default.scss'])
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        .active {
            position: relative;
        }

        .active::after {
            content: "";
            display: inline-block;
            width: 30px;
            height: 6px;
            background: var(--color-primary);
            opacity: 0.8;
            position: absolute;
            bottom: 18%;
            left: 0;
        }

        .button-prev {

        }
    </style>
    @stack("after_styles")

</head>
<body>
@include("includes.header")

<div class=" hidden lg:block fixed z-2 top-0 left-0 bottom-0 right-0 overflow-hidden ">
    <!-- Additional required wrapper -->
    <div class="swiper h-full ">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide overflow-hidden ">
                <div x-data="{distance: 0, style:'', init(){
               this.distance = $el.querySelector('.slide-summary').offsetWidth + $el.querySelector('.bg-summary').offsetWidth;
               this.style ='transform:translate(' + this.distance + 'px,    ' + '-100%)'

               }}" class="w-full h-full relative">
                    <div class="w-1/2 bg-black h-[200px] absolute top-[calc(50%)] -translate-y-full left-[40%] p-4"
                         :style="style">
                        <div class="flex gap-2 items-end">
                            <h2 class="text-white  font-medium text-4xl ">Thở cùng
                                <br>
                                Panasonic</h2>
                            <a href="" class="text-primary"> <span
                                    class="h-[1px] w-4 bg-primary inline-block mb-[2px] mr-1"></span>view </a>

                        </div>
                    </div>
                    <div class="h-max absolute top-[calc(50%)] left-[40%] ">
                        <div class="flex ">
                            <img class="max-w-full aspect-square h-[200px] slide-summary"
                                 src="https://kimchiagency.com/images/slideshow/2022/02/14/compress/psv-tho2_1644827742.png"
                                 alt="">
                            <div class="text-white text-4xl flex gap-4   relative">
                                <div class="absolute bg-black left-0 w-1/3 h-full -z-1 bg-summary"></div>
                                <div class="w-10 h-[1px] bg-primary mt-12 relative">

                                </div>
                                <div class="relative mt-8 font-light">
                                    <p>Digital Strategy</p>
                                    <p>&amp; Planning</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide overflow-hidden ">
                <div x-data="{distance: 0, style:'', init(){
               this.distance = $el.querySelector('.slide-summary').offsetWidth + $el.querySelector('.bg-summary').offsetWidth;
               this.style ='transform:translate(' + this.distance + 'px,    ' + '-100%)'

               }}" class="w-full h-full relative">
                    <div class="w-1/2 bg-black h-[200px] absolute top-[calc(50%)] -translate-y-full left-[40%] p-4"
                         :style="style">
                        <div class="flex gap-2 items-end">
                            <h2 class="text-white  font-medium text-4xl ">One tab
                                <br>
                                Mb</h2>
                            <a href="" class="text-primary"> <span
                                    class="h-[1px] w-4 bg-primary inline-block mb-[2px] mr-1"></span>view </a>

                        </div>
                    </div>
                    <div class="h-max absolute top-[calc(50%)] left-[40%]  ">
                        <div class="flex ">
                            <img class="max-w-full aspect-square h-[200px] slide-summary"
                                 src="https://kimchiagency.com/images/slideshow/2022/02/16/compress/msb_1645005592.jpeg.webp"
                                 alt="">
                            <div class="text-white text-4xl flex gap-4   relative">
                                <div class="absolute bg-black left-0 w-1/3 h-full -z-1 bg-summary"></div>
                                <div class="w-10 h-[1px] bg-primary mt-12 relative">

                                </div>
                                <div class="relative mt-8 font-light">
                                    <p>Digital Strategy</p>
                                    <p>&amp; Planning</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide overflow-hidden">
                <div  class="w-full h-full relative">
                        <div class="w-full  bg-black h-[150px] absolute top-[calc(50%)] left-1/2  p-4"
                         >
                        <div class="flex gap-2 items-end">
                            <h2 class="text-white  font-medium text-4xl ">Our
                                <br>
                                Client</h2>
                            <a href="" class="text-primary"> <span
                                    class="h-[1px] w-4 bg-primary inline-block mb-[2px] mr-1"></span>view </a>

                        </div>
                    </div>
                    <div class="h-max absolute top-[calc(50%+150px)] left-[calc(50%-210px)] w-[41.667vw]  ">
                        <div class="flex flex-wrap bg-white py-6">
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="Golden gate" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/ggg2_1607967432.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/ggg2_1607967432.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/ggg2_1607967432.jpg">									</div>
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="MB ageas" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/mb_1607967417.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/mb_1607967417.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/mb_1607967417.jpg">									</div>
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="LG" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/lg_1607967409.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/lg_1607967409.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/lg_1607967409.jpg">									</div>
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="Central Group" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/central-group-vietnam_1607967400.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/central-group-vietnam_1607967400.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/central-group-vietnam_1607967400.jpg">									</div>
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="Ezviz" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/ez_1607967389.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/ez_1607967389.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/ez_1607967389.jpg">									</div>
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="Petrolimex" data-src="https://kimchiagency.com/images/partners/2022/02/14/compress/web-kc-content-01_1644832483.jpg" srcset="https://kimchiagency.com/images/partners/2022/02/14/compress/web-kc-content-01_1644832483.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2022/02/14/compress/web-kc-content-01_1644832483.jpg">									</div>
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="MSB" data-src="https://kimchiagency.com/images/partners/2022/02/14/compress/69218217_2405796042846690_3499096374148857856_n_1644831896.jpeg" srcset="https://kimchiagency.com/images/partners/2022/02/14/compress/69218217_2405796042846690_3499096374148857856_n_1644831896.jpeg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2022/02/14/compress/69218217_2405796042846690_3499096374148857856_n_1644831896.jpeg">									</div>
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="SeABANK" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/sea_1607967355.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/sea_1607967355.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/sea_1607967355.jpg">									</div>
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="Hafele" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/ha_1607967337.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/ha_1607967337.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/ha_1607967337.jpg">									</div>
                                <div class="img_prn w-1/5">
                                    <img class="owl-lazy after-lazy" alt="Msig" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/msig_1607967322.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/msig_1607967322.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/msig_1607967322.jpg">									</div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->


        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
</div>

<main class="text-normal  lg:flex  bg-[url('https://kimchiagency.com/images/config/slide1_1611044473.jpg.webp')]">
<div class="lg:hidden">
    <div class="swiper h-full ">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide overflow-hidden p-6 pb-40 lg:pb-6">
                <div>
                    <div class="flex gap-2 items-end mb-12">
                        <h2 class="text-white  font-medium text-4xl ">Thở cùng
                            <br>
                            Panasonic</h2>
                        <a href="" class="text-primary"> <span
                                class="h-[1px] w-4 bg-primary inline-block mb-[2px] mr-1"></span>view </a>

                    </div>
                    <div class="w-[312px] h-[312px] relative">
                        <img class="w-full h-full"
                             src="https://kimchiagency.com/images/slideshow/2022/02/14/compress/psv-tho2_1644827742.png"
                             alt="">
                        <div
                            class="bg-black -z-10 absolute h-60 w-full -z-1  bottom-0 translate-y-1/2 translate-x-1/4  right-0 flex items-end justify-center">

                            <div class="flex gap-4 items-center pb-10">
                                <div class="h-[1px] w-10 bg-primary">
                                </div>
                                <div class="text-white font-light text-2xl">
                                    <p> Digital Strategy
                                    </p>
                                    <p> & Planning
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide overflow-hidden p-6 pb-40 lg:pb-6">
                <div>
                    <div class="flex gap-2 items-end mb-12">
                        <h2 class="text-white  font-medium text-4xl ">Thở cùng
                            <br>
                            Panasonic</h2>
                        <a href="" class="text-primary"> <span
                                class="h-[1px] w-4 bg-primary inline-block mb-[2px] mr-1"></span>view </a>

                    </div>
                    <div class="w-[312px] h-[312px] relative">
                        <img class="w-full h-full"
                             src="https://kimchiagency.com/images/slideshow/2022/02/14/compress/psv-tho2_1644827742.png"
                             alt="">
                        <div
                            class="bg-black -z-10 absolute h-60 w-full -z-1  bottom-0 translate-y-1/2 translate-x-1/4  right-0 flex items-end justify-center">

                            <div class="flex gap-4 items-center pb-10">
                                <div class="h-[1px] w-10 bg-primary">
                                </div>
                                <div class="text-white font-light text-2xl">
                                    <p> Digital Strategy
                                    </p>
                                    <p> & Planning
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide overflow-hidden p-6 pb-40 lg:pb-6">
                <div>
                    <div class="flex gap-2 items-end mb-16">
                        <h2 class="text-white  font-medium text-4xl ">Our
                            <br>
                            Client</h2>
                        <a href="" class="text-primary"> <span
                                class="h-[1px] w-4 bg-primary inline-block mb-[2px] mr-1"></span>view </a>

                    </div>
                    <div class="">
                        <div class="flex bg-white flex-wrap py-10 lg:py-20 px-6">
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="Golden gate" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/ggg2_1607967432.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/ggg2_1607967432.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/ggg2_1607967432.jpg">									</div>
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="MB ageas" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/mb_1607967417.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/mb_1607967417.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/mb_1607967417.jpg">									</div>
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="LG" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/lg_1607967409.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/lg_1607967409.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/lg_1607967409.jpg">									</div>
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="Central Group" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/central-group-vietnam_1607967400.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/central-group-vietnam_1607967400.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/central-group-vietnam_1607967400.jpg">									</div>
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="Ezviz" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/ez_1607967389.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/ez_1607967389.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/ez_1607967389.jpg">									</div>
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="Petrolimex" data-src="https://kimchiagency.com/images/partners/2022/02/14/compress/web-kc-content-01_1644832483.jpg" srcset="https://kimchiagency.com/images/partners/2022/02/14/compress/web-kc-content-01_1644832483.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2022/02/14/compress/web-kc-content-01_1644832483.jpg">									</div>
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="MSB" data-src="https://kimchiagency.com/images/partners/2022/02/14/compress/69218217_2405796042846690_3499096374148857856_n_1644831896.jpeg" srcset="https://kimchiagency.com/images/partners/2022/02/14/compress/69218217_2405796042846690_3499096374148857856_n_1644831896.jpeg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2022/02/14/compress/69218217_2405796042846690_3499096374148857856_n_1644831896.jpeg">									</div>
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="SeABANK" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/sea_1607967355.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/sea_1607967355.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/sea_1607967355.jpg">									</div>
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="Hafele" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/ha_1607967337.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/ha_1607967337.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/ha_1607967337.jpg">									</div>
                            <div class="w-1/2 lg:w-1/5 ">
                                <img class="owl-lazy after-lazy" alt="Msig" data-src="https://kimchiagency.com/images/partners/2020/12/15/compress/msig_1607967322.jpg" srcset="https://kimchiagency.com/images/partners/2020/12/15/compress/msig_1607967322.jpg.webp" style="display: block; opacity: 1;" src="https://kimchiagency.com/images/partners/2020/12/15/compress/msig_1607967322.jpg">									</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->


        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

</div>
    <div class=" w-[100px] bg-primary h-[100vh] mr-16 hidden lg:block">

    </div>
    <div class="w-1/12 h-[100vh] hidden lg:block relative z-100 ">
        <nav x-data="{
    current_page:'{{Route::currentRouteName()}}',
    handleUI(route, target,remove){
       if(this.current_page == route){
       return;
       }
         if(remove){
              target.classList.remove('active')
              return;

       }
       target.classList.add('active')


    }
    }" class=" side-bar-left flex flex-col-reverse justify-center gap-20 h-full text-lg font-medium bg-white px-10">
            <div class="-rotate-90">
                <a href="{{route('home')}}" class="block" :class="current_page=='home' && 'active'"
                   @mousemove.self="handleUI('home')" @mouseleave="handleUI('home',true)">home-</a>
            </div>
            <div class="-rotate-90">
                <a href="{{route('works')}}" class=" block {{\Illuminate\Support\Str::contains(Route::currentRouteName(),'works') ? 'active' :''}}"
                   @mouseover.self="handleUI('works',$el)" @mouseleave="handleUI('works',$el,true)">works-</a>
            </div>
            <div class="-rotate-90">
                <a href="{{route('about')}}" class=" block {{\Illuminate\Support\Str::contains(Route::currentRouteName(),'about') ? 'active' :''}}"
                   @mousemove.self="handleUI('about',$el)" @mouseleave="handleUI('about',$el,true)">about-</a>
            </div>
            <div class="-rotate-90">
                <a href="{{route("careers.page")}}" class=" block {{\Illuminate\Support\Str::contains(Route::currentRouteName(),'careers') ? 'active' :''}}"
                   @mousemove.self="handleUI('careers', $el)" @mouseleave="handleUI('careers',$el,true)">careers-</a>
            </div>
            <div class="-rotate-90">
                <a href="{{route('contact')}}" class=" block {{\Illuminate\Support\Str::contains(Route::currentRouteName(),'contact') ? 'active' :''}}"
                   @mousemove.self="handleUI('contact',$el)" @mouseleave="handleUI('contact',$el,true)">contact-</a>
            </div>
        </nav>
    </div>


    <div class="w-full lg:w-1/6 bg-white ml-auto relative z-100">
        <footer class="lg:h-full overflow-hidden">

            <div
                class=" flex lg:hidden justify-between items-center border-t py-10 bg-black mt-4 text-[#808080] text-lg ">
                <div class="mx-auto">
                    <p>Copyright © 2020 T&amp;N.</p>

                    <p>All Rights Reserved.</p>
                </div>
            </div>
            <div class="hidden lg:flex flex-col justify-between h-full items-center">
                <a class="pt-6 block" href="{{route('home')}}">
                    <img class="w-[140px]" src="{{asset("images/kimchi.svg")}}" alt="">
                </a>
                <div>
                    <div class="-rotate-90 -translate-y-48 text-base font-thin">
                        <p>2nd floor, The Terra 83 Hao Nam,</p>

                        <p>Dong Da District, Hanoi,</p>

                        <p>Vietnam</p>

                        <p><a href="tel:(84) 98 598 93 39" class="font-bold">(84) 98 598 93 39</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="hidden lg:flex items-center w-[80px] pl-2 relative z-100 ">
        <div class="h-max -translate-y-3/4">
            <div class="button-prev ">
                <svg class="w-16 h-16 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     strokeWidth={1} stroke="currentColor" className="size-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                </svg>

            </div>
            <div class="button-next">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                     stroke="currentColor" class="size-6 w-16 h-16 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>

            </div>
        </div>
    </div>

</main>

@stack('before_scripts')

<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
            autoplay: {
                delay: 5000,
            },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.button-prev',
            prevEl: '.button-next',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>
</body>
</html>
