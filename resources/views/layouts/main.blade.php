<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Horizon Institute</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    
</head>

<body class="flex flex-col min-h-screen w-full m-0 bg-gray-200 items-center">
    <header class="w-full h-fit xl:h-40 bg-red-900">
        <div class="xl:max-w-screen-2xl flex flex-col xl:flex-row items-center justify-between py-6 px-6 mx-auto">
            <div class="py-2 h-full">
                <a class="flex flex-col xl:flex-row items-center md:gap-x-4" href="/">
                    <img class="h-28" src="{{asset('img/logo.png')}}" alt="Logo NHI">
                    <h1 class="text-start text-2xl md:text-3xl lg:text-5xl text-gray-50 font-light">New Horizon Institute</h1>
                </a>            
            </div>        
            <nav class="h-full">    
                <ul class="flex flex-col xl:flex-row items-center h-full">
                    <a class="xl:pr-6 xl:border-r-2 flex items-center xl:text-2xl h-1/4 text-gray-50 font-bold" href="/kindergarten">Preescolar</a>
                    <a class="xl:px-6 xl:border-r-2 flex items-center xl:text-2xl h-1/4 text-gray-50 font-bold" href="/elementary">Primaria</a>
                    <a class="xl:px-6 xl:border-r-2 flex items-center xl:text-2xl h-1/4 text-gray-50 font-bold" href="/about">Nosotros</a>
                    <a class= "xl:pl-6 flex items-center xl:text-2xl h-1/4 text-gray-50 font-bold" href="/enrollment">Inscripciones</a> 
                    @auth
                    <form method="POST" action="{{ route('logout') }}">                            
                        @csrf
                        <button type="submit" class= "xl:pl-6 xl:ml-6 xl:border-l-2 flex items-center xl:text-2xl h-1/4 text-gray-50 font-bold">Log Out</button>                     
                    </form>
                    @endauth                  
                </ul> 
            </nav>
        </div>            
    </header>

    <main class="flex flex-col items-center h-full w-full xl:max-w-screen-2xl bg-white drop-shadow-2xl">            
        @yield('cover')  
        @yield('info')  
        @yield('english')
        @yield('activities')    
        @yield('team')
        @yield('testimonials')
    </main>    

    <footer class="h-auto w-full xl:max-w-screen-2xl flex flex-col items-center p-6 mx-auto">
        <section class="w-full">
            <nav class="w-full">
                <ul class="p-4 flex flex-col md:flex-row w-full items-center">
                    <li class="md:w-1/2">
                        <a class="flex items-center md:text-xl h-1/4 text-gray-500" href="/kindergarten">Preescolar</a>
                    </li>

                    <li class="md:w-1/2">
                        <a class="flex items-center md:text-xl h-1/4 text-gray-500" href="/elementary">Primaria</a>    
                    </li>

                    <li class="md:w-1/2">
                        <a class="flex items-center md:text-xl h-1/4 text-gray-500" href="/about">Nosotros</a>    
                    </li>

                    <li class="md:w-1/2">
                        <a class= "flex items-center md:text-xl h-1/4 text-gray-500" href="/enrollment">Inscripciones</a>                       
                    </li>

                    @guest
                        <li class="md:w-1/2">
                            <a class= "flex items-center md:text-xl h-1/4 text-gray-500" href="/login">Iniciar sesión</a>                   
                        </li>                        
                    @endguest
                </ul>
            </nav>
        </section>
        <section class="mb-6">            
            <p class="text-sm px-4 md:text-xl flex items-center h-full my-auto">© All rights reserved, New Horizon institute. {{ date('D M d, Y') }}</p>
        </section>
    </footer>
</body>
</html>