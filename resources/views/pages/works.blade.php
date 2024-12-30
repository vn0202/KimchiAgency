@extends("layout.master")
@section('content')

    <div class="flex flex-col lg:flex-row lg:gap-16 lg:flex-1">
        <div class=" min-h-52 lg:h-[100vh] justify-center relative lg:flex lg:flex-col lg:w-4/12 overflow-hidden">
            <div class="absolute -z-1 left-0 w-full lg:static lg:h-[50vh]">
                <img class="max-w-full w-full h-full object-fit" src="https://kimchiagency.com/images/products/cat/resized/image_1611103289.jpg.webp" alt="">
            </div>
            <div class="translate-y-1/2 lg:translate-y-0 lg:bg-black lg:pl-10 lg:pt-6 lg:flex-1 lg:h-[50vh]">
                <h2 class="text-5xl font-light text-white text-center lg:text-start mb-4">Strategic <br> Planning</h2>
                <div class=" flex  font-light bg-white lg:bg-transparent overflow-x-scroll lg:overflow-hidden rounded-full lg:rounded-none lg:flex-col lg:text-white">
                    <div class="shrink-0 p-4 lg:p-1 bg-black lg:bg-transparent text-white rounded-full ">
                        <a  href="#" class="hover:text-primary {{$cat==\Illuminate\Support\Str::slug('Strategic Planning') ? 'active-v2' : ''}}"> Strategic Planning ></a>
                    </div>
                    <div class="shrink-0 p-2 lg:p-1 ">
                        <a href="#" class="hover:text-primary {{$cat==\Illuminate\Support\Str::slug('Digital') ? 'active-v2' : ''}}">Digital ></a>
                    </div>
                    <div class="shrink-0 p-2 lg:p-1	">
                        <a href="#" class="hover:text-primary {{$cat==\Illuminate\Support\Str::slug('Performance Ads') ? 'active-v2' : ''}}">Performance Ads ></a>
                    </div>
                    <div class="shrink-0 p-2 lg:p-1	">
                        <a href="#" class="hover:text-primary {{$cat==\Illuminate\Support\Str::slug('Web Design') ? 'active-v2' : ''}}">Web Design ></a>
                    </div>
                    <div class=" shrink-0 p-2 lg:p-1 {{$cat==\Illuminate\Support\Str::slug('Video Production') ? 'active-v2' : ''}}">
                        <a href="#" class="hover:text-primary">Video Production ></a>
                    </div>

                </div>

            </div>
        </div>
        <div  class="lg:w-7/12 px-4 mt-10 lg:mt-0 flex-1 lg:h-[100vh] overflow-y-auto no-scrollbar" >
            <div>
                <div class="relative">
                    <x-dom.post-card/>
                    <x-dom.post-card/>
                    <x-dom.post-card class="lg:absolute lg:right-0 lg:w-[45%] lg:top-1/2 lg:-translate-y-1/2"/>
                </div>
                <div class="relative">
                    <x-dom.post-card/>
                    <x-dom.post-card class="lg:absolute right-0 lg:w-[45%] top-0"/>
                </div>
            </div>
        </div>
    </div>
@endsection
