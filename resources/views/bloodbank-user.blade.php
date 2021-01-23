@extends('layouts.app')

@section('content')
    <div class='container'>
    <div class="form-group">
                <a href="/home">← Home</a>
        </div>
    <div class="container p-3">
        
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">Bloodbanks</div>
            </div>
        </div>

        @if (count($bbanks)>0)
        
          <div class="container mt-4 p-0">

            @foreach ($bbanks as $bbank)

              <div class='container  mt-5 p-3 rounded shadow '>
                  <div class='d-flex justify-content-start'>
                      <p class='h5 m-2 text-dark'>{{$bbank->bbank_name}}</p>
                  </div>

                  <div class='d-flex justify-content-start p-2 mt-2'>
                      <div class='mr-2'>
                        <p class='h6 m-0 text-secondary'>Location : </p>
                      </div>
                      <div>
                        <p class='h6 m-0'>{{$bbank->municipality}}, {{$bbank->province}}</p>
                      </div>
                  </div>

                  <div class='d-flex justify-content-start p-2'>
                      <div class='mr-2'>
                        <p class='h6 m-0 text-secondary'>Contact Details : </p>
                      </div>
                      <div>
                        <p class='h6 m-0'>{{$bbank->contact_num}}</p>
                        <p class='h6 m-0'>{{$bbank->email}}</p>
                      </div>
                  </div>

                  <hr>

                  <div class='mt-3 d-flex justify-content-end'>
                    <form action="/bloodbanks/info" method="post">
                      @csrf
                      @method('post')
                      <input type="hidden" name='id' value="{{$bbank->bbank_id}}">
                      <input type="hidden" name='condition' value="0">
                      <input type='submit' name='bbank-info' value='Inquire' class='btn-sm shadow-none btn-warning' >
                    </form>
                  </div>
              </div>

            @endforeach

          </div>
        
        @else
          <div class="container bg-light d-flex justify-content-center p-4 shadow-sm mt-3">
              <h5>No Bloodbank</h5>
          </div>

        @endif
    
    </div>
    </div>
@endsection
