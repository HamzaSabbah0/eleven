@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>تعديل مجال</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="{{ route('panel.real.estate.fields.update', $elevenField->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="titleAr" class="form-label">العنوان باللغة العربية</label>
                                <input type="text" class="form-control" name="title_ar" id="titleAr"
                                    placeholder="العنوان باللغة العربية" value="{{ old('title_ar', $elevenField ? $elevenField->title_ar : '') }}" required>
                                @error('title_ar')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="titleEn" class="form-label">العنوان باللغة الانجليزية</label>
                                <input type="text" class="form-control" name="title_en" id="titleEn"
                                    placeholder="العنوان باللغة الانجليزية" value="{{ old('title_en', $elevenField ? $elevenField->title_en : '') }}" required>
                                @error('title_en')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="titleTu" class="form-label">العنوان باللغة التركية</label>
                                <input type="text" class="form-control" name="title_tu" id="titleTu"
                                    placeholder="العنوان باللغة التركية" value="{{ old('title_tu', $elevenField ? $elevenField->title_tu : '') }}" required>
                                @error('title_tu')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="titleFr" class="form-label">العنوان باللغة الفرنسية</label>
                                <input type="text" class="form-control" name="title_fr" id="titleFr"
                                    placeholder="العنوان باللغة الفرنسية" value="{{ old('title_fr', $elevenField ? $elevenField->title_fr : '') }}" required>
                                @error('title_fr')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="descriptionAr">الوصف باللغة العربية</label>
                            <textarea class="form-control" id="descriptionAr" name="description_ar" rows="3"
                            placeholder="الوصف باللغة العربة" required>
                                {{ $elevenField ? $elevenField->description_ar : '' }}</textarea>
                            @error('description_ar')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="descriptionEn">الوصف باللغة الانجليزية</label>
                            <textarea class="form-control" id="descriptionEn" name="description_en" rows="3"
                                placeholder="الوصف باللغة الانجليزية " required>
                                {{ $elevenField ? $elevenField->description_en : '' }}</textarea>
                            @error('description_en')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="descriptionTu">الوصف باللغة التركية</label>
                            <textarea class="form-control" id="descriptionTu" name="description_tu" rows="3"
                                placeholder="الوصف باللغة التركية" required>
                                {{ $elevenField ? $elevenField->description_tu : '' }}</textarea>
                            @error('description_tu')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="descriptionFr">الوصف باللغة الفرنسية</label>
                            <textarea class="form-control" id="descriptionFr" name="description_fr" rows="3"
                                placeholder="الوصف باللغة الفرنسية" required>
                                {{ $elevenField ? $elevenField->description_fr : '' }}</textarea>
                            @error('description_fr')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" class="mt-4 mb-4 btn btn-primary" value="تعديل">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            let optionsAr = {
                placeholder: 'اكتب هنا...',
                tabsize: 2,
                height: 200,
                lang: 'ar-AR',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview', 'help']]
                ]
            };
            let optionsEn = {
                placeholder: 'اكتب هنا...',
                tabsize: 2,
                height: 200,
                lang: 'en-US',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview', 'help']]
                ]
            };
            $('#descriptionAr').summernote(optionsAr);
            $('#descriptionEn').summernote(optionsEn);
            $('#descriptionFr').summernote(optionsEn);
            $('#descriptionTu').summernote(optionsEn);
        });
    </script>
@endpush
