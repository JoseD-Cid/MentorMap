<aside x-data="{ expanded: false }" {{-- x-on:mousemove="expanded = true"
    x-on:mouseout="expanded = false" --}}
    class="w-full flex md:flex-col items-start justify-between text-white font-semibold md:h-screen bg-[#1A44D5] p-4 transition-all duration-200 ease-out relative z-0 overflow-hidden"
    :class="expanded ? 'md:w-48 h-52' : 'md:w-16 h-22'">

    {{-- Expand button --}}
    <div x-on:click="expanded = !expanded"
        class="flex gap-2 items-center active:scale-98">
        <div class="flex max-w-8 h-12 shrink-0 active:text-red-400">
            <x-mentor-map-logo phase="active white" />
        </div>
        <p x-transition :class="expanded ? '' : 'hidden'" class="active:text-gray-300 transition-all flex flex-col leading-none text-xl cursor-default select-none" style="font-family: 'Fredoka', sans-serif;">
            <span>Mentor</span>
            <span>Map</span>
        </p>
    </div>

    {{-- Rest of the buttons --}}
    <section class="flex flex-col gap-4" :class="expanded ? '' : 'hidden md:flex'">
        {{-- Home --}}
        <button
            class="flex-row-reverse md:flex-row hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100"
            :class="expanded ? 'md:justify-start' : ''">
            <span class="icon-[solar--pie-chart-2-bold-duotone] size-8 shrink-0"></span>
            <span class="text-sm" x-show="expanded" x-transition>Estadísticas</span>
        </button>
        {{-- Topics --}}
        <button
            class="flex-row-reverse md:flex-row hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100"
            :class="expanded ? 'md:justify-start' : ''">
            <span class="icon-[solar--book-bookmark-bold-duotone] size-8 shrink-0"></span>
            <span class="text-sm" x-show="expanded" x-transition>Temario</span>
        </button>
        {{-- Location --}}
        <button
            class="flex-row-reverse md:flex-row hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100"
            :class="expanded ? 'md:justify-start' : ''">
            <span class="icon-[solar--map-point-wave-bold-duotone] size-8 shrink-0"></span>
            <span class="text-sm" x-show="expanded" x-transition>Ubicación</span>
        </button>
        {{-- Logout --}}
        <button
            class="flex-row-reverse md:flex-row hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100"
            :class="expanded ? 'md:justify-start' : ''">
            <span class="icon-[solar--exit-bold-duotone] size-8 shrink-0"></span>
            <span class="text-sm" x-show="expanded" x-transition>Cerrar Sesión</span>
        </button>
    </section>
</aside>
