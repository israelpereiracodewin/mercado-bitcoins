<?php

namespace App\Models\Crypto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Crypto;

class Price extends Model
{
    use HasFactory;

    protected $table = 'crypto_prices';

    protected $fillable = [
        'id',
        'id_crypto',
        'price',
        'date_created'
    ];

    public $timestamps = false;

    public function crypto(){

        return $this->belongsTo(Crypto::class, 'id_crypto', 'id');
    }
}
