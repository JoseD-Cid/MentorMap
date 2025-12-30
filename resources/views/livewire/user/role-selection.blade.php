<div class="relative h-105">
    <div class="flex flex-col size-full items-center justify-center">
        <label class="text-black-400 flex flex-col">Seleccione su rol:</label>
        <div class="flex flex-row gap-8 mt-4">
            <button
                class="flex flex-col bg-green-600 text-white font-semibold py-2 rounded p-1 items-center justify-center gap-2 h-16"
                wire:click="selectRole('mentor')">Mentor</button>
            <button
                class="flex flex-col bg-blue-600 text-white font-semibold py-2 rounded p-1 items-center justify-center gap-2 h-16"
                wire:click="selectRole('student')">Student</button>
        </div>
    </div>
</div>
