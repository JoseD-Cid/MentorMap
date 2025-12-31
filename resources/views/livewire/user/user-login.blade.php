<div x-data="{ login: $wire.isLogin }" class="flex h-screen items-center justify-center" x-transition>
    <div class="flex flex-col w-96 p-6 rounded-lg shadow-md shadow-gray-300 border border-gray-300">
        <div class="relative h-105">
            {{-- Relative va de la mano con  la clase absolute, para posicionar elementos especificos en la ubicación deseada --}}
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
                <input wire:model.live="register_password" class="border border-gray-400 rounded px-2 py-1 mb-4" type="password">
                <label class="text-red-400"> {{$aviso}} </label>
                <label class="mb-1">Confirme su Contraseña</label>
                <input wire:model="confirm_password" class="border border-gray-400 rounded px-2 py-1 mb-4" type="password">
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
    </div>
</div>
