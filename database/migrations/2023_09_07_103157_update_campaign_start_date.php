<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use App\Services\CampaignService;

return new class extends Migration
{
    public function up(): void
    {
        $chunkSize = 1000;

        DB::table('campaigns')->orderBy('id')->chunk($chunkSize, function ($campaigns) {
            foreach ($campaigns as $campaign) {
                $startDate = CampaignService::filter()->requestStartDate($campaign->id);
                DB::table('campaigns')->where('id', $campaign->id)->update(['start_date' => $startDate]);
            }
        });
    }

    public function down(): void
    {
        // No need to rollback
    }
};
