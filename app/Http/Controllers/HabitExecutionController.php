<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitExecutionRequest;
use App\Models\Habit;
use Spatie\RouteAttributes\Attributes\Post;
use Symfony\Component\HttpFoundation\Response;

final class HabitExecutionController
{
    #[Post('/api/habits/{habit}/executions', name: 'habits.executions.store')]
    public function store(Habit $habit, StoreHabitExecutionRequest $request)
    {
        // TODO: authorize

        $habit->executions()->create($request->validated());

        return response()->noContent(Response::HTTP_CREATED);
    }
}
