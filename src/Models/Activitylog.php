<?php

namespace Atin\LaravelActivitylog\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Atin\LaravelNovaBadges\Traits\HasNovaBadges;

class Activitylog extends Model
{
    use HasNovaBadges, HasFactory;

    protected $table = 'activity_log';

    public function user()
    {
        return $this->belongsTo(User::class, 'causer_id');
    }
}
