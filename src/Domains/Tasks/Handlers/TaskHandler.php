<?php

declare(strict_types=1);

namespace Domains\Tasks\Handlers;

use Domains\Tasks\Actions\CreateTask;
use Domains\Tasks\Events\TaskWasCreated;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class TaskHandler extends Projector
{
    /**
     * @param TaskWasCreated $event
     * @return void
     */
    public function onTaskWasCreated(TaskWasCreated $event): void
    {
        CreateTask::handle(
            object: $event->object,
        );
    }
}