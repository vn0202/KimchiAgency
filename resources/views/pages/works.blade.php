@extends("layout.master")
@section('content')

    <div class="flex flex-col lg:flex-row lg:gap-16 lg:flex-1">
        <div class=" min-h-52 lg:h-[100vh] justify-center relative items-center  flex lg:flex-col lg:w-4/12 overflow-hidden">
            <div class="absolute -z-1 left-0 w-full lg:static lg:h-[50vh] ">
                <img class="max-w-full w-full h-full object-fit" src="https://kimchiagency.com/images/products/cat/resized/image_1611103289.jpg.webp" alt="">
            </div>
            <div class="relative w-full lg:bg-black lg:pl-10 lg:pt-6 lg:flex-1 lg:h-[50vh]">
                <h2 class="text-5xl font-medium lg:font-light text-white text-center lg:text-start mb-4">{{$cat->name}}</h2>
                <div class=" flex  font-light bg-white lg:bg-transparent overflow-x-scroll lg:overflow-hidden rounded-full lg:rounded-none lg:flex-col lg:text-white">
                    @foreach($cats as $_cat)
                        <div class="shrink-0 p-4 lg:p-1 {{$cat->slug == $_cat->slug ? 'bg-black text-white' : 'text-black'}} lg:bg-transparent rounded-full ">
                            <a  href="{{$_cat->url()}}" class="hover:text-primary {{$cat->slug == $_cat->slug ? 'active-v2' : ''}}"> {{$_cat->name}} ></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div  class="lg:w-7/12 px-4 mt-10 lg:mt-0 flex-1 lg:h-[100vh] overflow-y-auto no-scrollbar" >

            <div>
                @foreach($posts->chunk(3) as $chunk_posts)
                <div class="relative">
                    @foreach($chunk_posts as $key => $post)
                        @if($key == 2)
                    <x-dom.post-card :post="$post" class="lg:absolute lg:right-0 lg:w-[45%] lg:top-1/2 lg:-translate-y-1/2"/>
                        @else
                            <x-dom.post-card :post="$post" />
                        @endif
                    @endforeach

                </div>

                @endforeach

            </div>

        </div>
    </div>
@endsection
