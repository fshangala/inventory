<?php
namespace Fshangala\Inventory\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'product_id',
        'price'
    ];
}