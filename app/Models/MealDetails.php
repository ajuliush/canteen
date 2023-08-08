<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\belongsTo;
class MealDetails extends Model
{
    use HasFactory;
    use softDeletes;
    protected $guarded=['id'];
    
    public function meal(): belongsTo
    {
        return $this->beLongsTo(Meal::class,'meal_id');
    }

}
