<?php

namespace App\Http\Requests;

use App\Models\Campaign;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCampaign extends FormRequest
{
    public function authorize(): bool
    {
        // TODO: add authorization
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['string'],
            'order' => ['integer'],
            'type' => [Rule::in(Campaign::TYPES)],
            'status' => [Rule::in(Campaign::STATUSES)],
        ];
    }
}
