<aside x-data="{ expanded: $persist(false) }" {{-- x-on:mousemove="expanded = true"
    x-on:mouseout="expanded = false" --}}
    class="flex md:flex-col items-start justify-between text-white font-semibold md:h-screen bg-[#1A44D5] p-4 transition-all duration-200 ease-in-out relative z-0 overflow-hidden"
    :class="expanded ? 'md:w-48 h-34' : 'md:w-16 h-16'">

    {{-- Expand button --}}
    <figure x-on:click="expanded = !expanded" class="flex gap-2 items-center active:scale-98">
        <div class="flex max-w-8 md:h-12 h-8 shrink-0">
            <x-mentor-map-logo phase="white" />
        </div>

        <div x-transition :class="expanded ? '' : 'md:hidden'"
            class="text-base md:text-xl transition-all flex flex-col leading-none cursor-default select-none font-[Fredoka]">
            <span>Mentor</span>
            <span>Map</span>
        </div>
    </figure>

    {{-- Rest of the buttons --}}
    <section class="flex flex-col gap-2 md:gap-4" :class="expanded ? '' : 'hidden md:flex'">
        {{-- Home --}}
        <a href="{{ route('mentor-dashboard') }}" wire:navigate
            class="flex-row-reverse md:flex-row hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100"
            :class="expanded ? 'md:justify-start' : ''">
            <span class="icon-[solar--pie-chart-2-bold-duotone] size-5 md:size-8 shrink-0"></span>
            <span class="text-xs md:text-sm" x-show="expanded" x-transition>Estadísticas</span>
        </a>
        {{-- Topics --}}
        <a href="{{ route('mentor-my-topics') }}" wire:navigate
            class="flex-row-reverse md:flex-row hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100"
            :class="expanded ? 'md:justify-start' : ''">
            <span class="icon-[solar--book-bookmark-bold-duotone] size-5 md:size-8 shrink-0"></span>
            <span class="text-xs md:text-sm" x-show="expanded" x-transition>Temario</span>
        </a>
        {{-- Location --}}
        <a href="{{ route('mentor-my-location') }}" wire:navigate
            class="flex-row-reverse md:flex-row hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100"
            :class="expanded ? 'md:justify-start' : ''">
            <span class="icon-[solar--map-point-wave-bold-duotone] size-5 md:size-8 shrink-0"></span>
            <span class="text-xs md:text-sm" x-show="expanded" x-transition>Ubicación</span>
        </a>
        {{-- Profile --}}
        <a href="{{ route('mentor-my-profile') }}" wire:navigate
            class="flex-row-reverse md:flex-row hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100"
            :class="expanded ? 'md:justify-start' : ''">
            <span class="icon-[solar--user-circle-bold-duotone] size-5 md:size-8 shrink-0"></span>
            <span class="text-xs md:text-sm" x-show="expanded" x-transition>Perfil</span>
        </a>
        {{-- Logout --}}
        <button wire:click="logout"
            class="cursor-pointer hover:text-red-300 flex-row-reverse md:flex-row hover:scale-103 transition-all rounded-lg active:scale-98 active:text-gray-300 flex gap-2 items-center whitespace-nowrap duration-100"
            :class="expanded ? 'md:justify-start' : ''">
            <span class="icon-[solar--exit-bold-duotone] size-5 md:size-8 shrink-0"></span>
            <span class="text-xs md:text-sm" x-show="expanded" x-transition>Cerrar Sesión</span>
        </button>
    </section>
</aside>
