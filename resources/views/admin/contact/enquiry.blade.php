@extends('admin.layout.backend')
@section('title')Enquiry @endsection
@section('content')
<div class="row mt-4">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h3 class="mb-4">Enquiries</h3>
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Message</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($enquiries as $key => $enquiry)
							<tr>
								<td>{{ $key + 1 }}</td>
								<td>{{ $enquiry->fname }}</td>
								<td>{{ $enquiry->lname }}</td>
								<td>{{ $enquiry->email }}</td>
								<td>{{ $enquiry->phone }}</td>
								<td>{{ Str::limit($enquiry->message, 50) }}</td>
								<td>
									<a href="{{ route('admin.enquiry.show', $enquiry->id) }}" class="btn btn-sm btn-info">View</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection