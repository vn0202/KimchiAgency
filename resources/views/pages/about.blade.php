@extends('layout.master')
@section('content')
        <div class="flex flex-col lg:flex-row lg:gap-16 lg:flex-1">
            <div class=" min-h-52 lg:h-[100vh] justify-center relative flex items-center lg:items-start lg:flex-col lg:justify-between lg:w-4/12 overflow-hidden">
                <h2 class="font-bold text-4xl text-center lg:text-left text-white z-10 relative mb-4 pl-10 py-12 w-full">About</h2>
                <div class="since_text relative z-10 text-primary mb-10 ml-10 hidden lg:block">
                    <span class="inline-block h-0.5 w-10 bg-primary"> </span>
                    <span>Since. 2018</span>
                </div>
                <div class="absolute -z-1 left-0 w-full overflow-hidden top-0 bottom-0">
                    <img class="max-w-full w-full h-full object-fit" src="https://kimchiagency.com/images/contents/2021/01/06/resized/about_1609908242.jpg" alt="">
                </div>
            </div>
            <div  class="lg:w-7/12 px-4 mt-10 lg:mt-0 flex-1 lg:h-[100vh] overflow-y-auto no-scrollbar py-10" >
                <h1 class="text-2xl font-medium mb-[4vw]">We are a Hanoi-base Integrated Marketing Agency.Our campaigns are tailor-made for your success</h1>
                <div class="lg:pr-28 mb-10">
                    At Thread & Needle, we develop made-to-order Marketing and Communications Campaigns that deliver relevant, bottom-line results to our clients. We are inspired by Tailors – professionals that neatly combined an understanding of the customer’s needs with creativity, precision, and diligence to create products able to elevate status and exert attraction. A good tailor understands that form and function must always go hand-in-hand, and so do we, in our work.
                </div>
                <div class="flex flex-wrap flex-col lg:flex-row">
                    <div class=" w-max lg:w-1/3 p-2 lg:py-6 relative mx-auto lg:mx-0  ">
                        <a href="#" class="hover:text-primary  transition-all  duration-[500] ">Strategic Planning ></a>
                        <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                    </div>
                    <div class=" w-max lg:w-1/3 p-2 lg:py-6 relative mx-auto lg:mx-0 ">
                        <a href="#" class="hover:text-primary  transition-all  duration-[500] ">Digital ></a>
                        <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                    </div>
                    <div class=" w-max lg:w-1/3 p-2 lg:py-6 relative mx-auto lg:mx-0" >
                        <a href="#" class="hover:text-primary  transition-all  duration-[500]">Performance Ads ></a>
                        <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                    </div>
                    <div class=" w-max lg:w-1/3 p-2 lg:py-6 relative mx-auto lg:mx-0 ">
                        <a href="#" class="hover:text-primary  transition-all  duration-[500]">Web Design ></a>
                        <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                    </div>
                    <div class="  w-max lg:w-1/3 p-2 lg:py-6 relative mx-auto lg:mx-0">
                        <a href="#" class="hover:text-primary  transition-all  duration-[500]">Video Production ></a>
                        <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                    </div>
                </div>

                <div class="w-3/4 h-10 bg-primary mt-10 hidden lg:block">

                </div>
            </div>
        </div>
@endsection
