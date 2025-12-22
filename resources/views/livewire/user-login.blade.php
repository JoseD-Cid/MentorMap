<div class="flex h-screen items-center justify-center">

    <section class="flex flex-col w-72 p-6 rounded-lg shadow-md shadow-gray-300 border border-gray-300">

        <h2 class="text-center mb-4 font-semibold text-lg">Iniciar Sesión</h2>

        <label class="mb-1">Ingrese su Email</label>
        <input wire:model="email" class="border border-gray-400 rounded px-2 py-1 mb-4" type="text">
        <label class="mb-1">Ingrese su Contraseña</label>
        <input wire:model="password" class="border border-gray-400 rounded px-2 py-1 mb-4" type="password">
        <div class="flex flex-col gap-2">
            <button wire:click="ingresar" class="bg-green-600 text-white font-semibold py-2 rounded p-1">Ingresar</button>
            {{-- <button wire:click="checkAuth" class="rounded p-1">Verificar</button> --}}
            <label>{{ $reg }}</label>
        </div>
    </section>
</div>
