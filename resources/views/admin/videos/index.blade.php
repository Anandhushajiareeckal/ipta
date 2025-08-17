@extends('admin.layout.backend')

@section('title') {{ __('Videos') }} @endsection

@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.videos.create') }}" class="btn btn-primary mb-3">Add Video</a>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>URL</th>
                            <th>Preview</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $key => $video)
                            <tr>
                                <td>{{ $videos->firstItem() + $key }}</td>
                                <td>{{ $video->title }}</td>
                                <td>{{ $video->url }}</td>
                                <td>
                                    <iframe width="150" height="90" src="{{ $video->url }}" allowfullscreen></iframe>
                                </td>
                                <td>
                                    <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('admin.videos.destroy', $video->id) }}" method="POST" class="d-inline">
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
                    {{ $videos->links('pagination::bootstrap-5') }}
                </div>
                @if ($videos->isEmpty())
                    <p class="text-center mt-3">No videos available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
