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
        public string $description,
        public bool $complete,
        public int $user_id
    ) {}

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'complete' => $this->complete,
            'user_id' => $this->user_id,
        ];
    }
}