<?php

namespace App\Services;

use App\Models\Campaign;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class CampaignService
{
    public function findActiveCampaigns(): Collection
    {
        return Campaign::active()->where('type', '!=', 'rvm')->orderByDesc('order')->limit(10)->get();
    }

    public static function filter(): self
    {
        return new self();
    }

    public function requestStartDate(int $campaignId): Carbon
    {
        return now();
    }
}
