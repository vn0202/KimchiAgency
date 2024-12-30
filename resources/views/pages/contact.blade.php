@extends('layout.master')
@section('content')
    <div class="flex flex-col lg:flex-row lg:gap-16 lg:flex-1">
        <div class=" min-h-52 lg:h-[100vh] justify-center relative lg:flex-col lg:w-4/12 overflow-hidden">

            <div class=" bg-black  p-10 lg:p-20 lg:flex-1 lg:h-[50vh]">
                <h2 class="font-bold text-3xl text-white text-center lg:text-start mb-4">Contact</h2>
               <div class="flex gap-10">
                   <div class="h-[1px] w-1/4 bg-primary mt-2"></div>
                   <div class="text-primary flex-1">
                       2nd floor, The Terra Office building, 83 Hao Nam, Dong Da District, Hanoi, Vietnam

                       <br>
                       <p class="mt-6">
                           (84) 98 598 93 39

                           hello@kimchiagency.com
                       </p>
                   </div>
               </div>

            </div>
            <div class="lg:h-[50vh]">
                <iframe class="lg:h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1745034234978!2d105.8436100751995!3d21.02570258062287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab00668c5219%3A0x1401f5b341e08808!2sRegus%20-%20Hanoi%2C%20Hanoi%20Tower!5e0!3m2!1sen!2s!4v1735379765947!5m2!1sen!2s" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

        <div  class="lg:w-7/12 px-4 mt-10 lg:mt-0 flex-1 lg:h-[100vh] overflow-y-auto no-scrollbar py-10" >

            <div>
                <h2 class="lg:text-left lg:my-16 text-center font-medium text-4xl">TALK TO US </h2>

                <form action="{{route("send_message")}}" method="POST">
                   @csrf
                    <div class="lg:flex block">
                        <div class="mb-6 flex-1">
                            <lable class="font-light" for="name"> Your name *</lable>
                            <input value="{{old('name')}}" name="name" class="{{$errors->get('name') ? 'border-red-500' : 'border-[#3c3b3b]'  }} lg:border-r-[1px] border-[2px] block  pl-4 py-4 lg:py-3 w-full" id="name" type="text">
                            @error('name')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="mb-6 flex-1">
                            <lable class="font-light" for="email"> Your email *</lable>
                            <input value="{{old('email')}}" name="email" class="lg:border-l-[1px] border-[2px] block border-[#3c3b3b] pl-4 py-4 lg:py-3 w-full" id="email" type="text">
                           @if($errors->has('email') && !$errors->has('name'))
                            <p class="text-red-500">{{$errors->get('email')[0]}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="mb-6">
                        <lable class="font-light" for="message"> Your message *</lable>
                        <textarea class="lg:hidden border-[2px] block border-[#3c3b3b] pl-4 py-4 lg:py-3 w-full" name="message" id="message" cols="30" rows="5"></textarea>
                        <textarea class="hidden lg:block border-[2px] border-[#3c3b3b] pl-4 py-4 lg:py-3 w-full" name="message" id="message" cols="30" rows="10"></textarea>
                        @if($errors->has('message') && (!$errors->has('email') && !$errors->has('name')))
                            <p class="text-red-500">{{$errors->get('email')[0]}}</p>
                        @endif
                    </div>
                    <div class="text-center">
                        <button class="text-white bg-black text-2xl hover:bg-primary transition-colors duration-300 px-10 py-2"> SEND </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
