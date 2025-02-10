<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    @stack("before_styles")
    @stack("preload")
    @vite(['resources/css/app.css','resources/css/themes/default.scss'])
    <style>
        .active{
            position: relative;
        }
        .active::after{
            content: "";
            display: inline-block;
            width: 30px;
            height: 12px;
            background: var(--color-primary);
            opacity: 0.8;
            position: absolute;
            bottom: 18%;
            left: 0;
        }
    </style>
    @stack("after_styles")

</head>
<body>

 <main class=" container mx-auto text-normal lg:flex">
     @include("includes.header")
     <div class="w-1/12 h-[100vh] hidden lg:block">
         @include('includes.side-bar-left')
     </div>


     @yield("content")

     <div class="lg:w-[180px]">
         @include("includes.footer")

     </div>

 </main>

@stack('before_scripts')

</body>
</html>
