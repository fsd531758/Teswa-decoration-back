<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory, Translatable, HasFile;


    protected $table = 'colors';

    protected $guarded = [];


    public $translatedAttributes = ['title'];

    public $timestamps = true;

    // relations start
    public function products()
    {
        return $this->belongsToMany(Product::class, 'color_product');
    }
    // relations end


    // Scopes start
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    // Scopes end



    public function getActive()
    {
        return $this->status == 1 ? __('words.active') : __('words.inactive');
    }
    // accessors & Mutator end
}
