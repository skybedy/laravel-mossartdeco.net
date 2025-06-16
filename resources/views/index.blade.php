<x-app-layout>
    <x-slot name="header">Los más vendidos comprobados</x-slot>
    
    <div class="grid grid-cols-2 gap-3 lg:grid-cols-5 items-stretch">
        @foreach($products as $product)
            
            <div id="product-box" class="relative bg-white p-3 rounded-lg text-gray-500 font-black  h-full flex flex-col">
                
                <div class="mb-5">
                    <a href="/" class="block">
                            <img src="{{ asset('/images/'.$product->image) }}" alt="" class="w-full h-auto">
                    </a>
                </div>

                <div class="mb-1">
                    <a href="/" class="text-[0.9rem]">
                        {{ $product->description }}
                    </a>
                </div> 
                <hr>
                <div class="mt-1 mb-5">
                    <p class="text-[1rem]">
                        €{{ $product->price }},00 EUR
                    </p>
                </div>
                
                    <div class="mt-auto">
                        <a href="/" class="block text-center border-2 border-gray-500 rounded-lg p-2 ">Buy</a>
                    </div>
                
                
                
            </div>




        @endforeach
    </div>
</x-app-layout>
