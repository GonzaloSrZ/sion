<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //$table->string('rol');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
        /* create demo users*/
        $user = \App\Models\User::factory()->create([
            'name' => 'Gustavo Coronel',
            'email' => 'gustavo.coronel27.96@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $user = \App\Models\User::factory()->create([
            'name' => 'Gonzalo suarez',
            'email' => 'gon.srz@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        //$user->assignRole($role1); 
        //$ususarios = \App\Models\User::factory(9)->create();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
