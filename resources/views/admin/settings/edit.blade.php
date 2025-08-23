@extends('admin.layout.backend')
@section('title') Site Settings @endsection
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4">Edit Site Settings</h3>
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Site Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $settings?->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        @if($settings?->logo)
                            <img src="{{ asset($settings->logo) }}" alt="Logo" width="120" class="mb-2">
                        @endif
                        <input type="file" name="logo" id="logo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="favicon" class="form-label">Favicon</label>
                        @if($settings?->favicon)
                            <img src="{{ asset($settings->favicon) }}" alt="Favicon" width="32" class="mb-2">
                        @endif
                        <input type="file" name="favicon" id="favicon" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description', $settings?->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $settings?->location) }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone (comma separated)</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $settings?->phone ? implode(', ', json_decode($settings->phone, true)) : '') }}">
                        <small>Example: +123456789, +987654321</small>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email (comma separated)</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $settings?->email ? implode(', ', json_decode($settings->email, true)) : '') }}">
                        <small>Example: info@example.com, support@example.com</small>
                    </div>
                    <button type="submit" class="btn btn-success">Update Settings</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
