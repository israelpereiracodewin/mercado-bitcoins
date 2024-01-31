<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crypto;
use App\Models\Crypto\Price;

class CryptosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $jsonPath = public_path('json/crypto.map.json');

        // Lê o arquivo JSON e converte em um array PHP
        $cryptos = json_decode(file_get_contents($jsonPath), true);    

        foreach ($cryptos as $crypto) {
            // Cria um registro na tabela cryptos e guarda o id
            $cryptoModel = Crypto::create([
                'name' => $crypto['name'],
                'currency' => $crypto['currency'],
                'base_symbol' => $crypto['baseSymbol'],
                'quote_symbol' => $crypto['quoteSymbol'],
                'date_created' => now(),
            ]);

            // Usa o id para criar um registro correspondente na tabela prices
            Price::create([
                'id_crypto'    => $cryptoModel->id,
                'price'        => $crypto['price'],
                'date_created' => now(),
            ]);
        }
    }
}
