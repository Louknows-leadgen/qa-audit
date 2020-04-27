@extends('layouts.main')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-11 mb-3">
			<div class="box">
				<div class="row">
					<div class="col-md-6">
						<label><strong>Call ID:</strong></label>
						<span>74943505</span>
					</div>
					<div class="col-md-6">
						<label><strong>Phone number:</strong></label>
						<span>3214396690</span>
					</div>
					<div class="col-md-6">
						<label><strong>Agent ID:</strong></label>
						<span>3286</span>
					</div>
					<div class="col-md-6">
						<label><strong>Agent Name:</strong></label>
						<span>John Doe</span>
					</div>
					<div class="col-md-12">
						<label><strong>Recordings:</strong></label>
						<span><a href="http://38.102.225.164/RECORDINGS/20200428-005631_5303125878-all.wav" target="_blank">{{ basename('http://38.102.225.164/RECORDINGS/20200428-005631_5303125878-all.wav') }}</a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box">
				<h5 class=" text-center">Response scripts:</h5>
				<ul class="list-group">
					<li class="list-group-item text-center script-tab script-tab-actv" data-tab="z01">z01</li>
					<li class="list-group-item text-center script-tab" data-tab="z02">z02</li>
					<li class="list-group-item text-center script-tab" data-tab="z03">z03</li>
					<li class="list-group-item text-center script-tab" data-tab="z04">z04</li>
					<li class="list-group-item text-center script-tab" data-tab="z05">z05</li>
					<li class="list-group-item text-center script-tab" data-tab="z06">z06</li>
					<li class="list-group-item text-center script-tab" data-tab="z07">z07</li>
					<li class="list-group-item text-center script-tab" data-tab="z08">z08</li>
					<li class="list-group-item text-center script-tab" data-tab="z09">z09</li>
					<li class="list-group-item text-center script-tab" data-tab="z10">z10</li>
					<li class="list-group-item text-center script-tab" data-tab="z11">z11</li>
					<li class="list-group-item text-center script-tab" data-tab="z12">z12</li>
				</ul>
			</div>
		</div>
		<div class="col-md-8" data-container="script">
			@include('auditor.z01')
			@include('auditor.z02')
			@include('auditor.z03')
			@include('auditor.z04')
			@include('auditor.z05')
			@include('auditor.z06')
			@include('auditor.z07')
			@include('auditor.z08')
			@include('auditor.z09')
			@include('auditor.z10')
			@include('auditor.z11')
			@include('auditor.z12')
		</div>
	</div>
</div>

@endsection

