<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Pessoa::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\pt_BR\Person($faker));
    $faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber($faker));
    return [
        //

        'escolaridade_id'=> \App\Models\Escolaridade::all()->random()->id,
        'comprovante_id' => \App\Models\Comprovante::all()->random()->id,
        'endereco_id' => \App\Models\Endereco::all()->random()->id,
        'nome_completo' => $faker->name,
        'idade' => $faker ->randomNumber(),
        'cpf' => $faker->cpf,
        'telefone' => $faker->cellphoneNumber,
        'data_nascimento' => $faker->date('Y-m-d'),
        'sexo' => $faker->randomElement(['M', 'H']),
        'email' => $faker->email,
        'responsavel' => $faker->name,
        'escola_de_origem'  => $faker->name
    ];
});
