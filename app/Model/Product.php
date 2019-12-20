<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Product extends Model  {

   protected $table = 'products';

   protected $fillable = [
        'name', 'code', 'stock', 'price_buy', 'price_sell', 'category_id', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
