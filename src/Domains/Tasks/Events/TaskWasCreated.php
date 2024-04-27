<?php

declare(strict_types=1);

namespace Domains\Tasks\Events;

use Domains\Tasks\ValueObjects\TaskValueObject;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class TaskWasCreated extends ShouldBeStored
{
    /**
     * @param TaskValueObject $object
     */
    public function __construct(
        public TaskValueObject $object,
    ) {}
}