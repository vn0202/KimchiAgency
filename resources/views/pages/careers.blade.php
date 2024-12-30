@extends('layout.master')
@section('content')
    <div class="flex flex-col lg:flex-row lg:gap-16 lg:flex-1">
        <div class=" min-h-52 lg:h-[100vh] justify-center relative flex items-center lg:items-start lg:flex-col lg:justify-between lg:w-4/12 overflow-hidden">
            <h2 class="font-bold text-4xl text-center lg:text-left text-white z-10 relative mb-4 pl-10 py-12 w-full">Careers</h2>

            <div class="absolute -z-1 left-0 w-full overflow-hidden top-0 bottom-0">
                <img class="max-w-full w-full h-full object-fit" src="https://kimchiagency.com/images/slideshow/2020/12/15/compress/careers_1608002620.jpg" alt="">
            </div>
        </div>
        <div  class="lg:w-7/12 px-4 mt-10 lg:mt-0 flex-1 lg:h-[100vh] overflow-y-auto no-scrollbar py-10" >
            <h1 class="text-2xl font-medium mb-[4vw] text-center lg:text-left">Available Positions</h1>

            <div class="flex flex-wrap flex-col lg:flex-row">
                <div class=" w-max lg:w-1/2 p-2 lg:py-6 relative mx-auto lg:mx-0  ">
                    <a href="{{route('careers.page',['page' =>'administrator' ])}}" class="hover:text-primary  transition-all  duration-[500] ">Administrator ></a>
                    <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                </div>
                <div class=" w-max lg:w-1/2 p-2 lg:py-6 relative mx-auto lg:mx-0 ">
                    <a href="{{route('careers.page',['page' =>'copy_writer' ])}}" class="hover:text-primary  transition-all  duration-[500] ">Sr. Copy Writer > </a>
                    <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                </div>
                <div class=" w-max lg:w-1/2 p-2 lg:py-6 relative mx-auto lg:mx-0" >
                    <a href="{{route('careers.page',['page' =>'account_executive' ])}}" class="hover:text-primary  transition-all  duration-[500]">Sr. Account Executive ></a>
                    <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                </div>
                <div class=" w-max lg:w-1/2 p-2 lg:py-6 relative mx-auto lg:mx-0 ">
                    <a href="{{route('careers.page',['page' =>'account_intern' ])}}" class="hover:text-primary  transition-all  duration-[500]">Account Intern ></a>
                    <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                </div>
                <div class="  w-max lg:w-1/2 p-2 lg:py-6 relative mx-auto lg:mx-0">
                    <a href="{{route('careers.page',['page' =>'graphic_designer' ])}}" class="hover:text-primary  transition-all  duration-[500]">Jr. Graphic Designer ></a>
                    <div class="h-0.5 w-10 bg-primary absolute bottom-0 lg:left-0 lg:translate-x-0 left-1/2 -translate-x-1/2"></div>

                </div>
            </div>

            <form action="" class="mt-10">
                <div class="font-light text-base lg:text-sm mb-6 text-center lg:text-left">
                    Don't see what you are looking for?
                    <br>
                    Send us your CV here anyway. If it fits, we'll be in touch.
                </div>
                <div class="text-center lg:text-left">
                    <button class="text-white bg-black px-10 py-1 text-lg transition-colors hover:bg-primary duration-300"> Apply </button>
                </div>
            </form>
        </div>
    </div>
@endsection
