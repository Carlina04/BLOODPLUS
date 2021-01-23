@extends('layouts.app')

@section('content')
	<div id="front" class="container text-center p-4">
    	<div class="container text-center front-sub">
			<h1>Request Form</h1>

			<form action="createreq" method="post">
                @csrf
				<input type="hidden" name='don_id' value="{{$don->id}}">
				<div class="form-group">	
					<label class="form-control text-left input-label p-0 m-0" for="reqblood">Needed Blood type: <span> <input type="hidden" name='don_blood' value="{{$donblood->blood_type}}">{{$donblood->blood_type}}</label>
				</div>
				<a href="/hospitals" target="_blank">Check Affiliated Hospitals</a><br>
				<div class="form-group h6 mt-4 mb-0 row">
					<div class="col-6">
						<div class="form-group">
							<label class="form-control text-left input-label p-0 m-0" for="hos_name">Admitted Hospital</label>
							<input type="text" class="form-control" name="hos_name" placeholder="Name of Hospital" required>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
						<label class="form-control text-left input-label p-0 m-0" for="branch">Hospital Branch</label>
						<input type="text" class="form-control" name="branch" placeholder="Name of Branch"required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="form-control text-left input-label p-0 m-0" for="desc">Description/Notes:</label>
					<textarea name="desc" class="form-control text-justify p-10 m-0"></textarea>
				</div>
				<br>
				<button class="btn btn-primary w-50">Submit</button>
			</form>
		</div>
	</div>
@endsection