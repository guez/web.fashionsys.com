<footer class="border-t border-border bg-muted/30">
    <div class="container px-4 py-12 md:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div>
                <a href="/" class="flex items-center gap-2">
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ asset('images/logo-fashionsys.png') }}" alt="fashionsys logo" width="100px">
                    </a>
                </a>

                <p class="text-sm text-muted-foreground mt-10">
                    Sistema completo de gestión para tiendas de ropa y retail de moda.
                </p>

                <div class="flex gap-3 mt-5">

                    {{-- Facebook --}}
                    <a href="#"
                        class="flex h-9 w-9 items-center justify-center rounded-lg bg-muted hover:bg-accent transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                        </svg>
                    </a>

                    {{-- Instagram --}}
                    <a href="#"
                        class="flex h-9 w-9 items-center justify-center rounded-lg bg-muted hover:bg-accent transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg>
                    </a>

                    {{-- Twitter --}}
                    <a href="#"
                        class="flex h-9 w-9 items-center justify-center rounded-lg bg-muted hover:bg-accent transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0016 2a4.48 4.48 0 00-4.47 4.47c0 .35.04.7.1 1A12.94 12.94 0 013 3s-4 9 5 13a13.06 13.06 0 01-8 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.1-.83A7.72 7.72 0 0023 3z" />
                        </svg>
                    </a>

                    {{-- Linkedin --}}
                    <a href="#"
                        class="flex h-9 w-9 items-center justify-center rounded-lg bg-muted hover:bg-accent transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-4 0v7h-4v-7a6 6 0 016-6z" />
                            <rect width="4" height="12" x="2" y="9" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>

                </div>
            </div>

            {{-- Product --}}
            <div>
                <h3 class="font-semibold mb-4">Producto</h3>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li><a href="#modulos" class="hover:text-foreground transition-colors">Módulos</a></li>
                    <li><a href="#servicios" class="hover:text-foreground transition-colors">Servicios</a></li>
                    <li><a href="#planes" class="hover:text-foreground transition-colors">Precios</a></li>
                    <li><a href="#" class="hover:text-foreground transition-colors">Integraciones</a></li>
                </ul>
            </div>

            {{-- Company --}}
            <div>
                <h3 class="font-semibold mb-4">Empresa</h3>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li><a href="#" class="hover:text-foreground transition-colors">Sobre nosotros</a></li>
                    <li><a href="#" class="hover:text-foreground transition-colors">Blog</a></li>
                    <li><a href="#" class="hover:text-foreground transition-colors">Carreras</a></li>
                    <li><a href="#contacto" class="hover:text-foreground transition-colors">Contacto</a></li>
                </ul>
            </div>

            {{-- Legal --}}
            <div>
                <h3 class="font-semibold mb-4">Legal</h3>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li><a href="#" class="hover:text-foreground transition-colors">Términos y condiciones</a>
                    </li>
                    <li><a href="#" class="hover:text-foreground transition-colors">Política de privacidad</a>
                    </li>
                    <li><a href="#" class="hover:text-foreground transition-colors">Cookies</a></li>
                    <li><a href="#" class="hover:text-foreground transition-colors">Licencias</a></li>
                </ul>
            </div>

        </div>

        <div class="mt-12 border-t border-border pt-8 text-center text-sm text-muted-foreground">
            <p>&copy; {{ date('Y') }} FashionSys. Todos los derechos reservados.</p>

        </div>
    </div>
</footer>
