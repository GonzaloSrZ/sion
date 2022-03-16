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
            {{$buscar}}

        </div>
        @if (count($clientes))

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="orden('id')">
                            Id

                            {{-- Icono de direccionamiento --}}
                            @if ($campo == 'id')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right"></i>
                            @endif

                        </th>
                        <th scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="orden('dni')">
                            DNI
                            {{-- Icono de direccionamiento --}}
                            @if ($campo == 'dni')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right"></i>
                            @endif
                        </th>
                        <th scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="orden('nombre_apellido')">
                            Nombre y Apellido
                            {{-- Icono de direccionamiento --}}
                            @if ($campo == 'nombre_apellido')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right"></i>
                            @endif
                        </th>
                        <th scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="orden('localidad')">
                            Localidad
                            {{-- Icono de direccionamiento --}}
                            @if ($campo == 'localidad')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right"></i>
                            @endif
                        </th>
                        <th scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="orden('provincia')">
                            Provincia
                            {{-- Icono de direccionamiento --}}
                            @if ($campo == 'provincia')
                                @if ($direccion == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right"></i>
                            @endif
                        </th>
                        
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($clientes as $cli)
                        <tr>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">{{ $cli->id }}</div>
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">{{ $cli->dni }}</div>
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">{{ $cli->nombre_apellido }}</div>
                            </td>
                            <td class="px-6 py-4  text-sm text-gray-500">
                                <div class="text-sm text-gray-900">{{ $cli->localidad }}</div>
                            </td>
                            <td class="px-6 py-4  text-sm text-gray-500">
                                <div class="text-sm text-gray-900">{{ $cli->provincia }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex">
                                {{-- @livewire('editar-cliente', ['cliente' => $cliente], key($cliente->id)) --}}
                                {{-- <a wire:click="editar({{ $cli }})"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full cursor-pointer">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a wire:click="$emit('borrarArticulo',{{ $cli->id }})"
                                    class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full cursor-pointer">
                                    <i class="fas fa-trash"></i>
                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                    <!-- More people... -->
                </tbody>
            </table>

            @if ($clientes->hasPages())
                <div class="px-6 py-3">
                    {{ $clientes->links() }}
                </div>
            @endif
        @else
            <div class="px-6 py-4">
                No existe ningun cliente
            </div>

        @endif
    </x-tabla>
</div>
