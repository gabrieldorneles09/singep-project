<?php

use Illuminate\Database\Seeder;
use App\Model\Usuario\participante;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //CPf é a  senha
      Participante::create([
        'nome'         => 'admin',
        'email'        => 'admin@admin',
        'cpf'          => bcrypt('11111111111'),
        'telefone'     => '22222222222',
        'filiacao'     => 'uninove',
        'status'       => '',
        'permissao'     => '',
      ]);
        // $this->call(UsersTableSeeder::class);
    }
}
