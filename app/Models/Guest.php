<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Guest extends Model
{
    use HasFactory;
    use softDeletes; 
    protected $guarded=['id'];

    public function people(): hasOne
    {
        return $this->hasOne(People::class);
    }
}
