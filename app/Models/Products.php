<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */

    protected $fillable = [
        'name',
        'brand_id',
        'name',
        'top_notes',
        'middle_notes',
        'base_notes',
        'price',
        'category',
        'size',
        'image_url',
        'description',
        'stock',
    ];

    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }
}