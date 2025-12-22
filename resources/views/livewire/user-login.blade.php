<div class="flex flex-col">
    <label for="">Ingrese su Email</label>
    <input wire:model="email" class="border" type="text">
    <label for="">Ingrese su Contraseña</label>
    <input wire:model.live="password" class="border" type="password">
    @if ($aviso)
        <label class="text-red-500">
            {{ $aviso }}
        </label>
    @endif
    <button wire:click="ingresar" class="border-2 rounded p-1">Ingresar</button>
    <button wire:click="checkAuth" class="border-2 rounded p-1">Verificar</button>
    <label for="">{{ $reg }}</label>
</div>
