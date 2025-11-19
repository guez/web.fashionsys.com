<header x-data="{ mobileMenuOpen: false }"
    class="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
    <div class="container flex h-16 items-center justify-between px-4 md:px-8">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-2">
            <img src="{{asset('images/logo-fashionsys.png')}}" alt="fashionsys logo" width="100px">
        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden items-center gap-8 md:flex">
            <a href="#inicio" class="text-sm font-medium text-foreground hover:text-primary transition-colors">
                Inicio
            </a>
            <a href="#modulos" class="text-sm font-medium text-foreground hover:text-primary transition-colors">
                Módulos
            </a>
            <a href="#servicios" class="text-sm font-medium text-foreground hover:text-primary transition-colors">
                Servicios
            </a>
        </nav>

        {{-- Desktop Auth Buttons --}}
        <div class="hidden items-center gap-3 md:flex">
            <a href="https://app.jivsoft.com/login" target="_blank"
                class="bg-secondary text-secondary-foreground hover:bg-secondary/90 border-0 px-4 py-2 rounded-md text-sm font-medium">
                Iniciar Sesión
            </a>

            <a href="/register"
                class="bg-primary text-primary-foreground hover:bg-primary/90 px-4 py-2 rounded-md text-sm font-medium">
                Registrarse
            </a>
        </div>

        {{-- Mobile Menu Button --}}
        <button class="md:hidden" @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle menu">
            {{-- Ícono X --}}
            <template x-if="mobileMenuOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </template>

            {{-- Ícono Menu --}}
            <template x-if="!mobileMenuOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </template>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div class="border-t border-border md:hidden" x-show="mobileMenuOpen" x-transition>
        <nav class="container flex flex-col gap-4 px-4 py-4">

            <a href="#inicio" class="text-sm font-medium" @click="mobileMenuOpen = false">
                Inicio
            </a>

            <a href="#modulos" class="text-sm font-medium" @click="mobileMenuOpen = false">
                Módulos
            </a>

            <a href="#servicios" class="text-sm font-medium" @click="mobileMenuOpen = false">
                Servicios
            </a>

            <div class="flex flex-col gap-2 pt-2">

                <a href="https://app.jivsoft.com/login" target="_blank"
                    class="bg-secondary text-secondary-foreground hover:bg-secondary/90 border-0 px-4 py-2 rounded-md text-center text-sm font-medium">
                    Iniciar Sesión
                </a>

                <a href="/register"
                    class="bg-primary text-primary-foreground hover:bg-primary/90 px-4 py-2 rounded-md text-center text-sm font-medium">
                    Registrarse
                </a>

            </div>
        </nav>
    </div>
</header>
