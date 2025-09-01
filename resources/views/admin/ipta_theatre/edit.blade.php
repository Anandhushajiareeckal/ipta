@extends('admin.layout.backend')
@section('title') Edit IPTA Theatre @endsection
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.ipta-theatre.update', $iptaTheatre->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="main_head" class="form-label">Main Heading</label>
                        <input type="text" name="main_head" id="main_head" class="form-control" value="{{ old('main_head', $iptaTheatre->main_head) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="main_img" class="form-label">Main Image</label>
                        @if($iptaTheatre->main_img)
                            <img src="{{ asset($iptaTheatre->main_img) }}" alt="Main Image" width="100" class="mb-2">
                        @endif
                        <input type="file" name="main_img" id="main_img" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="main_desc" class="form-label">Main Description</label>
                        <textarea name="main_desc" id="main_desc" class="form-control summernote">{{ old('main_desc', $iptaTheatre->main_desc) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="banner_desc" class="form-label">Banner Description</label>
                        <input type="text" name="banner_desc" id="banner_desc" class="form-control" value="{{ old('banner_desc', $iptaTheatre->banner_desc) }}">
                    </div>
                    <button type="submit" class="btn btn-success">Update IPTA Theatre</button>
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
