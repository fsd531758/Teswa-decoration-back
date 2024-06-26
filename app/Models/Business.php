<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use App\Traits\Files\HasFiles;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory, Translatable, HasFile, HasFiles;

    protected $table = 'business';

    protected $guarded = [];

    protected $appends = ['image'];

    public $translatedAttributes = ['title', 'short_description', 'description'];

    public $timestamps = true;

    // relations end

    // Scopes start
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeIsTrending($query)
    {
        return $query->where('is_trending', 1);
    }
    // Scopes end

    // accessors & Mutator start
    // this section is responsible for getting the image in api controller
    public function getImageAttribute()
    {
        $image = $this->files->where('type', 'image')->first();
        return $image ? $image->path : asset('uploads/default_image.png');
    }

    public function getActive()
    {
        return $this->status == 1 ? __('words.active') : __('words.inactive');
    }

    public function getIsTrending()
    {
        return $this->is_trending == 1 ? __('words.active') : __('words.inactive');
    }
    // accessors & Mutator end
}
