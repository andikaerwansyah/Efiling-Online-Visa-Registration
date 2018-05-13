@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <div class="row">
      <div class="col-sm-6">
      <div class="card bg-info">
        <div class="card-body">
            <h4 style="color:white;">
              <i class="fa fa-wpforms" aria-hidden="true"></i>  Total Pengajuan Visa:
                {{$applications->count()}}
            </h4>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card bg-info">
        <div class="card-body" style="color:white;">
          @php
            jam_sekarang();

            function jam_sekarang(){
              date_default_timezone_set("Asia/Jakarta");

              $tanggal = getdate();
              $hari = $tanggal["mday"];
              $bulan = $tanggal["mon"];
              $tahun = $tanggal["year"];
              $jam = $tanggal["hours"];
              $menit = $tanggal["minutes"];
              $detik = $tanggal["seconds"];

              $jam_sekarang = "$hari/$bulan/$tahun  $jam:$menit:$detik";

                echo "<h4> <i class='fa fa-clock-o' aria-hidden='true'></i> Server : ".$jam_sekarang."</h4>";
            }
              @endphp


        </div>
      </div>
    </div>
    </div>

      <div class="row py-3">
        <div class="col-md-12">
              <div class="card mx-auto">
                  <div class="card-header text-center">
                    <strong>Your Admin ID : {{Auth::user()->id_customer}} </strong>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Reference Number</th>
                          <th>Date Submit</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($applications as $index =>$app)
                        <tr>
                          <td>{{$index + 1}}</td>
                          <td>{{$app->no_referensi}}
                            @if(empty($app->user->verification->status))

                            <span><span class="badge badge-secondary">New</span></span>
                            @else

                            @endif

                          </td>
                          <td>{{date('d F, Y , G: i: s', strtotime($app->created_at))}}</td>
                          <td>
                            <a class="btn btn-info" href="detail/{{$app->user_id}}"><i class="fa fa-folder-open" aria-hidden="true"></i> Open</a>
                          </td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
  </div>

@endsection
