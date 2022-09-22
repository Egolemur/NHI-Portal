@extends('layouts.main')

@section('hero-img')
    <img class="absolute min-h-full object-cover" src="{{asset('img/hero.jpg')}}" alt="kids studying">
@endsection

@section('hero')
    We make the extraordinary happen.
@endsection

@section('cover')
    <picture class="relative w-full h-112 md:h-128 mb-6 overflow-hidden">                
        @yield('hero-img')
        <div class='absolute inset-0 w-full h-full bg-black opacity-50'></div>               
        <h1 class="absolute top-2/4 md:top-4/6 left-8 text-white font-bold text-start text-4xl md:text-6xl w-3/5">@yield('hero')</h1>        
    </picture>    
@endsection

@section('info')

  <div class="flex md:grid md:grid-rows-1 md:grid-columns-3">
    <div class="w-full col-auto">      
      <h2 class="text-black font-bold text-4xl md:text-5xl md:mb-0 md:m-4 text-center">Who are we?</h2>    
      <section class="md:pl-8 flex flex-col-reverse md:flex-col w-11/12 max-w-[92%] items-center mb-6 md:grid md:grid-cols-2 md:rounded-xl mt-4">        
          <p class="h-full md:p-6 xl:p-16 md:bg-gradient-to-l md:from-gray-300 md:to-white md:text-lg xl:text-2xl md:text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut sit libero magni aperiam possimus, enim praesentium dignissimos architecto, harum quae veritatis. Provident magnam consequuntur dolorum quam ipsa, quod inventore.</p>
          <img class="h-full object-cover pb-6 md:p-0 w-full md:rounded-r-xl" src="{{asset('img/happy.jpg')}}" alt="">
      </section>    
    </div>
    
    <div class="w-full col-auto">      
      <h2 class="text-black font-bold text-4xl md:text-5xl md:mb-0 md:mt-4 text-center">Classes 100% in English</h2>    
      <section class="flex flex-col w-11/12 max-w-[92%] items-center py-8 pr-8 mb-6 md:grid md:grid-cols-2">        
          <img class="pb-6 md:p-0 w-full" src="{{asset('img/global.jpg')}}" alt="">
          <p class="h-full md:p-6 xl:p-16 md:bg-gradient-to-r md:from-gray-300 md:to-white md:text-lg xl:text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut sit libero magni aperiam possimus, enim praesentium dignissimos architecto, harum quae veritatis. Provident magnam consequuntur dolorum quam ipsa, quod inventore.</p>
      </section>    
    </div>
    
    <div class="w-full col-auto">      
      <h2 class="text-black font-bold text-4xl md:text-5xl md:mb-0 md:mt-4">Our activities</h2>
      <section class="flex flex-col w-11/12 max-w-[92%] items-center py-8 mb-6 md:grid md:grid-cols-2 xl:grid-cols-4 md:gap-8">
          
          <div class="mx-auto flex w-full mb-4 md:mb-0 flex-col justify-center bg-white rounded-2xl shadow-xl shadow-slate-300/60">
              <!-- img -->
              <img class="aspect-video w-full rounded-t-2xl object-cover object-center" src="https://images.pexels.com/photos/3311574/pexels-photo-3311574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
              <!-- text information -->
              <div class="p-4">            
              <h1 class="text-2xl font-medium text-slate-600 pb-2">Open Class</h1>
              <p class="text-sm tracking-tight font-light text-slate-400 leading-6">Dodge is an American brand of automobiles and a division of Stellantis, based in Auburn Hills, Michigan..</p>
              </div>
          </div>
          
          <div class="mx-auto flex w-full mb-4 md:mb-0 flex-col justify-center bg-white rounded-2xl shadow-xl shadow-slate-300/60">
              <!-- img -->
              <img class="aspect-video w-full rounded-t-2xl object-cover object-center" src="https://images.pexels.com/photos/3311574/pexels-photo-3311574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
              <!-- text information -->
              <div class="p-4">            
              <h1 class="text-2xl font-medium text-slate-600 pb-2">Talent Show</h1>
              <p class="text-sm tracking-tight font-light text-slate-400 leading-6">Dodge is an American brand of automobiles and a division of Stellantis, based in Auburn Hills, Michigan..</p>
              </div>
          </div>
          
          <div class="mx-auto flex w-full mb-4 md:mb-0 flex-col justify-center bg-white rounded-2xl shadow-xl shadow-slate-300/60">
              <!-- img -->
              <img class="aspect-video w-full rounded-t-2xl object-cover object-center" src="https://images.pexels.com/photos/3311574/pexels-photo-3311574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
              <!-- text information -->
              <div class="p-4">            
              <h1 class="text-2xl font-medium text-slate-600 pb-2">Volcanos Expo</h1>
              <p class="text-sm tracking-tight font-light text-slate-400 leading-6">Dodge is an American brand of automobiles and a division of Stellantis, based in Auburn Hills, Michigan..</p>
              </div>
          </div>
          
          <div class="mx-auto flex w-full mb-4 md:mb-0 flex-col justify-center bg-white rounded-2xl shadow-xl shadow-slate-300/60">
              <!-- img -->
              <img class="aspect-video w-full rounded-t-2xl object-cover object-center" src="https://images.pexels.com/photos/3311574/pexels-photo-3311574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
              <!-- text information -->
              <div class="p-4">            
              <h1 class="text-2xl font-medium text-slate-600 pb-2">School trip</h1>
              <p class="text-sm tracking-tight font-light text-slate-400 leading-6">Dodge is an American brand of automobiles and a division of Stellantis, based in Auburn Hills, Michigan..</p>
              </div>
          </div>                
      </section>
    </div>
  </div>  

    <h2 class="text-black font-bold text-4xl md:text-5xl md:mb-0 md:mt-4 ml-8 md:ml-0">
      What people are saying about us
    </h2>
    <section class="min xl:w-11/12 xl:max-w-full h-fit p-10 flex flex-col md:grid md:grid-cols-3 gap-10">
        <div class="div4 eachdiv">
            <div class="userdetails">
              <div class="imgbox">
                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jeanette.jpg" alt="">
              </div>
              <div class="detbox">
                <p class="name dark">Jeanette Harmon</p>
                <p class="designation dark">Verified Graduate</p>
              </div>
            </div>
            <div class="review dark">
              <h4>An overall wonderful and rewarding experience</h4>
            <p>“ Thank you for the wonderful experience! I now have a job I really enjoy, and make a good living while doing something I love. ”</p>
            </div>
          </div>
                    
        <div class="div4 eachdiv">
            <div class="userdetails">
              <div class="imgbox">
                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jeanette.jpg" alt="">
              </div>
              <div class="detbox">
                <p class="name dark">Jeanette Harmon</p>
                <p class="designation dark">Verified Graduate</p>
              </div>
            </div>
            <div class="review dark">
              <h4>An overall wonderful and rewarding experience</h4>
            <p>“ Thank you for the wonderful experience! I now have a job I really enjoy, and make a good living while doing something I love. ”</p>
            </div>
          </div>
                    
        <div class="div4 eachdiv">
            <div class="userdetails">
              <div class="imgbox">
                <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jeanette.jpg" alt="">
              </div>
              <div class="detbox">
                <p class="name dark">Jeanette Harmon</p>
                <p class="designation dark">Verified Graduate</p>
              </div>
            </div>
            <div class="review dark">
              <h4>An overall wonderful and rewarding experience</h4>
            <p>“ Thank you for the wonderful experience! I now have a job I really enjoy, and make a good living while doing something I love. ”</p>
            </div>
          </div>                    
    </section>  

@endsection

@section('english')
@endsection

@section('activities')      
@endsection

@section('testimonials')    
@endsection

