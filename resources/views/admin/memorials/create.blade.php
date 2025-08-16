@extends('admin.layout.backend')

@section('title') {{ __('Add Memorial') }} @endsection

@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.memorials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="main_head" class="form-label">Main Heading</label>
                        <input type="text" name="main_head" id="main_head" class="form-control" value="{{ old('main_head') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="main_img" class="form-label">Main Image</label>
                        <input type="file" name="main_img" id="main_img" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="main_desc" class="form-label">Main Description</label>
                        <textarea name="main_desc" id="main_desc" class="form-control summernote">{{ old('main_desc') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="banner_desc" class="form-label">Banner Description</label>
                        <textarea name="banner_desc" id="banner_desc" class="form-control">{{ old('banner_desc') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="">Select Type</option>
                            <option value="anusmarana kurippu" {{ old('type') == 'anusmarana kurippu' ? 'selected' : '' }}>Anusmarana Kurippu</option>
                            <option value="jeeva charithram" {{ old('type') == 'jeeva charithram' ? 'selected' : '' }}>Jeeva Charithram</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" readonly>
                        <small class="text-muted">Slug will be generated automatically from the main heading.</small>
                    </div>
                    <button type="submit" class="btn btn-success">Create Memorial</button>
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
