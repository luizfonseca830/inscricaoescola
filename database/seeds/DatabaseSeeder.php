<?php

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
        #Schema::disableForeignKeyConstraints();
        $this->call([UsersTableSeeder::class]);
        $this->call([EscolaridadesTableSeeder::class]);
        $this->call([CargoTableSeeder::class]);
        $this->call([TipoTelaTableSeeder::class]);
        #$this->call(ComprovanteTableSeeder::class);
        #$this->call(EnderecoTableSeeder::class);
        #$this->call(AnexoTableSeeder::class);
        #$this->call(PessoaTableSeeder::class);
        #Schema::enableForeignKeyConstraints();
    }
}
