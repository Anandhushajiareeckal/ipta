@extends('admin.layout.backend')

@section('title') {{ __('Add Video') }} @endsection

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

                <form action="{{ route('admin.videos.store') }}" method="POST">
                    @csrf

                    <div class="mb-4 row">
                        <label for="title" class="col-sm-3 col-form-label">{{ __('Title') }}<span style="color: red;">*</span></label>
                        <div class="col-sm-9">
                            <input id="title" name="title" type="text" class="form-control" placeholder="Enter Video Title" value="{{ old('title') }}" required>
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="url" class="col-sm-3 col-form-label">{{ __('YouTube Video URL') }}<span style="color: red;">*</span></label>
                        <div class="col-sm-9">
                            <input id="url" name="url" type="text" class="form-control" placeholder="e.g. https://www.youtube.com/embed/dQw4w9WgXcQ" value="{{ old('url') }}" required>
                            @error('url') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary w-md">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
