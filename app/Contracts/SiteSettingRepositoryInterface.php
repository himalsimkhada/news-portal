<?php

namespace App\Contracts;

use App\Models\Admin\SiteSetting;
use App\Http\Requests\SiteSettingRequest;

interface SiteSettingRepositoryInterface
{
    public function indexSiteSetting();

    public function createSiteSetting();

    public function storeSiteSetting(SiteSettingRequest $request);

    public function showSiteSetting(SiteSetting $SiteSetting);

    public function editSiteSetting(SiteSetting $SiteSetting);

    public function updateSiteSetting(SiteSettingRequest $request, SiteSetting $SiteSetting);

    public function destroySiteSetting(SiteSetting $SiteSetting);
}
