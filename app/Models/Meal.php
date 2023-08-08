<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Meal extends Model
{
    use HasFactory;
    use softDeletes;
    protected $guarded=['id'];

    public function meal_details(): HasMany
    {
        return $this->hasMany(MealDetails::class);
    }
}
