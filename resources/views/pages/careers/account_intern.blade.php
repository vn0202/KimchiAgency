@extends('layout.master')
@section('content')
    <div x-data="{open_modal: false}" class="flex flex-col lg:flex-row lg:gap-16 lg:flex-1">
        <div
            class=" min-h-52 lg:h-[100vh] justify-center relative flex items-center lg:items-start lg:flex-col lg:justify-between lg:w-4/12 overflow-hidden">
            <h2 class="font-bold text-4xl text-center lg:text-left text-white z-10 relative mb-4 pl-10 py-12 w-full">
                 Account <br> Intern
            </h2>
            <div class="since_text relative z-10 text-primary mb-10 ml-10 hidden lg:block">
                <span>Careers</span>
            </div>
            <div class="absolute -z-1 left-0 w-full overflow-hidden top-0 bottom-0">
                <img class="max-w-full w-full h-full object-cover"
                     src="https://kimchiagency.com/images/contents/2021/01/06/resized/about_1609908242.jpg" alt="">
            </div>
        </div>
        <div class="lg:w-7/12  px-4 lg:px-10 flex-1 lg:h-[100vh] overflow-y-auto no-scrollbar py-10">
            <h1 class="text-2xl font-medium mb-[4vw]">Contribute to design multiple projects a variety of clients brief through to execution as a member of the Creative team.


            </h1>
            <div class="lg:pr-28 mb-10 lg:leading-[1.858vw] lg:text-[1.06vw]">
                <strong>Key Responsibilities</strong>
                <p>
                    - Work collaboratively with all colleagues particularly Art Directors within Creative Team to produce high standards of finished work.
                </p>
                <p>
                    - To make up colour dummies for DM, Leaflet, POP & Print Advertising items for client presentation.</p>
                <p>
                    - Review and make sure to complete the data of material supplied lists, finally checked all task completed as required by internal and complete the job bag procedures accordingly.
                </p>


            </div>
            <div class="lg:pr-28 mb-10 lg:leading-[1.858vw] lg:text-[1.06vw]">
                <strong>Requirements</strong>
                <p>- Minimum of 3 working years in creative agency with 1 years of experience as Senior Designer

                </p>
                <p>- Experience in integrated marketing is preferred</p>
                <p>- Proficient or expert in all appropriate software</p>
                <p>- Run projects to brief, on time and within budget</p>

            </div>

            <div class="text-center lg:text-left">
                <button @click="open_modal= true"
                        class="text-white bg-black text-xl hover:bg-primary transition-colors duration-300 px-10 py-2">
                    Apply
                </button>
            </div>
        </div>
        <div x-cloak x-show="open_modal"
             class="fixed z-[1000] bottom-0 left-0 right-0 top-0 bg-opacity-75 bg-black flex justify-center items-center p-6 lg:p-0">

            <div class="bg-white p-6 lg:p-10 relative ">
                <div
                    class="bg-black text-white  top-0 -translate-y-1/2 translate-x-1/2 h-10 w-10 absolute right-0 flex items-center justify-center">
                    <svg version="1.1" class="fill-white" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 409.806 409.806"
                         style="enable-background:new 0 0 409.806 409.806;" xml:space="preserve">
		<g>
            <g>
                <path d="M228.929,205.01L404.596,29.343c6.78-6.548,6.968-17.352,0.42-24.132c-6.548-6.78-17.352-6.968-24.132-0.42
				c-0.142,0.137-0.282,0.277-0.42,0.42L204.796,180.878L29.129,5.21c-6.78-6.548-17.584-6.36-24.132,0.42
				c-6.388,6.614-6.388,17.099,0,23.713L180.664,205.01L4.997,380.677c-6.663,6.664-6.663,17.468,0,24.132
				c6.664,6.662,17.468,6.662,24.132,0l175.667-175.667l175.667,175.667c6.78,6.548,17.584,6.36,24.132-0.42
				c6.387-6.614,6.387-17.099,0-23.712L228.929,205.01z"></path>
            </g>
        </g>

	</svg>
                </div>
                <form @click.outside="open_modal=false" action="{{route("send_message")}}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="flex block">
                        <div class="mb-6 flex-1">
                            <lable class="font-light" for="name"> Your name *</lable>
                            <input value="{{old('name')}}" name="name"
                                   class="{{$errors->get('name') ? 'border-red-500' : 'border-[#3c3b3b]'  }} border-r-[1px] border-[2px] block  pl-4 py-2 lg:py-3 w-full"
                                   id="name" type="text">
                            @error('name')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="mb-6 flex-1">
                            <lable class="font-light" for="phone"> Your phone *</lable>
                            <input value="{{old('phone')}}" name="phone"
                                   class="border-l-[1px] border-[2px] block border-[#3c3b3b] pl-4 py-2 lg:py-3 w-full"
                                   id="phone" type="text">
                            @if($errors->has('phone') && !$errors->has('name'))
                                <p class="text-red-500">{{$errors->get('phone')[0]}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="mb-6">
                        <lable class="font-light" for="message"> Your email *</lable>

                        <div class="flex items-center">
                            <div class="lg:mr-6">
                                <input value="{{old('email')}}" name="email"
                                       class="lg:border-l-[1px] border-[2px] block border-[#3c3b3b] pl-4 py-2 lg:py-3 w-full"
                                       id="email" type="text">
                                @if($errors->has('email') && (!$errors->has('phone') && !$errors->has('name')))
                                    <p class="text-red-500">{{$errors->get('email')[0]}}</p>
                                @endif

                            </div>
                            <div>
                                <input class="hidden" name="your_cv" type="file" id="fileInput"/>
                                <label for="fileInput">
                                    <span class="icon">📁</span>
                                    <span class="text">Your CV</span>
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="mb-6">
                        <lable class="font-light" for="message"> Your message *</lable>
                        <textarea class="lg:hidden border-[2px] block border-[#3c3b3b] pl-4 py-4 lg:py-3 w-full"
                                  name="message" id="message" cols="30" rows="3"></textarea>
                        <textarea class="hidden lg:block border-[2px] border-[#3c3b3b] pl-4 py-4 lg:py-3 w-full"
                                  name="message" id="message" cols="30" rows="6"></textarea>
                        @if($errors->has('message') && (!$errors->has('email') && !$errors->has('name')))
                            <p class="text-red-500">{{$errors->get('email')[0]}}</p>
                        @endif
                    </div>
                    <div class="lg:text-center">
                        <button
                            class="text-white bg-black text-2xl hover:bg-primary transition-colors duration-300 px-10 py-2">
                            Apply
                        </button>
                    </div>

                </form>

            </div>


        </div>
    </div>
@endsection
