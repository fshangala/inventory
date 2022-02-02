<?php
namespace Fshangala\Inventory\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'cover'
    ];
}