@extends('layouts.app')

@section('content')



@foreach ($info as $info)

    
    <div class="m-0 p-0 info">
        <div class="d-flex bd-highlight mb-3 p-4">
            <div class="p-2 bd-highlight">
                <i class="fas fa-building fa-4x"></i>
            </div>
            <div class="p-2 bd-highlight flex-fill d-flex align-items-center">
                <p class="h3">{{$info->bbank_name}}</p>
            </div>
            <div class="p-2 bd-highlight d-flex align-items-center">
                <form method="post" action="/bloodbanks">
                    @csrf
                    @method('get')
                    <input type="submit" class="btn-sm btn-danger" value="Close">
                </form>
            </div>
        </div>
    
        <div class="container-fluid p-4 m-0">
            <div class="container-fluid p-4 border-top shadow-sm bg-dark text-light bbank-description-header" onclick="openInfo()">
                <p class="m-0 user-select-none h6"><i class="fa fa-info-circle mr-1 info-icon"></i>Information</p>
            </div>
            <div class="container-fluid border-bottom bg-dark text-light p-3 bbank-description" style="display:none">
                <div class="row">
                    <div class="col-3">
                        <p class="h6 text-secondary">Description </p>
                    </div>
                    <div class="col-9">
                        <p>{{$info->descr}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="h6 text-secondary">Location  </p>
                    </div>
                    <div class="col-9">
                        <p>{{$info->street}} {{$info->barangay}}, {{$info->municipality}}, {{$info->province}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="h6 text-secondary">Contact Details </p>
                    </div>
                    <div class="col-9">
                        <p class="m-0">{{$info->contact_num}}</p>
                        <p class="m-0">{{$info->email}}</p>
                    </div>
                </div>
            </div>
    
            <div class="container-fluid my-4 mx-0 pt-0 px-0 request-form">
                <table class="table text-center border-top-0 table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Blood Type</th>
                            <th scope="col">Blood Bag Availability</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <th scope="row">A-</th>
                            @if ($info->A_neg>0)
                                <td class="h6 text-success">Available</td>
                            @else
                                <td class="h6 text-danger">Not Available</td>
                            @endif
                            
                        </tr>
                        <tr>
                            <th scope="row">A+</th>
                            @if ($info->A_pos>0)
                                <td class="h6 text-success">Available</td>
                            @else
                                <td class="h6 text-danger">Not Available</td>
                            @endif
                        </tr>
                        <tr>
                            <th scope="row">B-</th>
                            @if ($info->B_neg>0)
                                <td class="h6 text-success">Available</td>
                            @else
                                <td class="h6 text-danger">Not Available</td>
                            @endif
                        </tr>
                        <tr>
                            <th scope="row">B+</th>
                            @if ($info->B_pos>0)
                                <td class="h6 text-success">Available</td>
                            @else
                                <td class="h6 text-danger">Not Available</td>
                            @endif
                        </tr>
                        <tr>
                            <th scope="row">O-</th>
                            @if ($info->O_neg>0)
                                <td class="h6 text-success">Available</td>
                            @else
                                <td class="h6 text-danger">Not Available</td>
                            @endif
                        </tr>
                        <tr>
                            <th scope="row">O+</th>
                            @if ($info->O_pos>0)
                                <td class="h6 text-success">Available</td>
                            @else
                                <td class="h6 text-danger">Not Available</td>
                            @endif
                        </tr>
                        <tr>
                            <th scope="row">AB-</th>
                            @if ($info->AB_neg>0)
                                <td class="h6 text-success">Available</td>
                            @else
                                <td class="h6 text-danger">Not Available</td>
                            @endif
                        </tr>
                        <tr>
                            <th scope="row">AB+</th>
                            @if ($info->AB_pos>0)
                                <td class="h6 text-success">Available</td>
                            @else
                                <td class="h6 text-danger">Not Available</td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
        <div class="d-flex justify-content-center">
            <div class="mx-2">
                <button class="btn btn-warning update-btn" onclick="update(0)">Update</button>
            </div>
            <div class="mx-2">
                <form action="/bloodbanks/info" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name='id' value="{{$info->bbank_id}}">
                    <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                </form>
            </div>
        </div>
    </div>


    <div class="update-bbank m-0 p-0" style="display: none">
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">Update Bloodbank Information</div>
            </div>
        </div>
        <div class="container p-3 mt-2 rounded shadow-sm">
            
            <form action="/bloodbanks/info" method="post">
                @csrf
                @method('post')
                <div class="row my-1 d-flex align-items-center">
                    <div class="col-4">
                        <p class="mr-3">Bloodbank Name</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="name" id="" value="{{$info->bbank_name}}" class="form-control" required>
                    </div>
                </div>
        
                <div class="row my-1 d-flex align-items-center">
                    <div class="col-4">
                        <p class="mr-3">Description</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="description" id="" value="{{$info->descr}}" class="form-control" required>
                    </div>
                </div>
        
                <div class="form-group mt-2 mb-0">
                    <label>Complete Address</label>
                    <div class="container font-weight-normal">
                      <div class="row">
                        <div class="form-group col-3 py-2">
                          <label>House No</label>
                        </div>
                        <div class="form-group col-9 p-0">
                          <input type="text" class="form-control" value="{{$info->house_num}}" name="houseNo" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-3 py-2">
                          <label>Street</label>
                        </div>
                        <div class="form-group col-9 p-0">
                          <input type="text" class="form-control" value="{{$info->street}}" name="street" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-3 py-2">
                          <label>Barangay</label>
                        </div>
                        <div class="form-group col-9 p-0">
                          <input type="text" class="form-control" value="{{$info->barangay}}" name="barangay" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-3 py-2">
                          <label>City</label>
                        </div>
                        <div class="form-group col-9 p-0">
                          <input type="text" class="form-control" value="{{$info->municipality}}" name="municipality" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-3 py-2">
                          <label>Province</label>
                        </div>
                        <div class="form-group col-9 p-0">
                          <input type="text" class="form-control" value="{{$info->province}}" name="province" required>
                        </div>
                      </div>
                    </div>
                </div>
        
                <div class="form-group mt-4 mb-0 row">
                  <div class="col-5">
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="tel" class="form-control" value="{{$info->contact_num}}" name="num" placeholder="09XXXXXXXXX" pattern="^(09)\d{9}$" required>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="form-group">
                      <label >Email Address</label>
                      <input type="email" class="form-control" value="{{$info->email}}" name="email" placeholder="example@email.com" required>
                    </div>
                  </div>
                </div>
        
                <hr>
                <h6>Bloodbank Stock</h6>
                
                <div class="d-flex justify-content-center text-center">
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">A-</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" class="form-control" value="{{$info->A_neg}}" name="A_neg">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">A+</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" class="form-control" value="{{$info->A_pos}}" name="A_pos">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">B-</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" class="form-control" value="{{$info->B_neg}}" name="B_neg">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">B+</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" class="form-control" value="{{$info->B_pos}}" name="B_pos">
                    </div>
                  </div>
                </div>
        
                <div class="d-flex justify-content-center text-center mt-3">
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">O-</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" class="form-control" value="{{$info->O_neg}}" name="O_neg">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">O+</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" class="form-control" value="{{$info->O_pos}}" name="O_pos">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">AB-</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" class="form-control" value="{{$info->AB_neg}}" name="AB_neg">
                    </div>
                  </div>
                  <div class="mx-1">
                    <div class="bd-highlight">
                      <label for="">AB+</label>
                    </div>
                    <div class="bd-highlight">
                      <input type="number" class="form-control" value="{{$info->AB_pos}}" name="AB_pos">
                    </div>
                  </div>
                </div>
        
                <hr>
        
                <div class='mt-3 d-flex justify-content-end'>
                        <input type="hidden" name='id' value="{{$info->bbank_id}}">
                        <input type="hidden" name='condition' value="1">
                        <input type='submit' name='update' value='Update' class='btn-sm shadow-none btn-warning' >
                </div>
                
            </form>
        </div>
    </div>
    

    <script>
        function openInfo() {
            var info=document.querySelector(".bbank-description");
            var icon=document.querySelector(".info-icon");

            if(info.style.display=="none"){
              info.style.display="block";
              icon.style.color="lightgreen";
            }else{
              info.style.display="none";
              icon.style.color="white";
            }
          }

        function update(num) {

          if(num==0){
            document.querySelector(".update-bbank").style.display="block";
            document.querySelector(".info").style.display="none";
          }else{
                    document.querySelector(".info").style.display="block";
            document.querySelector(".update-bbank").style.display="none";
          }
          }
    </script>

@endforeach

@endsection

