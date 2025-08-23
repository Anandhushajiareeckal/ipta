@extends('admin.layout.backend')
@section('title') Edit Contact @endsection
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('admin.contact.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="banner_img" class="form-label">Banner Image</label>
                        @if($contact?->banner_img)
                            <img src="{{ asset($contact->banner_img) }}" alt="Banner Image" width="120" class="mb-2">
                        @endif
                        <input type="file" name="banner_img" id="banner_img" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="banner_desc" class="form-label">Banner Description</label>
                        <textarea name="banner_desc" id="banner_desc" class="form-control">{{ old('banner_desc', $contact?->banner_desc) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="map_url" class="form-label">Map URL</label>
                        <input type="text" name="map_url" id="map_url" class="form-control" value="{{ old('map_url', $contact?->map_url) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Instagram</label>
                        <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $contact && $contact->social_media ? json_decode($contact->social_media)->instagram : '') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $contact && $contact->social_media ? json_decode($contact->social_media)->facebook : '') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">WhatsApp</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ old('whatsapp', $contact && $contact->social_media ? json_decode($contact->social_media)->whatsapp : '') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description', $contact?->description) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Update Contact</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
