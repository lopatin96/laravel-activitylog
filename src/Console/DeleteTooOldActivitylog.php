<?php

namespace Atin\LaravelActivitylog\Console;

use Atin\LaravelActivitylog\Models\Activitylog;

class DeleteTooOldActivitylog
{
    public function __invoke(): void
    {
        $dateToDelete = now()->subDays(180);

        Activitylog::whereDate('created_at', '<', $dateToDelete)
            ->delete();
    }
}
