<section id="contacto" class="py-20 md:py-32">
    <div class="container px-4 md:px-8">

        {{-- Title --}}
        <div class="mx-auto max-w-2xl text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-balance md:text-5xl mb-4">
                ¿Listo para transformar tu negocio?
            </h2>
            <p class="text-lg text-muted-foreground text-pretty">
                Contáctanos y descubre cómo podemos ayudarte a crecer
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-3 max-w-6xl mx-auto">

            {{-- Contact Info --}}
            <div class="space-y-6">

                {{-- Email --}}
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                        {{-- Mail Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4l8 8 8-8" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-1">Email</h3>
                        <p class="text-sm text-muted-foreground">contacto@fashionsys.com</p>
                    </div>
                </div>

                {{-- Phone --}}
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                        {{-- Phone Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.49 19.49 0 01-6-6A19.79 19.79 0 012.1 4.18 2 2 0 014.1 2h3a2 2 0 012 1.72 12.05 12.05 0 00.57 2.57 2 2 0 01-.45 2.11l-1.27 1.27a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.05 12.05 0 002.57.57A2 2 0 0122 16.92z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-1">Teléfono</h3>
                        <p class="text-sm text-muted-foreground">+1 (555) 123-4567</p>
                    </div>
                </div>

                {{-- Location --}}
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                        {{-- MapPin Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21s-6-4.35-6-10a6 6 0 1112 0c0 5.65-6 10-6 10z" />
                            <circle cx="12" cy="11" r="2" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-1">Oficina</h3>
                        <p class="text-sm text-muted-foreground">
                            Av. Principal 123<br>
                            Ciudad, País
                        </p>
                    </div>
                </div>

            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-2 border border-border rounded-lg bg-card">
                <div class="p-6 border-b">
                    <h3 class="text-xl font-semibold">Envíanos un mensaje</h3>
                    <p class="text-muted-foreground text-sm">
                        Completa el formulario y nos pondremos en contacto contigo
                    </p>
                </div>

                <div class="p-6">
                    {{-- FORMULARIO REAL DE LARAVEL --}}
                    <form action="" method="POST" class="space-y-4">
                        @csrf

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="space-y-2">
                                <label for="name" class="text-sm font-medium">Nombre completo</label>
                                <input id="name" name="name" type="text" placeholder="Juan Pérez" required
                                    class="w-full rounded-md border px-3 py-2 text-sm bg-background" />
                            </div>

                            <div class="space-y-2">
                                <label for="email" class="text-sm font-medium">Email</label>
                                <input id="email" name="email" type="email" placeholder="juan@ejemplo.com"
                                    required class="w-full rounded-md border px-3 py-2 text-sm bg-background" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="phone" class="text-sm font-medium">Teléfono</label>
                            <input id="phone" name="phone" type="tel" placeholder="+1 (555) 000-0000"
                                class="w-full rounded-md border px-3 py-2 text-sm bg-background" />
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="text-sm font-medium">Mensaje</label>
                            <textarea id="message" name="message" placeholder="Cuéntanos sobre tu negocio y cómo podemos ayudarte..."
                                rows="5" required class="w-full rounded-md border px-3 py-2 text-sm bg-background"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-primary text-primary-foreground hover:bg-primary/90 px-4 py-2 rounded-md text-sm font-medium">
                            Enviar mensaje
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
