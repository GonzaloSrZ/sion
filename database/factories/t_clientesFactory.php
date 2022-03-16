<?php

namespace Database\Factories;

use App\Models\t_clientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class t_clientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    //protected $model = t_clientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Defino columnas y formato de datos a generar
            'dni'=>$this->faker->unique()->randomNumber(),
            'nombre_apellido'=>$this->faker->name(),
            'direccion'=>$this->faker->city(),
            'localidad'=>$this->faker->city(),
            'provincia'=>$this->faker->city(),
            'telefono_1'=>$this->faker->phoneNumber(),
            'id_user'=>'1'
        ];
    }
}
