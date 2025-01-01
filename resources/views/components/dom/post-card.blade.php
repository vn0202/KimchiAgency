<div {{$attributes->merge(['class' => "lg:w-[45%] pb-10 relative mb-8"]) }} >
    <div class="mb-4">
        <img class=" w-full lg:w-[10.417vw] max-w-full rounded-xl lg:rounded-none lg:aspect-square object-cover"
             src="{{$post->featureMedia->url()}}" alt="">
    </div>
    <div>
        <a class="text-2xl lg:text-4xl" href="{{$post->url}}">{{$post->title}}</a>
    </div>
    <div class="h-0.5 w-12 bg-[#ffcd4a] absolute bottom-0"></div>
</div>
