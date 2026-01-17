<div class="flex flex-col">
    <header class="shrink-0 flex justify-between w-full md:max-w-384 h-max p-4 md:px-8 sticky top-0 z-20 bg-white border-b border-gray-300">
        <figure class="flex">
            <div class="flex size-8 md:size-10">
                <x-mentor-map-logo phase="color" />
            </div>
            <label class="hidden sm:flex leading-none flex-col md:text-lg justify-center"
                style="font-family: Fredoka, sans-serif;">
                <span class="text-mmgreen">Mentor</span>
                <span class="text-mmblue">Map</span>
            </label>
        </figure>
        {{-- Login buttons --}}
        <section class="flex font-semibold gap-2 text-xs md:text-sm text-center">
            <a href="{{ route('login') }}"
                class="shadow flex items-center font-semibold rounded-lg px-4 hover:bg-slate-100 transition-all active:bg-slate-200 active:scale-98">
                Iniciar Sesión
            </a>
            <a href="{{ route('role-selection') }}"
                class="flex items-center text-white bg-mmgreen shadow shadow-slate-300 rounded-lg px-4 hover:brightness-105 active:brightness-95 transition-all active:scale-98">
                ¡Regístrate!
            </a>
        </section>
    </header>
    <main class="w-full flex-1 overflow-y-auto bg-mmblue/4">
        <div class="flex flex-col md:flex-row px-8 py-16  max-w-384 mx-auto gap-8 items-center">

            {{-- Pill and general text --}}
            <section class="flex flex-col gap-6 w-full md:w-1/2 items-center md:items-start text-center md:text-left">

                <h2 class="text-4xl font-bold leading-tight text-emerald-800">
                    Conecta con mentores independientes cerca de ti.
                </h2>

                <p class="md:text-lg text-mmblack/80">
                    Una plataforma piloto que facilita el contacto entre estudiantes y mentores de distintas disciplinas
                    académicas y profesionales.
                </p>

                <div class="flex flex-col gap-4 w-full md:w-96">
                    <button
                        class="cursor-pointer text-sm md:text-base md:justify-start justify-center w-full px-4 py-3 text-white rounded-full flex items-center gap-2 hover:brightness-105 active:brightness-95 transition-all active:scale-98 bg-mmgreen shadow">
                        <span class="icon-[ph--student-fill] min-h-6 min-w-6"></span>
                        ¡Encuentra el Mentor ideal para ti!
                    </button>
                    <button
                        class="cursor-pointer text-sm md:text-base md:justify-start justify-center w-full px-4 py-3 text-white rounded-full flex items-center gap-2 hover:brightness-110 active:brightness-96 transition-all active:scale-98 bg-mmblue shadow">
                        <span class="icon-[ph--chalkboard-teacher-duotone] min-h-6 min-w-6"></span>
                        ¡Promociónate como Mentor en tu zona!
                    </button>
                </div>
            </section>

            <figure class="flex items-center justify-center w-full md:w-1/2 ">
                <img class="w-64 md:w-84" src="{{ asset('images/illustration-landing.svg') }}" alt="Illustration">
            </figure>
        </div>
        <section class="w-full bg-white border-t border-gray-300">
            <div class="max-w-384 mx-auto px-8 py-12">
                <h3 class="text-2xl font-semibold text-center mb-8 text-emerald-800">
                    ¿Cómo funciona MentorMap?
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    <div class="flex flex-col items-center gap-3">
                        <span class="text-3xl">🔍</span>
                        <h4 class="font-semibold">Explorá mentores</h4>
                        <p class="text-sm text-mmblack/70">
                            Buscá mentores por área, asignatura y ubicación.
                        </p>
                    </div>

                    <div class="flex flex-col items-center gap-3">
                        <span class="text-3xl">📞</span>
                        <h4 class="font-semibold">Contactá directamente</h4>
                        <p class="text-sm text-mmblack/70">
                            Comunicáte sin intermediarios ni pagos dentro de la plataforma.
                        </p>
                    </div>

                    <div class="flex flex-col items-center gap-3">
                        <span class="text-3xl">🤝</span>
                        <h4 class="font-semibold">Acordá por fuera</h4>
                        <p class="text-sm text-mmblack/70">
                            Los acuerdos se realizan de forma independiente entre las partes.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer
            class="bg-white flex flex-col md:flex-row items-center gap-2 max-w-384 h-max shrink-0 p-4 md:px-8 text-mmblack border-t border-gray-300">
            <div class="flex">
                <div class="flex size-7">
                    <x-mentor-map-logo phase="black" />
                </div>
                <label class="mr-2 flex leading-none flex-col text-xs justify-center"
                    style="font-family: Fredoka, sans-serif;">
                    <span>Mentor</span>
                    <span>Map</span>
                </label>
            </div>
            <span
                class="text-xs md:text-sm text-mmblack/70 h-full md:border-l-2 md:border-mmblack/30 text-center flex items-center pl-4">
                2026 - Piloto activo en Choluteca, Honduras. No intermedia pagos ni acuerdos entre usuarios.
            </span>
        </footer>
    </main>

</div>
