<section id="inicio" class="relative overflow-hidden py-20 md:py-32">
    <div class="container px-4 md:px-8">
        <div class="mx-auto max-w-4xl text-center">

            {{-- Badge --}}
            <div class="mb-6 inline-flex items-center gap-2 rounded-full bg-muted px-4 py-1.5 text-sm">
                <div class="h-2 w-2 rounded-full bg-primary animate-pulse"></div>
                <span class="text-muted-foreground">
                    Sistema completo de gestión para retail de moda
                </span>
            </div>

            {{-- Main Heading --}}
            <h1 class="mb-6 text-4xl font-bold tracking-tight text-balance md:text-6xl">
                Gestiona tu negocio de ropa de manera
                <span class="text-primary"> inteligente</span>
            </h1>

            {{-- Description --}}
            <p class="mb-8 text-lg text-muted-foreground text-pretty md:text-xl">
                Plataforma completa con inventario, variantes de productos, código de barras, producción,
                ventas y facturación electrónica. Todo lo que necesitas en un solo lugar.
            </p>

            {{-- CTA Buttons --}}
            <div class="flex flex-col items-center justify-center gap-3 sm:flex-row">

                {{-- Comenzar gratis --}}
                <a href="/register"
                   class="w-full sm:w-auto bg-primary text-primary-foreground hover:bg-primary/90 px-6 py-3 rounded-md text-lg font-medium inline-flex items-center justify-center gap-2">
                    Comenzar gratis

                    {{-- ArrowRight SVG --}}
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="h-4 w-4" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor" 
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M13 5l7 7-7 7M5 12h14" />
                    </svg>
                </a>

                {{-- Ver módulos --}}
                <a href="#modulos"
                   class="w-full sm:w-auto border px-6 py-3 rounded-md text-lg font-medium inline-flex items-center justify-center">
                    Ver módulos
                </a>
            </div>

            {{-- Stats --}}
            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-3">

                {{-- Productos gestionados --}}
                <div class="flex flex-col items-center gap-2">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10">

                        {{-- Package icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="h-6 w-6 text-primary" 
                             fill="none" 
                             viewBox="0 0 24 24" 
                             stroke="currentColor" 
                             stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                        </svg>

                    </div>
                    <div class="text-2xl font-bold">10,000+</div>
                    <div class="text-sm text-muted-foreground">Productos gestionados</div>
                </div>

                {{-- Uptime --}}
                <div class="flex flex-col items-center gap-2">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10">

                        {{-- BarChart3 icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="h-6 w-6 text-primary" 
                             fill="none" 
                             viewBox="0 0 24 24" 
                             stroke="currentColor" 
                             stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 3v18h18M9 17v-4M13 17V7M17 17V11" />
                        </svg>

                    </div>
                    <div class="text-2xl font-bold">99.9%</div>
                    <div class="text-sm text-muted-foreground">Uptime garantizado</div>
                </div>

                {{-- Soporte --}}
                <div class="flex flex-col items-center gap-2">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10">

                        {{-- Barcode icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="h-6 w-6 text-primary" 
                             fill="none" 
                             viewBox="0 0 24 24" 
                             stroke="currentColor" 
                             stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 4h1v16H3zm3 0h1v16H6zm3 0h1v16H9zm5 0h1v16h-1zm3 0h1v16h-1zm-6 0h1v16h-1z" />
                        </svg>

                    </div>
                    <div class="text-2xl font-bold">24/7</div>
                    <div class="text-sm text-muted-foreground">Soporte disponible</div>
                </div>

            </div>
        </div>
    </div>
</section>
