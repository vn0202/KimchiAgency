@extends('layout.master')
@section('content')
    @php
    $post = \App\Models\Post::first();
    $attachment = $post->featureMedia;
 @endphp
    <div class="flex flex-col lg:flex-row lg:gap-16 lg:flex-1">
        <div class=" min-h-52 lg:h-[100vh] justify-center relative lg:flex lg:flex-col lg:w-4/12 overflow-hidden">

            <div class=" bg-black  p-10 lg:p-20 lg:flex-1 lg:h-[50vh] mb-6 lg:mb-10">
                <h2 class="font-medium lg:font-light text-5xl text-white text-center lg:text-start mb-4">{{$post->title}}</h2>
                <div class="flex gap-10">
                    <div class="h-[1px] w-10 bg-primary mt-3 hidden lg:block"></div>
                    <div class="text-primary flex-1">
                        <div class=" text-center lg:text-left lg:mb-10 text-sm">
                            <span> {{$post->category->name}}</span>
                        </div>
                        <p class="text-center lg:text-left"> {{\Carbon\Carbon::parse($post->created_at)->year}}</p>
                    </div>
                </div>

            </div>
            <div class="lg:h-[50vh] font-light mt-6 lg:mt-10 p-4 lg:p-0">
                <p class=" mb-4 lg:mb-10  leading-loose"> {{$post->description}}
                </p>
                    <span class="bg-[#dbdbdb] text-xl lg:text-base">
                        @foreach($post->tags()->get() as $tag)
                            #{{$tag->name_text }}
                        @endforeach
                </span>
            </div>


        </div>

        <div class="lg:w-7/12 px-4 lg:mt-0 flex-1 lg:h-[100vh] overflow-y-auto no-scrollbar lg:py-10">

            {!! html_entity_decode($post->content) !!}

        </div>
    </div>
@endsection
