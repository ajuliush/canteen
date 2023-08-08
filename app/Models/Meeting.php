<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Meeting extends Model
{
    use HasFactory;
    use softDeletes;
    protected $guarded=['id'];

    public function user(): belongsTo
    {
        return $this->beLongsTo(People::class,'user_id');
    }

    public function admin(): belongsTo
    {
        return $this->beLongsTo(Admin::class,'admin_id');
    }

    public function meeting_details(): HasMany
    {
        return $this->hasMany(MeetingDetails::class);
    }
}
