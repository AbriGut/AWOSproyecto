<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $price
 * @property $stock
 * @property $size
 * @property $type
 * @property $provider
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name' => 'required',
		'price' => 'required',
		'stock' => 'required',
		'size' => 'required',
		'type' => 'required',
		'provider' => 'required',
    ];

    protected $perPage = 3;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','price','stock','size','type','provider'];



}
