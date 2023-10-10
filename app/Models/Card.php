<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'card_number',
        'pin',
        'activation_date',
        'expiration_date',
        'balance',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'activation_date' => 'date',
        'expiration_date' => 'date',
    ];

    public static $rules = [
        'card_number' => 'required|size:20|numeric',
        'pin' => 'required|size:4|numeric',
        'activation_date' => 'required|date',
        'expiration_date' => 'required|date',
        'balance' => 'required|numeric|min:10',
    ];
}
