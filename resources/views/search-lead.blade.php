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
				</div>

				<hr>

				<div class="row">
					<div class="col-md-12">
						<p>Search result</p>
						<div id="accordion">
						    <div class="card">
						      <div class="card-header">
						        <a class="card-link" data-toggle="collapse" href="#collapseOne">
						          Collapsible Group Item #1
						        </a>
						      </div>
						      <div id="collapseOne" class="collapse show" data-parent="#accordion">
						        <div class="card-body">
						          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						        </div>
						      </div>
						    </div>
						    <div class="card">
						      <div class="card-header">
						        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
						        Collapsible Group Item #2
						      </a>
						      </div>
						      <div id="collapseTwo" class="collapse" data-parent="#accordion">
						        <div class="card-body">
						          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						        </div>
						      </div>
						    </div>
						    <div class="card">
						      <div class="card-header">
						        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
						          Collapsible Group Item #3
						        </a>
						      </div>
						      <div id="collapseThree" class="collapse" data-parent="#accordion">
						        <div class="card-body">
						          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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