@extends('cms._layout.app')

@push('style')
    <style>
        #map iframe {
            width: 100%;
            height: 300px;
        }

        #cover img {
            width: 100%;
            height: 350px;
            object-fit: contain;
        }
    </style>
@endpush

@section('content')

    <div id="tableHover" class="col-lg-12 col-12 layout-spacing layout-top-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row mb-3">
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <h4>اللغة العربية</h4>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <h4>اللغة الإنجليزية</h4>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <h4>اللغة التركية</h4>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <h4>اللغة الفرنسية</h4>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <h5><b>العنوان:</b> {{ $activity->title_ar }}</h5>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <h5>{{ $activity->title_en }}</h5>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <h5>{{ $activity->title_tu }}</h5>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <h5>{{ $activity->title_fr }}</h5>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <p><b>الوصف:</b> {{ $activity->description_ar }}</p>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <p>{{ $activity->description_en }}</p>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <p>{{ $activity->description_tu }}</p>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <p>{{ $activity->description_fr }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                        <p><b>عنوان القسم:</b> {{ $activity->section_title }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12" id="photo">
                        <img src="{{ asset('storage/' . $activity->photo) }}" alt="photo">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection