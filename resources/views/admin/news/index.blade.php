@extends('admin.layout.backend')
@section('content')
    @component('admin.components.breadcrumb', ['breadcrumbs' => $breadcrumbs])
        @slot('title')
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ __('News') }}</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.news.create') }}" class="btn btn-primary w-md">{{ __('Create News') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Table -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>{{ __('Order') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Image') }}</th>     
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $key => $item)
                                <tr>
                                    <td>{{ $news->firstItem() + $key }}</td>
                                    <td>{{ $item->main_head }}</td>
                                    <td>
                                        @if($item->main_img)
                                            <img src="{{ asset($item->main_img) }}" alt="Image" width="60">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-sm btn-info">{{ __('Edit') }}</a>
                                        <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('{{ __('Are you sure?') }}')">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content">
                        {{ $news->links('pagination::bootstrap-5') }}
                    </div>

                    @if ($news->isEmpty())
                        <p class="text-center mt-3">{{ __('No sliders available.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Table -->
@endsection
