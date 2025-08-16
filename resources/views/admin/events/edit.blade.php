@extends('admin.layout.backend')

@section('title') {{ __('Edit Event') }} @endsection

@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="main_head" class="form-label">Main Heading</label>
                        <input type="text" name="main_head" id="main_head" class="form-control" value="{{ old('main_head', $event->main_head) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="main_img" class="form-label">Main Image</label>
                        @if($event->main_img)
                            <img src="{{ asset($event->main_img) }}" alt="Main Image" width="100" class="mb-2">
                        @endif
                        <input type="file" name="main_img" id="main_img" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="main_desc" class="form-label">Main Description</label>
                        <textarea name="main_desc" id="main_desc" class="form-control summernote">{{ old('main_desc', $event->main_desc) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="banner_desc" class="form-label">Banner Description</label>
                        <textarea name="banner_desc" id="banner_desc" class="form-control">{{ old('banner_desc', $event->banner_desc) }}</textarea>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="banner_img" class="form-label">Banner Image</label>
                        @if($event->banner_img)
                            <img src="{{ asset($event->banner_img) }}" alt="Banner Image" width="100" class="mb-2">
                        @endif
                        <input type="file" name="banner_img" id="banner_img" class="form-control">
                    </div> --}}
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $event->slug) }}" required>
                    </div>
                    <button type="submit" class="btn btn-success">Update Event</button>
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
