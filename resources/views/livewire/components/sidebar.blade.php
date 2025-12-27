<aside x-data="{ expanded: false }"
    class="w-full flex md:flex-col items-start justify-between text-white font-semibold md:h-screen bg-[#1A44D5] p-4 transition-all duration-150 ease-in-out relative z-0 overflow-hidden"
    :class="expanded ? 'md:w-48 h-40' : 'md:w-16 h-16'">

    {{-- Expand button --}}
    <button x-on:click="expanded = !expanded"
        class="hover:scale-103 transition-all rounded-lg active:scale-98 flex gap-2 items-center active:text-gray-300 duration-100">
        <span class="icon-[solar--siderbar-bold-duotone] size-8"></span>
    </button>

    {{-- Rest of the buttons --}}
    <section class="flex flex-col gap-4 touch-manipulation" :class="expanded ? '' : 'hidden md:flex'">
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
