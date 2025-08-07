@extends('admin.layout.backend')
@section('content')
    @component('admin.components.breadcrumb', ['breadcrumbs' => $breadcrumbs])
        @slot('title')
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ __('About Us ') }}</h4>
            </div>
        </div>
    </div>
    <!-- Start Table -->
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    {{-- Display Validation Errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h4 class="mb-4 mt-4">Banner Section</h4>
                        <div class="mb-4 row">
                            <label class="col-sm-3 col-form-label">Banner Image</label>
                            <div class="col-sm-9">
                                @if (!empty($data->banner_image))
                                    <img src="{{ asset('storage/' . $data->banner_image) }}" alt="Banner"
                                        class="img-thumbnail mb-2" width="100">
                                @endif
                                <input type="file" name="banner_image" class="form-control">
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label class="col-sm-3 col-form-label">Banner Head</label>
                            <div class="col-sm-9">
                                <input type="text" name="banner_head" class="form-control"
                                    value="{{ old('banner_head', @$data->banner_head) }}">
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label class="col-sm-3 col-form-label">Banner Description</label>
                            <div class="col-sm-9">
                                <textarea name="banner_description" class="form-control">{{ old('banner_description', @$data->banner_description) }}</textarea>
                            </div>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4 mt-4">What we are</h4>
                    <div class="mb-4 row">
                        <label class="col-sm-3 col-form-label">Main Head</label>
                        <div class="col-sm-9">
                            <input type="text" name="main_head" class="form-control"
                                value="{{ old('main_head', @$data->main_head) }}">
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label class="col-sm-3 col-form-label">Main Description</label>
                        <div class="col-sm-9">
                            <textarea name="main_description" class="form-control">{{ old('main_description', @$data->main_description) }}</textarea>
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label class="col-sm-3 col-form-label">Main Image</label>
                        <div class="col-sm-9">
                            @if (!empty($data->main_image))
                                <img src="{{ asset('storage/' . $data->main_image) }}" alt="Main Image"
                                    class="img-thumbnail mb-2" width="100">
                            @endif
                            <input type="file" name="main_image" class="form-control">
                        </div>
                    </div>
                </div>
            </div>



            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4 mt-4">Our Features</h4>
                    <div class="mb-4 row">
                        <label class="col-sm-3 col-form-label">Image </label>
                        <div class="col-sm-9">
                            @if (!empty($data->image_2))
                                <img src="{{ asset('storage/' . $data->image_2) }}" alt="Image 2"
                                    class="img-thumbnail mb-2" width="100">
                            @endif
                            <input type="file" name="image_2" class="form-control">
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label class="col-sm-3 col-form-label">Heading</label>
                        <div class="col-sm-9">
                            <input type="text" name="head_2" class="form-control"
                                value="{{ old('head_2', @$data->head_2) }}">
                        </div>
                    </div>

                    @for ($i = 1; $i <= 3; $i++)
                        <div class="mb-4 row">
                            <label class="col-sm-3 col-form-label">Sub Head {{ $i }}</label>
                            <div class="col-sm-9">
                                <input type="text" name="sub_head_{{ $i }}" class="form-control"
                                    value="{{ old('sub_head_' . $i, @$data->{'sub_head_' . $i}) }}">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label class="col-sm-3 col-form-label">Sub Desc {{ $i }}</label>
                            <div class="col-sm-9">
                                <textarea name="sub_desc_{{ $i }}" class="form-control">{{ old('sub_desc_' . $i, @$data->{'sub_desc_' . $i}) }}</textarea>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4 mt-4">Rank Section</h4>
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="mb-4 row">
                            <label class="col-sm-3 col-form-label">Rank Value {{ $i }}</label>
                            <div class="col-sm-9">
                                <input type="text" name="rank_value_{{ $i }}" class="form-control"
                                    value="{{ old('rank_value_' . $i, @$data->{'rank_value_' . $i}) }}">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label class="col-sm-3 col-form-label">Rank Text {{ $i }}</label>
                            <div class="col-sm-9">
                                <input type="text" name="rank_text_{{ $i }}" class="form-control"
                                    value="{{ old('rank_text_' . $i, @$data->{'rank_text_' . $i}) }}">
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary w-md">{{ __('Update') }}</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
