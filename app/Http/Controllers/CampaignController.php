<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampaign;
use App\Http\Requests\UpdateCampaign;
use App\Http\Resources\CampaignResource;
use App\Models\Campaign;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CampaignController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return CampaignResource::collection(Campaign::active()->paginate());
    }

    public function store(StoreCampaign $request): CampaignResource
    {
        $data = $request->validated();
        $campaign = Campaign::create($data);

        return new CampaignResource($campaign);
    }

    public function update(UpdateCampaign $request, Campaign $campaign): CampaignResource
    {
        $data = $request->validated();
        $campaign->update($data);

        return new CampaignResource($campaign);
    }

    public function destroy(Campaign $campaign): JsonResponse
    {
        // $this->authorize('delete', $campaign);
        $campaign->delete();

        return response()->json(['message' => 'Campaign were deleted']);
    }
}
