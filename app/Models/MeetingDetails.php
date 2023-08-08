<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class MeetingDetails extends Model
{
    use HasFactory;
    use softDeletes;
    protected $guarded=['id'];
    
    public function meeting(): belongsTo
    {
        return $this->beLongsTo(Meeting::class,'meeting_id');
    }
}
