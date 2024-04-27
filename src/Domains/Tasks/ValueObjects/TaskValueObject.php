<?php

declare(strict_types=1);

namespace Domains\Tasks\ValueObjects;

class TaskValueObject
{
    /**
     * @param string $title
     */
    public function __construct(
        public string $title,
    ) {}
}