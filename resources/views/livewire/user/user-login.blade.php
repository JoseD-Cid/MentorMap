<div class="bg-slate-50 flex flex-col min-h-screen justify-center items-center py-4 text-mmblack">
    <figure class="flex w-max h-12 mb-4">
        <x-mentor-map-logo phase="black" />
    </figure>
    <form wire:submit.prevent="loginUser" class="w-full md:max-w-md flex flex-col gap-4 items-center px-8">
        <h3 class="font-bold text-2xl">Iniciar Sesión</h3>
        <div class="flex gap-2 items-center pl-2 w-full border-b text-mmblack">
            <span class="icon-[si--mail-duotone] size-6 text-mmblack"></span>
            <input wire:model="email" class="p-2 w-full focus:outline-none" placeholder="Correo Electrónico..." type="email">
        </div>
        <div class="flex gap-2 items-center pl-2 w-full border-b text-mmblack">
            <span class="icon-[ph--key-duotone] size-6 text-mmblack"></span>
            <input wire:model="password" class="p-2 w-full focus:outline-none" placeholder="Contraseña..." type="password">
        </div>

        <button class="cursor-pointer w-max mt-2 bg-mmblack text-white rounded-lg px-4 py-2 hover:bg-mmblack/90 transition-all active:scale-98" type="submit">
            Ingresar
        </button>

        <a class="text-mmblue hover:font-semibold active:scale-95 transition-all text-center" href="{{ route('role-selection')}}">
            ¿No tienes cuenta? ¡Regístrate!
        </a>

    </form>
</div>
