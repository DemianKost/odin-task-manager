<?php

declare(strict_types=1);

namespace App\Providers;

use Domains\Tasks\Handlers\TaskHandler;
use Illuminate\Support\ServiceProvider;
use Spatie\EventSourcing\Facades\Projectionist;

class EventSourcingServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        Projectionist::addProjectors(
            projectors: [
                TaskHandler::class,
            ]
        );
    }
}