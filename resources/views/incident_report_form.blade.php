@extends('layouts.main')


@section('content')

<div class="row">
	<div class="col-md-6 mx-auto">
		<div class="box">
			<h3>Incident Report</h3>
			<p>Quality Assurance Team</p>
			<hr>
			<div class="form-group">
				<label class="impt">Source</label>
				<select class="custom-select">
					<option>Flagged calls</option>
					<option>Internal audit</option>
				</select>
			</div>
			<div class="form-group">
				<label class="impt">Agent ID</label>
				<input type="text" name="agent_id" class="form-control">
			</div>
			<div class="form-group">
				<label class="impt">Agent Name</label>
				<input type="text" name="agent_name" class="form-control">
			</div>
			<div class="form-group">
				<label class="impt">Team Lead Email Add</label>
				<select class="custom-select">
					<option>raquino@digicononline.com</option>
					<option>aguzman@digicononline.com</option>
					<option>tjaca@digicononline.com</option>
				</select>
			</div>
			<div class="form-group">
				<label class="impt">Program</label>
				<select class="custom-select">
					<option>Insurance - NY</option>
					<option>Insurance - Voice NY</option>
					<option>Insurance - OITC</option>
					<option>Insurance - LA</option>
				</select>
			</div>
			<div class="form-group">
				<label class="impt">Call Date</label>
				<input type="text" class="form-control date" autocomplete="off">
			</div>
			<div class="form-group">
				<label class="impt">Evaluation Date</label>
				<input type="text" class="form-control date" autocomplete="off">
			</div>
			<div class="form-group">
				<label class="impt">Vici Dispo</label>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="vici_dispo" id="dispo1" value="Transfer Success">
					<label class="custom-control-label" for="dispo1">Transfer Success</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="vici_dispo" id="dispo2" value="Transfer Hung up">
					<label class="custom-control-label" for="dispo2">Transfer Hung up</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="vici_dispo" id="dispo3" value="Voicemail">
					<label class="custom-control-label" for="dispo3">Voicemail</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="vici_dispo" id="dispo4" value="Ring">
					<label class="custom-control-label" for="dispo4">Ring</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="vici_dispo" id="dispo5" value="DTO">
					<label class="custom-control-label" for="dispo5">DTO</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="vici_dispo" id="dispo6" value="Insurance Hung up">
					<label class="custom-control-label" for="dispo6">Insurance Hung up</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="vici_dispo" id="dispo7" value="Transfer Fail">
					<label class="custom-control-label" for="dispo7">Transfer Fail</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="vici_dispo" id="dispo8" value="Dead">
					<label class="custom-control-label" for="dispo8">Dead</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="vici_dispo" id="dispo9">
					<label class="custom-control-label" for="dispo9">Other:</label>
					<input type="text" class="form-control" name="vici_dispo">
				</div>
			</div>
			<div class="form-group">
				<label class="impt">BTN</label>
				<input type="text" name="btn" class="form-control">
			</div>
			<div class="form-group">
				<label class="impt">Duration</label>
				<input type="text" name="duration" class="form-control">
			</div>
			<div class="form-group">
				<label class="impt">Evaluator</label>
				<select class="custom-select">
					<option>Q.A Section</option>
				</select>
			</div>
			<div class="form-group">
				<label class="impt">Offense</label>
				<select class="custom-select">
					<option>L.O.L - Call avoidance</option>
					<option>L.O.L - Escalate the call to the SUP without customer request</option>
					<option>L.O.L - Transferred the call inappropriately</option>
					<option>L.O.L - Did not brand the call</option>
					<option>L.O.L - Inappropriate response</option>
					<option>L.O.L - Unprofessional</option>
					<option>L.O.L - Making disparaging remarks</option>
					<option>L.O.L - Speaking in vernacular</option>
					<option>L.O.L - Tagging the call incorrectly on the webform</option>
					<option>L.O.L - Tagging the call incorrectly on vicidial</option>
					<option>L.O.L - Submitting webform more than once</option>
					<option>L.O.L - Aggressive selling</option>
					<option>L.O.L - Script</option>
					<option>L.O.L - Webform information</option>
					<option>L.O.L - Language barrier/confused</option>
					<option>Z.T.P - DNC</option>
					<option>Z.T.P - ROBO call</option>
					<option>Z.T.P - Call riding</option>
					<option>Z.T.P - Score manipulation</option>
				</select>
			</div>
			<div class="form-group">
				<label class="impt">CALL SYNOPSIS/NOTES</label>
				<input type="text" name="synopsis" class="form-control">
			</div>
			<div class="form-group">
				<label class="impt">Sanction</label>
				<select class="custom-select">
					<option>For coaching</option>
					<option>Documented verbal warning</option>
					<option>1st written warning</option>
					<option>1st to 3 days suspension</option>
					<option>2nd to 3 days suspension</option>
					<option>3 days suspension</option>
					<option>1st to 5 days suspension</option>
					<option>2nd to 5 days suspension</option>
					<option>5 days suspension</option>
					<option>1st to end of contract</option>
					<option>2nd to end of contract</option>
					<option>Final written warning</option>
					<option>End of contract</option>
				</select>
			</div>
		</div>
	</div>
</div>

@endsection