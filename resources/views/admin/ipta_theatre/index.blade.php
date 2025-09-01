@extends('admin.layout.backend')
@section('title') IPTA Theatres @endsection
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.ipta-theatre.create') }}" class="btn btn-primary mb-3">Add IPTA Theatre</a>
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
                        @foreach ($iptaTheatres as $key => $item)
                            <tr>
                                <td>{{ $iptaTheatres->firstItem() + $key }}</td>
                                <td>{{ $item->main_head }}</td>
                                <td>
                                    @if($item->main_img)
                                        <img src="{{ asset($item->main_img) }}" alt="Image" width="60">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.ipta-theatre.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('admin.ipta-theatre.destroy', $item->id) }}" method="POST" class="d-inline">
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
                    {{ $iptaTheatres->links('pagination::bootstrap-5') }}
                </div>
                @if ($iptaTheatres->isEmpty())
                    <p class="text-center mt-3">No IPTA Theatres available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection