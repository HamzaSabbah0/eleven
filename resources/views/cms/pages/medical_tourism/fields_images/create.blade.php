@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>اضافة صور المجال</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="{{ route('panel.medical.tourism.fields-images.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <label>مجالات في السياحة العلاجية</label>
                            <select class="form-select form-select-lg" name="eleven_field_id" required>
                                @foreach ($elevenFields as $elevenField)
                                    <option value="{{ $elevenField->id }}">{{ $elevenField->title_ar }}</option>
                                @endforeach
                            </select>
                            @error('eleven_field_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="photo">صورة المجال</label>
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>
                                    <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                        title="Clear Image">
                                        <i class="fa-solid fa-xmark"></i> حذف الصورة
                                    </a>
                                </label>
                                @error('photo.*')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="photo[]"
                                        class="custom-file-container__custom-file__custom-file-input"
                                        accept="image/png,image/jpg,image/jpeg" multiple required>
                                    {{-- <input type="hidden" name="MAX_FILE_SIZE" value="10485760" /> --}}
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>
                        <input type="submit" class="mt-4 mb-4 btn btn-primary" value="حفظ">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            new FileUploadWithPreview('myFirstImage');
        });
    </script>
@endpush
