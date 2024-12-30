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
    }" class=" side-bar-left flex flex-col-reverse justify-center gap-20 h-full text-lg font-medium">
        <div class="-rotate-90">
            <a href="{{route('home')}}" class="block" :class="current_page=='home' && 'active'" @mousemove.self="handleUI('home')" @mouseleave="handleUI('home',true)">home-</a>
        </div>
        <div class="-rotate-90">
            <a href="{{route('works')}}" class=" block {{\Illuminate\Support\Str::contains(Route::currentRouteName(), "works") ? 'active' :''}}" @mouseover.self="handleUI('works',$el)" @mouseleave="handleUI('works',$el,true)">works-</a>
        </div>
        <div class="-rotate-90">
            <a href="{{route('about')}}" class=" block {{\Illuminate\Support\Str::contains(Route::currentRouteName(), "about") ? 'active' :''}}" @mousemove.self="handleUI('about',$el)" @mouseleave="handleUI('about',$el,true)">about-</a>
        </div>
        <div class="-rotate-90">
            <a href="{{route("careers")}}" class=" block {{\Illuminate\Support\Str::contains(Route::currentRouteName(), "careers") ? 'active' :''}}" @mousemove.self="handleUI('careers', $el)" @mouseleave="handleUI('careers',$el,true)">careers-</a>
        </div>
        <div class="-rotate-90">
            <a href="{{route('contact')}}" class=" block {{\Illuminate\Support\Str::contains(Route::currentRouteName(), "contact") ? 'active' :''}}" @mousemove.self="handleUI('contact',$el)" @mouseleave="handleUI('contact',$el,true)">contact-</a>
        </div>
    </nav>
