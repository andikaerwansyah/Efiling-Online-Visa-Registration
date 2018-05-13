@extends('layouts.app')

@section('content')
  <div class="container py-5">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
              <div class="card-header text-center"><strong>Your Customer ID : {{Auth::user()->id_customer}} </strong></div>
              <div class="card-body text-capitalize">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-action list-group-item-secondary">Reference Number : {{Auth::user()->application->no_referensi}}</li>
                  <li class="list-group-item">Given Name : {{Auth::user()->passport->given_name}}  </li>
                  <li class="list-group-item list-group-item-action list-group-item-secondary">Last Name : {{Auth::user()->passport->last_name}}</li>
                  <li class="list-group-item">Date of Birth : {{Auth::user()->passport->date_of_birth}}</li>
                  <li class="list-group-item list-group-item-action list-group-item-secondary">Place of Birth : {{Auth::user()->passport->place_of_birth}}</li>
                  <li class="list-group-item">Contact Number : {{Auth::user()->contact_number}}</li>
                  <li class="list-group-item list-group-item-action list-group-item-secondary">Email Address : {{Auth::user()->email}}</li>
                  <li class="list-group-item">Address : {{Auth::user()->passport->address}}</li>
                  <li class="list-group-item list-group-item-action list-group-item-secondary">No Passport  : {{Auth::user()->passport->no_passport}}</li>
                  <li class="list-group-item">Date Issue : {{Auth::user()->passport->date_issue}}</li>
                  <li class="list-group-item list-group-item-action list-group-item-secondary">Expiry Date : {{Auth::user()->passport->expiry_date}}</li>
                  <li class="list-group-item">Interview Date : {{Auth::user()->application->interview_date}}</li>
                </ul>
              </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Visa Application Status
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Additional Information :
                @if(empty(Auth::user()->verification->add_info))
                    <p class="d-inline">No Information</p>
                @else
                  <p class="d-inline text-capitalize">  <strong>{{Auth::user()->verification->add_info}}</strong></p>
                @endif
              </li>
              <li class="list-group-item">
                Status :
                @if(empty(Auth::user()->verification->status))
                    <span class="d-inline badge badge-secondary">No Information</span>
                @else
                    <span class="d-inline badge badge-secondary"><strong>{{Auth::user()->verification->status}}</strong></span>
                @endif
               </li>
            </ul>
          </div>
          <div class="card-body">
            @if(empty(Auth::user()->verification))
              <a class="btn btn-primary btn-block disabled " href="/downloadPDF/{{Auth::user()->id}}"  ><i class="fa fa-print" aria-hidden="true"></i>  Print  </a>
            @else
            <a class="btn btn-primary btn-block " href="/downloadPDF/{{Auth::user()->id}}"  ><i class="fa fa-print" aria-hidden="true"></i>  Print  </a>
            @endif
          </div>
        </div>
      </div>
  </div>

  {{-- <div class="row my-2">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Action
        </div>
        <div class="card-body text-center">
          <a class="btn btn-success btn-block" href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>  Form Family Data</a><br>
          <a class="btn btn-success btn-block" href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>  Form Employment</a><br>
          <a class="btn btn-success btn-block" href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>  Form Travel</a><br>
          <a class="btn btn-success btn-block" href="http://localhost:8000/storage/{{Auth::user()->passport->given_name}}_{{Auth::user()->id_customer}}.pdf"><i class="fa fa-folder-open" aria-hidden="true"></i>  Form Upload Document</a>
        </div>
      </div>
    </div>
  </div> --}}






@endsection
