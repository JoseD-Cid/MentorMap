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

        <a class="text-mmblue hover:font-semibold active:scale-95 transition-all text-center" href="#">
            ¿No tienes cuenta? ¡Regístrate!
        </a>

    </form>
</div>


{{-- <div class="flex flex-col w-96 p-6 rounded-lg shadow-md shadow-gray-300 border border-gray-300">
        <div class="relative h-105">
            <section x-transition x-show="login" class="flex absolute inset-0 flex-col h-96">
                <h2 class="text-center mb-4 font-semibold text-lg">Iniciar Sesión</h2>
                <label class="mb-1">Ingrese su Email</label>
                <input wire:model="email" class="border border-gray-400 rounded px-2 py-1 mb-4" type="text">
                <label class="mb-1">Ingrese su Contraseña</label>
                <input wire:model="password" class="border border-gray-400 rounded px-2 py-1 mb-4" type="password">
                <div class="flex flex-col gap-2">
                    <button wire:click="ingresar"
                        class="flex flex-col bg-green-600 text-white font-semibold py-2 rounded p-1 items-center justify-center gap-2 h-16">
                        <span class="icon-[tdesign--user]"></span>
                        Ingresar
                        <label>{{ $reg }}</label>
                    </button>
                </div>
                <div>
                    <button x-on:click="login = ! login"
                        class="text-blue-600 font-semibold py-2 rounded p-1 underline">Registrarse</button>
                </div>
            </section>
            <section x-transition x-show="!login" class="flex absolute inset-0  flex-col h-96">
                <h2 class="text-center mb-4 font-semibold text-lg">Registrarse</h2>
                <label class="mb-1">Ingrese su Email</label>
                <input wire:model="register_email" class="border border-gray-400 rounded px-2 py-1 mb-4" type="text">
                <label class="mb-1">Ingrese su Contraseña</label>
                <input wire:model.live="register_password" class="border border-gray-400 rounded px-2 py-1 mb-4"
                    type="password">
                <label class="text-red-400"> {{ $aviso }} </label>
                <label class="mb-1">Confirme su Contraseña</label>
                <input wire:model="confirm_password" class="border border-gray-400 rounded px-2 py-1 mb-4"
                    type="password">
                <div class="flex flex-col gap-2">

                    <button wire:click="createUser"
                        class="flex flex-row bg-blue-700 text-white font-semibold py-2 rounded p-1 items-center justify-center gap-2">
                        <span class="icon-[tdesign--user]"></span>
                        Registrar
                        <label>{{ $reg }}</label>
                    </button>

                    <label>{{ $reg }}</label>
                </div>
                <div>
                    <button x-on:click="login = ! login"
                        class="text-blue-600 font-semibold py-2 rounded p-1 underline">Iniciar Sesión</button>
                </div>
            </section>
        </div>
    </div> --}}
{{-- </div> --}}
