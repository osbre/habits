<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitRequest;
use Spatie\RouteAttributes\Attributes\{Middleware, Post, Prefix};
use Symfony\Component\HttpFoundation\Response;

#[Middleware('auth')]
#[Prefix('/api')]
final class HabitController
{
    #[Post('/habits')]
    public function store(StoreHabitRequest $request)
    {
        $request->user()->habits()->create($request->validated());

        return response()->noContent(Response::HTTP_CREATED);
    }
}
