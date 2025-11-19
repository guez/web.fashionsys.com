<section id="planes" class="py-20 md:py-32 bg-muted/30">
    <div class="container px-4 md:px-8">

        {{-- Title --}}
        <div class="mx-auto max-w-2xl text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-balance md:text-5xl mb-4">
                Planes para cada etapa de tu negocio
            </h2>
            <p class="text-lg text-muted-foreground text-pretty">
                Elige el plan que mejor se adapte a tus necesidades. Sin contratos, cancela cuando quieras.
            </p>
        </div>

        {{-- Grid --}}
        <div class="grid gap-8 md:grid-cols-3 max-w-6xl mx-auto">

            {{-- Plan: Básico --}}
            <div class="relative border border-border bg-card rounded-lg">
                <div class="p-6 border-b">
                    <h3 class="text-2xl font-semibold">Promoción</h3>
                    <p class="text-muted-foreground">Perfecto para emprendedores y tiendas pequeñas</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold">$20</span>
                        <span class="text-muted-foreground">/mes</span>
                    </div>
                </div>

                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2">
                            {{-- Check icon --}}
                            <svg class="h-5 w-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <span class="text-sm">Hasta 500 productos</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <span class="text-sm">1 usuario</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <span class="text-sm">Inventario básico</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <span class="text-sm">Ventas y facturación</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <svg class="h-5 w-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <span class="text-sm">Soporte por email</span>
                        </li>
                    </ul>
                </div>

                <div class="p-6">
                    <a href="#" class="w-full block border px-4 py-2 rounded-md text-center">
                        Comenzar ahora
                    </a>
                </div>
            </div>

            {{-- Plan: Profesional (Popular) --}}
            <div class="relative border border-primary bg-card rounded-lg shadow-lg">

                {{-- Badge --}}
                <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                    <span class="bg-primary text-primary-foreground px-4 py-1 rounded-full text-sm font-medium">
                        Más popular
                    </span>
                </div>

                <div class="p-6 border-b">
                    <h3 class="text-2xl font-semibold">Anual</h3>
                    <p class="text-muted-foreground">Ideal para tiendas en crecimiento</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold">$65</span>
                        <span class="text-muted-foreground">/mes</span>
                    </div>
                </div>

                <div class="p-6">
                    <ul class="space-y-3">

                        @foreach (['Hasta 5,000 productos', '5 usuarios', 'Todos los módulos', 'Código de barras', 'Reportes avanzados', 'Soporte prioritario'] as $feature)
                            <li class="flex items-start gap-2">
                                <svg class="h-5 w-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-sm">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="p-6">
                    <a href="#"
                        class="w-full block bg-primary text-primary-foreground hover:bg-primary/90 px-4 py-2 rounded-md text-center">
                        Comenzar ahora
                    </a>
                </div>
            </div>

            {{-- Plan: Empresarial --}}
            <div class="relative border border-border bg-card rounded-lg">

                <div class="p-6 border-b">
                    <h3 class="text-2xl font-semibold">Mensual</h3>
                    <p class="text-muted-foreground">Para grandes operaciones y múltiples sucursales</p>
                    <div class="mt-4">
                        <span class="text-4xl font-bold">$35</span>
                        <span class="text-muted-foreground">/mes</span>
                    </div>
                </div>

                <div class="p-6">
                    <ul class="space-y-3">

                        @foreach (['Productos ilimitados', 'Usuarios ilimitados', 'Múltiples sucursales', 'API personalizada', 'Integraciones avanzadas', 'Gerente de cuenta dedicado'] as $feature)
                            <li class="flex items-start gap-2">
                                <svg class="h-5 w-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-sm">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="p-6">
                    <a href="#" class="w-full block border px-4 py-2 rounded-md text-center">
                        Comenzar ahora
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
