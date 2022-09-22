@extends('layouts.main')

@section('hero-img')    
    <img class="absolute min-h-full object-cover" src="{{asset('img/about.jpg')}}" alt="about us">
@endsection

@section('hero')
    Get to know who we are. 
@endsection

@section('cover')
    <picture class="relative w-full h-112 md:h-128 mb-6 overflow-hidden">                
        @yield('hero-img')
        <div class='absolute inset-0 w-full h-full bg-black opacity-50'></div>               
        <h1 class="absolute top-2/4 md:top-4/6 left-8 text-white font-bold text-start text-4xl md:text-6xl w-3/5">@yield('hero')</h1>        
    </picture>
@endsection

@section('team')            
    <h2 class="text-black font-bold text-4xl md:text-5xl md:mb-6 ml-8 md:ml-0 md:mt-4">Know our team members</h2> 
    <section class="min xl:w-11/12 xl:max-w-full h-fit p-10 flex flex-col md:grid md:grid-cols-2 xl:grid-cols-4 gap-5">                        
        @for ($x=0; $x < 11; $x++)
            <div class="w-full bg-gray-200 mb-6 shadow-lg rounded-xl mt-16">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full flex justify-center">
                            <div class="relative">
                                <img src="{{ asset('img/happy.jpg') }}" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]"/>
                            </div>
                        </div>
                        <div class="w-full text-center h-4 mt-20"></div>
                    </div>
                    <div class="text-center mt-2">
                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Mike Thompson</h3>
                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Second grade, Elementary
                        </div>
                    </div>
                    <div class="mt-2 py-6 border-t border-slate-200 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full px-4">
                                <p class="font-light leading-relaxed text-slate-600 mb-4">An artist of considerable range, Mike is the name taken by Melbourne-raised, Brooklyn-based Nick Murphy writes, performs and records all of his own music, giving it a warm.</p>
                                <a href="" class="font-normal text-white hover:text-yellow-500 bg-red-800 p-2 rounded-lg">Send email</a>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        @endfor
             
    </section>    
@endsection