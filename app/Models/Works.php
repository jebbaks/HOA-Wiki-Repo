<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Works extends Model
{
    protected $table = 'Works';
    protected $fillable = ['work_title', 'work_body', 'work_status', 'work_category'];
    
    public function media(): HasMany {
        return $this->hasMany(Media::class);
    }

}
