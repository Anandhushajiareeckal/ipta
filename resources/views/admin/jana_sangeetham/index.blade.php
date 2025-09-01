@extends('admin.layout.backend')
@section('title') Jana Sangeethams @endsection
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.jana-sangeetham.create') }}" class="btn btn-primary mb-3">Add Jana Sangeetham</a>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Main Heading</th>
                            <th>Main Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($janaSangeethams as $key => $item)
                            <tr>
                                <td>{{ $janaSangeethams->firstItem() + $key }}</td>
                                <td>{{ $item->main_head }}</td>
                                <td>
                                    @if($item->main_img)
                                        <img src="{{ asset($item->main_img) }}" alt="Image" width="60">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.jana-sangeetham.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('admin.jana-sangeetham.destroy', $item->id) }}" method="POST" class="d-inline">
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
                    {{ $janaSangeethams->links('pagination::bootstrap-5') }}
                </div>
                @if ($janaSangeethams->isEmpty())
                    <p class="text-center mt-3">No Jana Sangeethams available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection