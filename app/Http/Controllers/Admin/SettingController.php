<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RestaurantSetting; 
class SettingController extends Controller
{
    public function edit()
    {
        $settings = RestaurantSetting::first();
        return view('layouts.setting_edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'opening_time' => 'required|date_format:H:i',
            'closing_time' => 'required|date_format:H:i',
            'max_guests_per_slot' => 'required|integer|min:1',
            'reservation_duration' => 'required|integer|min:15',
            'buffer_time' => 'required|integer|min:0',
        ]);

        $settings = RestaurantSetting::first();
        if (!$settings) {
            $settings = new RestaurantSetting();
        }

        $settings->fill($request->all());
        $settings->save();

        return redirect()->route('settings_edit')->with('success', 'Settings updated.');
    }

}
