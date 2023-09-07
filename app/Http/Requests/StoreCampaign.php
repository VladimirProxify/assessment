<?php

namespace App\Http\Requests;

use App\Models\Campaign;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCampaign extends FormRequest
{
    public function authorize(): bool
    {
        // TODO: add authorization
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'order' => ['required', 'integer'],
            'type' => ['required', Rule::in(Campaign::TYPES)],
            'status' => ['required', Rule::in(Campaign::STATUSES)],
        ];
    }
}
