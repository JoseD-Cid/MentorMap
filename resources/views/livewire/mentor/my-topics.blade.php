<div class="flex flex-col md:h-screen">
    {{-- Flash Message --}}
    @if (session()->has('message'))
        <div class="mx-4 mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('message') }}
        </div>
    @endif

    <div class="p-4 flex items-center justify-between border-b">
        <div>
            <label class="text-lg font-semibold">Mis temas</label>
        </div>
        <div class="cursor-pointer">
            <button wire:click="openModal"
                class="p-2 active:scale-97 cursor-grab bg-mmgreen text-white rounded-lg hover:brightness-105 transition-all">
                Añadir Tema
            </button>
        </div>
    </div>

    {{-- Search Bar --}}
    <div class="flex items-center w-lg px-4 py-2 my-4 mx-4 border rounded border-gray-400">
        <input type="text" wire:model.live.debounce.300ms="query" placeholder="Buscar..." class="focus:outline-none w-full" />
        <span wire:loading.remove wire:target="query" class="icon-[wpf--search] size-5 ml-4"></span>
        <span wire:loading wire:target="query" class="icon-[line-md--loading-twotone-loop] size-5 ml-4"></span>
    </div>

    {{-- Table --}}
    <div class="flex overflow-auto px-4">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                        Disciplina
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                        Asignatura
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                        Tema
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($topics as $topic)
                    <tr wire:key="topic-{{ $topic->id }}">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $topic->subject->discipline->name ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $topic->subject->name ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $topic->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <div class="flex gap-2">
                                <button wire:click="editTopic({{ $topic->id }})"
                                    class="cursor-grab px-3 py-1.5 bg-yellow-500 hover:brightness-105 text-white rounded-lg transition-all flex items-center gap-1.5">
                                    Editar
                                    <span class="icon-[iconamoon--edit-duotone] size-4"></span>
                                </button>
                                <button wire:click="deleteTopic({{ $topic->id }})"
                                    wire:confirm="¿Estás seguro de eliminar este tema?"
                                    class="cursor-grab px-3 py-1.5 bg-red-500 hover:brightness-105 text-white rounded-lg transition-all flex items-center gap-1.5">
                                    <span wire:loading.remove wire:target="deleteTopic({{ $topic->id }})">Eliminar</span>
                                    <span wire:loading wire:target="deleteTopic({{ $topic->id }})">Eliminando...</span>
                                    <span class="icon-[solar--eraser-line-duotone] size-4"></span>
                                </button>
                            </div>
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

    {{-- Pagination --}}
    <footer class="p-4 font-semibold border-t border-gray-300">
        {{ $topics->links() }}
    </footer>

    {{-- Modal --}}
    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto p-4 bg-black/50 transition-all">
            <div class="bg-white shadow-xl max-w-md w-full rounded-lg">
                {{-- Modal Header --}}
                <div class="flex justify-between border-b p-4">
                    <h3 class="text-lg font-semibold">
                        {{ $topicIdEdited ? 'Editar tema' : 'Añadir nuevo tema' }}
                    </h3>
                    <button wire:click="closeModal" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                {{-- Modal Body --}}
                <form wire:submit.prevent="save" class="flex flex-col">
                    <div class="flex flex-col p-4 space-y-4">
                        {{-- Discipline Select --}}
                        <div>
                            <label for="discipline_id" class="block mb-1 font-medium">Disciplinas</label>
                            <select id="discipline_id" wire:model.live="selectedDiscipline"
                                class="border border-gray-400 rounded px-2 py-2 w-full focus:outline-none focus:ring-2 focus:ring-mmgreen">
                                <option value="">Seleccione una disciplina</option>
                                @foreach ($disciplines as $discipline)
                                    <option wire:key="discipline-{{ $discipline->id }}" value="{{ $discipline->id }}">
                                        {{ $discipline->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Subject Select --}}
                        <div>
                            <label for="subject_id" class="block mb-1 font-medium">Asignaturas</label>
                            <select id="subject_id" wire:model="subject_id"
                                class="border border-gray-400 rounded px-2 py-2 w-full focus:outline-none focus:ring-2 focus:ring-mmgreen">
                                <option value="">Seleccione una asignatura</option>
                                @foreach ($subjects as $subject)
                                    <option wire:key="subject-{{ $subject->id }}" value="{{ $subject->id }}">
                                        {{ $subject->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('subject_id')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Topic Name --}}
                        <div>
                            <label for="topic_name" class="block mb-1 font-medium">Tema</label>
                            <input id="topic_name" wire:model="topic_name"
                                class="border border-gray-400 rounded px-2 py-2 w-full focus:outline-none focus:ring-2 focus:ring-mmgreen"
                                type="text" placeholder="Nombre del tema">
                            @error('topic_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- Modal Footer --}}
                    <div class="flex items-center justify-end gap-2 p-4 border-t bg-gray-50">
                        <button type="button" wire:click="closeModal"
                            class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-200">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 text-white bg-mmgreen rounded-lg hover:brightness-105 transition-all">
                            {{ $topicIdEdited ? 'Actualizar' : 'Guardar' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
