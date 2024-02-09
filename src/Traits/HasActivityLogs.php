<?php

namespace Atin\LaravelActivitylog\Traits;

use Atin\LaravelActivitylog\Models\Activitylog;

trait HasActivityLogs
{
    public function activityLogs(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Activitylog::class, 'causer');
    }
}