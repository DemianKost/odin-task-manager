<?php

declare(strict_types=1);

namespace Domains\Tasks\Factories;
use Domains\Tasks\ValueObjects\TaskValueObject;

final class TaskFactory
{
    /**
     * @param array $attributes
     * @return TaskValueObject
     */
    public static function make(array $attributes): TaskValueObject
    {
        return new TaskValueObject(
            title: $attributes['title'],
            description: $attributes['description'],
            complete: $attributes['complete'],
            user_id: $attributes['user_id'],
        );
    }
}