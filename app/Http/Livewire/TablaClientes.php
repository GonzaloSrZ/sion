<?php

namespace App\Http\Livewire;

use App\Models\t_clientes;
use Livewire\Component;
use Livewire\WithPagination;
class TablaClientes extends Component
{
    use WithPagination;
    public $cant = '10',
        $cliente,
        $campo = 'nombre_apellido',
        $direccion = 'asc',
        $buscar;

    public function updatingBuscar()
    {
        $this->resetPage();
    }

    public function render()
    {
        $clientes = t_clientes::where('id' , 'like', '%' . $this->buscar . '%')
                            ->orWhere('dni' , 'like', '%' . $this->buscar . '%')
                            ->orWhere('nombre_apellido' , 'like', '%' . $this->buscar . '%')
                            ->orWhere('localidad' , 'like', '%' . $this->buscar . '%')
                            ->orWhere('provincia' , 'like', '%' . $this->buscar . '%')
                            ->orderBy($this->campo,$this->direccion)
                            ->paginate($this->cant);
        return view('livewire.tabla-clientes',compact('clientes'));
    }

    public function orden($campo){
        if ($this->campo == $campo) {
            if ($this->direccion == 'asc'){
                $this->direccion = 'desc';
            }
            else{
                $this->direccion = 'asc';
            }
        } else {
            $this->campo = $campo;
            $this->direccion = 'asc';
        }
    }
}
