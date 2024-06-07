
<x-app-layout>
    <div>

    {{-- <section class="bg-white dark:bg-gray-900">  has both for dark and light mode--}}
    <section class="bg-[#FFCF8F]">
        <div class="bg-[#FFCF8F] grid max-w-screen-xl px-10 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
            <div class="mr-auto place-self-center lg:col-span-7 text-center lg:text-left ">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-black">All in one marketplace for sustainable shopping</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-[#736f6f]">From bamboo toothbrushes to organically grown Seeni Banana ,Echo provides Sri Lankans an eco-friendly alternative way to shop .</p>
              
                <a  href="{{ route('register') }}" :active="request()->routeIs('register')"" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium font-bold text-center text-white border border-gray-300 rounded-lg bg-[#2a752a] focus:ring-4 focus:ring-gray-100 dark:border-gray-700 ">
                    Get Started 
                </a> 
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}" class="font-semibold font text-black hover:text-gray-400  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> --}}
                    @else
                        {{-- <a href="{{ route('login') }}" class="font-semibold text-black hover:text-gray-900  dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> --}}

                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif
            </div>
            {{-- <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rounded-lg align-center justify-center">
                <a href="https://ibb.co/rQTmB6k"><img src="https://i.ibb.co/4F97bTW/fc066d4d37c905228ea87cb847c8a74f-removebg-preview.png" alt="fc066d4d37c905228ea87cb847c8a74f-removebg-preview" border="0"></a>
                {{-- <img class="rounded-lg" src=""> --}}
            {{-- </div>         --}} 
            
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rounded-lg">
                    {{-- <img class="rounded-lg" src=""> --}}
                <a href="https://imgbb.com/"><img src="https://i.ibb.co/ZG9Q6Rw/kisspng-earth-drawing-antioch-church-of-minden-clip-art-cartoon-earth-cliparts-5a75e3394286e7-504997.png" alt="kisspng-earth-drawing-antioch-church-of-minden-clip-art-cartoon-earth-cliparts-5a75e3394286e7-504997" class="w-[80%] mx-7 "></a>
                {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/p4zqrfp/796ac47123ba36185cc770f6ecf56bb9-removebg-preview.png" alt="796ac47123ba36185cc770f6ecf56bb9-removebg-preview" class="w-[1000%]"></a> --}}
            </div>
            
        </div>
    </section>

    <section class=" pb-9  text-center  px-6 w-[100%] bg-[#FFCF8F]">
      <div class="flex justify-center mx-20py-8 px-8 bg-[#ffdcae] rounded-md ">
          <div class="rounded-xl">
              <div class="max-w-[700px] text-center">
                  <h2 class="mb-6 text-center text-3xl font-extrabold uppercase pt-8">
                    Fighting Climate Change
                  </h2>
                  <p class="mb-16 text-[#403f3f] text-MD font-medium">
                    The environmental cost of our resource intensive lifestyles is frightening. <BR>
                    Some even say the damage is irreversible. <BR>
                    Some may not even care about the repercussions. And then there are some, like us, who believe that even the little choices we make today could lead to greater things in the future. 
                  </p>
                </div>
          </div>
       
          
      </div>
          
    
       
    
    
        
  
    
    </section>

    <section class="">
      <div class="bg-gray-200 w-full flex justify-center items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:py-24 lg:px-8 w-full">
          <div class="flex flex-col md:flex-row items-center md:items-start gap-20 justify-between">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-2 mt-4 order-2 md:order-1">
              <div class=" overflow-hidden shadow sm:rounded-lg  w-80 h-40">
                <div class="px-6 py-8 sm:p-10 bg-[#0360B6] ">
                  <dl>
                    <dt class="text-lg leading-5 font-medium text-white truncate">Microplastics</dt>
                    <dd class="mt-5 text-5xl leading-9 font-semibold text-[#f1f2f4]">269 K</dd>
                  </dl>
                </div>
              </div>
              <div class=" overflow-hidden shadow sm:rounded-lg bg-[#0360B6] w-80 h-40 ml-8">
                <div class="px-6 py-8 sm:p-10">
                  <dl>
                    <dt class="text-lg leading-5 font-medium text-white truncate">Industrial Carbon Emissions</dt>
                    <dd class="mt-5 text-5xl leading-9 font-semibold text-[#f1f2f4]">37.15 B</dd>
                  </dl>
                </div>
              </div>
              <div class=" overflow-hidden shadow sm:rounded-lg bg-[#0360B6] w-80 h-40">
                <div class="px-6 py-8 sm:p-10">
                  <dl>
                    <dt class="text-lg leading-5 font-medium text-gray-200 truncate">Non ethical labour</dt>
                    <dd class="mt-5 text-5xl leading-9 font-semibold text-[#f1f2f4]">25 M</dd>
                  </dl>
                </div>
              </div>
              <div class=" overflow-hidden shadow sm:rounded-lg bg-[#0360B6] w-80 h-40 ml-8">
                <div class="px-6 py-8 sm:p-10">
                  <dl>
                    <dt class="text-lg leading-5 font-medium text-gray-200 truncate">Yearly Municipal Waste</dt>
                    <dd class="mt-5 text-5xl leading-9 font-semibold text-[#f1f2f4]">2.01 B</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="order-1 md:order-2  text-right">
              <h1 class="max-w-2xl mb-4 ml-2 text-5xl font-extrabold tracking-tight text-black leading-none md:text-5xl xl:text-5xl">Making it convenient to love the planet</h1>
              <p class="text-2xl">It starts with you</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  



    <section class="text-center bg-[#0360B6] flex flex-col justify-center px-20">


            {{-- The Heading --}}
            <div>
              <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-[#FFCF8F] md:text-4xl lg:text-5xl pt-20">Ending the age of meaningless consumerism</h1>
              <p class="mb-6 text-lg font-light font-sans-serif text-gray-200 lg:text-2xl sm:px-16 xl:px-48 ">sustainable shopping at your doorstep</p>
              
            </div>
          
            <div class="flex justify-center gap-10 my-10 pb-20 pt-10">
              
              <div class="block max-w-sm p-6 bg-[#d2e2f3] rounded-md hover:bg-gray-100 w-[20em] ">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Sustainability</h5>
                <p class="font-normal text-lg text-gray-700 ">Products optimum for the society, economy and the environment </p>
              </div>
  
              <div class="block max-w-sm p-6 bg-[#d2e2f3] rounded-md hover:bg-gray-100 w-[20em] ">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Quality</h5>
                <p class="font-normal text-gray-700 text-lg ">Products that will last you a lifetime ,made with love and care</p>
              </div>

              <div class="block max-w-sm p-6 bg-[#d2e2f3] rounded-md hover:bg-gray-100 w-[20em] ">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Cost</h5>
                <p class="font-normal text-gray-700  text-lg">Being sustainable can also be afforable and in your budget</p>
              </div>
            </div>


            

    </section>


    
    {{-- <section class="mb-15 text-center  px-6 ">
        <div class="flex justify-center bg-[#F3ECDE] mx-20 py-8 px-8 rounded-lg">
            <div class="rounded-xl">
                <div class="max-w-[700px] text-center">
                    <h2 class="mb-6 text-center text-3xl font-bold uppercase">
                      Fighting Climate Change
                    </h2>
                    <p class="mb-16 text-[#403f3f]">
                      The environmental cost of our resource intensive lifestyles is frightening. Some even say the damage is irreversible. Some may not even care about the repercussions. And then there are some, like us, who believe that even the little choices we make today could lead to greater things in the future. 
                    </p>
                  </div>
            </div>
         
            
        </div>
 
      
      </section> --}}



         
        </div>
     
        
       
  












    
</div>
   

 
      
      </div>
</x-app-layout>