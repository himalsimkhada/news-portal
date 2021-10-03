<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller {
    public function index() {
        $setting = SiteSetting::where('id', 1)->first();
        return view('nepali.settings', compact('setting'));
    }

    public function update(Request $request) {
        $rule = [
            'brand_name' => 'required|max:255',
            'fav-icon' => 'required|image',
            'logo' => 'required|image',
        ];
        $customMessage = [
            'brand_name.required' => 'Brand name is required',
            'fav-icon.required' => 'Fav icon is required',
            'fav-icon.image' => 'Fav icon must be an image',
            'logo.required' => 'Logo is required',
            'logo.image' => 'Logo must be an image'
        ];
        $data = $this->validate($request, $rule, $customMessage);

        $setting = SiteSetting::where('id', 1)->update($data);

        return redirect()->back();
    }
}
