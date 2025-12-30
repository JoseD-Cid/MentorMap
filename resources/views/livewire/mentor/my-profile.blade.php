<div>
    <section x-transition class="flex flex-col p-6">
        <h2 class="text-center mb-4 font-semibold text-lg">Registrarse</h2>

        <form wire:submit.prevent="createProfile" class="flex flex-col">
            <label class="mb-1">Nombre</label>
            <input wire:model="name" class="border border-gray-400 rounded px-2 py-1 mb-4" type="text">

            <label class="mb-1">Apellido</label>
            <input wire:model="surname" class="border border-gray-400 rounded px-2 py-1 mb-4" type="text">

            <label class="mb-1">Teléfono</label>
            <input wire:model="phone" class="border border-gray-400 rounded px-2 py-1 mb-4" type="text">

            <label class="mb-1">Sexo</label>

            <div class="flex flex-row gap-2">
                <span>Masculino:</span>
                <input wire:model="sex" name="sex" value="1" type="radio">
                <span>Femenino:</span>
                <input wire:model="sex" name="sex" value="0" type="radio">
            </div>


            <button type="submit"
                class="mt-4 bg-green-700 text-white font-semibold py-2 rounded flex items-center justify-center gap-2">
                Siguiente
                <span class="icon-[maki--arrow]"></span>
            </button>
        </form>
    </section>
</div>
