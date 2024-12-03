<?php

namespace Atin\LaravelActivitylog\Console;

use App\Models\Activitylog;

class DeleteTooOldActivitylog
{
    public function __invoke(): void
    {
        $dateToDelete = now()->subDays(180);

        Activitylog::withTrashed()
            ->whereDate('created_at', '<', $dateToDelete)
            ->delete();
    }
}
