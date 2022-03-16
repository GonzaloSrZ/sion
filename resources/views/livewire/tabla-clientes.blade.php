<div>
    <x-tabla>
        <div class="px-6 py-4 flex item-center">

            <div class="flex items-center">
                <span>Mostrar</span>

                <select wire:model="cant"
                class="mx-2 w-full pl-2 pr-8 py-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>

                <span>entradas</span>

            </div>

            {{-- input para buscar --}}
            <x-jet-input type="text" class='flex-1 mx-4' placeholder="Escriba su busqueda..." wire:model="buscar" />

        </div>
        hola
    </x-tabla>
</div>
