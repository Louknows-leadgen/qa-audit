<div class="box" data-tabcontent="z10">
	<div>
		<h5>Script code: <strong>z10</strong></h5>
		<hr>
		<ol>
			<li>
				<div class="form-group">
					<label>Customer's Statement (question/objection)</label>
					<textarea class="form-control"></textarea>
				</div>
			</li>
			<li>
				<div class="form-group">
					<label>Acknowledge</label>
					<div class="d-flex justify-content-around w-25">
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="acknowledge" id="z10-ack-yes" value="Yes">
							<label class="custom-control-label" for="z10-ack-yes">Yes</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="acknowledge" id="z10-ack-no" value="No">
							<label class="custom-control-label" for="z10-ack-no">No</label>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="form-group">
					<label>Agent's response</label>
					<input type="text" class="form-control" name="agent_response">
				</div>
			</li>
			<li>
				<div class="form-group">
					<label>Agent's response speed</label>
					<input type="number" class="form-control" name="agent_response_speed">
				</div>
			</li>
			<li>
				<div class="form-group">
					<label>Correct response</label>
					<input type="text" class="form-control" name="correct_response" placeholder="Correct key if agent was incorrect. Blank otherwise.">
				</div>
			</li>
			<li>
				<div class="form-group">
					<label>Customer details</label>
					<textarea class="form-control" name="customer_details" placeholder="Customer's details if agent is incorrect. Blank otherwise."></textarea>
				</div>
			</li>
			<li>
				<div class="form-group">
					<label>Agent input</label>
					<textarea class="form-control" name="agent_input" placeholder="Agent's input if agent is incorrect. Blank otherwise."></textarea>
				</div>
			</li>
			<li>
				<div class="form-group">
					<label>Comment</label>
					<textarea class="form-control" name="comment"></textarea>
				</div>
			</li>
			<li>
				<div class="form-group">
					<label>Call ends</label>
					<small class="text-danger">
						Note: Once clicked, this will submit the form, and you will not be able to fill up the rest of the responses.
					</small>
					<button class="btn btn-primary d-block">Call ends</button>
				</div>
			</li>
		</ol>
		<div class="d-flex justify-content-end">
			<span class="left-chevron" data-tab="z09">z09</span>
			<span class="mx-2">|</span>
			<span class="right-chevron" data-tab="z11">z11</span>
		</div>
	</div>
</div>