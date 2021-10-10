<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHabitExecutionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'executed_at' => 'date|required'
        ];
    }
}
