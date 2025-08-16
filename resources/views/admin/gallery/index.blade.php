@extends('admin.layout.backend')

@section('title') {{ __('Galleries') }} @endsection

@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary mb-3">Add Gallery</a>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $key => $gallery)
                            <tr>
                                <td>{{ $galleries->firstItem() + $key }}</td>
                                <td>{{ $gallery->title }}</td>
                                <td>{{ $gallery->slug }}</td>
                                <td>
                                    @if($gallery->images)
                                        @foreach($gallery->images as $img)
                                            <img src="{{ asset($img) }}" alt="Image" width="60" style="object-fit:cover; margin:2px;">
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.gallery.edit', $gallery->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content">
                    {{ $galleries->links('pagination::bootstrap-5') }}
                </div>
                @if ($galleries->isEmpty())
                    <p class="text-center mt-3">No galleries available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
