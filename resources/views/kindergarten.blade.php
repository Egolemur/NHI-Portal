@extends('layouts.main')

@section('nav')
<a class="pr-5 md:text-lg text-gray-50" href="/kindergarten">Preescolar</a>
<a class="pr-5 md:text-lg text-gray-50" href="/elementary">Primaria</a>
<a class="pr-5 md:text-lg text-gray-50" href="/about">Nosotros</a>
<a class="pr-5 md:text-lg text-gray-50" href="/enrollment">Inscripciones</a>
@endsection

@section('hero-img')
    <img class="left-0 absolute w-full object-cover" src="{{asset('img/kinder-cover.jpeg')}}" alt="kindergarten">
@endsection

@section('hero')
    We strive to give the youngest our best, always.
@endsection

@section('cover')
    <picture class="relative w-full h-112 md:h-128 mb-6 overflow-hidden">                
        @yield('hero-img')
        <div class='absolute inset-0 w-full h-full bg-black opacity-50'></div>               
        <h1 class="absolute top-2/4 md:top-4/6 left-8 text-white font-bold text-start text-4xl md:text-6xl w-3/5">@yield('hero')</h1>        
    </picture>    
@endsection

@section('info')
    <h2 class="text-black font-bold text-4xl md:text-5xl md:mb-0 md:m-4 text-center">Our passion and dedication make the whole difference</h2>    
    <section class="md:pl-8 flex flex-col-reverse md:flex-col w-11/12 max-w-[92%] items-center mb-6 md:grid md:grid-cols-2 md:rounded-xl mt-4">        
        <p class="h-full md:p-6 xl:p-16 md:bg-gradient-to-l md:from-gray-300 md:to-white md:text-lg xl:text-2xl md:text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut sit libero magni aperiam possimus, enim praesentium dignissimos architecto, harum quae veritatis. Provident magnam consequuntur dolorum quam ipsa, quod inventore.</p>
        <img class="h-full object-cover pb-6 md:p-0 w-full md:rounded-r-xl" src="{{asset('img/happy.jpg')}}" alt="">
    </section>    
@endsection