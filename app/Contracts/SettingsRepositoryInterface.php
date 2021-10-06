<?php

namespace App\Contracts;

use App\Models\Admin\Settings;
use App\Http\Requests\SettingsRequest;

interface SettingsRepositoryInterface
{
    public function indexSettings();

    public function createSettings();

    public function storeSettings(SettingsRequest $request);

    public function showSettings(Settings $Settings);

    public function editSettings(Settings $Settings);

    public function updateSettings(SettingsRequest $request, Settings $Settings);

    public function destroySettings(Settings $Settings);
}
