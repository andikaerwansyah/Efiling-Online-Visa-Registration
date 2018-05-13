@extends('layouts.app')

@section('content')
  <div class="container my-5">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header text-center"><strong>Your Customer ID : {{Auth::user()->id_customer}} </strong></div>
                  <div class="card-body ">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Reference Number</th>
                          <th>Date Submit</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{Auth::user()->application->no_referensi}}</td>
                          <td>{{Auth::user()->created_at}}</td>
                          <td>
                              @if (empty(Auth::user()->verification->status))
                                <div class="aler alert-info">
                                      Your visa application is being validated.
                                </div>
                              @else
                                <strong>{{Auth::user()->verification->status}}</strong>
                              @endif
                          </td>
                          <td>
                            <a class="btn btn-info" href="/view-application"><i class="fa fa-folder-open" aria-hidden="true"></i> View</a>
                            @if (empty(Auth::user()->verification->status))
                            @else
                              <a class="btn btn-primary" href="/downloadPDF/{{Auth::user()->id}}"><i class="fa fa-print" aria-hidden="true"></i> Print Receipt</a>
                            @endif
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
  </div>

@endsection
