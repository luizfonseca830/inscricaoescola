<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Schema::disableForeignKeyConstraints();
       $this->call([EnderecoTableSeeder::class]);
        $this->call([ComprovanteTableSeeder::class]);
        $this->call([\ModuloTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([EscolaridadeTableSeeder::class]);
        $this->call([TipotelaTableSeeder::class]);
        $this->call([PessoaTableSeeder::class]);
        Schema::enableForeignKeyConstraints();
    }
}
