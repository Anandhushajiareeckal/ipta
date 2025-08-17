@extends('admin.layout.backend')
@section('title') {{ __('Literature') }} @endsection
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.literature.create') }}" class="btn btn-primary mb-3">Add Literature</a>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($literatures as $key => $item)
                            <tr>
                                <td>{{ $literatures->firstItem() + $key }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ ucfirst($item->type) }}</td>
                                <td>
                                    @if($item->images)
                                        @foreach($item->images as $img)
                                            <img src="{{ asset($img) }}" alt="Image" width="60">
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.literature.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('admin.literature.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content">
                    {{ $literatures->links('pagination::bootstrap-5') }}
                </div>
                @if ($literatures->isEmpty())
                    <p class="text-center mt-3">No literature available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
