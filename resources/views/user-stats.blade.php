@extends('layouts.main')


@section('content')

	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="box">
				<div class="row">
					<div class="col-md-12">
						<h4>User Stats</h4>
						<p>User: 3286</p>
						<hr>
					</div>
					<div class="col-md-12">
						<h5>List of Recordings</h5>
						<table class="table table-borderless table-sm">
							<thead class="table-info">
								<tr>
									<th>Rec ID</th>
									<th>Lead ID</th>
									<th>Phone</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="{{ route('auditor') }}">74943732</a></td>
									<td>1100690589</td>
									<td>5303125878</td>
									<td>2020-04-27</td>
								</tr>
								<tr>
									<td><a href="{{ route('auditor') }}">74943649</a></td>
									<td>1100691042</td>
									<td>3214396690</td>
									<td>2020-04-27</td>
								</tr>
								<tr>
									<td><a href="{{ route('auditor') }}">74943529</a></td>
									<td>1100692564</td>
									<td>3373239016</td>
									<td>2020-04-27</td>
								</tr>
								<tr>
									<td><a href="{{ route('auditor') }}">74943505</a></td>
									<td>1100692564</td>
									<td>3858881559</td>
									<td>2020-04-27</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>	
		</div>
	</div>

@endsection