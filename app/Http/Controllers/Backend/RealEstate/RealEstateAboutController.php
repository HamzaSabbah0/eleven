<?php

namespace App\Http\Controllers\Backend\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RealEstateAboutController extends Controller
{
    public function about_real_estate()
    {
        $about = About::where('section_title','about_realEstate')->first();
        return view('cms.pages.real_estate.abouts.index' , compact('about'));
    }

    public function update_real_estate(Request $request)
    {
        $rules = [
            '*' => 'required',
            'files' =>'nullable',
        ];

        $messages = [
            '*.required' => 'هذا الحقل مطلوب',
        ];

        $this->validate($request, $rules, $messages);

        About::updateOrCreate(['section_title' => 'about_realEstate'], [
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'title_tu' => $request->title_tu,
            'title_fr' => $request->title_fr,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'description_tu' => $request->description_tu,
            'description_fr' => $request->description_fr,
            'section_title' => 'about_realEstate'
        ]);

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();

    }
}
