@extends('layouts.admin')

@section('content')
    <div class="container p-3">
        <div class="form-group">
            <a href="/adminnav">← Back to Navigation</a>
        </div>
    
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">Affiliated Hospitals</div>
                <div class="p-2 flex-shrink-0 bd-highlight">
                          <a href="/addhospital" class="btn-sm btn-success new-btn">Add A Hospital</a>
                </div>
            </div>
        </div>

        <div class="container p-3 mt-4 rounded shadow-sm">
            <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                <th scope="col">Hospital Name</th>
                <th scope="col">Hospital Branch</th>
                <th scope="col">Hospital Address</th>
                <th scope="col">Contacts</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($hos as $val)
                <tr>
                <td>{{$val->hos_name}}</td>
                <td>{{$val->hos_branch}}</td>
                <td>{{$val->address->province}}, {{$val->address->municipality}}, {{$val->address->barangay}}, {{$val->address->street}}</td>
                <td>{{$val->contact->contact_num}}<br>{{$val->contact->email}}</td>
                <td>{{$val->desc}}</td>
                <td>
                    <form action="/edithospital" method='GET'>
                        <input type="hidden" name='hos_id' value="{{$val->hos_id}}">
                        <input type="submit" value="Edit" class="btn btn-success btn-block">
                    </form>
                    <br style="display: block;content: '';margin-top: 5px;">
                    <form action="deletehos" method='POST'>
                        @csrf
                        @method('delete')
                        <input type="hidden" name='hos_id' value="{{$val->hos_id}}">
                        <input type="submit" value="Delete" class="btn btn-danger btn-block">
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </div>
    </div>
@endsection