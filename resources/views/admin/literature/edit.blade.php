
@extends('admin.layout.backend')

@section('title') {{ __('Edit Literature') }} @endsection

@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.literature.update', $literature->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $literature->title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="">Select Type</option>
                            <option value="poem" {{ old('type', $literature->type) == 'poem' ? 'selected' : '' }}>Poem</option>
                            <option value="story" {{ old('type', $literature->type) == 'story' ? 'selected' : '' }}>Story</option>
                            <option value="book review" {{ old('type', $literature->type) == 'book review' ? 'selected' : '' }}>Book Review</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control summernote">{{ old('description', $literature->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="images" class="form-label">Add Images</label>
                        <input type="file" name="images[]" id="images" class="form-control" multiple>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Images</label><br>
                        @if($literature->images)
                            @foreach($literature->images as $img)
                                <img src="{{ asset($img) }}" width="60" height="60" style="object-fit:cover; margin:2px;">
                            @endforeach
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Update Literature</button>
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
