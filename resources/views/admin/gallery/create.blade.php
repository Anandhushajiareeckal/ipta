@extends('admin.layout.backend')

@section('title') {{ __('Add Gallery') }} @endsection

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

                <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4 row">
                        <label for="title" class="col-sm-3 col-form-label">{{ __('Title') }}<span style="color: red;">*</span></label>
                        <div class="col-sm-9">
                            <input id="title" name="title" type="text" class="form-control" placeholder="Enter Gallery Title" value="{{ old('title') }}">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="images" class="col-sm-3 col-form-label">{{ __('Images') }}</label>
                        <div class="col-sm-9">
                            <input id="images" name="images[]" type="file" class="form-control" multiple required>
                            @error('images') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="slug" class="col-sm-3 col-form-label">{{ __('Slug') }}</label>
                        <div class="col-sm-9">
                            <input id="slug" name="slug" type="text" class="form-control" value="{{ old('slug') }}" readonly>
                            <small class="text-muted">Slug will be generated automatically from the title.</small>
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
