@extends('layouts.app')

@section('content')
	<div id="front" class="container text-center p-4">
    	<div class="container text-center front-sub">
			<h1>Edit Hospital</h1>

			<form action="edithos" method="post">
				@csrf
        @method('put')
        <input type="hidden" name='hos_id' value="{{$hos->id}}">
				<div class="form-group">	
				<div class="form-group h6 mt-4 mb-0 row">
					<div class="col-6">
						<div class="form-group">
							<label class="form-control text-left input-label p-0 m-0" for="hos_name">Name of Hospital</label>
							<input type="text" class="form-control" name="hos_name" value="{{$hos->hos_name}}" required>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
						<label class="form-control text-left input-label p-0 m-0" for="branch">Hospital Branch</label>
						<input type="text" class="form-control" name="hos_branch" value="{{$hos->hos_branch}}" required>
						</div>
					</div>
				</div>
				<div class="form-group h6 mt-4 mb-0 row">
          <div class="col-5">
            <div class="form-group">
              <label>Phone Number</label>
              <input type="tel" class="form-control" name="num" value="{{$hos->contact->contact_num}}" pattern="^(09)\d{9}$" required>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label >Email Address</label>
              <input type="email" class="form-control" name="email" value="{{$hos->contact->email}}" required>
            </div>
          </div>
        </div>
        <div class="form-group h6 mt-2 mb-0">
          <label>Complete Address</label>
          <div class="container font-weight-normal">
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>Street</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="street" value="{{$hos->address->street}}" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>Barangay</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="barangay" value="{{$hos->address->barangay}}" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>City</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="municipality" value="{{$hos->address->municipality}}" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>Province</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="province" value="{{$hos->address->province}}" required>
              </div>
            </div>
           </div>
        </div>
				<div class="form-group">
					<label class="form-control text-left input-label p-0 m-0" for="desc">Description:</label>
					<textarea name="desc" class="form-control text-justify p-10 m-0" placeholder="{{$hos->desc}}"></textarea>
				</div>
				<br>
				<button class="btn btn-primary w-50">Update</button>
			</form>
		</div>
	</div>
@endsection