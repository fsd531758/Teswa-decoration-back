<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory, Translatable, HasFile;


    protected $table = 'sections';

    protected $guarded = [];

    // protected $appends = ['image'];

    public $translatedAttributes = ['title'];

    public $timestamps = true;

    // relations start
    public function categories(){
        return $this->hasMany(Category::class);
    }
    // relations end

    // Scopes start
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    // Scopes end

    // accessors & Mutator start
    // public function getImageAttribute()
    // {
    //     $image = $this->file()->first();
    //     return $image ? $image->path : asset('uploads/default_image.png');
    // }

    public function getActive()
    {
        return $this->status == 1 ? __('words.active') : __('words.inactive');
    }
    // accessors & Mutator end
}
