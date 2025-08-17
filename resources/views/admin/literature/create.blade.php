
@extends('admin.layout.backend')

@section('title') {{ __('Add Literature') }} @endsection

@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.literature.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="">Select Type</option>
                            <option value="poem" {{ old('type') == 'poem' ? 'selected' : '' }}>Poem</option>
                            <option value="story" {{ old('type') == 'story' ? 'selected' : '' }}>Story</option>
                            <option value="book review" {{ old('type') == 'book review' ? 'selected' : '' }}>Book Review</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control summernote">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="images" class="form-label">Images</label>
                        <input type="file" name="images[]" id="images" class="form-control" multiple>
                    </div>
                    <button type="submit" class="btn btn-success">Create Literature</button>
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
