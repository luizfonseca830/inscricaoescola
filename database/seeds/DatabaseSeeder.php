<?php

use Database\Seeders\ComprovanteTableSeeder;
use Database\Seeders\EnderecoTableSeeder;
use Database\Seeders\EscolaridadeTableSeeder;
use Database\Seeders\PessoaTableSeeder;
use Database\Seeders\TipotelaTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//       Schema::disableForeignKeyConstraints();
       $this->call([EnderecoTableSeeder::class]);
        $this->call([ComprovanteTableSeeder::class]);
        $this->call([ModuloTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([EscolaridadeTableSeeder::class]);
        $this->call([TipoTelaTableSeeder::class]);
        $this->call([PessoaTableSeeder::class]);
        $this->call([ComprovanteTableSeeder::class]);
        $this->call([EnderecoTableSeeder::class]);
        $this->call([EscolaridadeTableSeeder::class]);
        $this->call([TipotelaTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        /*Schema::enableForeignKeyConstraints();*/
    }
}
