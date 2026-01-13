<div>
    <div class= "p-4 flex items-center justify-between border-b">
        <div>
            <label>Mis temas</label>
        </div>
        <div class="cursor-pointer">
            <button wire:click="openModal" class="p-2 active:scale-97 cursor-grab bg-mmgreen text-white rounded-lg hover:brightness-105 transition-all">Añadir
                Tema</button>
        </div>

        @if ($showModal)
            <!--- Modal --->
            <div class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto p-4">
                <div class="bg-white shadow-xl max-w-md w-full">

                    <!--- Cabeza del Modal --->
                    <div class=" flex justify-between border-b p-2">
                        <h3>Añadir nuevo tema</h3>
                        <button wire:click="closeModal" class="text-gray-400 hover:text-gray-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!--- Cuerpo del Modal --->
                    <form wire:submit.prevent="createTopic" class="flex flex-col">
                        <div class="flex flex-col p-2">
                            <label for="discipline_id" class="mb-1">Disciplinas</label>
                            <div class="flex flex-row">
                                <select id="discipline_id" wire:model.live="selectedDiscipline"
                                    class="border border-gray-400 rounded px-2 py-1 mb-4 w-full">
                                    <option value="">Seleccione una disciplina</option>
                                    @foreach ($disciplines as $discipline)
                                        <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="mb-1">Asignaturas</label>
                            <select id="subject_id" wire:model="subject_id"
                                class="border border-gray-400 rounded px-2 py-1 mb-4 w-full">
                                <option value="">Seleccione una asignatura</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                            <label class="mb-1">Tema</label>
                            <input wire:model="topic_name" class="border border-gray-400 rounded px-2 py-1 mb-4"
                                type="text">
                        </div>
                        <!--- Pie del Modal --->
                        <div class="flex items-center justify-end gap-2 p-4 border-t bg-gray-50">
                            <button type="button" wire:click="closeModal"
                                class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-200">Cancelar</button>
                            <button type="submit"
                                class="px-4 py-2  text-white bg-mmgreen rounded-lg hover:brightness-105 transition-all">Guardar</button>
                        </div>
                    </form>

                </div>
            </div>
        @endif
    </div>
    <!--- Tabla de temas --->
    <div class="mt-6 overflow-x-auto" class="items-center justify-center px-6">

        <div class="flex items-center w-lg px-4 py-2 my-4 border rounded border-gray-400">
            <input type="text" wire:model.live="query"   placeholder="Buscar..." class="focus:outline-none w-full"/>
            <span  wire:loading.remove class="icon-[wpf--search] size-5 ml-4"></span>
            <span wire:loading class="icon-[line-md--loading-twotone-loop]"></span>
        </div>

        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-black-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                        Disciplina</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                        Asignatura</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                        Tema</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                        Acciones</th>

                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($topics as $topic)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $topic->subject->discipline->name ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $topic->subject->name ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $topic->name }}
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            No tienes temas registrados
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
