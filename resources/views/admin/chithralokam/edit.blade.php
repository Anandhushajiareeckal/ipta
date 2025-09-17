@extends('admin.layout.backend')

@section('title') {{ __('Edit Chithralokam') }} @endsection

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

                <form action="{{ route('admin.chithralokam.update', $chithralokam->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4 row">
                        <label for="title" class="col-sm-3 col-form-label">{{ __('Title') }}<span style="color: red;">*</span></label>
                        <div class="col-sm-9">
                            <input id="title" name="title" type="text" class="form-control" placeholder="Enter Chithralokam Title" value="{{ old('title', $chithralokam->title) }}">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="images" class="col-sm-3 col-form-label">{{ __('Add Images') }}</label>
                        <div class="col-sm-9">
                            <input id="images" name="images[]" type="file" class="form-control" multiple>
                            @error('images') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label class="col-sm-3 col-form-label">{{ __('Current Images') }}</label>
                        <div class="col-sm-9">
                            @if($chithralokam->images)
                                @foreach($chithralokam->images as $img)
                                    <img src="{{ asset($img) }}" alt="Image" width="60" style="object-fit:cover; margin:2px;">
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="slug" class="col-sm-3 col-form-label">{{ __('Slug') }}</label>
                        <div class="col-sm-9">
                            <input id="slug" name="slug" type="text" class="form-control" value="{{ $chithralokam->slug }}" readonly>
                            <small class="text-muted">Slug is generated automatically from the title.</small>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary w-md">{{ __('Update') }}</button>
                            <a href="{{ route('admin.chithralokam.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection