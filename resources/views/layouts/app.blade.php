<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-main min-h-screen">
        <div class="min-h-screen">    
            <div class="bg-black text-white font-black p-2 flex items-center justify-center">
                <p>Bienvenido a MossArtDeco: la naturaleza se fusiona con el diseño moderno</p>
            </div> 
            @include('layouts.navigation')
            
            <div>
                <div class="bg-black bg-opacity-30">
                    <div class="flex max-w-[68rem] w-full mx-auto">
                        <div class="w-2/3 py-[8rem] g-slate-300">
                            
                            <div class="g-slate-900 pr-20 mb-5">
                                <p class="text-white text-[2.7rem] font-black leading-tight" style="word-spacing: 0.2rem">
                                    Dale vida a tu interior con arte de musgo
                                </p>
                            </div>

                            <div class="g-slate-500">
                                <p class="text-gray-200 text-md leading-[1.8rem]" stle="word-spacing: 0.2rem">
                                    Lleva la naturaleza a tu espacio con un impresionante arte de pared de musgo que no requiere mantenimiento. Conservado de forma sostenible, diseñado para durar y elaborado para transformar cualquier interior.
                                </p>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="text-center bg-[#d8fccc] text-[#5b7f6d] text-[1rem] py-1">
                        <p>Diseños únicos hechos a mano | Precios exclusivos | 100% sostenible</p>
                </div>


              
                <main class="bg-gray-100 pb-10">
                    <div class="w-[68rem] mx-auto">
                        <div class="py-7">
                            <h1 class="text-[1.6rem] text-gray-900">{{ $header }}</h1>
                        </div> 
                        {{ $slot }}
                    </div>
                </main>
            </div>

            <footer class="bg-[#457c00]">
                <div class="pt-16 pb-20 border border-b-[#6f91476b]">
                    <p class="text-white text-center text-xl">Enlaces rápidos</p>
                </div>
                  <div class="py-20">
                    <p class="text-white text-center text-xl">Enlaces rápidos</p>
                </div>
            </footer>
        
        
        
        
        </div>

        
        
    </body>
</html>
