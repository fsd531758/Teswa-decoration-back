<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory , HasFile;

    protected $table = 'quotes';

    protected $guarded = [];

    public $timestamps = true;
    
    public function getFileAttribute()
    {
        $file = $this->file->where('type', 'file')->first();
        return $file ? $file->path : asset('uploads/default_image.png');
    }
}
