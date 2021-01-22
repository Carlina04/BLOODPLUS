@extends('layouts.app')

@section('content')
@foreach($users as $value)
<form class="" action="updateuser" method="POST">
    @csrf
    @method('put')
    <input type="hidden" name='id' value="{{$value->user_id}}">
    <div class="container-fluid px-5 registration-form">
      <div class="form-group my-5">
        <p class="h5">Registration Form<hr></p>
        <div class="form-group h6">
          <label>First Name</label>
          <input type="text" class="form-control" name="fName"  value="{{$value->first_name}}">
        </div>
        <div class="form-group h6">
          <label>Middle Name</label>
          <input type="text" class="form-control" name="mName" value="{{$value->mid_name}}">
        </div>
        <div class="form-group h6">
          <label>Last Name</label>
          <input type="text" class="form-control" name="lName" value="{{$value->last_name}}">
        </div>
        <div class="form-group h6 mt-4 mb-0 row">
          <div class="col-7">
            <div class="form-group">
              <label>Birthdate</label>
              <input type="date" class="form-control" name="bday" value="{{$value->birthdate}}" min="1950-01-01" max="2020-11-18" required>
            </div>
          </div>
          <div class="col-5">
            <div class="form-group">
                <label>Gender</label><br>
                <select name="gender" class="form-control" required>
                <option selected hidden value="{{$value->gender}}">{{$value->gender}}</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
                </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Blood Type</label>
          <select name="blood" class="form-control" required>
          <option selected hidden value="{{$value->blood_type}}">{{$value->blood_type}}</option>
          <option value="A-">A-</option>
          <option value="A+">A+</option>
          <option value="B-">B-</option>
          <option value="B+">B+</option>
          <option value="O-">O-</option>
          <option value="O-">O+</option>
          <option value="AB-">AB-</option>
          <option value="AB+">AB+</option>
          </select>
        </div>
        <div class="form-group h6 mt-4 mb-0 row">
          <div class="col-5">
            <div class="form-group">
              <label>Phone Number</label>
              <input type="tel" class="form-control" name="num" value="{{$value->contact_num}}" pattern="^(09)\d{9}$" required>
            </div>
          </div>
        </div>
        <div class="form-group h6 mt-2 mb-0">
          <label>Complete Address</label>
          <div class="container font-weight-normal">
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>House No</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="houseNo" value="{{$value->house_num}}" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>Street</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="street" value="{{$value->street}}" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>Barangay</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="barangay" value="{{$value->barangay}}"required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>City</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="municipality" value="{{$value->municipality}}" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>Province</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="province" value="{{$value->province}}" required>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group text-center my-4">
        <button class="btn btn-success w-50">Update</button>
      </div>
    </div>
  </form>
</div>
@endforeach
@endsection
