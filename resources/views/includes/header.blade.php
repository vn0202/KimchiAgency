<header   @click.outside="dropdown=false" id="header" x-data="{dropdown:false}" class=" relative lg:hidden flex justify-between items-center bg-white p-4">
    <a class="block" href="{{route("home")}}">
        <img class="w-[105px]" src="{{asset("images/kimchi.svg")}}" alt="">
    </a>
    <div  @click="dropdown = !dropdown"s class="bg-black w-10 h-10 rounded-full flex items-center justify-center">
        <i class="fa-solid fa-bars text-white"></i>
    </div>
    <nav  :class="dropdown ? 'h-[300px] ' : 'h-0'"
          x-init="$el.style.top = document.getElementById('header').offsetHeight + 'px';"
          class="absolute transition-all z-[50]  duration-300  bg-[#f7f7f7] left-0 w-full px-4 overflow-hidden">
        <div>
            <style>
                .active{
                    position: relative;
                }
                .active::after{
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
            </style>
            <a href="{{route("home")}}" class="{{\Illuminate\Support\Str::contains(Route::currentRouteName(), "works") ? 'active' :''}} block">home-</a>
        </div>
        <div>
            <a href="{{route("works")}}" class="block pt-4 {{\Illuminate\Support\Str::contains(Route::currentRouteName(), "works") ? 'active' :''}}">works-</a>
        </div>
        <div>
            <a href="{{route('about')}}" class="block pt-4 {{\Illuminate\Support\Str::contains(Route::currentRouteName(), "about") ? 'active' :''}}">about-</a>
        </div>
        <div>
            <a href="{{route("careers.page")}}" class="block pt-4 {{\Illuminate\Support\Str::contains(Route::currentRouteName(), "careers") ? 'active' :''}}">careers-</a>
        </div>
        <div>
            <a href="{{route("contact")}}" class="block pt-4 {{\Illuminate\Support\Str::contains(Route::currentRouteName(), "contact") ? 'active' :''}}">contact --</a>
        </div>
    </nav>


</header>
