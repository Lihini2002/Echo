

<x-app-layout>
    <div

    {{-- <section class="bg-white dark:bg-gray-900">  has both for dark and light mode--}}
    <section class="bg-[#FFCF8F]">
        <div class="bg-[#FFCF8F] grid max-w-screen-xl px-10 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7 text-center lg:text-left ">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-black">All in one marketplace for sustainable shopping</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-[#736f6f]">From bamboo toothbrushes to organically grown Seeni Banana ,Echo provides Sri Lankans an eco-friendly alternative way to shop .</p>
              
                <a  href="{{ route('register') }}" :active="request()->routeIs('register')"" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium font-bold text-center text-white border border-gray-300 rounded-lg bg-[#2a752a] focus:ring-4 focus:ring-gray-100 dark:border-gray-700 ">
                    Get Started 
                </a> 
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold font text-black hover:text-gray-400  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-black hover:text-gray-900  dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
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

    
    <section class="mb-15 text-center  px-6 ">
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
            
      
         
      
      
          
    
      
      </section>


      {{-- The product catalogue start --}}

      {{-- <section class="flex-col justify-center gap-8">
        <div class="container mx-auto mt-10 px-6 ">
          <h2 class="text-3xl font-extrabold tracking-tight pl-2 uppercase py-5 text-gray-900 text-left">Featured Products</h2>
         
            <div class="bg-[#F3ECDE] rounded-xl">
              <h2 class="text-2xl w-[100%] bg-[#306B34] rounded-md text-center uppercase tracking-tight py-5 pl-10 text-[#c8d5cf] text-left">Food and Beverage</h2>
                <div class="mx-auto max-w-2xl px-4 pb-3 pt-4 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                
              
                  <div class="mt-1 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    <div class="group relative">
                     
                     <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">

                        {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                        {{-- <a href="https://ibb.co/J5TTTPm"><img src="https://i.ibb.co/bzVVVnQ/Coconut-Cheese.jpg" alt="Coconut-Cheese" border="0"></a> --}}
                        {{-- <a href="https://ibb.co/6NwLMjC"><img src="imageLink" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'></a><br /> --}}
                    {{-- </div> --}}
                    
{{-- 
                      <div class="mt-4 flex justify-between">
                        <div>
                          <h3 class="text-sm text-gray-700">
                            <a href="#">
                              <span aria-hidden="true" class="absolute inset-0"></span>
                              Organic Dairy Free Coconut Cheese 200g
                            </a>
                          </h3>
                          <p class="mt-1 text-sm text-gray-500">Livelife</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">Rs.500</p>
                      </div>
                    </div> --}}


                    {{-- new Product  --}}
                    {{-- <div class="group relative">
                     
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <a href="https://ibb.co/tDdQCHk"><img src="https://i.ibb.co/L1GYp0b/Red-Jackfruit.png" alt="Red-Jackfruit" border="0"></a>
                     </div>
                     
 
                       <div class="mt-4 flex justify-between">
                         <div>
                           <h3 class="text-sm text-gray-700">
                             <a href="#">
                               <span aria-hidden="true" class="absolute inset-0"></span>
                               Organic Sweet & Smoky Jackfruit 
                             </a>
                           </h3>
                           <p class="mt-1 text-sm text-gray-500">LiveLife</p>
                         </div>
                         <p class="text-sm font-medium text-gray-900">Rs. 480</p>
                       </div>
                     </div> --}}
              

                    {{-- new Product  --}}
                    {{-- <div class="group relative">
                     
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
  --}}
                         {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br />
                         <a href="https://ibb.co/vzY5WC5"><img src="https://i.ibb.co/s3HS4pS/keepwell-traditional-rice-kuruluthuda-1.jpg" alt="keepwell-traditional-rice-kuruluthuda-1" border="0"></a>
                     </div>
                      --}}
 
                       {{-- <div class="mt-4 flex justify-between">
                         <div>
                           <h3 class="text-sm text-gray-700">
                             <a href="#">
                               <span aria-hidden="true" class="absolute inset-0"></span>
                               Keepwell Srilankan Traditional Rice
                             </a>
                           </h3>
                           <p class="mt-1 text-sm text-gray-500">LiveLife</p>
                         </div>
                         <p class="text-sm font-medium text-gray-900">Rs.740</p>
                       </div>
                     </div>
               --}}

                    {{-- new Product  --}}
                    {{-- <div class="group relative">
                     
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a> --}}
                         {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                    
                        {{-- </div>
                     
 
                       <div class="mt-4 flex justify-between">
                         <div>
                           <h3 class="text-sm text-gray-700">
                             <a href="#">
                               <span aria-hidden="true" class="absolute inset-0"></span> --}}
                               {{-- Topwil Organic Coconut Amino Sauce 
                             </a>
                           </h3>
                           <p class="mt-1 text-sm text-gray-500">LiveLife</p>
                         </div>
                         <p class="text-sm font-medium text-gray-900">Rs.600</p>
                       </div>
                     </div> --}}
                    <!-- More products... -->
                    {{-- <div class="group relative">
                     
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
  --}}
                         {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                       {{-- <a href="https://ibb.co/7zDgg5W"><img src="https://i.ibb.co/PYyTTnh/Turmeric-Coconut-Latte-600x750.png" alt="Turmeric-Coconut-Latte-600x750" border="0"></a><a target='_blank' href='https://imgbb.com/'></a> --}}
                         
                         {{-- <a href="https://ibb.co/6NwLMjC"><img src="imageLink" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'></a><br /> --}}
                     {{-- </div>
                     
 
                       <div class="mt-4 flex justify-between">
                         <div>
                           <h3 class="text-sm text-gray-700">
                             <a href="#">
                               <span aria-hidden="true" class="absolute inset-0"></span>
                               Topwil Nutrition Organic Turmeric Coconut Latte
                             </a>
                           </h3>
                           <p class="mt-1 text-sm text-gray-500">Livelife</p>
                         </div>
                         <p class="text-sm font-medium text-gray-900">Rs.650</p>
                       </div>
                     </div>  --}}

                        {{-- <div class="group relative">
                     
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80"> --}}
 
                         {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                         {{-- <a href="https://ibb.co/rm3cRyd"><img src="https://i.ibb.co/VtxQcBw/Moringa-Coconut-Latte.png" alt="Moringa-Coconut-Latte" border="0"></a>
                     </div>
                     
 
                       <div class="mt-4 flex justify-between">
                         <div>
                           <h3 class="text-sm text-gray-700">
                             <a href="#">
                               <span aria-hidden="true" class="absolute inset-0"></span>
                               Topwil Nutrition Organic Moringa Coconut Latte
                             </a>
                           </h3>
                           <p class="mt-1 text-sm text-gray-500">Livelife</p>
                         </div>
                         <p class="text-sm font-medium text-gray-900">Rs.650</p>
                       </div>
                     </div> --}}
 
                    {{-- Product 3 
                    <div class="group relative">
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <a href="https://ibb.co/tDdQCHk"><img src="https://i.ibb.co/L1GYp0b/Red-Jackfruit.png" alt="Red-Jackfruit" border="0"></a>
                      </div>
                  
                      <div class="mt-4 flex justify-between">
                          <div>
                              <h3 class="text-sm text-gray-700">
                                  <a href="#">
                                      <span aria-hidden="true" class="absolute inset-0"></span>
                                      Organic Red Curry Jackfruit
                                  </a>
                              </h3>
                              <p class="mt-1 text-sm text-gray-500">LiveLife</p>
                          </div>
                          <p class="text-sm font-medium text-gray-900"> Rs. 480</p>
                      </div>
                  </div>
                  </div>

                  
                </div>


             
              </div>
          --}}
         
        </div>
     
        
       
    </section>
























    
    {{-- <section class="flex-col justify-center gap-8">
      <div class="container mx-auto mt-10 px-6 ">
       
          <div class="bg-[#F3ECDE] rounded-xl">
            <h2 class="text-2xl w-[100%] bg-[#306B34] rounded-md text-center uppercase tracking-tight py-5 pl-10 text-[#c8d5cf] text-left"> Household Items</h2>
              <div class="mx-auto max-w-2xl px-4 pb-3 pt-4 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
              
            
                <div class="mt-1 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                  <div class="group relative">
                   
                   <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <a href="https://imgbb.com/"><img src="https://i.ibb.co/KxBQQG7/holder-coconut-shell-506x.webp" alt="holder-coconut-shell-506x" border="0"></a>
                      {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                      {{-- <a href="https://ibb.co/6NwLMjC"><img src="imageLink" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'></a><br /> --}}
                    
                    {{-- </div>
                  

                    <div class="mt-4 flex justify-between">
                      <div>
                        <h3 class="text-sm text-gray-700">
                          <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Candle holder coconut shell
                          </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Bamagate</p>
                      </div>
                      <p class="text-sm font-medium text-gray-900">Rs.1550</p>
                    </div>
                  </div> --}}


                  {{-- new Product  --}}
                  {{-- <div class="group relative">
                   
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                   <a href="https://imgbb.com/"><img src="https://i.ibb.co/RYNzMb2/palmyrah-basket.webp" alt="palmyrah-basket" border="0"></a>
                    </div>
                   

                     <div class="mt-4 flex justify-between">
                       <div>
                         <h3 class="text-sm text-gray-700">
                           <a href="#">
                             <span aria-hidden="true" class="absolute inset-0"></span>
                             Palmyrah Leaf Storage Basket 
                           </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">Bamagate</p>
                       </div>
                       <p class="text-sm font-medium text-gray-900">Rs.2250</p>
                     </div>
                   </div>
             --}}

                  {{-- new Product 
                  <div class="group relative">
                   
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">

                       {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                       {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/V2nY3DL/spoon-fork-bamboo-506x.webp" alt="spoon-fork-bamboo-506x" border="0"></a>
                      </div>
                   

                     <div class="mt-4 flex justify-between">
                       <div>
                         <h3 class="text-sm text-gray-700">
                           <a href="#">
                             <span aria-hidden="true" class="absolute inset-0"></span>
                             Handmade Bamboo Cutlery set
                           </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">Bamagate</p>
                       </div>
                       <p class="text-sm font-medium text-gray-900">Rs.340</p>
                     </div>
                   </div> --}}
          

                  {{-- new Product 
                  <div class="group relative">
                   
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                      <a href="https://imgbb.com/"><img src="https://i.ibb.co/pz8hjd6/table-placemats-red-506x.webp" alt="table-placemats-red-506x" border="0"></a>
                      {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                  
                      {{-- </div>
                   

                     <div class="mt-4 flex justify-between">
                       <div>
                         <h3 class="text-sm text-gray-700">
                           <a href="#">
                             <span aria-hidden="true" class="absolute inset-0"></span>
                             Recycled paper placemat Red
                           </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">Bamagate</p>
                       </div>
                       <p class="text-sm font-medium text-gray-900">Rs.500</p>
                     </div> --}}
                   {{-- </div>  --}}
                  <!-- More products... -->
                  {{-- <div class="group relative">
                   
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">

                       {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                     {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/VgLy1QW/seagrass-laundary-basket-506x.webp" alt="seagrass-laundary-basket-506x" border="0"></a> --}}
                       {{-- <a href="https://ibb.co/6NwLMjC"><img src="imageLink" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'></a><br /> --}}
                   {{-- </div>
                   

                     <div class="mt-4 flex justify-between">
                       <div>
                         <h3 class="text-sm text-gray-700">
                           <a href="#">
                             <span aria-hidden="true" class="absolute inset-0"></span>
                             Seagrass ecofriendly laundry basket  --}}
                           {{-- </a>  --}}
                         {{-- </h3>
                         <p class="mt-1 text-sm text-gray-500">Bamagate</p>
                       </div>
                       <p class="text-sm font-medium text-gray-900">Rs.3400</p>
                     </div>
                   </div>

                      <div class="group relative">
                    --}}
                    {{-- <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">

                       {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                       {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/GxvTytv/seagrass-toe-basket-506x.webp" alt="seagrass-toe-basket-506x" border="0"></a>
                       <a href="https://ibb.co/rm3cRyd"><img src="https://i.ibb.co/VtxQcBw/Moringa-Coconut-Latte.png" alt="Moringa-Coconut-Latte" border="0"></a>
                   </div> --}} 
                   
{{-- 
                     <div class="mt-4 flex justify-between">
                       <div>
                         <h3 class="text-sm text-gray-700">
                           <a href="#">
                             <span aria-hidden="true" class="absolute inset-0"></span>
                          Handmade seagrass tote bag 
                           </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">Bamagate</p>
                       </div>
                       <p class="text-sm font-medium text-gray-900">Rs.1550</p>
                     </div>
                   </div> --}}

                    {{-- New product --}}

                   {{-- <div class="group relative">
                   
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80"> --}}

                       {{-- <a href="https://ibb.co/6NwLMjC"><img src="https://i.ibb.co/hC9w63z/Topwil-Amino-Sauce-Smoky-BBQ.png" alt="Topwil-Amino-Sauce-Smoky-BBQ" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>make image url</a><br /> --}}
                       {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/GxvTytv/seagrass-toe-basket-506x.webp" alt="seagrass-toe-basket-506x" border="0"></a> --}}
                       {{-- <a href="https://imgbb.com/"><img src="https://i.ibb.co/127d0NR/381914974233443414-506x.webp" alt="381914974233443414-506x" border="0"></a> --}}
                       {{-- <a href="https://ibb.co/rm3cRyd"><img src="https://i.ibb.co/VtxQcBw/Moringa-Coconut-Latte.png" alt="Moringa-Coconut-Latte" border="0"></a>
                   </div>
                   

                     <div class="mt-4 flex justify-between">
                       <div>
                         <h3 class="text-sm text-gray-700">
                           <a href="#">
                             <span aria-hidden="true" class="absolute inset-0"></span>
                         Bamboo Wooden Tissue Box
                           </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">Bamagate</p>
                       </div>
                       <p class="text-sm font-medium text-gray-900">Rs.3000</p>
                     </div>
                   </div> --}}

                  {{-- Product 3  --}}
                  {{-- <div class="group relative">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                      <a href="https://imgbb.com/"><img src="https://i.ibb.co/GH14LdD/wooden-plate-10-inch-506x.webp" alt="wooden-plate-10-inch-506x" border="0"></a> --}}
                      {{-- <a href="https://ibb.co/tDdQCHk"><img src="https://i.ibb.co/L1GYp0b/Red-Jackfruit.png" alt="Red-Jackfruit" border="0"></a> --}}
                    {{-- </div>
                
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Natural Mahogany WoodPlate
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Bamagate</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900"> Rs.1450</p>
                    </div>
                </div>
                </div> --}}

{{--                 
              </div>


           
            </div>
       
       
      </div> --}}
   
      
     
  {{-- </section> --}} 
    

    
</div>
   

 
      
      </div>
</x-app-layout>