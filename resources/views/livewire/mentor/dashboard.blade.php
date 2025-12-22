<div class="flex flex-row gap-4 p-4">
    <div class="flex flex-col">
        <label class="mb-2">Disciplinas</label>
        <select wire:model.live="discipline_id" class="border border-gray-400 rounded w-48">
            @foreach ($disciplines as $discipline)
                <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="flex flex-col">
        <label class="mb-2">Asignaturas</label>
        <select wire:model="subject_id" class="border border-gray-400 rounded w-48">
            @foreach ($subjects as $subject)

                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select>
    </div>
</div>
