<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Admin extends Model
{
    use softDeletes;
    use HasFactory;
    protected $guarded=['id'];
    
    public function meeting(): HasMany
    {
        return $this->hasMany(Meeting::class);
    }
}
