<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    use FileManager;

    public function index()
    {
        $settings = Setting::first();
        return view('cms.pages.setting.index', compact("settings"));
    }

    public function update(Request $request)
    {
        $rules = [
            '*' => 'required',
            'logo_photo' => 'image|mimes:png,jpg,jpeg|max:3000',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
            'logo_photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'logo_photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'logo_photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        Setting::updateOrCreate(['id' => 1], [
            'logo_photo' => $this->upload_file($request->logo_photo, 'settings'),
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'whatsapp_number' => $request->whatsapp_number,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}