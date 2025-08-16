@extends('admin.layout.backend')

@section('title') {{ __('Edit Memorial') }} @endsection

@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.memorials.update', $memorial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="main_head" class="form-label">Main Heading</label>
                        <input type="text" name="main_head" id="main_head" class="form-control" value="{{ old('main_head', $memorial->main_head) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="main_img" class="form-label">Main Image</label>
                        @if($memorial->main_img)
                            <img src="{{ asset($memorial->main_img) }}" alt="Main Image" width="100" class="mb-2">
                        @endif
                        <input type="file" name="main_img" id="main_img" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="main_desc" class="form-label">Main Description</label>
                        <textarea name="main_desc" id="main_desc" class="form-control summernote">{{ old('main_desc', $memorial->main_desc) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="banner_desc" class="form-label">Banner Description</label>
                        <textarea name="banner_desc" id="banner_desc" class="form-control">{{ old('banner_desc', $memorial->banner_desc) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="">Select Type</option>
                            <option value="anusmarana kurippu" {{ old('type', $memorial->type) == 'anusmarana kurippu' ? 'selected' : '' }}>Anusmarana Kurippu</option>
                            <option value="jeeva charithram" {{ old('type', $memorial->type) == 'jeeva charithram' ? 'selected' : '' }}>Jeeva Charithram</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $memorial->slug) }}" readonly>
                        <small class="text-muted">Slug will be generated automatically from the main heading.</small>
                    </div>
                    <button type="submit" class="btn btn-success">Update Memorial</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300
        });
    });
</script>
@endpush
@endsection
