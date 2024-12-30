<header   @click.outside="dropdown=false" id="header" x-data="{dropdown:false}" class=" relative lg:hidden flex justify-between items-center bg-white p-4">
    <div>
        <img class="w-[105px]" src="{{asset("images/kimchi.svg")}}" alt="">
    </div>
    <div  @click="dropdown = !dropdown"s class="bg-black w-10 h-10 rounded-full flex items-center justify-center">
        <i class="fa-solid fa-bars text-white"></i>
    </div>
    <nav  :class="dropdown ? 'h-max' : 'h-0'"
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
            <a href="#" class="active block">home-</a>
        </div>
        <div>
            <a href="#" class="block pt-4">works-</a>
        </div>
        <div>
            <a href="#" class="block pt-4">about-</a>
        </div>
        <div>
            <a href="#" class="block pt-4">careers-</a>
        </div>
        <div>
            <a href="#" class="block pt-4">contact --</a>
        </div>
    </nav>


</header>
