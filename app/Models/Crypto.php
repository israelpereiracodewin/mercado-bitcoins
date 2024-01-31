<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    use HasFactory;

    protected $table = 'cryptos';

    protected $fillable = [
        'id',
        'name',
        'currency',
        'base_symbol',
        'quote_symbol',
        'date_created'
    ];
    
    public $timestamps = false;

    public function quote(){

        return $this->belongsTo(Quote::class, 'quote_symbol', 'symbol');
    }

    public function prices()
    {
        return $this->hasMany(Crypto\Price::class, 'id_crypto', 'id');
    }

    // Método para obter o preço mais recente
    public function latestPrice()
    {
        return $this->hasOne(Crypto\Price::class, 'id_crypto', 'id')->orderByDesc('date_created');
    }
}
