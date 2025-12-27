<aside x-data="{ expanded: false }"
    class="flex flex-col items-start justify-between text-white font-semibold h-screen bg-blue-800 p-4 transition-all duration-200 ease-in-out"
    :class="expanded ? 'w-52' : 'w-16'">

    {{-- Expand button --}}
    <button x-on:click="expanded = !expanded" class="hover:scale-103 transition-all rounded-lg active:scale-98 flex gap-2 items-center active:text-gray-300 duration-100">
        <span class="icon-[solar--siderbar-bold-duotone] size-8"></span>
        <span class="text-sm" x-show="expanded" x-transition>Contraer</span>
    </button>

    {{-- Rest of the buttons --}}
    <section class="flex flex-col gap-4">

        {{-- Topics --}}
        <button class="hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100">
            <span class="icon-[solar--book-bookmark-bold-duotone] size-8"></span>
            <span class="text-sm" x-show="expanded" x-transition>Temario</span>
        </button>
        {{-- Location --}}
        <button class="hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100">
            <span class="icon-[solar--map-point-wave-bold-duotone] size-8"></span>
            <span class="text-sm" x-show="expanded" x-transition>Ubicación</span>
        </button>
        {{-- Logout --}}
        <button class="hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100">
            <span class="icon-[solar--exit-bold-duotone] size-8"></span>
            <span class="text-sm" x-show="expanded" x-transition>Cerrar Sesión</span>
        </button>
    </section>
</aside>
