<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quotes';
    protected $primaryKey = 'symbol';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'symbol',
        'description',
        'date_created'
    ];

    public $timestamps = false;
}
