<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        $symbols = ['FDUSD', 'USDT', 'BTC', 'TRY', 'USDC'];

        foreach ($symbols as $symbol) {
            Quote::create([
                'symbol' => $symbol,
                'description' => 'Description for ' . $symbol,
                'date_created' => now(),
            ]);
        }
    }
}
