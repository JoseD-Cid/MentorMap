<div x-data="{ login: true }" class="flex h-screen items-center justify-center" x-transition>
    <div class="flex flex-col w-96 p-6 rounded-lg shadow-md shadow-gray-300 border border-gray-300">
        <div class="relative h-72">
            {{-- Relative va de la mano con  la clase absolute, para posicionar elementos especificos en la ubicación deseada --}}
            <section x-transition x-show="login"
                class="flex absolute inset-0 flex-col h-72">
                <h2 class="text-center mb-4 font-semibold text-lg">Iniciar Sesión</h2>

                <label class="mb-1">Ingrese su Email</label>
                <input wire:model="email" class="border border-gray-400 rounded px-2 py-1 mb-4" type="text">
                <label class="mb-1">Ingrese su Contraseña</label>
                <input wire:model="password" class="border border-gray-400 rounded px-2 py-1 mb-4" type="password">
                <div class="flex flex-col gap-2">
                    <button wire:click="ingresar"
                        class="bg-green-600 text-white font-semibold py-2 rounded p-1">Ingresar</button>
                    <label>{{ $reg }}</label>
                </div>
                <div>
                    <button x-on:click="login = ! login"
                        class="text-blue-600 font-semibold py-2 rounded p-1 underline">Registrarse</button>
                </div>
            </section>

            <section x-transition x-show="!login"
                class="flex absolute inset-0  flex-col h-72">
                <h2 class="text-center mb-4 font-semibold text-lg">Registrarse</h2>
                <label class="mb-1">Ingrese su Email</label>
                <input wire:model="email" class="border border-gray-400 rounded px-2 py-1 mb-4" type="text">
                <label class="mb-1">Ingrese su Contraseña</label>
                <input wire:model="password" class="border border-gray-400 rounded px-2 py-1 mb-4" type="password">
                <div class="flex flex-col gap-2">
                    <button wire:click="ingresar"
                        class="bg-green-60[0 text-white font-semibold py-2 rounded p-1">Ingresar</button>
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
