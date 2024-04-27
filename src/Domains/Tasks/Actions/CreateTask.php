<?php

declare(strict_types=1);

namespace Domains\Tasks\Actions;

use App\Models\Task;
use Domains\Tasks\ValueObjects\TaskValueObject;
use Illuminate\Database\Eloquent\Model;

class CreateTask
{
    /**
     * @param TaskValueObject $object
     * @return Model
     */
    public static function handle(TaskValueObject $object): Model
    {
        return Task::query()->create(
            attributes: $object->toArray(),
        );
    }
}