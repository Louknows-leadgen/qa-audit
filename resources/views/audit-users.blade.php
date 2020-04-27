@extends('layouts.main')


@section('content')

	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="box">
				<h4>Team Performance Detail</h4>

				<div class="row">
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>From</label>
									<input type="text" class="form-control datetime" autocomplete="off">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>To</label>
									<input type="text" class="form-control datetime" autocomplete="off">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Campaigns</label>
									<select class="select-mult w-100" multiple>
										<option>test1</option>
										<option>test2</option>
										<option>test3</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Teams/User Groups</label>
									<select class="select-mult w-100" multiple>
										<option>test1</option>
										<option>test2</option>
										<option>test3</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Additional Statuses</label>
									<select class="select-mult w-100" multiple>
										<option>test1</option>
										<option>test2</option>
										<option>test3</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<button class="btn btn-primary">Search</button>
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="col-md-12">
						<p>Search result</p>
						<div id="audits">
						    <div class="card">
						      <div class="card-header audit-header">
						          TEAM: BLACKPANTHER - Black Panther
						      </div>
						      <div class="audit-body">
						        <div class="card-body">
						        	<label><strong>Users:</strong></label>
									<div class="list-group list-group-flush">
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3286</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3429</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3791</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3801</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3846</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3920</a>
									</div>
						        </div>
						      </div>
						    </div>
						    <div class="card">
						      <div class="card-header audit-header">
						          TEAM: CHEETAH - Cheetah
						      </div>
						      <div class="audit-body">
						        <div class="card-body">
									<label><strong>Users:</strong></label>
									<div class="list-group list-group-flush">
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3060</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3093</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3811</a>
									</div>
						        </div>
						      </div>
						    </div>
						    <div class="card">
						      <div class="card-header audit-header">
						          TEAM: HOMEBASEDCI - HOME BASE DCI
						      </div>
						      <div class="audit-body">
						        <div class="card-body">
						        	<label><strong>Users:</strong></label>
									<div class="list-group list-group-flush">
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3057</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3139</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3379</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3874</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3894</a>
										<a href="{{ route('user-stats') }}" class="list-group-item list-group-item-action">3950</a>
									</div>
						        </div>
						      </div>
						    </div>
						</div>  
					</div>
				</div>
			</div>	
		</div>
	</div>

@endsection