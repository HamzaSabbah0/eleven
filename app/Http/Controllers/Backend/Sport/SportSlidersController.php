<?php

namespace App\Http\Controllers\Backend\Sport;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SportSlidersController extends Controller
{
    use FileManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::where('section_title','sport_page')->paginate(10);
        return view('cms.pages.sport.sliders.index', compact("sliders"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.sport.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messages = [
            'photo.required' => 'هذا الحقل مطلوب',
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];
        $this->validate($request, $rules, $messages);

        $slider = new Slider();

        if ($request->hasFile('photo')) {
            $slider->photo = $this->upload_file($request->photo, 'sport-sliders');
        }

        $slider->section_title = 'sport_page';

        $slider->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('cms.pages.sport.sliders.edit' , compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
        $rules = [
            'photo' => 'nullable|image|mimes:png,jpg,jpeg|max:3000',
        ];
        $messages = [
            'photo.image' => 'يجب أن بكون الملف المرفق صورة',
            'photo.mimes' => 'صيغة الملف يجب أن تكون من نوع :mimes',
            'photo.size' => 'لا يجب أن تتجاوز الصورة مساحة 3 ميجا',
        ];

        $this->validate($request, $rules, $messages);

        if ($request->hasFile('photo')) {
            $path = parse_url($slider->photo);
            unlink(public_path($path['path']));
            $slider->photo = $this->upload_file($request->photo, 'sport_sliders');
        }

        $slider->description_ar = $request->description_ar;
        $slider->description_en = $request->description_en;
        $slider->description_tu = $request->description_tu;
        $slider->description_fr = $request->description_fr;
        $slider->section_title = 'sport_page';

        $slider->save();
        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
        $path = parse_url($slider->photo);
        unlink(public_path($path['path']));

        $slider->delete();

        Session::flash('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
