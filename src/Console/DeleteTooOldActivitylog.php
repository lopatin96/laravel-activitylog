<?php

namespace Atin\LaravelActivitylog\Console;

use App\Models\Activitylog;
use function App\Console\now;

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
