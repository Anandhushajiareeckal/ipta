@extends('admin.layout.backend')

@section('title') {{ __('Edit News') }} @endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.news.update', $news->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4 row">
                        <label for="main_head" class="col-sm-3 col-form-label">{{ __('Main Heading') }}<span style="color: red;">*</span></label>
                        <div class="col-sm-9">
                            <input id="main_head" name="main_head" type="text" class="form-control" placeholder="Enter Main Heading" value="{{ old('main_head', $news->main_head) }}">
                            @error('main_head') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="main_img" class="col-sm-3 col-form-label">{{ __('Main Image') }}</label>
                        <div class="col-sm-9">
                            <input id="main_img" name="main_img" type="file" class="form-control">
                            @if($news->main_img)
                                <div class="mt-2">
                                    <img src="{{ asset($news->main_img) }}" alt="Current Image" width="100">
                                </div>
                            @endif
                            @error('main_img') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="main_desc" class="col-sm-3 col-form-label">{{ __('Main Description') }}</label>
                        <div class="col-sm-9">
                            <textarea id="main_desc" name="main_desc" class="form-control summernote" rows="4" placeholder="Enter Main Description">{{ old('main_desc', $news->main_desc) }}</textarea>
                            @error('main_desc') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="banner_desc" class="col-sm-3 col-form-label">{{ __('Banner Description') }}</label>
                        <div class="col-sm-9">
                            <textarea id="banner_desc" name="banner_desc" class="form-control" rows="2" placeholder="Enter Banner Description">{{ old('banner_desc', $news->banner_desc) }}</textarea>
                            @error('banner_desc') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="slug" class="col-sm-3 col-form-label">{{ __('Slug') }}</label>
                        <div class="col-sm-9">
                            <input id="slug" name="slug" type="text" class="form-control" value="{{ $news->slug }}" readonly>
                            <small class="text-muted">Slug is generated automatically from the main heading.</small>
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="category" class="col-sm-3 col-form-label">{{ __('Category') }}</label>
                        <div class="col-sm-9">
                            <select id="category" name="category" class="form-control">
                                <option value="Breaking News" {{ old('category', $news->category) == 'Breaking News' ? 'selected' : '' }}>Breaking News</option>
                                <option value="Latest News" {{ old('category', $news->category) == 'Latest News' ? 'selected' : '' }}>Latest News</option>
                                <option value="Trending News" {{ old('category', $news->category) == 'Trending News' ? 'selected' : '' }}>Trending News</option>
                                <option value="Hot" {{ old('category', $news->category) == 'Hot' ? 'selected' : '' }}>Hot</option>
                            </select>
                            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary w-md">{{ __('Update') }}</button>
                            <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300
        });
    });
</script>
@endpush