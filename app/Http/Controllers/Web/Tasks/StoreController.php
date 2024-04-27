<?php

namespace App\Http\Controllers\Web\Tasks;

use App\Http\Controllers\Controller;
use Domains\Tasks\Aggregates\TasksRootAggregate;
use Domains\Tasks\Factories\TaskFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        TasksRootAggregate::retrieve(
            uuid: Str::uuid()->toString(),
        )->createTask(
            object: TaskFactory::make(
                attributes: $request->validated(),
            )
        )->persist();

        return true;
    }
}
