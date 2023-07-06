<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAdditionalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'title',
        'text',
    ];
}
