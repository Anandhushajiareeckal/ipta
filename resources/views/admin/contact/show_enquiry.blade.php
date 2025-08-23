@extends('admin.layout.backend')
@section('title') Enquiry Details @endsection
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3>Enquiry Details</h3>
                <table class="table table-bordered">
                    <tr><th>First Name</th><td>{{ $enquiry->fname }}</td></tr>
                    <tr><th>Last Name</th><td>{{ $enquiry->lname }}</td></tr>
                    <tr><th>Email</th><td>{{ $enquiry->email }}</td></tr>
                    <tr><th>Phone</th><td>{{ $enquiry->phone }}</td></tr>
                    <tr><th>Message</th><td>{{ $enquiry->message }}</td></tr>
                </table>
                <a href="{{ route('admin.enquiry.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
