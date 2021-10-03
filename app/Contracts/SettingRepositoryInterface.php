<?php

namespace App\Contracts;

use App\Models\Admin\Setting;
use App\Http\Requests\SettingRequest;

interface SettingRepositoryInterface
{
    public function indexSetting();

    public function createSetting();

    public function storeSetting(SettingRequest $request);

    public function showSetting(Setting $Setting);

    public function editSetting(Setting $Setting);

    public function updateSetting(SettingRequest $request, Setting $Setting);

    public function destroySetting(Setting $Setting);
}
