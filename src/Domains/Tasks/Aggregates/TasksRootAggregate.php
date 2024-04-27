<?php

declare(strict_types=1);

namespace Domains\Tasks\Aggregates;

use Domains\Tasks\Events\TaskWasCreated;
use Domains\Tasks\ValueObjects\TaskValueObject;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class TasksRootAggregate extends AggregateRoot
{
    /**
     * @param TaskValueObject $object
     * @return self
     */
    public function createTask(TaskValueObject $object): self
    {
        $this->recordThat(
            domainEvent: new TaskWasCreated(
                object: $object,
            ),
        );

        return $this;
    }
}