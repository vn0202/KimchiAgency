<footer class="lg:h-full overflow-hidden">

      <div class=" flex lg:hidden justify-between items-center border-t py-10 bg-black mt-4 text-[#808080] text-lg ">
       <div class="mx-auto">
           <p>Copyright © 2020 T&amp;N.</p>

           <p>All Rights Reserved.</p>
       </div>
      </div>
    <div class="hidden lg:flex flex-col justify-between h-full items-center">
        <a class="block" href="{{route('home')}}">
            <img class="w-[105px]" src="{{\App\Models\StaticInfo::first()->logo->url()}}" alt="">
        </a>
        <div>
            <div class="-rotate-90 -translate-y-10 text-xs font-thin">
               {!! \App\Models\StaticInfo::first()->address !!}

                <p><a href="tel:(84) 98 598 93 39" class="font-bold">{{\App\Models\StaticInfo::first()->phone}}</a></p>
            </div>
        </div>
    </div>
</footer>
