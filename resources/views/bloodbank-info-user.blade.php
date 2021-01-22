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
    </script>

@endforeach

@endsection

